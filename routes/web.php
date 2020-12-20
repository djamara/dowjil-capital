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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
/*Route::get('/', function () {
    return view('pages/accueil');
})->where('lang', implode('|', array_flip(config('app.languages'))));*/

//Frontend Controller
Route::get('/','Frontend\AccueilController@index')->name('/');
Route::get('/A-Propos','Frontend\AproposController@index')->name('a-propos');
//Route::get('/','Frontend\LoadingController@index')->name('/');
Route::get('/Services','Frontend\ServiceController@index')->name('services');
Route::get('/Services/{id}','Frontend\ServiceController@serviceDetail')->name('servicesDetail');
Route::get('/Contacts','Frontend\ContactController@index')->name('contacts');
