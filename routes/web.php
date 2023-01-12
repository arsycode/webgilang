<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MahasiswaController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[AuthController::class,'login'])->name('login');
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::get('/dashboard',[AdminController::class,'dashboard'])->name('dashboard');

//Report PDF
Route::get('/downloadpdf',[MahasiswaController::class,'downloadpdf']);


Route::get('/mahasiswa',[MahasiswaController::class,'index']);
Route::get('/mahasiswa/create',[MahasiswaController::class,'create']);
Route::post('/mahasiswa/store',[MahasiswaController::class,'store']);
Route::get('/mahasiswa/{id}/edit',[MahasiswaController::class,'edit']);
Route::patch('/mahasiswa/{id}/update',[MahasiswaController::class,'update']);
Route::get('/mahasiswa/{id}/delete',[MahasiswaController::class,'destroy']);
Route::get('/mahasiswa/search',[MahasiswaController::class,'search']);

//1-1
Route::get('/mahasiswa/wali',[MahasiswaController::class,'wali']);
//1-n   
Route::get('/mahasiswa/dosen',[MahasiswaController::class,'dosen']);
//n-n
Route::get('/mahasiswa/matkul',[MahasiswaController::class,'matkul']);
