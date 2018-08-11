<?php

namespace App\Service;

use App\DataSetWisata;

class Recomended
{
    private $data;

    private $rataDariSetiapWisata;
    private $selisihRating;

    private $hitungPearson;
    private $predictRating;
    
    private $missingRating;
    private $missingRatingItem;    

    private $hasilHitungMae;
    private $hasilHitungMaeItem;

    private $hasilRatingTerurut;
    private $hasilRatingTerurutItem;    

    private $cosineItemBased;
    private $predictItemBased;

    public function __construct(array $data)
    {
        $this->data = $data;
        $this->missingRating = [];
    }

    public function rataDariSetiapWisata()
    {
        $data = collect($this->data);
        $items = $data->map(function ($item) {
            return collect($item)->avg();
        })->toArray();
        
        return $items;        
    }

    public function selisihRating(array $items = [])
    {
        $users = collect($this->data)->map(function ($item, $index) use ($items) {
            $user = $items[$index];
            return collect($item)->map(function ($rating) use ($user) {
                return (float) $rating - (float) $user;
            })->toArray();
        });

        return $users;
    }
    
    public function hitungPearson()
    {
        $prepareData = [];
        foreach ($this->data as $index => $data) {
            $prepareData[] = [
                'userId' => $index,
                'data' => $data,
            ];
        }
        $arrayResult = [];
        $rataWisata = $this->getRataDariSetiapWisata();
        for ($i=0; $i<=count($prepareData) - 1; $i++) {
            $userId = $prepareData[$i]['userId'];

            for ($j=0; $j<= count($prepareData) - 1; $j++) {
                $nextUserId = $prepareData[$j]['userId'];
                $tempResult = [];
                $itemA = [];
                $itemB = [];
                foreach ($prepareData[$i]['data'] as $index => $rating) {
                    $nextRating = $prepareData[$j]['data'][$index] ?? null;

                    if ($nextRating) {
                        $result = ($rating - $rataWisata[$userId]) * ($nextRating - $rataWisata[$nextUserId]); //hitungpembilangperson
                        // $itemA =
                        $akarDariSelisihRatingA = $this->getSelisihRating()[$userId]; //kiri
                        $akarDariSelisihRatingB = $this->getSelisihRating()[$nextUserId]; //kanan

                        $itemA[] = $akarDariSelisihRatingA[$index] ** 2;
                        $itemB[] = $akarDariSelisihRatingB[$index] ** 2;
                        $tempResult[$index] = $result;  
                    }
                }

                $akarItemA = sqrt(array_sum($itemA));
                $akarItemB = sqrt(array_sum($itemB));

                $akarAKaliAkarB = $akarItemA * $akarItemB;

                try {
                    $hasil = array_sum($tempResult) / $akarAKaliAkarB;
                } catch (\Exception $e) {
                    $hasil = 0;
                }

                $arrayResult[$userId][$nextUserId] = $hasil;
            }
        }

        return $arrayResult;
    }  

