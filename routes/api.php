<?php

use Illuminate\Http\Request;
use App\Budaya;
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
Route::get('budaya', function() {
	$budaya = DB::table('budayas')
                ->join('artikels', 'budayas.artikel_id', '=', 'artikels.id')
                ->select('budayas.*','artikels.artikel')
                ->get();
    $response = new stdClass;
    $response->error = "false";
    $response->data = $budaya;
    return json_encode($response);
});
Route::get('kuliner',function(){
	$kuliner = DB::table('kuliners')
                ->join('artikels', 'kuliners.artikel_id', '=', 'artikels.id')
                ->select('kuliners.*','artikels.artikel')
                ->get();
    $response = new stdClass;
    $response->error = "false";
    $response->data = $kuliner;
    return json_encode($response);
});
Route::get('transport',function(){
	$transport = DB::table('transportasis')
                ->join('artikels', 'transportasis.artikel_id', '=', 'artikels.id')
                ->select('transportasis.*','artikels.artikel')
                ->get();
    $response = new stdClass;
    $response->error = "false";
    $response->data = $transport;
    return json_encode($response);
});
Route::get('wisata',function(){
	$wisata = DB::table('wisatas')
                ->join('artikels', 'wisatas.artikel_id', '=', 'artikels.id')
                ->select('wisatas.*','artikels.artikel')
                ->get();
     $response = new stdClass;
    $response->error = "false";
    $response->data = $wisata;
    return json_encode($response);
});
