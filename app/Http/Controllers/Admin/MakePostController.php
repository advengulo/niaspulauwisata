<?php

namespace App\Http\Controllers\Admin;

use App\Acaradanfestival;
use App\Artikel;
use App\Budaya;
use App\Jeniswisata;
use App\Kuliner;
use App\Transportasi;
use App\Wisata;
use Illuminate\Http\Request;
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
        // dd($jeniswisatas);
        // return $jeniswisatas;

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
        if (null !== request('wisata_name')) {
            $artikel = Artikel::create([
                'artikel' => request('artikel')
            ]);
            if ($request->hasFile('wisata_gambar')) {
                $wisata_gambar = $request->file('wisata_gambar');
                $filename = time() . '.' . $wisata_gambar->getClientOriginalExtension();
                Image::make($wisata_gambar)->resize(850, 637)->save(public_path('/img/img-wisata/' . $filename));
            }

            Wisata::create([
                'wisata_name' => request('wisata_name'),
                'artikel_id' => $artikel->id,
                'wisata_gambar' => '/img/img-wisata/'.$filename,
                'wisata_video' => request('wisata_video'),
                'wisata_rating' => request('wisata_rating'),
                'wisata_lokasi' => request('wisata_lokasi'),
                'wisata_jenis_id' => request('wisata_jenis_id'),
                'latitude' => request('latitude'),
                'longtitude' => request('longtitude')
            ]);
            return redirect('dashboard/postcontrol')->with(['success' => 'Data Wisata Berhasil Ditambahkan']);
        } elseif (null !== request('budaya_name')) {
            $artikel = Artikel::create([
                'artikel' => request('artikel')
            ]);
            if ($request->hasFile('budaya_gambar')) {
                $budaya_gambar = $request->file('budaya_gambar');
                $filename = time() . '.' . $budaya_gambar->getClientOriginalExtension();
                Image::make($budaya_gambar)->resize(850, 637)->save(public_path('/img/img-budaya/' . $filename));
            }

            Budaya::create([
                'budaya_name' => request('budaya_name'),
                'artikel_id' => $artikel->id,
                'budaya_gambar' => '/img/img-budaya/'.$filename,
                'budaya_lokasi' => request('budaya_lokasi')
            ]);
            return redirect('dashboard/postbudaya')->with(['success' => 'Data Budaya Berhasil Ditambahkan']);
        } elseif (null !== request('kuliner_name')) {
            $artikel = Artikel::create([
                'artikel' => request('artikel')
            ]);
            if ($request->hasFile('kuliner_gambar')) {
                $kuliner_gambar = $request->file('kuliner_gambar');
                $filename = time() . '.' . $kuliner_gambar->getClientOriginalExtension();
                Image::make($kuliner_gambar)->resize(850, 637)->save(public_path('/img/img-kuliner/' . $filename));
            }
            Kuliner::create([
                'kuliner_name' => request('kuliner_name'),
                'artikel_id' => $artikel->id,
                'kuliner_gambar' => '/img/img-kuliner/'.$filename,
                'kuliner_lokasi' => request('kuliner_lokasi')
            ]);
            return redirect('dashboard/postkuliner')->with(['success' => 'Data Kuliner Berhasil Ditambahkan']);

        } elseif (null !==request('acaradanfestival_name')) {
            $artikel = Artikel::create([
                'artikel' => request('artikel')
            ]);
            if ($request->hasFile('acaradanfestival_gambar')) {
                $acaradanfestival_gambar = $request->file('acaradanfestival_gambar');
                $filename = time() . '.' . $acaradanfestival_gambar->getClientOriginalExtension();
                Image::make($acaradanfestival_gambar)->resize(850, 637)->save(public_path('/img/img-acaradanfestival/' . $filename));
            }
            Acaradanfestival::create([
                'acaradanfestival_name' => request('acaradanfestival_name'),
                'artikel_id' => $artikel->id,
                'acaradanfestival_tanggal' => request('acaradanfestival_tanggal'),
                "acaradanfestival_lokasi" => request('acaradanfestival_lokasi'),
                'acaradanfestival_gambar' => '/img/img-acaradanfestival/'.$filename
            ]);
            return redirect('dashboard/postacaradanfestival')->with(['success' => 'Data Acara dan Festival Berhasil Ditambahkan']);
        } else {
            $artikel = Artikel::create([
                'artikel' => request('artikel')
            ]);
            if ($request->hasFile('transportasi_gambar')) {
                $transportasi_gambar = $request->file('transportasi_gambar');
                $filename = time() . '.' . $transportasi_gambar->getClientOriginalExtension();
                Image::make($transportasi_gambar)->resize(850, 637)->save(public_path('/img/img-transportasi/' . $filename));
            }

            Transportasi::create([
                'transportasi_name' => request('transportasi_name'),
                'artikel_id' => $artikel->id,
                'transportasi_gambar' => '/img/img-transportasi/'.$filename,
                'transportasi_jenis' => request('transportasi_jenis')
            ]);
            return redirect('dashboard/posttransportasi')->with(['success' => 'Data Transportasi Berhasil Ditambahkan']);
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
