<?php

use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

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



    Route::middleware(['auth'])->group(function () {
        Route::get('/',[HomeController::class,'index']);
        Route::resource('users', UserController::class);
        Route::resource('category', CategoryController::class);
        Route::resource('car', CarController::class);
        Route::resource('testimonials', TestimonialController::class);
        Route::resource('message', MessageController::class);

    });

