<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wisata;
use App\Ulasan;

class WisataUlasanController extends Controller
{
    public function store(Request $request, Wisata $wisata)
    {
      //validasi untuk mengecek apakan form kosong / tidak
      $this->validate(request(), [

        'isi_ulasan' => 'required'

      ]);


      request()->validate(['rate' => 'required']);

      $wisata = Wisata::find($request->id);

      $rating = new \willvincent\Rateable\Rating;

      $rating->rating = $request->rate;

      $rating->user_id = auth()->user()->id;

      $userId = auth()->user()->id;

      $cek = $wisata->ratings()->where('user_id', $userId)->count();
      if(!$cek){

          $wisata->ratings()->save($rating);

          //untuk menginput data ke dalam database
          Ulasan::create([

            'wisata_id' => $wisata->id,

            'user_id' => auth()->id(),

            'isi_ulasan' => $request->isi_ulasan

          ]);

      }

      return redirect()->back();
    }
}
