<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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

Route::resource('register', RegisterController::class);
Route::post('/cari', [RegisterController::class,'cari']);
Route::get('cetak/{id}', [RegisterController::class,'cetak']);
Route::get('hapus/{id}', [RegisterController::class,'destroy']);
