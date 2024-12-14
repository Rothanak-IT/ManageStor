<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/tanomo', function () {
    return view('tanomo');
});
Route::get('dashboard',[DashboardController::class,'dashboard']);
Route::get('/customer',[CustomerController::class,'customer']);
Route::get('category',[CategoryController::class,'category']);
Route::get('product',[ProductController::class,'product']);
Route::get('orderList',[OrderController::class,'orderList']);