<?php

use App\Http\Controllers\AdminController;
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

Route::get('/sign_in', function () {
    return view('authentification.auth');
})->name('sign_in');

//Fonctionnalité du gérant by @Ouzy012
Route::resource('gerant','GerantsController');
Route::resource('categorie','CategorieController');
Route::resource('vehicule','VehiculesController');
Route::resource('trajet','TrajetsController');
Route::resource('arret','ArretsController');
Route::resource('voyage','VoyagesController');
Route::resource('user','UsersController');




Route::resource('arret','ArretsController');
Route::resource('voyage','VoyagesController');

/* debut Fonctionnalite @Moussa Sarr */

//Redirection des pages de l'administrateur
Route::get('/admin','AdminController@index');
Route::get('/admin/stat_client','AdminController@stat_client')->name('stat_client');
Route::get('/admin/stat_gerant','AdminController@stat_gerant')->name('stat_gerant');
Route::get('/admin/create.gerant','AdminController@create_gerant')->name('create_gerant');
Route::get('/admin/store.gerant', 'AdminController@store.gerant')->name('store.gerant');
Route::get('/admin/stat_billet','AdminController@stat_billet')->name('stat_billet');
Route::get('/admin/stat_vendeur','AdminController@stat_vendeur')->name('stat_vendeur');


Route::get('/gerant_Statistiques','GerantsController@statistique')->name('gerantStat');
Route::get('/sign_up', 'UsersController@create')->name('sign_up');
Route::post('/sign_up', 'UsersController@store')->name('sign_up');

/*** Fin* */
