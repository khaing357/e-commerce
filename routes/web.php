<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

Route::get('/register',[UserController::class,'register']);
Route::post('/register',[UserController::class,'postRegister']);

Route::get('/login',[UserController::class,'login']);
Route::post('/login',[UserController::class,'postLogin']);

Route::post('/logout',[UserController::class,'logout']);

Route::get('/',[ProductController::class,'index']);
Route::get('/products/{product}',[ProductController::class,'detail']);

Route::get('/search',[ProductController::class,'search']);
Route::post('/addToCart',[ProductController::class,'addToCart']);

Route::get('/cartList',[ProductController::class,'cartList']);
Route::get('/removeCart/{id}',[ProductController::class,'removeCart']);

Route::get('/orderNow',[ProductController::class,'orderNow']);
Route::post('/orderplace',[ProductController::class,'orderPlace']);
Route::get('/myOrders',[ProductController::class,'myOrders']);


