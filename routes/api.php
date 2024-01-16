<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ReviewController;

Route::middleware('auth:sanctum')->get('/user', [UserController::class, 'getAll'])->name('user.get.all');
Route::post('/user/create', [UserController::class, 'create'])->name('user.create');
Route::get('/user/detail/{id?}', [UserController::class, 'getOne'])->name('user.get.one');
Route::middleware('auth:sanctum')->put('/user/edit/{id?}', [UserController::class, 'update'])->name('user.update');
Route::middleware('auth:sanctum')->delete('/user/delete/{id?}', [UserController::class, 'delete'])->name('user.delete');

Route::get('/book', [BookController::class, 'getAll'])->name('book.get.all');
Route::middleware('auth:sanctum')->post('/book/create', [BookController::class, 'create'])->name('book.create');
Route::get('/book/detail/{id?}', [BookController::class, 'getOne'])->name('book.get.one');
Route::middleware('auth:sanctum')->put('/book/edit/{id?}', [BookController::class, 'update'])->name('book.update');
Route::middleware('auth:sanctum')->delete('/book/delete/{id?}', [BookController::class, 'delete'])->name('book.delete');

Route::get('/review', [ReviewController::class, 'getAll'])->name('review.get.all');
Route::middleware('auth:sanctum')->post('/review/create', [ReviewController::class, 'create'])->name('review.create');
Route::get('/review/detail/{id?}', [ReviewController::class, 'getOne'])->name('review.get.one');
Route::middleware('auth:sanctum')->put('/review/edit/{id?}', [ReviewController::class, 'update'])->name('review.update');
Route::middleware('auth:sanctum')->delete('/review/delete/{id?}', [ReviewController::class, 'delete'])->name('review.delete');

Route::post('/auth/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');
