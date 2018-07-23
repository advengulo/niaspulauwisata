<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Wisata;
use App\JenisWisata;
use App\Artikel;
use App\Budaya;
use App\Transportasi;

class PostTransportasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataTransportasis = Transportasi::all();

        return view('dashboards.postTransportasi', compact('dataTransportasis'));
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
    public function show(transportasi $transportasi)
    {
        return view('dashboards.showTransportasi', compact('transportasi'));        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataTransportasis = Transportasi::find($id);

        return view('dashboards.editTransportasi', compact('dataTransportasis'));
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
        $dataTransportasis = Transportasi::find($id);        
        $dataTransportasis->update([
            'transportasi_name' => request('transportasi_name'),
            'transportasi_gambar' => request('transportasi_gambar'),
            'transportasi_lokasi' => request('transportasi_lokasi'),
        ]);
        
        $artikel_id = DB::table('transportasis')->where('id', $id)->value('artikel_id');
        $artikel = Artikel::where('id', $artikel_id);
        $artikel->update([
            'artikel' => request('artikel'),
        ]);

        return redirect('dashboard/posttransportasi')->with(['update' => 'Data Transportasi Telah Diedit']);        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataTransportasis = Transportasi::find($id);
        $dataTransportasis->delete();

        $artikel_id = DB::table('transportasis')->where('id', $id)->value('artikel_id');
        $artikel = Artikel::where('id', $artikel_id);
        $artikel->delete();

        return back()->with(['delete' => 'Data Transportasi Telah Dihapus']);        
    }
}
