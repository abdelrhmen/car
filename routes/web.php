<?php

use App\Http\Controllers\Website\TestimonialController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Website\AboutController;
use App\Http\Controllers\Website\BlogController;
use App\Http\Controllers\Website\ContactController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\ListingController;
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


Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('about', [AboutController::class,'index'])->name('about');
Route::get('listing', [ListingController::class,'index'])->name('listing');
Route::get('testimonials', [TestimonialController::class,'index'])->name('testimonials');
Route::get('blog', [BlogController::class,'index'])->name('blog');
Route::get('contact', [ContactController::class,'index'])->name('contact');
Route::post('contact', [ContactController::class,'store'])->name('contact_post');
Route::get('car/{id}', [HomeController::class,'car'])->name('car');

Route::post('comment', [HomeController::class,'comment'])->name('comment');



Auth::routes();
