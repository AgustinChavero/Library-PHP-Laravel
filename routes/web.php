<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;


Route::post('/user/create', [UserController::class, 'create'])->name('user.create');
Route::get('/user', [UserController::class, 'getAll'])->name('user.get.all');
Route::get('/user/detail/{id?}', [UserController::class, 'getOne'])->name('user.get.one');
Route::put('/user/edit/{id?}', [UserController::class, 'edit'])->name('user.edit');