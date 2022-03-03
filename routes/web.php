<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('profile',[ProfileController::class,'index'])->name('profile');

Route::get('profile-show',[ProfileController::class,'profileShow'])->name('profile-show');


Route::get('blog',[BlogController::class,'index'])->name('blog');
