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

Route::get('/', "App\Http\Controllers\Discs\MainController@index");
Route::get('/listeDisques', "App\Http\Controllers\Discs\backendController@indexBackend");
Route::get('/ajout', "App\Http\Controllers\Discs\ajoutDisqueController@indexajout");
Route::post('/ajout', "App\Http\Controllers\Discs\ajoutDisqueController@store");