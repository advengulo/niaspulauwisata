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
<<<<<<< HEAD
use DB;
use App\Wisata;
use App\Artikel;
use App\Ulasan;
=======
>>>>>>> 7d8bcbbd1faf9515109da3f1fd23fba952840c8a

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

<<<<<<< HEAD
    // dd(ulasanData);
    return view('wisataDetail', compact('wisata'));
  }
=======
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
>>>>>>> 7d8bcbbd1faf9515109da3f1fd23fba952840c8a

        return view('wisataDetail', compact('wisata', 'dataWisata'));
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
}
