<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DataStatistiqueClient;
use App\Http\Middleware\SessionAdmin;
use App\Http\Middleware\SessionGerant;
use App\Http\Middleware\SessionMid;
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
    session()->forget('user');
    //require_once  dirname(__DIR__). DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'Http'. DIRECTORY_SEPARATOR . 'Controllers'. DIRECTORY_SEPARATOR . 'DataStatistiqueClient.php';
    $data = new DataStatistiqueClient();
    $data->ajouter_vue_auth();
    return view('authentification.auth');
})->name('sign_in');


//Fonctionnalité du gérant by @Ouzy012
Route::get('gerant.index','GerantsController@index')->name('gerant.index')->middleware(SessionGerant::class);
//Route::get('gerant/vehicule/create','GerantsController@create');
Route::resource('categorie','CategorieController')->middleware(SessionGerant::class);
Route::resource('vehicule','VehiculesController')->middleware(SessionGerant::class);
Route::resource('trajet','TrajetsController')->middleware(SessionGerant::class);
Route::resource('arret','ArretsController')->middleware(SessionGerant::class);
Route::resource('voyage','VoyagesController')->middleware(SessionGerant::class);
Route::resource('user','UsersController');

Route::get('/supprimer_vehicule/{id}','VehiculesController@supprimer_vehicule')->middleware(SessionGerant::class);
Route::get('/supprimer_voyage/{id}','VoyagesController@supprimer_voyage')->middleware(SessionGerant::class);
Route::get('/supprimer_arret/{id}','ArretsController@supprimer_arret')->middleware(SessionGerant::class);
Route::get('/gerant/statistiques','GerantsController@statistique')->name('gerantStat')->middleware(SessionGerant::class); // by JOE
/* Route::get('/vehicule/{id}/supprimer_vehicule', function ($id) {
    //
})->name('supprimer_vehicule'); */

/* Route::get('/voyage/action', 'VoyagesController@action')->name('voyage.action');
 */
//Fin

/* debut Fonctionnalite @Moussa Sarr */

//Redirection des pages de l'administrateur
Route::get('/admin/sign_in_admin','AdminController@authentificate')->name('admin_auth');
Route::post('/admin/sign_in_admin','AdminController@auth_store')->name('admin_authStore');
Route::get('/admin','AdminController@index')->middleware(SessionAdmin::class);
Route::get('/admin/stat_client','AdminController@stat_client')->name('stat_client')->middleware(SessionAdmin::class);
Route::get('/admin/stat_gerant','AdminController@stat_gerant')->name('stat_gerant')->middleware(SessionAdmin::class);
Route::get('/admin/create-gerant','AdminController@create_gerant')->name('create_gerant')->middleware(SessionAdmin::class);
Route::post('/admin/store.gerant', 'AdminController@store_gerant')->name('store.gerant')->middleware(SessionAdmin::class);
Route::get('/admin/stat_billet','AdminController@stat_billet')->name('stat_billet')->middleware(SessionAdmin::class);
Route::get('/admin/stat_vendeur','AdminController@stat_vendeur')->name('stat_vendeur')->middleware(SessionAdmin::class);
Route::get('/admin/quit', 'AdminController@quit')->name('deconnection');

Route::get('/gerant/auth','GerantsController@Auth')->name('gerant.auth');
Route::post('/gerant/auth','GerantsController@authStore')->name('gerant.authStore');
Route::get('/sign_up', 'UsersController@create')->name('sign_up');
Route::post('/sign_up', 'UsersController@store')->name('sign_up');

Route::get('/NbVoyagesMensuels', 'DataStatistiqueController@getDonneesVoyagesMensuels');
Route::get('/NbBilletsVendus', 'DataStatistiqueController@getDonneesBilletVendu');
Route::get('/NbBilletsReportes', 'DataStatistiqueController@getDonneesBilletReporte');

Route::get('/test', 'DataStatistiqueController@getBilletVendeur');

/* Fin */

/* debut Fonctionnalite @RootNygma */

//Fonctionnalité achat billet 

Route::get('billet/billetForm','BilletsController@index')->name('billetForm');
Route::post('billet/billetForm','BilletsController@store');

//get client page !
//Route::get('client/home-client','ClientsController@index')->name('clientPage');


/* Fin */