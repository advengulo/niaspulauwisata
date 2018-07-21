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

            for($j=$i+1; $j<= count($prepareData) - 1; $j++)
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

                $hasil = array_sum($tempResult) / $akarAKaliAkarB;

                $arrayResult[$userId][$nextUserId] = $hasil;

            }
        }

        // dd($arrayResult);
        return $arrayResult;

    }

    public function predictRating()
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

            for($j=$i+1; $j<= count($prepareData) - 1; $j++)
            {
                $nextUserId = $prepareData[$j]['userId'];
                $tempResult = [];
                $itemA = [];
                $itemB = [];
                foreach ($prepareData[$i]['data'] as $index => $rating)
                {
                    $nextRating = $prepareData[$j]['data'][$index] ?? null;
                    if (null === $nextRating) {

                        $ambil = $rataWisata[$nextUserId];
                        // $prepareData[$j]['data'][$index] = 
                        // dd($prepareData);
                    }
                }
            }
        }

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