<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Wisata;
use App\JenisWisata;
use App\Artikel;
use App\Budaya;
use App\Transportasi;

class PostBudayaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataBudayas = Budaya::all();

        return view('dashboards.postBudaya', compact('dataBudayas'));
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
    public function show(budaya $budaya)
    {
        return view('dashboards.showBudaya', compact('budaya'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataBudayas = Budaya::find($id);

        return view('dashboards.editBudaya', compact('dataBudayas'));
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
        $dataBudayas = Budaya::find($id);        
        $dataBudayas->update([
            'budaya_name' => request('budaya_name'),
            'budaya_gambar' => request('budaya_gambar'),
            'budaya_lokasi' => request('budaya_lokasi'),
        ]);
        
        $artikel_id = DB::table('budayas')->where('id', $id)->value('artikel_id');
        $artikel = Artikel::where('id', $artikel_id);
        $artikel->update([
            'artikel' => request('artikel'),
        ]);

        return redirect('dashboard/postbudaya')->with(['update' => 'Data Budaya Telah Diedit']);        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataBudayas = Budaya::find($id);
        $dataBudayas->delete();

        $artikel_id = DB::table('budayas')->where('id', $id)->value('artikel_id');
        $artikel = Artikel::where('id', $artikel_id);
        $artikel->delete();

        return back()->with(['delete' => 'Data Budaya Telah Dihapus']);
    }
}
