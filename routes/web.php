<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CafeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\ReviewController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|/
*/


Route::get('/', [IndexController::class, 'index']);
Route::get('/about', [CafeController::class, 'about']);
Route::get('/cafe', [CafeController::class, 'index']);
Route::get('/contact', [CafeController::class, 'contact']);
Route::get('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'register']);
Route::get('/reservasi', [ReservasiController::class, 'reservasi']);
Route::get('/reservasi-berhasil', [ReservasiController::class, 'berhasil']);
Route::get('/review', [ReviewController::class, 'review']);

// Route::get('/', function () {
//     return view('welcome');
// });
