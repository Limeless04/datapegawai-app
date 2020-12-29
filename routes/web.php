<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;
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

//Pegawai
Route::get('/', [HomeController::class,'index']);

Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/tambahData', [PegawaiController::class, 'create']);
Route::get('/detail/{id}', [PegawaiController::class, 'show']);

Route::post('/tambahData', [PegawaiController::class, 'store']);
Route::delete('/detail/{id}', [PegawaiController::class, 'destroy']);
Route::get('detail/{id}/edit',[PegawaiController::class,'edit']);
Route::patch('detail/{id}',[PegawaiController::class,'update']);
