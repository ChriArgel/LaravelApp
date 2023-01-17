<?php

use App\Http\Controllers\RegisterController;
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

// oute::get('/login', function () {
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