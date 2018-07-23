<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Kamus;

class KamusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataKamus = Kamus::all();

        $banyakDataKamus = DB::table('kamuses')->count();

        return view('dashboards.kamus', compact('dataKamus', 'banyakDataKamus'));
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
        $kamus = Kamus::create([
            'nias' => request('nias'),
            'indonesia' => request('indonesia')
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kamus  $kamus
     * @return \Illuminate\Http\Response
     */
    public function show(Kamus $kamus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kamus  $kamus
     * @return \Illuminate\Http\Response
     */
    public function edit(Kamus $kamus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kamus  $kamus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kamus $kamus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kamus  $kamus
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataKamus = Kamus::find($id);
        $dataKamus->delete();

        return redirect()->back();
    }
}
