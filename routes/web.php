<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\PegawaiController;
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
    return view('home');
});

// Route::get('/movie_search', function () {
//     return view('movie_search');
// });

Route::get('/movie_search', [ApiController::class, 'index']);
Route::post('/movie_search', [ApiController::class, 'index'])->name('search.post');
Route::get('/database', [PegawaiController::class, 'index'])->name('database');

