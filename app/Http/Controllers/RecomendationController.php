<?php

namespace App\Http\Controllers;

use App\Service\Recomended;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\User;
use App\Wisata;
use Cache;

class RecomendationController extends Controller
{
    private $recomendationClass;

    public function rataRatingUser()
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
                        //$ratings[$wisata->id] = $rating !== null ? (int) $rating : null;
                        if(null !== $rating){
                            $ratings[$wisata->id] = $rating;
                        }
                    }

                    return $ratings;
                })
                ->toArray()
            ;
            
            $userBased  = $this->getUserRating($usersWithRating);
            
            $datas = $usersWithRating;            
            $rataRatingUser = $this->recomendationClass->getRataDariSetiapWisata();
            $selisihRatings = $this->recomendationClass->getSelisihRating();
            // $nilaiPearsons = $this->recomendationClass->getHitungPearson();
            // $nilaiRatings = $this->recomendationClass->getPredictRating();

            
           
            
            
            // dd($selisihRatings->toArray());
            
            return view('dashboards.training', [
                'rataRatingUser' => $rataRatingUser,
                'selisihRatings' => $selisihRatings,
                'datas' => $datas,
                // 'nilaiPearsons' => $nilaiPearsons,
            ]);
        }
    }

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
                        //$ratings[$wisata->id] = $rating !== null ? (int) $rating : null;
                        if(null !== $rating){
                            $ratings[$wisata->id] = $rating;
                        }
                    }

                    return $ratings;
                })
                ->toArray();

            //$itemBased = $this->getItemRating($usersWithRating);
            // return $itemBased
            //dd($usersWithRating);
            $userBased  = $this->getUserRating($usersWithRating);

            // $selisihRating = $this
            //     ->recomendationClass
            //     ->selisihRating($this->recomendationClass->getRataDariSetiapWisata());
            return view('wisataHasil', compact('userBased')); 
        }
        $userBaseds = DB::table('wisatas')
                    ->select('wisatas.id')
                    ->leftJoin('ratings', 'wisatas.id', '=', 'ratings.rateable_id')
                    ->addSelect(DB::raw('AVG(ratings.rating) as average_rating'))
                    ->groupBy('wisatas.id')
                    ->orderBy('average_rating', 'desc')
                    ->paginate(10);

        
        $userBased = collect($userBaseds);
        $userBased = $userBaseds->map(function($item) {
            return Wisata::with('ratings')->find($item->id);
        });
        
        //dd($userBased);

        //$userBased = Wisata::latest()->paginate(10);
        return view('wisataHasil', compact('userBased'));
        // $sampleData = [
        //     1 => [
        //         100 => 4,
        //         101 => 3,
        //         102 => 3,
        //         103 => 4,
        //         104 => 5,
        //     ],
        //     2 => [
        //         100 => 5,
        //         101 => 3,
        //         // 102 => null,
        //         103 => 4,
        //         104 => 3,
        //     ],
        //     3 => [
        //         101 => 4,
        //         102 => 3,
        //         103 => 1,
        //         // 104 => 0,
        //     ],
        //     4 => [
        //         100 => 3,
        //         101 => 2,
        //         102 => 5,
        //         // 103 => 0,
        //         104 => 4,
        //     ],
        //     5 => [
        //         100 => 1,
        //         // 101 => 0,
        //         102 => 1,
        //         103 => 2,
        //         104 => 3,
        //     ],
        // ];
        //  $recomended = new Recomended($sampleData);
        //  return $recomended->predictItemBased();
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
        // dd($recomendationResult);

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
        // dd($recomendationResult);

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
        })->flatten()->take(10);
        
        return $reject;
    }
}
