<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Wisata;
use App\Ulasan;
use App\User;
use App\Gallery;

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

      return redirect()->back()->with(['successUlasan'=>'Ulasan Berhasil ditambahkan']);
    }

    public function gallery (Request $request, Wisata $wisata)
    {
      $this->validate($request,[
        'select_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
      ]);

      $image = $request->file('select_file');
      $new_name = time() . '.' . $image->getClientOriginalExtension();
      // $image->move (public_path("img/img-wisata/gallery"), $new_name);
      Image::make($image)->resize(2250, 1500)->save( public_path('/img/img-wisata/gallery/' . $new_name) );

      Gallery::create([
          'wisata_id' => $wisata->id,
          'user_id' => auth()->id(),
          'gallery_gambar' => '/img/img-wisata/gallery/'.$new_name
      ]);
      return redirect()->back()->with('success', 'Image Uploaded Successfully');
    }
}
