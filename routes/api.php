<?php

use Illuminate\Http\Request;
use App\Budaya;
use App\User;
use App\Kontak;
use App\Kamus;
use App\JenisWisata;
use App\Wisata;
use App\Ulasan;
use App\Profile;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login',function(Request $request){

    $check = Auth::attempt(['email' => $request->email, 'password' => $request->password]);
    $response = new stdClass;
    if ($check) {
        $data = User::where('email','=',$request->email)->first();
        $response->data = $data;
        $response->error = 0;     
        $response->message = "Berhasil Login";
    }else{
        $response->message = "Username atau Password Salah";
        $response->error = 1;
    }
    return json_encode($response);

});
Route::post('register',function(Request $request){
    $validator = Validator::make($request->all(), [ 
        'name' => 'required', 
        'email' => 'required|email', 
        'password' => 'required', 
        'c_password' => 'required|same:password', 
    ]);
    $response = new stdClass;
    if ($validator->fails()) { 
        $response->message = $validator->errors();
        $response->error = 1;
    }else{
        $input = $request->all(); 
        $input['password'] = bcrypt($input['password']); 
        $user = User::create($input); 
        $response->data = $user;
        $response->message ="Berhasil daftar silahkan login";
        $response->error = 0;    
    }

    return json_encode($response);
});
Route::get('semuaUlasan/{wisataid}',function($wisataid){
    $ulasan = Ulasan::where('wisata_id',$wisataid)->get();
    foreach($ulasan as $u){
        $data = DB::table('ratings')->
            where([
                ['rateable_id', '=', $u->wisata_id],
                ['user_id', '=', $u->user_id]
            ])->first();
        $dataUser = DB::table('users')->where('id',$u->user_id)->first();
        $u->nama = $dataUser->name;
        $u->avatar = $dataUser->avatar;
        $u->rating = $data->rating;
    }
    $response = new stdClass;
    $response->data= $ulasan;
    return json_encode($response);
});
Route::post('kirimUlasan',function(Request $request){
    $wisata = Wisata::find($request->id);
    $rating  = new \willvincent\Rateable\Rating;
    $rating->rating = $request->rate;
    $rating->user_id = $request->user_id;
    $userId = $request->user_id;
    $cek = $wisata->ratings()->where('user_id',$userId)->count();
    $response = new stdClass;
    if(!$cek){
        $wisata->ratings()->save($rating);
        Ulasan::create([
            'wisata_id'=>$wisata->id,
            'user_id'=>$userId,
            'isi_ulasan'=>$request->isi_ulasan,
            'temp_rat'=>$request->rate
        ]);
        $response->error = 0;
        $response->message = "Ulasan berhasil ditambahkan";
    }else{
        $response->message = "Terjadi Kesalahan coba lagi";
        $response->error = 1;
    }
    return json_encode($response);
});
Route::post('editProfil',function(Request $request){
    $cek = User::where('id',$request->user_id)->count();
    $response = new stdClass;
    if($cek){
        $user = User::find($request->user_id);
        $user->name = $request->nama;
        $user->save();
        $profil = DB::table('profiles')
        ->where('user_id', $request->user_id)  // find your user by their email
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update(array('pro_alamat' => $request->alamat,'pro_telp'=>$request->telp));  // update the record in the DB.
        $response->error = 0;
        $response->message = "Berhasil Diubah.Silahkan login kembali";
    }else{
        $response->error = 1;
        $response->message = "Terjadi Kesalahan coba lagi";
    }
    return json_encode($response);
});
Route::post('kontak',function(Request $request){
    $check = Kontak::create([
        'name' => request('name'),
        'email' => request('email'),
        'topik' => request('topik'),
        'pesan' => request('pesan')
    ]);
    $response = new stdClass;
    if ($check) {
        $response->error = 0;
        $response->message = "Pesan berhasil dikirim";
    }else{
        $response->message = "Terjadi Kesalahan coba lagi";
        $response->error = 1;
    }
    return json_encode($response);
});
Route::get('ulasan/{wisataid}',function($wisataid){
    $dataUlasan = Ulasan::where('wisata_id',$wisataid)->get();
    $response = new stdClass;
    $response->error = 0;
    $response->data = $dataUlasan;
    return json_encode($response);
});
Route::post('kamus',function(Request $request){
    $data= $request->filter;
    $dataKamus = DB::table('kamuses')
            ->where('indonesia','like','%'.$data.'%')
            ->get();
    $response = new stdClass;
    $response->error = 0;
    $response->data = $dataKamus;
    return json_encode($response);
});
Route::get('budaya', function() {
	$budaya = DB::table('budayas')
                ->join('artikels', 'budayas.artikel_id', '=', 'artikels.id')
                ->select('budayas.*','artikels.artikel')
                ->get();
    $response = new stdClass;
    $response->error = 0;
    $response->data = $budaya;
    return json_encode($response);
});
Route::get('kuliner',function(){
	$kuliner = DB::table('kuliners')
                ->join('artikels', 'kuliners.artikel_id', '=', 'artikels.id')
                ->select('kuliners.*','artikels.artikel')
                ->get();
    $response = new stdClass;
    $response->error = 0;
    $response->data = $kuliner;
    return json_encode($response);
});
Route::get('jenis',function(){
    $dataJenis = JenisWisata::all();
    $response = new stdClass;
    $response->error = 0;
    $response->data = $dataJenis;
    return json_encode($response);
});
Route::get('wisataJenis/{jenis}',function($jenis){
    $wisata =DB::table('wisatas')
                ->join('artikels', 'wisatas.artikel_id', '=', 'artikels.id')
                ->where('wisatas.wisata_jenis_id','=',$jenis)
                ->select('wisatas.*','artikels.artikel')
                ->get();
    $response = new stdClass;
    $response->error = 0;
    $response->data = $wisata;
    return json_encode($response);
});
Route::get('transport',function(){
	$transport = DB::table('transportasis')
                ->join('artikels', 'transportasis.artikel_id', '=', 'artikels.id')
                ->select('transportasis.*','artikels.artikel')
                ->get();
    $response = new stdClass;
    $response->error = 0;
    $response->data = $transport;
    return json_encode($response);
});
Route::post('resultwisata', 'RecomendationController@indexAPI');
Route::post('resultwisata2', 'RecomendationController@indexAPI2');
Route::get('wisata',function(){
	$wisata = DB::table('wisatas')
                ->join('artikels', 'wisatas.artikel_id', '=', 'artikels.id')
                ->select('wisatas.*','artikels.artikel')
                ->get();
     $response = new stdClass;
    $response->error = 0;
    $response->data = $wisata;
    return json_encode($response);
});
Route::get('terbaru',function(){
    $wisata = DB::table('wisatas')
                ->join('artikels', 'wisatas.artikel_id', '=', 'artikels.id')
                ->whereRaw('Date(wisatas.created_at) = CURDATE()')
                ->select('wisatas.*','artikels.artikel')
                ->get();
    $response = new stdClass;
    $response->error = 0;
    $response->data = $wisata;
    return json_encode($response);       
});