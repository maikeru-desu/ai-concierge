<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::controller(Controller::class)->group(function () {
    Route::get('/login', 'login');
    Route::get('/register', 'register');
    Route::get('/payment', 'payment');
    Route::get('/dashboard', 'dashboard');
    Route::get('/info', 'info');
    Route::get('/my-page', 'myPage');
    Route::get('/logs', 'logs');
    Route::get('/map', 'map');
    Route::get('/language', 'language');
    Route::get('/pricing', 'pricing');
});
