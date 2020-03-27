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

Route::get('/', 'UsersController@create')->name('sign_up');
Route::get('/sign_up', 'UsersController@create')->name('sign_up');
Route::post('/sign_up', 'UsersController@store')->name('sign_up');


