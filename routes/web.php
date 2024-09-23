<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\GoogleLoginController;
use App\Http\Controllers\FacebookLoginController;
use App\Http\Controllers\GoogleSearchConsoleController;

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
})->name('home');


Route::controller(AuthController::class)->as('auth.')->group(function () {
    Route::get('/registration', 'create')->name('create');
    Route::post('/registration', 'store')->name('store');
    Route::get('/resetpassword', 'reset')->name('reset');
    Route::post('/resetpassword', 'resetStore')->name('resetStore');
    Route::get('/otp', 'otp')->name('otp');
    Route::post('/otp', 'otpVerify')->name('otpVerify');
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'loginAuth')->name('loginAuth');
    Route::get('/logout', 'logout')->name('logout');
    Route::get('/newpassword', 'newPassword')->name('newPassword');
    Route::post('/newpassword', 'newPasswordStore')->name('newPasswordStore');
    Route::get('/confirmUserSuccess', 'confirmUserSuccess')->name('confirmUserSuccess');
});

Route::controller(GoogleLoginController::class)->as('google.')->group(function () {
    Route::get('/google/redirect', 'redirectToGoogle')->name('redirectToGoogle');
    Route::get('/google/callback', 'handleGoogleCallback')->name('handleGoogleCallback');
});

Route::controller(FacebookLoginController::class)->as('facebook.')->group(function () {
    Route::get('/facebook/redirect', 'redirectToFacebook')->name('redirectToFacebook');
    Route::get('/facebook/callback', 'handleFacebookCallback')->name('handleFacebookCallback');
});

Route::get('/search-console/sites', [GoogleSearchConsoleController::class, 'listSites']);
Route::get('/search-console/analytics/{siteUrl}', [GoogleSearchConsoleController::class, 'getSearchAnalytics']);
Route::get('/analytics', [GoogleSearchConsoleController::class, 'showAnalyticsChart'])->name('analytics.show');
Route::get('/search-console/add-site', [GoogleSearchConsoleController::class, 'addSiteview'])->name('search-console.add-site');
Route::post('/search-console/add-site', [GoogleSearchConsoleController::class, 'addSite'])->name('search-console.add-site');

Route::controller(UserController::class)->as('user.')->group(function () {
    Route::get('/upload', 'upload')->name('upload');
    Route::post('/upload', 'uploadStore')->name('uploadStore');
    Route::get('/found', 'found')->name('found');
    Route::get('/selected', 'selected')->name('selected');
    Route::get('/previous', 'previous')->name('previous');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/search', 'search')->name('search');
    Route::get('/setting', 'setting')->name('setting');
    Route::get('/changeNamePassword', 'changeNamePassword')->name('changeNamePassword');
    Route::post('/changeNamePassword', 'changeNamePasswordStore')->name('changeNamePasswordStore');
    Route::delete('/deleteUser/{id}', 'deleteUser')->name('deleteUser');
    Route::get('/showRecipe/{id}', 'showRecipe')->name('showRecipe');
    Route::post('/previous', 'selectRecipebyIngredients')->name('previousStore');
});

Route::controller(ArticlesController::class)->as('articles.')->group(function () {
    Route::get('/articles', 'index')->name('index');
    Route::get('/articles/show/{id}', 'show')->name('show');
});
