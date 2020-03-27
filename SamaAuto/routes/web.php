<?php

use App\Mail\SignUpConfirmation;
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

Route::get('/sing-in', function () {
    return view('authentification.auth');
});

//Fonctionnalité du gérant by @Ouzy012
Route::resource('gerant','GerantsController');
Route::resource('categorie','CategorieController');
Route::resource('vehicule','VehiculesController');


Route::get('/sign_up', 'UsersController@create')->name('sign_up');
Route::post('/sign_up', 'UsersController@store')->name('sign_up');

