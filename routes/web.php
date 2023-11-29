<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Controller;





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


//Pages
Route::get('/', function () { return view('pages.index');});

Route::get('/a-propos', function () {return view('pages.about');});

Route::get('/contact', function () { return view('pages.contact');});

Route::get('/kiosque', function () {return view('pages.kiosque');});

Route::get('/faq', function () {return view('pages.faq');});

Route::get('/lien-utiles', function () {return view('pages.utiles');});

Route::get('/inscription', function () { return view('pages.inscription');});


// Dasboard route
Route::get('/register', [HomeController::class, 'showAgender'])->name('dashboard');
Route::get('/connexion/agender', function () {return view('dashboard.agender');});

Route::get('/register', [HomeController::class, 'showDashboard'])->name('dashboard');
Route::get('/connexion/admin', function () { return view('dashboard.dashboard');});

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::get('/register', function () {return view('dashboard.register');});
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/connexion', function () {return view('dashboard.connexion');});
Route::post('/login', [LoginController::class, 'login']);

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
