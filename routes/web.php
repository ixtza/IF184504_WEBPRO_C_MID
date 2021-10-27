<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
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

Route::get('/berita', [BeritaController::class,'index']);

Route::get('/berita/create', [BeritaController::class,'create']);

Route::post('/berita', [BeritaController::class,'store']);

Route::get('/berita/{berita_id}', [BeritaController::class,'show']);

Route::get('/berita/{berita_id}/edit', [BeritaController::class,'edit']);

Route::put('/berita/{berita_id}', [BeritaController::class,'update']);

Route::delete('/berita/{berita_id}', [BeritaController::class,'destroy']);