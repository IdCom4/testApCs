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

Route::get('/menus-carte', function () {
  return view('menus-carte');
});

/*Route::get('/a-emporter', function () {
  return view('a-emporter');
});*/

Route::get('/reservation-contact', function () {
  return view('reservation-contact');
});

Route::post('/sendEmail/send', "App\Http\Controllers\SendEmailController@send");

Route::get('/mentions-legales', function () {
  return view('mentions-legales');
});