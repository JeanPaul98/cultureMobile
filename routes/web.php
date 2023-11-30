<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
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
Route::get('/a-propos', [HomeController::class, 'showAbout'])->name('a-propos');
Route::get('/contact', [HomeController::class, 'showContact'])->name('contact');
Route::get('/kiosque', [HomeController::class, 'showKiosque'])->name('kiosque');
Route::get('/faq', [HomeController::class, 'showFaq'])->name('faq');
Route::get('/lien-utiles', [HomeController::class, 'showLink'])->name('lien');
Route::get('/inscription', [HomeController::class, 'showIscription'])->name('inscription');



//Authentification
Route::group(['middleware' => ['auth']], function() {
    Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
});

// Dasboard route
    Route::get('/admin', [DashboardController::class, 'showDashboard'])->name('dashboard');
    Route::get('/agender', [DashboardController::class, 'showAgender'])->name('agender');
    
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
    
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);



