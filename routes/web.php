<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\ImageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Route::controller(PesertaController::class)->prefix('peserta')->group(function(){
    //route::get('','index')->name('peserta');});



Route::get('/peserta', [PesertaController::class, 'index'])->name('peserta');

//uploadimage
Route::get('/upload', [ImageController::class, 'create']);
Route::post('/upload', [ImageController::class, 'store'])->name('image.upload');
Route::delete('/image/{id}', [ImageController::class, 'destroy'])->name('image.delete');