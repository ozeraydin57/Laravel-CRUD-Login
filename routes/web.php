<?php

use Illuminate\Support\Facades\Route;

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

Route::post('formukaydet',"FormController@kaydet")->middleware("auth");
Route::get('formugoster',"FormController@goster")->middleware("auth");
Route::get('yazilistele','FormController@listele')->middleware("auth");

Route::get('formguncelle/{id}',"FormController@guncelle")->middleware("auth");
Route::post('yaziguncelle/{id}',"FormController@yaziguncelle")->middleware("auth");

Route::get('yazisil/{id}',"FormController@yazisil")->middleware("auth");



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

