<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wisata;
use App\Jeniswisata;
use App\Artikel;
use App\Budaya;
use App\Transportasi;

class MakePostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jeniswisatas = Jeniswisata::all();

        return view('dashboards.makePost', compact('jeniswisatas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(request('budaya_name') == null && request('transportasi_name') == null){
            $artikel = Artikel::create([
                'artikel' => request('artikel')
            ]);

            Wisata::create([
                'wisata_name' => request('wisata_name'),
                'artikel_id' => $artikel->id,
                'wisata_gambar' => request('wisata_gambar'),
                'wisata_video' => request('wisata_video'),
                'wisata_rating' => request('wisata_rating'),
                'wisata_lokasi' => request('wisata_lokasi'),
                'jenis_wisata_id' => request('jenis_wisata_id'),
                'latitude' => request('latitude'),
                'longtitude' => request('longtitude')
            ]);
        } elseif(request('wisata_name') == null && request('transportasi_name') == null){
            $artikel = Artikel::create([
                'artikel' => request('artikel')
            ]);

            Budaya::create([
                'budaya_name' => request('budaya_name'),
                'artikel_id' => $artikel->id,
                'budaya_gambar' => request('budaya_gambar'),
                'budaya_lokasi' => request('budaya_lokasi')
            ]);
        } else{
            $artikel = Artikel::create([
                'artikel' => request('artikel')
            ]);

            Transportasi::create([
                'transportasi_name' => request('transportasi_name'),
                'artikel_id' => $artikel->id,
                'transportasi_gambar' => request('transportasi_gambar'),
                'transportasi_jenis' => request('transportasi_jenis')
            ]);
        }
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
