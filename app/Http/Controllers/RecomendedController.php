<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\Recomended;

class RecomendedController extends Controller
{
    public function index()
    {
        $sampleData = [
            1 => [
                100 => 4,
                101 => 3,
                102 => 3,
                103 => 4,
                104 => 5,
            ],
            2 => [
                100 => 5,
                101 => 3,
                // 102 => null,
                103 => 4,
                104 => 3,
            ],
            3 => [
                101 => 4,
                102 => 3,
                103 => 1,
                // 104 => 0,
            ],
            4 => [
                100 => 3,
                101 => 2,
                102 => 5,
                // 103 => 0,
                104 => 4,
            ],
            5 => [
                100 => 1,
                // 101 => 0,
                102 => 1,
                103 => 2,
                104 => 3,
            ],
        ];

        $recomended = new Recomended($sampleData);

        return $recomended->predictRating();
    }
}
