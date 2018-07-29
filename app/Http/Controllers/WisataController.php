<?php

namespace App\Http\Controllers;

use App\Artikel;
use App\Wisata;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;
use DB;
use Illuminate\Http\Request;
use Input;
use redirect;
use Session;

use App\Service\Recomended;
use Auth;
use App\User;
use Cache;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Wisata::latest()->paginate(6);

        // return Wisata::first();
        return view('wisata', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Wisata $wisata)
    {
        Mapper::map($wisata->latitude, $wisata->longtitude, ['zoom' => 12]);

        $dataWisata = Wisata::latest()->paginate(4);

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

        $itemBased = $this->getItemRating($usersWithRating);

        return view('wisataDetail', compact('wisata', 'dataWisata','itemBased'));

        } else{
            $itemBased = Wisata::latest()->paginate(4);
            return view('wisataDetail', compact('wisata', 'dataWisata','itemBased'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function getItemRating(array $usersWithRating)
    {

        $recomendation = new Recomended($usersWithRating);
        $activeUser = request()->user();

        $recomendationResult = $recomendation->predictItemBased();
        //dd($recomendationResult);

        return $this->hydrateData($recomendationResult);
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
