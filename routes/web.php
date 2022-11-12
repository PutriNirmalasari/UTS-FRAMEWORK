<?php

use App\Http\Controllers\BagianController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\profile;
use App\Http\Controllers\ProfileController;
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
Route::resource('bagian', BagianController::class);
Route::resource('jenis', JenisController::class);
Route::resource('profile', ProfileController::class);
Route::get('/index/destroy/{id}', [ProfileController::class, 'destroy'])->name('index.destroy');
Route::get('/bagian/destroy/{id}', [BagianController::class, 'destroy'])->name('bagian.destroy');
Route::get('/jenis/destroy/{id}', [JenisController::class, 'destroy'])->name('jenis.destroy');
