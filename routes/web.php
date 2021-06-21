<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CafeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReservasiController;

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
Route::get('/about', [AboutController::class, 'about']);
Route::get('/cafe', [CafeController::class, 'index']);
Route::get('/contact', [ContactController::class, 'contact']);
Route::get('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'register']);
Route::get('/reservasi', [ReservasiController::class, 'reservasi']);
Route::get('/reservasi-berhasil', [ReservasiController::class, 'berhasil']);

// Route::get('/', function () {
//     return view('welcome');
// });
