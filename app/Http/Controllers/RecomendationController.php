<?php

namespace App\Http\Controllers;

use App\Service\Recomended;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\User;
use App\Wisata;
use App\Ulasan;
use App\DataSetWisata;
use Cache;

class RecomendationController extends Controller
{
    private $recomendationClass;

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

    public function trainingAdmin()
    {
        $w = request('user_awal') ?? 1;
        $x = request('user_akhir') ?? 10;
        $y = request('wisata_awal') ?? 1;
        $z = request('wisata_akhir') ?? 20;
        
        if(Auth::check()) {
            $usersWithRating = User::get()->where('id','>=', $w)->where('id','<=',$x)
                ->groupBy('id')
                ->map(function($user, $userId) use($y,$z) {
                    $wisatas = Wisata::get()->where('id','>=', $y)->where('id','<=',$z);

                    $ratings = [];
                    foreach ($wisatas as $wisata)
                    {
                        $rating = $wisata
                            ->ratings()->where('user_id', $userId)
                            ->first()->rating ?? null
                        ;

                        if(null !== $rating){
                            $ratings[$wisata->id] = $rating;
                        }
                    }
                    return $ratings;
                })
                ->toArray();

            $usersWithRating1 = User::get()->where('id','>=', $w)->where('id','<=',$x)
                ->groupBy('id')
                ->map(function($user, $userId) use($y,$z) {
                    $wisatas = Wisata::get()->where('id','>=', $y)->where('id','<=',$z);

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

            $dataSetRating = DataSetWisata::get()->where('id','>=', $y)->where('id','<=',$z);
            
            $userBased  = $this->getUserRatingTraining($usersWithRating);

            $datas = $usersWithRating1;          
            $rataRatingUser = $this->recomendationClass->getRataDariSetiapWisata();
            $selisihRatings = $this->recomendationClass->getSelisihRating();
            $nilaiPearsons = $this->recomendationClass->getHitungPearson();
            $nilaiRatingsTerurut = $this->recomendationClass->getHasilRatingTerurut(); 
            $nilaiMae = $this->recomendationClass->getHitungMae();
                       

            return view('dashboards.trainingUser', [
                'rataRatingUser' => $rataRatingUser,
                'selisihRatings' => $selisihRatings,
                'nilaiPearsons' => $nilaiPearsons,
                'dataSetRating' => $dataSetRating,
                'nilaiRatingsTerurut' => $nilaiRatingsTerurut,
                'datas' => $datas,
                'nilaiMae' => $nilaiMae,
            ]);
        }
    }

    public function trainingAdminItem()
    {
        $a = request('user_awal1') ?? 1;
        $b = request('user_akhir1') ?? 10;
        $c = request('wisata_awal1') ?? 1;
        $d = request('wisata_akhir1') ?? 20;

        if(Auth::check()) {
            $usersWithRating = User::get()->where('id','>=', $a)->where('id','<=',$b)
                ->groupBy('id')
                ->map(function($user, $userId) use($c,$d) {
                    $wisatas = Wisata::get()->where('id','>=', $c)->where('id','<=',$d);

                    $ratings = [];
                    foreach ($wisatas as $wisata)
                    {
                        $rating = $wisata
                            ->ratings()->where('user_id', $userId)
                            ->first()->rating ?? null
                        ;
                        if(null !== $rating){
                            $ratings[$wisata->id] = $rating;
                        }
                    }
                    return $ratings;
                })
                ->toArray();

            $usersWithRating1 = User::get()->where('id','>=', $a)->where('id','<=',$b)
                ->groupBy('id')
                ->map(function($user, $userId) use($c,$d) {
                    $wisatas = Wisata::get()->where('id','>=', $c)->where('id','<=',$d);

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
            
            $itemBased  = $this->getItemRatingTraining($usersWithRating);
            
            $dataSetRating = DataSetWisata::get()->where('id','>=', $c)->where('id','<=',$d);
            
            $datas = $usersWithRating1;          
            $rataRatingUser = $this->recomendationClass->getRataDariSetiapWisata();
            $selisihRatings = $this->recomendationClass->getSelisihRating();
            $nilaiCosines = $this->recomendationClass->getCosineItemBased();
            $nilaiRatingsTerurutItem = $this->recomendationClass->getHasilRatingTerurutItem();
            $nilaiMaeItem = $this->recomendationClass->getHitungMaeItem();
                       

            return view('dashboards.trainingItem', [
                'datas' => $datas,
                'rataRatingUser' => $rataRatingUser,
                'selisihRatings' => $selisihRatings,
                'nilaiCosines' => $nilaiCosines,
                'dataSetRating' => $dataSetRating,
                'nilaiRatingsTerurutItem' => $nilaiRatingsTerurutItem,
                'nilaiMaeItem' => $nilaiMaeItem,
            ]);
        }
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
        })->flatten()->take(10);
        
        return $reject;
    }

    private function getUserRatingTraining(array $usersWithRating)
    {
        $this->recomendationClass = new Recomended($usersWithRating);
        $activeUser = request()->user();

        $recomendationResult = $this->recomendationClass->predictRating();

        return $recomendationResult;
    }

    private function getItemRatingTraining(array $usersWithRating)
    {
        $this->recomendationClass = new Recomended($usersWithRating);
        $activeUser = request()->user();

        $recomendationResult = $this->recomendationClass->predictItemBased();

        return $recomendationResult;
    }

    public function training()
    {
        return view('dashboards.training');
    }

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
            $nilaiMae = $this->recomendationClass->getHitungMae();
            $nilaiMaeItem = $this->recomendationClass->getHitungMaeItem();
            
            $nilaiRatings = $nilaiRatingss[$idlogin]; 

            return view('trainingUser', [
                'rataRatingUser' => $rataRatingUser,
                'selisihRatings' => $selisihRatings,
                'nilaiPearsons' => $nilaiPearsons,
                'nilaiRatings' => $nilaiRatings,
                'datas' => $datas,
                'idlogin' => $idlogin,
                'nilaiMae' => $nilaiMae,
                'nilaiMaeItem' => $nilaiMaeItem,                
            ]);
        }
    }
}
