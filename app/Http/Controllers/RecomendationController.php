<?php

namespace App\Http\Controllers;

use App\Service\Recomended;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\User;
use App\Wisata;
use App\Ulasan;
use Cache;

class RecomendationController extends Controller
{
    private $recomendationClass;

    public function trainingUser()
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

            $usersWithRating1 = User::get()
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
                        $ratings[$wisata->id] = $rating !== null ? (string) $rating : "-";
                    }
                    return $ratings;
                })
                ->toArray();
            
            $userBased  = $this->getUserRating($usersWithRating);

            $idlogin = auth()->id();
            $datas = $usersWithRating1;          
            $rataRatingUser = $this->recomendationClass->getRataDariSetiapWisata();
            $selisihRatings = $this->recomendationClass->getSelisihRating();
            $nilaiPearsons = $this->recomendationClass->getHitungPearson();          
            $nilaiRatingss = $this->recomendationClass->getPredictRating();
            $nilaiRatings = $nilaiRatingss[$idlogin]; 

            return view('trainingUser', [
                'rataRatingUser' => $rataRatingUser,
                'selisihRatings' => $selisihRatings,
                'nilaiPearsons' => $nilaiPearsons,
                'nilaiRatings' => $nilaiRatings,
                'datas' => $datas,
                'idlogin' => $idlogin,                
            ]);
        }
    }

    public function trainingAdmin()
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

            $usersWithRating1 = User::get()
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
                        $ratings[$wisata->id] = $rating !== null ? (string) $rating : "-";
                    }
                    return $ratings;
                })
                ->toArray();
            
            $userBased  = $this->getUserRatingAdmin($usersWithRating);

            $idlogin = auth()->id();
            $datas = $usersWithRating1;          
            $rataRatingUser = $this->recomendationClass->getRataDariSetiapWisata();
            $selisihRatings = $this->recomendationClass->getSelisihRating();
            $nilaiPearsons = $this->recomendationClass->getHitungPearson();          
            $nilaiRatings = $this->recomendationClass->getPredictRatingAdmin();
            //dd($nilaiRatings);

            return view('dashboards.training', [
                'rataRatingUser' => $rataRatingUser,
                'selisihRatings' => $selisihRatings,
                'nilaiPearsons' => $nilaiPearsons,
                'nilaiRatings' => $nilaiRatings,
                'datas' => $datas,
                'idlogin' => $idlogin,
            ]);
        }
    }

    public function index()
    {
        $idUserLogin = auth()->id();
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

                // $banyakDataUser = DB::table('ulasans')->where('user_id', $idUserLogin)->count();
                
                // if($banyakDataUser < 2)
                // {
                //     $userBaseds = DB::table('wisatas')
                //             ->select('wisatas.id')
                //             ->leftJoin('ratings', 'wisatas.id', '=', 'ratings.rateable_id')
                //             ->addSelect(DB::raw('AVG(ratings.rating) as average_rating'))
                //             ->groupBy('wisatas.id')
                //             ->orderBy('average_rating', 'desc')
                //             ->paginate(10);
                
                // $userBased = collect($userBaseds);
                // $userBased = $userBaseds->map(function($item) {
                //     return Wisata::with('ratings')->find($item->id);
                // }); 
                // $userBased = collect($userBaseds);
                // $userBased = $userBaseds->map(function($item) {
                //     return Wisata::with('ratings')->find($item->id);       
                
                // return view('wisataHasil', compact('userBased'));
                // }

            $userBased  = $this->getUserRating($usersWithRating);            
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
        // dd($recomendationResult);

        return $this->hydrateData($recomendationResult);

    }

    private function getUserRatingAdmin(array $usersWithRating)
    {
        $this->recomendationClass = new Recomended($usersWithRating);
        

        $recomendationResult = $this->recomendationClass->predictRatingAdmin();
        // dd($this->recomendationClass->predictRatingAdmin());

        return $this->hydrateDataAdmin($recomendationResult);

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

    private function hydrateDataAdmin(array $recomendationResult)
    {
        $activeUser = request()->user();

        $data = ($recomendationResult[$activeUser->id]);
        $ids = collect(array_keys($data))->map(function($value) {
            return Wisata::find($value);
        });

        $reject = $ids->reject(function($wisata) use($activeUser) {
            return $wisata->ratings()->where('user_id', $activeUser->id)->exists();
        });
        
        return $reject;
    }
}
