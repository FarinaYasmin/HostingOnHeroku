<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pemohonController;
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
/*
Route::get('/', function () {
    return view('');
});
*/

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function(){
    return view('Authentication.login2');
});

Route::get('/forgot2', function(){
    return view('Authentication.forgot2');
});

Route::get('/register2', function(){
    return view('Authentication.register2');
});

//backend

Route::get('/dashboard', function(){
    return view('backend.dashboard');
});

Route::get('/pmii', function(){
    return view('backend.bantuan-pmii');
});

Route::get('/pmtk', function(){
    return view('backend.bantuan-pmtk');
});

Route::get('/pmku', function(){
    return view('backend.bantuan-pmku');
});

//CRUD

//PMII-BKO
Route::get('/bko', 'App\Http\Controllers\pmiibkoController@index')->name('bantuan.pmii.bko.bko');
Route::get('/pmii-bko', 'App\Http\Controllers\pmiibkoController@create')->name('bantuan.pmii.bko.pmii-bko');
Route::post('/bko-store', 'App\Http\Controllers\pmiibkoController@store')->name('bantuan.pmii.bko.store');
Route::get('/edit/pmii-bko/{id}', 'App\Http\Controllers\pmiibkoController@edit');
Route::post('/update/pmii-bko/{id}', 'App\Http\Controllers\pmiibkoController@update');
Route::get('/delete/pmii-bko/{id}', 'App\Http\Controllers\pmiibkoController@delete');

//PMII-MASJIDSURAU
Route::get('/masjidsurau', 'App\Http\Controllers\masjidsurauController@index')->name('bantuan.pmii.masjidsurau.masjidsurau');
Route::get('/pmii-masjidsurau', 'App\Http\Controllers\masjidsurauController@create')->name('bantuan.pmii.masjidsurau.pmii-masjidsurau');
Route::post('/masjidsurau-store', 'App\Http\Controllers\masjidsurauController@store')->name('bantuan.pmii.masjidsurau.store');
Route::get('/edit/pmii-masjidsurau/{id}', 'App\Http\Controllers\masjidsurauController@edit');
Route::post('/update/pmii-masjidsurau/{id}', 'App\Http\Controllers\masjidsurauController@update');
Route::get('/delete/pmii-masjidsurau/{id}', 'App\Http\Controllers\masjidsurauController@delete');

//PMII-XTVTAGAMA
Route::get('/xtvtagama', 'App\Http\Controllers\xtvtagamaController@index')->name('bantuan.pmii.xtvtagama.xtvtagama');
Route::get('/pmii-xtvtagama', 'App\Http\Controllers\xtvtagamaController@create')->name('bantuan.pmii.xtvtagama.pmii-xtvtagama');
Route::post('/xtvtagama-store', 'App\Http\Controllers\xtvtagamaController@store')->name('bantuan.pmii.xtvtagama.store');
Route::get('/edit/pmii-xtvtagama/{id}', 'App\Http\Controllers\xtvtagamaController@edit');
Route::post('/update/pmii-xtvtagama/{id}', 'App\Http\Controllers\xtvtagamaController@update');
Route::get('/delete/pmii-xtvtagama/{id}', 'App\Http\Controllers\xtvtagamaController@delete');

//PMKU-BENCANAALAM
Route::get('/bencanaalam', 'App\Http\Controllers\bencanaalamController@index')->name('bantuan.pmku.bencanaalam.bencanaalam');
Route::get('/pmku-bencanaalam', 'App\Http\Controllers\bencanaalamController@create')->name('bantuan.pmku.bencanaalam.pmku-bencanaalam');
Route::post('/bencanaalam-store', 'App\Http\Controllers\bencanaalamController@store')->name('bantuan.pmku.bencanaalam.store');
Route::get('/edit/pmku-bencanaalam/{id}', 'App\Http\Controllers\bencanaalamController@edit');
Route::post('/update/pmku-bencanaalam/{id}', 'App\Http\Controllers\bencanaalamController@update');
Route::get('/delete/pmku-bencanaalam/{id}', 'App\Http\Controllers\bencanaalamController@delete');

