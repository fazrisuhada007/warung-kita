<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route Get
Route::get('/products',[ProductController::class,'get']);

// Route Get By Id
Route::get('/products/{id}', [ProductController::class,'getById']);

// Route Post
Route::post('/product',[ProductController::class,'post']);

// Route Put
Route::put('/product/{id}', [ProductController::class,'put']);

// Route Delete
Route::delete('/product/{id}', [ProductController::class, 'delete']);