    public function predictRating()
    {
        // Array kosong untuk modifikasi data
        $prepareData = [];

        $pearson = $this->getHitungPearson();
        foreach ($this->data as $index => $data) {
            $prepareData[] = [
                'userId' => $index,
                'data' => $data,
            ];
        }
        $arrayResult = [];
        // Ambil Rata dari Setiap Wisata
        $rataWisata = $this->getRataDariSetiapWisata();
        // Ambil Selisih Rating
        $selisihRating = $this->getSelisihRating();        
        for ($i=0; $i<=count($prepareData) - 1; $i++) {
            $userId = $prepareData[$i]['userId'];

            for ($j=0; $j<= count($prepareData) - 1; $j++) {
                // Skip jika
                if ($j === $i) {
                    continue;
                }
                $nextUserId = $prepareData[$j]['userId'];
                foreach ($prepareData[$i]['data'] as $index => $rating) {
                    $nextRating = $prepareData[$j]['data'][$index] ?? null;
                    if (null === $nextRating) {
                        $countPositive = collect($pearson[$nextUserId])->reject(function ($item, $index) use ($nextUserId) {
                            return $item <= 0 || $index === $nextUserId;
                        })->count();

                        $countNegative = collect($pearson[$nextUserId])->reject(function ($item, $index) use ($nextUserId) {
                            return $item >= 0 || $index === $nextUserId;
                        })->count();

                        if ($countPositive >= 2) {
                            $data  = $this->getTetangga($pearson[$nextUserId], function ($item, $index) use ($nextUserId) {
                                return $item <= 0 || $index === $nextUserId;
                            })->take(2)->toArray();
                        } else {
                            $data  = $this->getTetangga($pearson[$nextUserId], function ($item, $index) use ($nextUserId) {
                                return $item >= 0 || $index === $nextUserId;
                            })->take(2)->toArray();
                        }

                        $dataYangDiAmbil = [];
                        foreach ($data as $indexDataUserId => $value) {
                            if ($s = $selisihRating[$indexDataUserId][$index] ?? false) {
                                $dataYangDiAmbil[$indexDataUserId] = $s;
                            }
                        }

                        $hasilKali = 0;
                        foreach ($data as $u => $v) {
                            if ($datasu = $dataYangDiAmbil[$u] ?? false) {
                                $hasilKali += ($data[$u] * $dataYangDiAmbil[$u]);
                            }
                        }

                        try {
                            $finalResult = ($hasilKali / array_sum($data) + $rataWisata[$nextUserId]);
                        } catch (\Exception $e) {
                            $finalResult = 0;
                        }
                        $this->data[$nextUserId][$index] = $finalResult;
                        $this->missingRating[$nextUserId][$index] = null;
                    }
                }
            }
        }
        $ggSort = $this->data;
        foreach ($ggSort as $user => &$wiasatas) {
            ksort($wiasatas);
        }
        $this->hasilRatingTerurut = $ggSort;

        foreach ($this->data as $user => $val) {
            uasort($this->data[$user], function($a, $b) {
                return $a < $b;
            });
        }    
        
        return $this->data;        
    }

    public function cosineItemBased()
    {
        $rata = $this->getRataDariSetiapWisata();
        $selisihRating = $this->getSelisihRating();

        $prepareData = [];
        foreach ($selisihRating as $index => $data) {
            foreach ($data as $iData => $v) {
                $prepareData[$iData][$index] = $v;
            }
        }

        $listUser = collect($selisihRating)->keys();
        $hasilArray = [];
        $penyebutArray = [];
        $h = [];
        foreach ($prepareData as $index => $u) {
            foreach ($prepareData as $nIndex => $nU) {
                if ($index === $nIndex) {
                    continue;
                }
                $hasil = 0;
                $penyebut= 0;
                $penyebut2= 0;
                foreach ($listUser as $iUser => $uId) {
                    $nilaiPertama = $prepareData[$index][$uId] ?? null;
                    $nilaiKedua = $prepareData[$nIndex][$uId] ?? null;
                    if (null !== $nilaiPertama && null !== $nilaiKedua) {
                        $hasil+= $nilaiPertama * $nilaiKedua;
                        $penyebut += pow($nilaiPertama, 2);
                        $penyebut2 += pow($nilaiKedua, 2);
                    }
                }
                $penyebut = sqrt($penyebut);
                $penyebut2 = sqrt($penyebut2);
                $b = $penyebut * $penyebut2;
                $hasilArray[$index][$nIndex] = $hasil / $b;
            }
        }

        return $hasilArray;
    }

    public function predictItemBased()
    {
        $dataAwal = $this->data;
        $cosine = $this->getCosineItemBased();

        foreach ($dataAwal as $user => $r) {
            foreach ($cosine as $itemIndex => $item) {
                $check = $dataAwal[$user][$itemIndex] ?? null;
                if (null === $check) {
                    $countPositive = collect($cosine[$itemIndex])->reject(function ($item, $index) use ($itemIndex) {
                        return $item <= 0 || $index === $itemIndex;
                    })->count();

                    $countNegative = collect($cosine[$itemIndex])->reject(function ($item, $index) use ($itemIndex) {
                        return $item >= 0 || $index === $itemIndex;
                    })->count();

                    if ($countPositive >= 2) {
                        $data  = $this->getTetangga($cosine[$itemIndex], function ($item, $index) use ($itemIndex) {
                            return $item <= 0 || $index === $itemIndex;
                        })->take(2)->toArray();
                    } else {
                        $data  = $this->getTetangga($cosine[$itemIndex], function ($item, $index) use ($itemIndex) {
                            return $item >= 0 || $index === $itemIndex;
                        })->take(2)->toArray();
                    }

                    $dataYangDiAmbil = [];
                    foreach ($data as $indexDataUserId => $value) {
                        if ($s = $this->data[$user][$indexDataUserId] ?? false) {
                            $dataYangDiAmbil[$indexDataUserId] = $s;
                        }
                    }

                    $hasilKali = 0;
                    foreach ($data as $u => $v) {
                        if ($datasu = $dataYangDiAmbil[$u] ?? false) {
                            $hasilKali += ($data[$u] * $dataYangDiAmbil[$u]);
                        }
                    }

                    try {
                        $finalResult = ($hasilKali / array_sum($data));
                    } catch (\Exception $e) {
                        $finalResult = 0;
                    }
                    $this->data[$user][$itemIndex] = $finalResult;
                    $this->missingRatingItem[$user][$itemIndex] = null;
                    
                }
            }
        }
        $ggSort = $this->data;
        foreach ($ggSort as $user => &$wiasatas) {
            ksort($wiasatas);
        }
        $this->hasilRatingTerurutItem = $ggSort;

        foreach ($this->data as $user => $val) {
            uasort($this->data[$user], function($a, $b) {
                return $a < $b;
            });
        }

        return $this->data;
    }

