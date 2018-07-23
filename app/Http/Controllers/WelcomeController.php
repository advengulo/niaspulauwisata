<?php

namespace App\Http\Controllers;

use App\Acaradanfestival;
use App\Artikel;
use App\Wisata;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;
use DB;
use Illuminate\Http\Request;
use Input;
use Redirect;
use Session;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataAcaradanFestival = Acaradanfestival::latest()->paginate(3);
        $dataWisata = Wisata::latest()->paginate(3);
        return view('welcome', ['dataWisata' => $dataWisata], ['dataAcaradanFestival' => $dataAcaradanFestival ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        Mapper::map(1.304203, 97.590803);
        return view('wisataDetail', compact('wisata'));
    }

    public function tampil(AcaradanFestival $acaradanfestival)
    {
        return view('acaradanfestivalDetail', compact('acaradanfestival'));
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
