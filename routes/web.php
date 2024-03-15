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
Route::get('/formKejadian', [App\Http\Controllers\FormKejadianController::class, 'index'])->name('formKejadian');
Route::get('/bencana', [App\Http\Controllers\BencanaController::class, 'index'])->name('bencana');
Route::resource('jenis', App\Http\Controllers\JenisBencanaController::class);
Route::resource('jenis', App\Http\Controllers\JenisBencanaController::class);

Route::resource('bencana/create', App\Http\Controllers\BencanaController::class);
Route::resource('propinsi', App\Http\Controllers\PropinsiController::class);

