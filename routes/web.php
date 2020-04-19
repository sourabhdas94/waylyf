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
    return view('index');
});

Route::view('/about','about');
Route::view('/myth','myth');
Route::view('/afterdonating','afterDonating');
Route::view('/beforedonation','beforeDonation');
Route::view('/whydonation','whyDonation');
Route::view('/search','search');
Route::view('/register','register');

Route::post('/registercontroller',"registers@submit");
Route::post('/searchcontroller',"searchs@submit");