<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserDetailController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/Upload', [UserDetailController::class, 'Uploads']);

Route::get('/Leta', [UserDetailController::class, 'Leta']);

Route::get('/Futa/{id}', [UserDetailController::class, 'Futa']);

Route::get('/Reke/{id}', [UserDetailController::class, 'Reke']);

Route::post('/Rekebisha/{id}', [UserDetailController::class, 'Rekebisha'])->name('rekebisha.update');
