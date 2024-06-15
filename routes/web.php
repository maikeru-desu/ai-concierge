<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserCardController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/set/{locale?}', function ($locale) {
    // dd(session()->get('register_values'));
    // // dd();
    app()->setLocale($locale);
    session()->put('locale', $locale);
});

Route::controller(Controller::class)->group(function () {
    // Route::get('/login', 'login');
    // Route::get('/register', 'register');
    // Route::get('/dashboard', 'dashboard');
    // Route::get('/info', 'info');
    // Route::get('/my-page', 'myPage');
    // Route::get('/logs', 'logs');
    // Route::get('/map', 'map');
    Route::get('/language', 'language');
    // Route::get('/pricing', 'pricing')->name('pricing');
});


Route::controller(PlanController::class)
    ->prefix('plan')
    ->name('plan.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/{plan}', 'choosePlan')->name('choose-plan');
    });

Route::controller(UserCardController::class)
    ->prefix('card')
    ->name('card.')
    ->group(function () {
        Route::get('/payment', 'payment')->name('payment');
    });

require __DIR__.'/auth.php';
