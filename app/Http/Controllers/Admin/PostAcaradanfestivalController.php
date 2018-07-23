<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Acaradanfestival;
use App\Artikel;

class PostAcaradanfestivalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataAcaradanfestivals = Acaradanfestival::all();

        return view('dashboards.postAcaradanfestival', compact('dataAcaradanfestivals'));
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataAcaradanfestivals = Acaradanfestival::find($id);

        return view('dashboards.editAcaradanfestival', compact('dataAcaradanfestival'));
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
        $dataAcaradanfestivals = Acaradanfestivals::find($id);        
        $dataAcaradanfestivals->update([
            'acaradanfestival_name' => request('acaradanfestival_name'),
            'acaradanfestival_gambar' => request('acaradanfestival_gambar'),
            'acaradanfestival_lokasi' => request('acaradanfestival_lokasi'),
        ]);
        
        $artikel_id = DB::table('acaradanfestivals')->where('id', $id)->value('artikel_id');
        $artikel = Artikel::where('id', $artikel_id);
        $artikel->update([
            'artikel' => request('artikel'),
        ]);

        return redirect('dashboard/postacaradanfestivals')->with(['update' => 'Data Acara dan Festivals Telah Diedit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataAcaradanfestivals = Acaradanfestival::find($id);
        $dataAcaradanfestivals->delete();

        $artikel_id = DB::table('acaradanfestivals')->where('id', $id)->value('artikel_id');
        $artikel = Artikel::where('id', $artikel_id);
        $artikel->delete();

        return back()->with(['delete' => 'Data Acara dan Festival Telah Dihapus']);
    }
}
