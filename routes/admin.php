<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('admin')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::view('settings', 'dashboard.pages.settings.view')->name('settings');
        Route::view('tools', 'dashboard.pages.tools.index')->name('tools');
        Route::view('emails', 'dashboard.pages.emails.index')->name('emails');
    });
    Route::view('login', 'dashboard.auth.pages.login')
        ->middleware('guest:admin')->name('login');
});
