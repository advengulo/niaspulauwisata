<?php

namespace App\Service;

class Recomended
{
    public $rataRata;

    /**
     * Array Data yang akan di training
     * 
     *
     * @var [type]
     */
    private $data;

    /**
     * Property untuk hasil rata setiap wisata
     *
     * @var [type]
     */
    private $rataDariSetiapWisata;
    private $selisihRating;
    private $hitungPearson;
    private $predictRating;
    private $predictRatingAdmin;    

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    // public function getData(array $array = null)
    // {
    //     if (null === $this->data){
    //         $datas = $array ?? $this->getData();
    //         $this->data = $this->data($datas);
    //     }
    //     return $this->data;
    // }

    public function rataDariSetiapWisata()
    {
        $data = collect($this->data);

        $items = $data->map(function ($item) {
            return collect($item)->avg();
        })->toArray();
        
        return $items;        
    }

    public function getRataDariSetiapWisata()
    {
        if (null === $this->rataDariSetiapWisata) {
            $this->rataDariSetiapWisata = $this->rataDariSetiapWisata();
        }

        return $this->rataDariSetiapWisata;
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

    public function getSelisihRating(array $array = null)
    {
        if (null === $this->selisihRating){
            $data = $array ?? $this->getRataDariSetiapWisata();
            $this->selisihRating = $this->selisihRating($data);
        }
        return $this->selisihRating;
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

    public function getHitungPearson()
    {
        if(null === $this->hitungPearson){
            $this->hitungPearson = $this->hitungPearson();
        }
        return $this->hitungPearson;
    }   

    public function predictRating()
    {
        $prepareData = [];
        $pearson = $this->getHitungPearson();
        foreach ($this->data as $index => $data) {
            $prepareData[] = [
                'userId' => $index,
                'data' => $data,
            ];
        }

        $arrayResult = [];

        $rataWisata = $this->getRataDariSetiapWisata();
        $selisihRating = $this->getSelisihRating();

        for ($i=0; $i<=count($prepareData) - 1; $i++) {
            $userId = $prepareData[$i]['userId'];

            for ($j=0; $j<= count($prepareData) - 1; $j++) {
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
                    }
                }
            }
        }

        foreach ($this->data as $user => $val) {
            uasort($this->data[$user], function($a, $b) {
                return $a < $b;
            });
        }
        return $this->data;
    }

    public function getPredictRating()
    {
        if(null === $this->predictRating){
            $this->predictRating = $this->predictRating();
        }
        return $this->predictRating;
    }

    private function calculatePearson(int $currentUserId, array $prepareData)
    {
    }

    public function cosineItemBased()
    {
        $rata = $this->getRataDariSetiapWisata();
        $selisihRating = $this->selisihRating($rata);

        $prepareData = [];
        $totalProduct = 5;
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

    private function getTetangga(array $data, $scope)
    {
        return collect($data)->reject($scope);
    }

    public function predictItemBased()
    {
        $dataAwal = $this->data;
        $cosine = $this->cosineItemBased();
        // dump($cosine);

        // dd($cosine);
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
                        // dd($indexDataUserId);
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
                }
            }
        }
        // dd($this->data);
        foreach ($this->data as $user => $val) {
            uasort($this->data[$user], function($a, $b) {
                return $a < $b;
            });
        }

        return $this->data;
    }

    public function predictRatingAdmin()
    {
        $prepareData = [];
        $pearson = $this->getHitungPearson();
        foreach ($this->data as $index => $data) {
            $prepareData[] = [
                'userId' => $index,
                'data' => $data,
            ];
        }

        $arrayResult = [];

        $rataWisata = $this->getRataDariSetiapWisata();
        $selisihRating = $this->getSelisihRating();

        for ($i=0; $i<=count($prepareData) - 1; $i++) {
            $userId = $prepareData[$i]['userId'];

            for ($j=0; $j<= count($prepareData) - 1; $j++) {
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
                    }
                }
            }
        }
        // foreach ($this->data as $user => $val) {
        //     uasort($this->data[$user], function($a, $b) {
        //         return $a < $b;
        //     });
        // }

        return $this->data;
    }

    public function getPredictRatingAdmin()
    {
        if(null === $this->predictRatingAdmin){
            $this->predictRatingAdmin = $this->predictRatingAdmin();
        }
        return $this->predictRatingAdmin;
    }
    
}
