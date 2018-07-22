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
Route::get('/wisata/{wisata}', 'WelcomeController@Show')->name('wisataDetail');
Route::get('/acaradanfestival/{acaradanfestival}', 'AcaraDanFestivalController@Tampil')->name('acaradanfestivalDetail');

Route::resource( 'wisata', 'WisataController');
Route::get('/wisata/{wisata}', 'WisataController@Show')->name('wisataDetail');
Route::post('/wisata/{wisata}/ulasan', 'WisataUlasanController@store')->name('wisata.ulasan.store')->middleware(['auth']);

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
  Route::get('/dashboard', function(){
    return view('dashboards.dashboard');
  })->name('dashboard');

  Route::resource( '/dashboard/userControl', 'UserControlController');
  Route::delete( '/dashboard/userControl/{id}/destroy', "UserControlController@destroy")->name('user.destroy');

  Route::get('/dashboard/makepost', 'MakePostController@create')->name('makePost.create');
  Route::post('/dashboard/makepost', 'MakePostController@store')->name('makePost.store');

  Route::get('/dashboard/postcontrol', 'PostController@index')->name('post.index');
  Route::get('/dashboard/postcontrol/{wisata}', 'PostController@show')->name('post.show');
  Route::get('/dashboard/postcontrol/{id}/edit', 'PostController@edit')->name('post.edit');
  Route::patch('/dashboard/postcontrol/{id}/edit', 'PostController@update')->name('post.update');
  Route::delete('/dashboard/postcontrol/{id}/destroy', 'PostController@destroy')->name('post.destroy');

  Route::get('/dashboard/postbudaya', 'PostBudayaController@index')->name('postbudaya.index');
  Route::get('/dashboard/postbudaya/{budaya}', 'PostBudayaController@show')->name('postbudaya.show');
  Route::get('/dashboard/postbudaya/{id}/edit', 'PostBudayaController@edit')->name('postbudaya.edit');
  Route::delete('/dashboard/postbudaya/{id}/destroy', 'PostBudayaController@destroy')->name('postbudaya.destroy');

  Route::get('/dashboard/posttransportasi', 'PostTransportasiController@index')->name('posttransportasi.index');
  Route::get('/dashboard/posttransportasi/{transportasi}', 'PostTransportasiController@show')->name('posttransportasi.show');
  Route::get('/dashboard/posttransportasi/{id}/edit', 'PostTransportasiController@edit')->name('posttransportasi.edit');
  Route::delete('/dashboard/posttransportasi/{id}/destroy', 'PostTransportasiController@destroy')->name('posttransportasi.destroy');

  Route::get('/dashboard/kamus', 'KamusController@index')->name('kamus.index');
  Route::post('/dashboard/kamus', 'KamusController@store')->name('kamus.store');
  Route::delete('/dashboard/kamus/{id}/destroy', 'KamusController@destroy')->name('kamus.destroy');

  Route::get('/dashboard/adminsetting', function () {
      return view('dashboards.adminsetting');
  });

  Route::get('/dashboard/inbox', function () {
      return view('dashboards.inbox');
  });

  
});
