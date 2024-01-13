<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontpageController;
use App\Http\Controllers\UserController;

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



// Public Routes
Route::get('/', [FrontpageController::class, 'home'])->name('home');
Route::get('/ad_search', [FrontpageController::class, 'ad_search'])->name('ad_search');
Route::get('/pricing', [FrontpageController::class, 'pricing'])->name('pricing');
Route::get('/privacy-and-policy', [FrontpageController::class, 'privacy'])->name('privacy');
Route::get('/terms-and-conditions', [FrontpageController::class, 'terms'])->name('terms-and-conditions');
Route::get('/contact', [FrontpageController::class, 'contact'])->name('contact');


// Google Authentication Routes
Route::get('auth/google', [LoginController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [LoginController::class, 'handleGoogleCallback']);




Auth::routes();
//Language Translation
Route::get('index/{locale}', [AdminController::class, 'lang'])->name('locale');;


// User Routes
Route::group(['middleware' => ['auth']], function () {
    Route::get('/user/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
    Route::get('/user/pricing', [UserController::class, 'pricing'])->name('user.pricing');
    Route::get('/user/tiktoks', [UserController::class, 'tiktokAds'])->name('user.tiktoks');


    // Other user routes...
});



// Admin Routes
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Other admin routes...

    //Update User Details
    Route::post('/update-profile/{id}', [AdminController::class, 'updateProfile'])->name('updateProfile');
    Route::post('/update-password/{id}', [AdminController::class, 'updatePassword'])->name('updatePassword');



});
