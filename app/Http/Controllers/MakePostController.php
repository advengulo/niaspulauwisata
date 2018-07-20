<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wisata;
use App\Jeniswisata;
use App\Artikel;
use App\Budaya;
use App\Transportasi;
use Image;

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
            if($request->hasFile('wisata_gambar')){
              $wisata_gambar = $request->file('wisata_gambar');
              $filename = time() . '.' . $wisata_gambar->getClientOriginalExtension();
              Image::make($wisata_gambar)->resize(850, 637)->save( public_path('/img/img-wisata/' . $filename) );
            }

            Wisata::create([
                'wisata_name' => request('wisata_name'),
                'artikel_id' => $artikel->id,
                'wisata_gambar' => '/img/img-wisata/'.$filename,
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
            if($request->hasFile('budaya_gambar')){
              $budaya_gambar = $request->file('budaya_gambar');
              $filename = time() . '.' . $budaya_gambar->getClientOriginalExtension();
              Image::make($budaya_gambar)->resize(850, 637)->save( public_path('/img/img-budaya/' . $filename) );
            }

            Budaya::create([
                'budaya_name' => request('budaya_name'),
                'artikel_id' => $artikel->id,
                'budaya_gambar' => '/img/img-budaya/'.$filename,
                'budaya_lokasi' => request('budaya_lokasi')
            ]);
        } else{
            $artikel = Artikel::create([
                'artikel' => request('artikel')
            ]);
            if($request->hasFile('transportasi_gambar')){
              $transportasi_gambar = $request->file('transportasi_gambar');
              $filename = time() . '.' . $transportasi_gambar->getClientOriginalExtension();
              Image::make($transportasi_gambar)->resize(850, 637)->save( public_path('/img/img-transportasi/' . $filename) );
            }

            Transportasi::create([
                'transportasi_name' => request('transportasi_name'),
                'artikel_id' => $artikel->id,
                'transportasi_gambar' => '/img/img-transportasi/'.$filename,
                'transportasi_jenis' => request('transportasi_jenis')
            ]);
        }
        return redirect()->back();
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
