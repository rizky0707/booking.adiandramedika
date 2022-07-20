<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UmumController;
use App\Http\Controllers\LandingController;

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

Route::get('/', [UmumController::class, 'index'])->name('index');
Route::post('/', [UmumController::class, 'store'])->name('store.umum');
Route::get('/landing', [LandingController::class, 'landing'])->name('landing');
Route::get('/getUmum', [LandingController::class, 'getUmum']);
Route::get('getAll', [LandingController::class, 'getAll']);