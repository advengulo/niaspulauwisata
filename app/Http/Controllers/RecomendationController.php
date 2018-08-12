<?php

namespace App\Http\Controllers;

use App\Service\Recomended;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Wisata;
use App\Artikel;
use Cache;
use Illuminate\Support\Facades\DB;
class RecomendationController extends Controller
{
    public function index()
    {
        if(Auth::check()){
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
        //dd($itemBased);
        // return $itemBased;
        $userBased  = $this->getUserRating($usersWithRating);


        return view('wisataHasil', compact('userBased'));
        } else{
            $userBased = Wisata::latest()->paginate(4);
            return view('wisataHasil', compact('userBased'));
        }


    }
    

    private function getUserRating(array $usersWithRating)
    {
        $recomendation = new Recomended($usersWithRating);
        $activeUser = request()->user();

        $recomendationResult = $recomendation->predictRating();
        // dd($recomendationResult);

        return $this->hydrateData($recomendationResult);

    }
    


    private function getItemRating(array $usersWithRating)
    {

        $recomendation = new Recomended($usersWithRating);
        $activeUser = request()->user();

        $recomendationResult = $recomendation->predictItemBased();
        //dd($recomendationResult);

        return $this->hydrateData($recomendationResult);
    }
    public function indexAPI(Request $request)
    {
        $check = $request->userid;
        if(isset($check)){
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

            $userBased  = $this->getUserRatingAPI($usersWithRating,$check);
            foreach($userBased as $user){
                $user->artikel = Artikel::where('id',$user->artikel_id)->first()->artikel;
            }
            $response = new \stdClass();
            $response->error = 0;
            $response->data = $userBased;
            return json_encode($response);
        } else{
            // $userBased = DB::table('wisatas')
            //     ->join('artikels', 'wisatas.artikel_id', '=', 'artikels.id')
            //     ->select('wisatas.*','artikels.artikel')
            //     ->orderBy('created_at','desc')
            //     ->get();
            $userBased = Wisata::latest()->paginate(4);
            foreach($userBased as $user){
                $user->artikel = Artikel::where('id',$user->artikel_id)->first()->artikel;
            }
            // $response = new \stdClass();
            // $response->error = 0;
            // $response->data = $userBased;
            return json_encode($userBased);
        }


    }
    public function indexAPI2(Request $request)
    {
        $check = $request->userid;
        if(isset($check)){
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

            $itemBased  = $this->getItemRatingAPI($usersWithRating,$check);
            foreach($itemBased as $user){
                $user->artikel = Artikel::where('id',$user->artikel_id)->first()->artikel;
            }
            $response = new \stdClass();
            $response->error = 0;
            $response->data = $itemBased;
            return json_encode($response);
        } else{
            $itemBased = Wisata::latest()->paginate(4);
            foreach($itemBased as $user){
                $user->artikel = Artikel::where('id',$user->artikel_id)->first()->artikel;
            }
            return json_encode($itemBased);
        }
    }
    private function getUserRatingAPI(array $usersWithRating,$check)
    {
        $recomendation = new Recomended($usersWithRating);
        $recomendationResult = $recomendation->predictRating();
        // dd($recomendationResult);
        return $this->hydrateDataAPI($recomendationResult,$check);

    }
    private function getItemRatingAPI(array $usersWithRating,$check)
    {

        $recomendation = new Recomended($usersWithRating);
        $recomendationResult = $recomendation->predictItemBased();
        //dd($recomendationResult);

        return $this->hydrateDataAPI($recomendationResult,$check);
    }
    private function hydrateDataAPI(array $recomendationResult,$check)
    {
        $activeUser = User::where('id',$check)->first();
        $data = ($recomendationResult[$check]);
        $ids = collect(array_keys($data))->map(function($value) {
            return Wisata::find($value);
        });

        $reject = $ids->reject(function($wisata) use($activeUser) {
            return $wisata->ratings()->where('user_id', $activeUser->id)->exists();
        })->flatten();
        return $reject;
    }
    private function hydrateData(array $recomendationResult)
    {
        $activeUser = request()->user();
        //dd($recomendationResult);
        //$data = collect($recomendationResult[$activeUser->id])->take(20)->toArray();
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
