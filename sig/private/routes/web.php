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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/','homeController@index')->name('login');
Route::post('/postlogin','homeController@postlogin');
Route::get('/ubahPass','homeController@ubahPass');
Route::get('/ubahPass','homeController@prosesUbah')->name('ubahPass');
Route::get('/forgot','homeController@forgot');
Route::get('/logout','homeController@logout');
Route::post('/register/store','homeController@store');

Route::get('/dashboard','dashboardController@dashboard')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/home', 'HomeController@index')->middleware('auth');

//admin
//Route::group(['middleware' => ['auth','checkrole:wisatawan']],function(){
//});
Route::get('/datawisata','adminController@index')->middleware('auth');
Route::get('/datawisata/edit/{id}','adminController@edit');
Route::get('/petawisata','adminController@petawisata')->middleware('auth');

Route::get('/addwisata','adminController@addwisata')->middleware('auth');

Route::post('/addwisata/store','adminController@store');
Route::get('/datapetugas','adminController@datapetugas')->middleware('auth');
Route::get('/dataangkutan','adminController@dataangkutan')->middleware('auth');
Route::get('/datanasabah','adminController@datanasabah')->middleware('auth');
Route::get('/datawisatawan','adminController@datawisatawan')->middleware('auth');
Route::get('/calender','adminController@calender')->middleware('auth');
Route::get('/about','adminController@about')->middleware('auth');
Route::get('/peta','adminController@peta')->middleware('auth');
