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

  Route::get('/dashboard/makepost', 'MakePostController@create')->name('makePost.create');
  Route::post('/dashboard/makepost', 'MakePostController@store')->name('makePost.store');

});
