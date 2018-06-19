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

Route::get('/creercompte', function () {
    return view('creercompte');
});

Route::get('/creerunevent', function() {
    return view('creerunevent');
});

Route::post('/contact', 'MessagesController@submit');
