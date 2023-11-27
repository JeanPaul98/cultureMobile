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

// Site route

Route::get('/', function () { return view('pages.index');});

Route::get('/a-propos', function () {return view('pages.about');});

Route::get('/contact', function () { return view('pages.contact');});

Route::get('/kiosque', function () {return view('pages.kiosque');});

Route::get('/faq', function () {return view('pages.faq');});

Route::get('/lien-utiles', function () {return view('pages.utiles');});

Route::get('/inscription', function () { return view('pages.inscription');});


// Route::get('/', function () {return view('dashboard.warning');});

// 

// Route::group(['namespace' => 'App\Http\Controllers'], function()
// {   
//     /**
//      * Home Routes
//      */

//     Route::get('/', 'HomeController@index')->name('home.index');

//     Route::group(['middleware' => ['guest']], function() {
//         /**
//          * Register Routes
//          */
//         Route::get('/register', 'RegisterController@show')->name('register.show');
//         Route::post('/register', 'RegisterController@register')->name('register.perform');

//         /**
//          * Login Routes
//          */
//         Route::get('/connexion', 'LoginController@show')->name('login.show');
//         Route::post('/login', 'LoginController@login')->name('login.perform');

            // Dasboard route
            Route::get('/connexion', function () {return view('dashboard.connexion');});
            Route::get('/connexion/admin', function () { return view('dashboard.dashboard');});

//     });

//     Route::group(['middleware' => ['auth']], function() {
//         /**
//          * Logout Routes
//          */
//         Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
//     });
// });