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
//route to home
Route::get('/', [HomeController::class,'index']);
//route to pegawai
Route::get('/pegawai', [PegawaiController::class, 'index']);
//route to tambah data pegawai
Route::get('/tambahData', [PegawaiController::class, 'create']);
Route::post('/tambahData', [PegawaiController::class, 'store']);
//route to see pegawai detail
Route::get('/detail/{id}', [PegawaiController::class, 'show']);
//route to get specific pegawai
Route::get('detail/{id}/edit',[PegawaiController::class,'edit']);
//route to delete pegawai
Route::delete('/detail/{id}', [PegawaiController::class, 'destroy']);
//route to update pegawai
Route::patch('detail/{id}',[PegawaiController::class,'update']);


