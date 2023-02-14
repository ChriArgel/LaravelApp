<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PruebaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogOutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;


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

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/inicio', function () {
//     return view('inicio');
// });

// Route::get('/registro', function () {
//     return view('registro');
// });

Route::get('/registro', [RegisterController::class, 'index']);
Route::post('/registro', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/inicio', [LoginController::class, 'store']);

Route::post('/salir', [LogOutController::class, 'store'])-> name('logout');

// Route::get('/prueba', [PruebaController::class, 'index']);
Route::get('/muro', [PostController::class, 'index'])->name('post');

Route::get('/{user:username}', [PostController::class, 'index'])->name('post.index');
Route::get('/muro/create', [PostController::class, 'create'])->name('post.create');

