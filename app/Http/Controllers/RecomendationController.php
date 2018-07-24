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
        $activeUser = request()->user();
        
        // Cache
        // $recomendationResult = Cache::remember('user-'.$activeUser->id, 1, function() use ($recomendation) {
        //     return $recomendation->predictRating();
        // });

        $recomendationResult = $recomendation->predictRating();


        $data = $recomendationResult[$activeUser->id];
        $ids = collect(array_keys($data))->map(function($value) {
            return Wisata::find($value);
        });

        $reject = $ids->reject(function($wisata) use($activeUser) {
            return $wisata->ratings()->where('user_id', $activeUser->id)->exists();
        })->flatten();

        return view('wisataHasil', compact('reject'));

       // return response()->json($reject, 200, [], 128);
    }
}
