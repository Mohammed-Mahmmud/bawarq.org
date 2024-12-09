<?php

use App\Http\Controllers\Front\WebsiteController;
use App\Http\Controllers\ProfileController;
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

/**
 * front routes
 */
Route::prefix('/')->name('front.')->group(function () {
    //=======================WEBSITES PAGES=======================
    Route::view('/', 'front.pages.index')->name('index');
});
