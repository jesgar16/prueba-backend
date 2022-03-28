<?php

use App\Http\Controllers\AwardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LogoutController;

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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    /**
     * Dashboard Route
     */
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    /**
     * Awards Routes
     */
    //Route::resource('awards', AwardController::class);
    Route::post('award', [AwardController::class, 'store'])->name('award');
    Route::get('/awards', [AwardController::class, 'index'])->name('awards');

    Route::group(['middleware' => ['guest']], function()
    {
        /**
         * Register Routes
         */
        Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
        Route::post('/register', [RegisterController::class, 'register'])->name('register');

        /**
         * Login Routes
         */
        Route::get('/login', [LoginController::class, 'show'])->name('login.show');
        Route::post('/login', [LoginController::class, 'login'])->name('login');
    });

    Route::group(['middleware' => ['auth']], function()
    {
        /**
         * Logout Routes
         */
        Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
    });

});
