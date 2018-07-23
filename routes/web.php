<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource( '/', 'WelcomeController');
Route::get('recomended', [
  'uses' => 'RecomendedController@index',
]);

Route::resource('/recomendation', 'RecomendationController');

Route::get('/wisata/{wisata}', 'WelcomeController@Show')->name('wisataDetail');
Route::get('/acaradanfestival/{acaradanfestival}', 'AcaraDanFestivalController@Tampil')->name('acaradanfestivalDetail');

Route::resource( 'wisata', 'WisataController');
Route::get('/wisata/{wisata}', 'WisataController@Show')->name('wisataDetail');
Route::post('/wisata/{wisata}/ulasan', 'WisataUlasanController@store')->name('wisata.ulasan.store')->middleware(['auth']);
Route::post('/wisata/{wisata}/upload', 'WisataUlasanController@gallery')->name('ulasan.tambahGallery')->middleware(['auth']);

Auth::routes();

Route::get('/kamus', function () {
    return view('kamus');
});

Route::resource( 'budaya', 'BudayaController');
Route::get('/budaya/{budaya}', 'BudayaController@Show')->name('budayaDetail');

Route::resource( 'kuliner', 'KulinerController');
Route::get('/kuliner/{kuliner}', 'KulinerController@Show')->name('kulinerDetail');

Route::resource( 'transportasi', 'TransportasiController');

Route::resource( 'acaradanfestival', 'AcaraDanFestivalController');
Route::get('/acaradanfestival/{acaradanfestival}', 'AcaraDanFestivalController@Show')->name('acaradanfestivalDetail');

Route::resource( 'kontak', 'KontakController');

Route::resource( 'profile', 'ProfileController');
Route::post( 'profile', 'ProfileController@update')->name('profile.update');
Route::get( 'profileEdit', 'ProfileController@edit')->name('profile.edit');


Route::post('/login/custom', [
  'uses' => 'LoginController@login',
  'as' => 'login.custom'
]);

Route::get('/home', function(){
    return view('home');
  })->name('home')->middleware(['auth']);

//group untuk membuat dashboard hanya bisa di akses oleh admin.
Route::middleware(['role', 'auth'])->group(function () {
  Route::view('/dashboard', 'dashboards.dashboard')
    ->name('dashboard');

  Route::resource( '/dashboard/userControl', 'Admin\UserControlController');
  Route::delete( '/dashboard/userControl/{id}/destroy', "UserControlController@destroy")->name('user.destroy');

  Route::get('/dashboard/makepost', 'Admin\MakePostController@create')->name('makePost.create');
  Route::post('/dashboard/makepost', 'Admin\MakePostController@store')->name('makePost.store');

  Route::get('/dashboard/postcontrol', 'Admin\PostController@index')->name('post.index');
  Route::get('/dashboard/postcontrol/{wisata}', 'Admin\PostController@show')->name('post.show');
  Route::get('/dashboard/postcontrol/{id}/edit', 'Admin\PostController@edit')->name('post.edit');
  Route::patch('/dashboard/postcontrol/{id}/edit', 'Admin\PostController@update')->name('post.update');
  Route::delete('/dashboard/postcontrol/{id}/destroy', 'Admin\PostController@destroy')->name('post.destroy');

  Route::get('/dashboard/postbudaya', 'Admin\PostBudayaController@index')->name('postbudaya.index');
  Route::get('/dashboard/postbudaya/{budaya}', 'Admin\PostBudayaController@show')->name('postbudaya.show');
  Route::get('/dashboard/postbudaya/{id}/edit', 'Admin\PostBudayaController@edit')->name('postbudaya.edit');
  Route::patch('/dashboard/postbudaya/{id}/update', 'Admin\PostBudayaController@update')->name('postbudaya.update');
  Route::delete('/dashboard/postbudaya/{id}/destroy', 'Admin\PostBudayaController@destroy')->name('postbudaya.destroy');

  Route::get('/dashboard/posttransportasi', 'Admin\PostTransportasiController@index')->name('posttransportasi.index');
  Route::get('/dashboard/posttransportasi/{transportasi}', 'Admin\PostTransportasiController@show')->name('posttransportasi.show');
  Route::get('/dashboard/posttransportasi/{id}/edit', 'Admin\PostTransportasiController@edit')->name('posttransportasi.edit');
  Route::patch('/dashboard/posttransportasi/{id}/update', 'Admin\PostTransportasiController@update')->name('posttransportasi.udpate');
  Route::delete('/dashboard/posttransportasi/{id}/destroy', 'Admin\PostTransportasiController@destroy')->name('posttransportasi.destroy');

  Route::get('/dashboard/postkuliner', 'Admin\PostKulinerController@index')->name('postkuliner.index');
  Route::get('/dashboard/postkuliner/{kuliner}', 'Admin\PostKulinerController@show')->name('postkuliner.show');
  Route::get('/dashboard/postkuliner/{id}/edit', 'Admin\PostKulinerController@edit')->name('postkuliner.edit');
  Route::patch('/dashboard/postkuliner/{id}/update', 'Admin\PostKulinerController@update')->name('postkuliner.update');
  Route::delete('/dashboard/postkuliner/{id}/destroy', 'Admin\PostKulinerController@destroy')->name('postkuliner.destroy');

  Route::get('/dashboard/postacaradanfestival', 'Admin\PostAcaradanfestivalController@index')->name('postacaradanfestival.index');
  Route::get('/dashboard/postacaradanvestival/{acaradanvestival}', 'Admin\PostAcaradanfestivalController@show')->name('postacaradanfestival.show');
  Route::get('/dashboard/postacaradanvestival/{id}/edit', 'Admin\PostAcaradanfestivalController@edit')->name('postacaradanfestival.edit');
  Route::patch('/dashboard/postacaradanvestival/{id}/update', 'Admin\PostAcaradanfestivalController@update')->name('postacaradanfestival.update');
  Route::delete('/dashboard/postacaradanvestival/{id}/destroy', 'Admin\PostAcaradanfestivalController@destroy')->name('postacaradanfestival.destroy');  

  Route::get('/dashboard/kamus', 'Admin\KamusController@index')->name('kamus.index');
  Route::post('/dashboard/kamus', 'Admin\KamusController@store')->name('kamus.store');
  Route::delete('/dashboard/kamus/{id}/destroy', 'Admin\KamusController@destroy')->name('kamus.destroy');

  Route::get('/dashboard/adminsetting', 'Admin\AdminSettingController@index')->name('admin.index');
  Route::get('/dashboard/inbox', 'Admin\InboxController@index')->name('inbox.index');
});
