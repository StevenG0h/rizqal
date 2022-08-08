<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\LandingController::class, 'index'])->name('home');
Route::get('/product', [App\Http\Controllers\LandingController::class, 'product'])->name('product');
Route::get('/about', [App\Http\Controllers\LandingController::class, 'about'])->name('about');
