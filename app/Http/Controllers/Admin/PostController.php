<?php

namespace App\Http\Controllers\Admin;

use App\Artikel;
use App\Budaya;
use App\JenisWisata;
use App\Transportasi;
use App\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataWisatas = Wisata::all();

        // return Wisata::first()->artikel->shortArticlea;

        return view('dashboards.postControl', compact('dataWisatas'));
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
        return view('dashboards.showWisata', compact('wisata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataWisatas = Wisata::find($id);
        $jeniswisatas = JenisWisata::all();

        return view('dashboards.editWisata', compact('dataWisatas', 'jeniswisatas'));
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
        $dataWisatas = Wisata::find($id);
        $dataWisatas->update([
            'wisata_name' => request('wisata_name'),
            'wisata_gambar' => request('wisata_gambar'),
            'wisata_video' => request('wisata_video'),
            'wisata_rating' => request('wisata_rating'),
            'wisata_lokasi' => request('wisata_lokasi'),
            'jenis_wisata_id' => request('jenis_wisata_id'),
        ]);
        
        $artikel_id = DB::table('wisatas')->where('id', $id)->value('artikel_id');
        $artikel = Artikel::where('id', $artikel_id);
        $artikel->update([
            'artikel' => request('artikel'),
        ]);

        return redirect('dashboard/postcontrol')->with(['update' => 'Data Wisata Telah Diedit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataWisatas = Wisata::find($id);
        $dataWisatas->delete();

        $artikel_id = DB::table('wisatas')->where('id', $id)->value('artikel_id');
        $artikel = Artikel::where('id', $artikel_id);
        $artikel->delete();

        return back()->with(['delete' => 'Data Wisata Telah Dihapus']);
    }
}
