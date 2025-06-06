<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;

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

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('callback', [GoogleController::class, 'handleGoogleCallback']);
Route::post('fetch', [GoogleController::class, 'fetchSearchData'])->name('fetch');
Route::get('refresh', [GoogleController::class, 'refreshAccessToken']);
Route::view('get', 'getquery');
Route::post('queries/store', [GoogleController::class, 'store'])->name('queries.store');

Route::get('/', function () {
    return view('welcome');
});

