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
    return view('home');
});

Route::get('/calendrier', function () {
    return view('calendrier');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/moncompte', function () {
    return view('moncompte');
});

Route::get('/connexion', function () {
    return view('connexion');
});

Route::get('/createAccou', function () {
    return view('creercompte');
});

Route::get('/creerunevent', function() {
    return view('creerunevent');
});

Route::post('/contact', 'MessagesController@submit');

Route::post('/creercompte', 'CreateUserController@createAccount');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('event', 'EventController');

Route::get('logout',['as'=>'users.logout','uses' => 'Auth\LoginController@logout']);
