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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/index', [App\Http\Controllers\DashboardController::class, 'index'])->name('index');
Route::get('/hot_tour', [App\Http\Controllers\DashboardController::class, 'hot_tour'])->name('hot_tour');
Route::get('/special_offer', [App\Http\Controllers\DashboardController::class, 'special_offer'])->name('special_offer');
Route::get('/blog', [App\Http\Controllers\DashboardController::class, 'blog'])->name('blog');
Route::get('/contact', [App\Http\Controllers\DashboardController::class, 'contact'])->name('contact');
Route::post('/booking', [App\Http\Controllers\DashboardController::class, 'booking'])->name('booking');
