<?php

namespace App\Http\Controllers;

use App\Service\Recomended;
use Illuminate\Http\Request;
use App\User;
use App\Wisata;
use Cache;

class RecomendationController extends Controller
{
    public function index()
    {
        $usersWithRating = User::get()
            ->groupBy('id')
            ->map(function($user, $userId) {
                // return $user;
                $wisatas = Wisata::get();
                
                $ratings = [];
                foreach ($wisatas as $wisata)
                {
                    // dd($userId);
                    $rating = $wisata
                        ->ratings()->where('user_id', $userId)
                        ->first()->rating ?? null
                    ;
                    $ratings[$wisata->id] = $rating !== null ? (int) $rating : null;
                }

                return $ratings;
            })
            ->toArray()
        ;

        $recomendation = new Recomended($usersWithRating);
        
        // $data = Cache::remember('1', 1, function() use ($recomendation) {
        //     return $recomendation->predictRating();
        // });

        $data = $recomendation->predictRating();

        return response()->json($data, 200, [], 128);
    }
}
