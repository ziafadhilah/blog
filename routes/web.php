<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', [PagesController::class, 'index']);
Route::get('/public/tkisr', [PagesController::class, 'tkisr']);
Route::get('/public/sambutan', [PagesController::class, 'sambutan']);

// Auth::routes(); //untuk aktifkan registrasi
Auth::routes(['register' => false]); //untuk nonaktifkan registrasi

Route::get('/home', [HomeController::class, 'index']);

Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/books', [BooksController::class, 'index']);

Route::get('/category', [CategoryController::class, 'index']);