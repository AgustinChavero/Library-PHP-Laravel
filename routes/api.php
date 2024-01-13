<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;

Route::get('/user', [UserController::class, 'getAll'])->name('user.get.all');
Route::post('/user/create', [UserController::class, 'create'])->name('user.create');
Route::get('/user/detail/{id?}', [UserController::class, 'getOne'])->name('user.get.one');
Route::put('/user/edit/{id?}', [UserController::class, 'update'])->name('user.update');
Route::delete('/user/delete/{id?}', [UserController::class, 'delete'])->name('user.delete');

