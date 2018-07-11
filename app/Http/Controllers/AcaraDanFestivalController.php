<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Acaradanfestival;
use App\Artikel;

class AcaraDanFestivalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $dataAcaradanFestival = Acaradanfestival::latest()->paginate(ENV('PER_PAGE'));
      return view('acaradanfestival',['dataAcaradanFestival' => $dataAcaradanFestival ]);
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
     public function show(AcaradanFestival $acaradanfestival)
     {
        $data = Acaradanfestival::latest()->paginate(10);

       return view('acaradanfestivalDetail', ['acaradanfestival' => $acaradanfestival ], ['data' => $data ]);
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
