<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaguController;

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

Route::get('/lagu', [LaguController::class,'index'])->name('lagu');
Route::get('/tambah', [LaguController::class,'create'])->name('tambah');
Route::post('/store', [LaguController::class,'store'])->name('store');
