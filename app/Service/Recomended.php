<?php

namespace App\Service;

class Recomended
{
    public $rataRata;
    private $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function selisihRating(array $items)
    {
        $users = collect($this->data)->map(function($item, $index) use($items) {
            $user = $items[$index];
            return collect($item)->map(function($rating) use($user) {
                return $rating - $user;
            })->toArray();
        });

        // dd($users);
        return $users;
    }

    public function rataDariSetiapWisata()
    {
        $data = collect($this->data);

        $items = $data->map(function($item) {
            return collect($item)->avg();
        })->toArray();
        

        return $items;
    }

    public function cosine()
    {
        $prepareData = [];
        foreach($this->data as $index => $data)
        {
            $prepareData[] = [
                'userId' => $index,
                'data' => $data,
            ];
        }

        $arrayResult = [];

        for($i=0; $i<=count($prepareData) - 1; $i++)
        {
            for($j=$i+1; $j<= count($prepareData) - 1; $j++)
            {
                $tempResult = [];
                $itemA = [];
                $itemB = [];
                foreach ($prepareData[$i]['data'] as $index => $rating)
                {
                    $nextRating = $prepareData[$j]['data'][$index] ?? null;
                    if($nextRating) {
                        $result = $rating * $nextRating;
                        $tempResult[$index] = $result;
                        $itemA[] = $rating**2;
                        $itemB[] = $nextRating**2;
                    }
                }

                $akarItemA = sqrt(array_sum($itemA));
                $akarItemB = sqrt(array_sum($itemB));

                $akarAKaliAkarB = $akarItemA * $akarItemB;

                $hasil = array_sum($tempResult) / $akarAKaliAkarB;

                $nextUser = $prepareData[$j]['userId'];
                $userId = $prepareData[$i]['userId'];
                $arrayResult[$userId][$nextUser] = $hasil;

            }

        }

        return $arrayResult;

    }

    public function hitungPearson()
    {
        $prepareData = [];
        foreach($this->data as $index => $data)
        {
            $prepareData[] = [
                'userId' => $index,
                'data' => $data,
            ];
        }

        $arrayResult = [];

        $rataWisata = $this->rataDariSetiapWisata();
        for($i=0; $i<=count($prepareData) - 1; $i++)
        {
            $userId = $prepareData[$i]['userId'];

            for($j=0; $j<= count($prepareData) - 1; $j++)
            {
                $nextUserId = $prepareData[$j]['userId'];
                $tempResult = [];
                $itemA = [];
                $itemB = [];
                foreach ($prepareData[$i]['data'] as $index => $rating)
                {
                    $nextRating = $prepareData[$j]['data'][$index] ?? null;

                    if($nextRating) {
                        $result = ($rating - $rataWisata[$userId]) * ($nextRating - $rataWisata[$nextUserId]);
                        // $itemA =
                        $akarDariSelisihRatingA = $this->selisihRating($rataWisata)[$userId];
                        $akarDariSelisihRatingB = $this->selisihRating($rataWisata)[$nextUserId];
                        
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

                } catch(\Exception $e) {
                    $hasil = 0;
                }

                $arrayResult[$userId][$nextUserId] = $hasil;

            }
        }

        return $arrayResult;
    }

    private function calculatePearson(int $currentUserId, array $prepareData)
    {

    }

    /**
     * User Based
     *
     * @return void
     */
    public function predictRating()
    {
        $prepareData = [];
        $pearson = $this->hitungPearson();
        foreach($this->data as $index => $data)
        {
            $prepareData[] = [
                'userId' => $index,
                'data' => $data,
            ];
        }

        $arrayResult = [];

        $rataWisata = $this->rataDariSetiapWisata();
        $selisihRating = $this->selisihRating($rataWisata);

        for($i=0; $i<=count($prepareData) - 1; $i++)
        {
            $userId = $prepareData[$i]['userId'];

            for($j=0; $j<= count($prepareData) - 1; $j++)
            {
                if ($j === $i) {
                    continue;
                }
                $nextUserId = $prepareData[$j]['userId'];
                foreach ($prepareData[$i]['data'] as $index => $rating)
                {
                    $nextRating = $prepareData[$j]['data'][$index] ?? null;
                    if (null === $nextRating) {
                        
                        $countPositive = collect($pearson[$nextUserId])->reject(function($item, $index) use($nextUserId) {
                            return $item <= 0 || $index == $nextUserId;
                        })->count();

                        $countNegative = collect($pearson[$nextUserId])->reject(function($item, $index) use($nextUserId) {
                            return $item >= 0 || $index == $nextUserId;
                        })->count();

                        if ($countPositive >= 2) {
                            $data  = $this->getTetangga($pearson[$nextUserId], function($item, $index) use($nextUserId) {
                                return $item <= 0 || $index == $nextUserId;
                            })->take(2)->toArray();
                        } else {
                            $data  = $this->getTetangga($pearson[$nextUserId], function($item, $index) use($nextUserId) {
                                return $item >= 0 || $index == $nextUserId;
                            })->take(2)->toArray();
                        }

                        $dataYangDiAmbil = [];
                        foreach ($data as $indexDataUserId => $value)
                        {
                            if ($s = $selisihRating[$indexDataUserId][$index] ?? false) {
                                $dataYangDiAmbil[$indexDataUserId] = $s;
                            }
                        }

                        $hasilKali = 0;
                        foreach ($data as $u => $v)
                        {
                            if ($datasu = $dataYangDiAmbil[$u] ?? false) {
                                $hasilKali += ($data[$u] * $dataYangDiAmbil[$u]);
                            }
                        }

                        // dump($userId);

                        try {
                            $finalResult = ($hasilKali / array_sum($data) + $rataWisata[$nextUserId]);
                        } catch(\Exception $e) {
                            $finalResult = 0;
                        }
                        $this->data[$nextUserId][$index] = $finalResult;
                    }
                }
            }
        }

        // dd($this->data);

        foreach($this->data as $user => $val)
        {
            asort($this->data[$user]);
        }

        dd($this->data);
        // $sor

    }

    private function getTetangga(array $data, $scope)
    {
        return collect($data)->reject($scope);
    }

    public function rataSelisihRating()
    {
        $rata = $this->rataDariSetiapWisata();
        $data = $this->data;

        $newArray = [];
        foreach ($data as $user)
        {
            $user = collect($user)->map(function($item, $index) use ($rata) {
                if ($rata[$index] && $item != 0) {
                    $result = $item - $rata[$index];
                } else {
                    $result = 0;
                }
                return $result;
            });
            $newArray[] = $user->toArray();
        }

        dd($newArray);

    }
}