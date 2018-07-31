<?php

namespace App\Http\Controllers;

use App\Service\Recomended;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Wisata;
use Cache;

class RecomendationController extends Controller
{
    private $recomendationClass;

    public function index()
    {
        if(Auth::check()) {
            $usersWithRating = User::get()
                ->groupBy('id')
                ->map(function($user, $userId) {
                    $wisatas = Wisata::get();

                    $ratings = [];
                    foreach ($wisatas as $wisata)
                    {
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

            //$itemBased = $this->getItemRating($usersWithRating);
            // return $itemBased
            $userBased  = $this->getUserRating($usersWithRating);

            $rataSelisihRating = $this->recomendationClass->getRataDariSetiapWisata();

            return view('wisataHasil', compact('userBased'));

        }

        $userBased = Wisata::latest()->paginate(4);
        return view('wisataHasil', compact('userBased'));
    }

    /**
     * Undocumented function
     *
     * @param array $usersWithRating
     * @return void
     */
    private function getUserRating(array $usersWithRating)
    {
        $this->recomendationClass = new Recomended($usersWithRating);
        $activeUser = request()->user();

        $recomendationResult = $this->recomendationClass->predictRating();

        return $this->hydrateData($recomendationResult);

    }


    /**
     * Ambil Rekomendasi Rating.
     *
     * @param array $usersWithRating
     * @return void
     */
    private function getItemRating(array $usersWithRating)
    {
        $this->recomendationClass = new Recomended($usersWithRating);
        $activeUser = request()->user();

        $recomendationResult = $this->recomendationClass->predictItemBased();

        return $this->hydrateData($recomendationResult);
    }

    /**
     * Convert ke Model
     *
     * @param array $recomendationResult
     * @return void
     */
    private function hydrateData(array $recomendationResult)
    {
        $activeUser = request()->user();

        $data = ($recomendationResult[$activeUser->id]);
        $ids = collect(array_keys($data))->map(function($value) {
            return Wisata::find($value);
        });

        $reject = $ids->reject(function($wisata) use($activeUser) {
            return $wisata->ratings()->where('user_id', $activeUser->id)->exists();
        })->flatten();
        
        return $reject;
    }
}
