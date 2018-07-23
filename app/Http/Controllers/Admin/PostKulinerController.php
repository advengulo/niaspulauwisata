<?php

namespace App\Http\Controllers\Admin;

use App\Artikel;
use App\Http\Controllers\Controller;
use App\Kuliner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostKulinerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataKuliners = Kuliner::all();

        return view('dashboards.postKuliner', compact('dataKuliners'));
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
        return view('dashboards.showKuliner', compact('kuliner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataKuliners = Kuliner::find($id);

        return view('dashboards.editKuliner', compact('dataKuliner'));
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
        $dataKuliners = Kuliner::find($id);
        $dataKuliners->update([
            'kuliner_name' => request('kuliner_name'),
            'kuliner_gambar' => request('kuliner_gambar'),
            'kuliner_lokasi' => request('kuliner_lokasi'),
        ]);
        
        $artikel_id = DB::table('kuliner')->where('id', $id)->value('artikel_id');
        $artikel = Artikel::where('id', $artikel_id);
        $artikel->update([
            'artikel' => request('artikel'),
        ]);

        return redirect('dashboard/postkuliner')->with(['update' => 'Data Kuliner Telah Diedit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataKuliners = Kuliner::find($id);
        $dataKuliners->delete();

        $artikel_id = DB::table('kuliners')->where('id', $id)->value('artikel_id');
        $artikel = Artikel::where('id', $artikel_id);
        $artikel->delete();

        return back()->with(['delete' => 'Data Kuliner Telah Dihapus']);
    }
}