//PMKU-KARP
Route::get('/karp', 'App\Http\Controllers\karpController@index')->name('bantuan.pmku.karp.karp');
Route::get('/pmku-karp', 'App\Http\Controllers\karpController@create')->name('bantuan.pmku.karp.pmku-karp');
Route::post('/karp-store', 'App\Http\Controllers\karpController@store')->name('bantuan.pmku.karp.store');
Route::get('/edit/pmku-karp/{id}', 'App\Http\Controllers\karpController@edit');
Route::post('/update/pmku-karp/{id}', 'App\Http\Controllers\karpController@update');
Route::get('/delete/pmku-karp/{id}', 'App\Http\Controllers\karpController@delete');

//PMKU-PER
Route::get('/per', 'App\Http\Controllers\perController@index')->name('bantuan.pmku.per.per');
Route::get('/pmku-per', 'App\Http\Controllers\perController@create')->name('bantuan.pmku.per.pmku-per');
Route::post('/per-store', 'App\Http\Controllers\perController@store')->name('bantuan.pmku.per.store');
Route::get('/edit/pmku-per/{id}', 'App\Http\Controllers\perController@edit');
Route::post('/update/pmku-per/{id}', 'App\Http\Controllers\perController@update');
Route::get('/delete/pmku-per/{id}', 'App\Http\Controllers\perController@delete');

//PMTK-IPT
Route::get('/ipt', 'App\Http\Controllers\iptController@index')->name('bantuan.pmtk.ipt.ipt');
Route::get('/pmtk-ipt', 'App\Http\Controllers\iptController@create')->name('bantuan.pmtk.ipt.pmtk-ipt');
Route::post('/ipt-store', 'App\Http\Controllers\iptController@store')->name('bantuan.pmtk.ipt.store');
Route::get('/edit/pmtk-ipt/{id}', 'App\Http\Controllers\iptController@edit');
Route::post('/update/pmtk-ipt/{id}', 'App\Http\Controllers\iptController@update');
Route::get('/delete/pmtk-ipt/{id}', 'App\Http\Controllers\iptController@delete');

//PMTK-PER
Route::get('/sijil', 'App\Http\Controllers\sijilController@index')->name('bantuan.pmtk.sijil.sijil');
Route::get('/pmtk-sijil', 'App\Http\Controllers\sijilController@create')->name('bantuan.pmtk.sijil.pmtk-sijil');
Route::post('/sijil-store', 'App\Http\Controllers\sijilController@store')->name('bantuan.pmtk.sijil.store');
Route::get('/edit/pmtk-sijil/{id}', 'App\Http\Controllers\sijilController@edit');
Route::post('/update/pmtk-sijil/{id}', 'App\Http\Controllers\sijilController@update');
Route::get('/delete/pmtk-sijil/{id}', 'App\Http\Controllers\sijilController@delete');

//PMTK-SRM
Route::get('/srm', 'App\Http\Controllers\srmController@index')->name('bantuan.pmtk.srm.srm');
Route::get('/pmtk-srm', 'App\Http\Controllers\srmController@create')->name('bantuan.pmtk.srm.pmtk-srm');
Route::post('/srm-store', 'App\Http\Controllers\srmController@store')->name('bantuan.pmtk.srm.store');
Route::get('/edit/pmtk-srm/{id}', 'App\Http\Controllers\srmController@edit');
Route::post('/update/pmtk-srm/{id}', 'App\Http\Controllers\srmController@update');
Route::get('/delete/pmtk-srm/{id}', 'App\Http\Controllers\srmController@delete');


//fetch data on 1-1 relationship

Route::get('/pemohonbencana', [pemohonController::class, 'fetchDataBencana']);
Route::get('/pemohonkarp', [pemohonController::class, 'fetchDataKarp']);
Route::get('/pemohonper', [pemohonController::class, 'fetchDataPer']);
