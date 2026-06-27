<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemoryController;
use App\Http\Controllers\AdminController;


Route::get('/', [MemoryController::class, 'index']);

Route::get('/ani-birak', [MemoryController::class, 'create']);

Route::post('/ani-kaydet', [MemoryController::class, 'store']);

Route::get('/galeri', [MemoryController::class, 'gallery']);
Route::get('/tesekkurler', [MemoryController::class, 'thanks']);



Route::get('/admin', [AdminController::class, 'loginForm']);
Route::post('/admin/login', [AdminController::class, 'login']);
Route::get('/dashboard', [AdminController::class, 'dashboard']);
Route::post('/logout', [AdminController::class, 'logout']);
Route::delete('/admin/memory/{memory}', [AdminController::class, 'destroy']);
