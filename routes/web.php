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
    return redirect('home');
});

Route::post('/search', 'SearchController@search')->name('search');

Route::get('/calendrier', function () {
    return view('calendrier');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/account', function () {
    return view('account');
});

Route::get('/connexion', function () {
    return view('connexion');
});

Route::get('/editAccount', 'UserController@show');
/*
Route::get('/creercompte', function () {
    return view('creercompte');
});

Route::get('/creerunevent', function() {
    return view('creerunevent');
});
*/

Route::post('/contact', 'MessagesController@submit');

//Route::post('/creercompte', 'CreateUserController@createAccount');


Route::get('/home', 'HomeController@index')->name('home');

Route::resource('event', 'EventController');

Route::resource('ville', 'VilleController');

Route::post('/editAccount', 'UserController@update');

//Route::get('logout',['as'=>'users.logout','uses' => 'Auth\LoginController@logout']);

//Route::post('/login', 'Auth\LoginController@login');

//Route::get('/moncompte', 'AccountController@getUser');

Auth::routes();