    public function hitungMae()
    {        
        $firman = [];
        $fromDataSet = [];
        $totalUser = count($this->missingRating);
        

        foreach ($this->missingRating as $userId => $values) {
            foreach ($values as $wisataId => $any) {
                $firman[$wisataId][] = $this->data[$userId][$wisataId];
                $fromDataSet[$wisataId] = DataSetWisata::find($wisataId)->rating;
            }
        }

        $newFirman = collect($firman)->map(function($item, $wisataId) {
            $total = 0;
            collect($item)->each(function($n) use($wisataId, &$total) {
                $total += $n - DataSetWisata::find($wisataId)->rating;
            });
            return $total;
    })->sum();
        
        if($totalUser != 0){
            $newFirman = abs($newFirman) / $totalUser; 
            return $newFirman;
        }
        else{
            return 0;
        }     
    }

    public function hitungMaeItem()
    {        
        $firman = [];
        $fromDataSet = [];

        foreach ($this->missingRatingItem as $userId => $values) {
            foreach ($values as $wisataId => $any) {
                $firman[$wisataId][] = $this->data[$userId][$wisataId];
                $fromDataSet[$wisataId] = DataSetWisata::find($wisataId)->rating;
            }
        }

        $newFirman = collect($firman)->map(function($item, $wisataId) {
            $total = 0;
            collect($item)->each(function($n) use($wisataId, &$total) {
                $total += $n - DataSetWisata::find($wisataId)->rating;
            });
            return $total;
        })->sum();

        $totalItem = count($firman);
        
        if($totalItem != 0){
            $newFirman = abs($newFirman) / $totalItem;
            return $newFirman;
        }
        else{
            return 0;
        }    
    }

    private function getTetangga(array $data, $scope)
    {
        return collect($data)->reject($scope);
    }

    public function getRataDariSetiapWisata()
    {
        if (null === $this->rataDariSetiapWisata) {
            $this->rataDariSetiapWisata = $this->rataDariSetiapWisata();
        }

        return $this->rataDariSetiapWisata;
    }

    public function getSelisihRating(array $array = null)
    {
        if (null === $this->selisihRating){
            $data = $array ?? $this->getRataDariSetiapWisata();
            $this->selisihRating = $this->selisihRating($data);
        }
        return $this->selisihRating;
    }

    public function getHitungPearson()
    {
        if(null === $this->hitungPearson){
            $this->hitungPearson = $this->hitungPearson();
        }
        return $this->hitungPearson;
    }

    public function getHasilRatingTerurut()
    {
        if(null === $this->hasilRatingTerurut){
            $this->hasilRatingTerurut = $this->predictRating();
        }
        return $this->hasilRatingTerurut;        
    }

    public function getCosineItemBased()
    {
        if(null === $this->cosineItemBased){
            $this->cosineItemBased = $this->cosineItemBased();
        }
        return $this->cosineItemBased;
    }

    public function getHasilRatingTerurutItem()
    {
        if(null === $this->hasilRatingTerurutItem){
            $this->hasilRatingTerurutItem = $this->predictRating();
        }
        return $this->hasilRatingTerurutItem;        
    }

    public function getHitungMae()
    {
        if (null === $this->hasilHitungMae) {
            $this->hasilHitungMae = $this->hitungMae();
        }

        return $this->hasilHitungMae;
    }

    public function getHitungMaeItem()
    {
        if (null === $this->hasilHitungMaeItem) {
            $this->hasilHitungMaeItem = $this->hitungMaeItem();
        }

        return $this->hasilHitungMaeItem;
    }
}
