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

      //untuk menginput data ke dalam database
      Ulasan::create([
        'wisata_id' => $wisata->id,
        'user_id' => auth()->id(),
        'isi_ulasan' => $request->isi_ulasan
      ]);
      return redirect()->back();
    }
}
