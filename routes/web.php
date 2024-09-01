<?php

use App\Http\Controllers\ArticlesController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArtikelController;

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


Route::controller(AuthController::class)->as('auth.')->group(function () {
    Route::get('/registration', 'create')->name('create');
    Route::post('/registration', 'store')->name('store');
    Route::get('/resetpassword', 'reset')->name('reset');
    Route::post('/resetpassword', 'resetStore')->name('resetStore');
    Route::get('/otp', 'otp')->name('otp');
    Route::post('/otp','otpVerify')->name('otpVerify');
    Route::get('/login', 'login')->name('login');
    Route::get('/newpassword', 'newPassword')->name('newPassword');
    Route::get('/confirmUserSuccess', 'confirmUserSuccess')->name('confirmUserSuccess');
});

Route::controller(UserController::class)->as('user.')->group(function () {
    Route::get('/upload', 'upload')->name('upload');
    Route::get('/found', 'found')->name('found');
    Route::get('/selected', 'selected')->name('selected');
    Route::get('/previous', 'previous')->name('previous');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/search', 'search')->name('search');
});

Route::controller(ArticlesController::class)->as('articles.')->group(function () {
    Route::get('/articles', 'index')->name('index');
    Route::get('/articles/create', 'create')->name('create');
    Route::post('/articles', 'store')->name('store');
    Route::get('/articles/show', 'show')->name('show');
    Route::get('/articles/{articles}/edit', 'edit')->name('edit');
    Route::put('/articles/{articles}', 'update')->name('update');
    Route::delete('/articles/{articles}', 'destroy')->name('destroy');
});

