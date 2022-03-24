<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;


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

/*------------------------------------------------
    Blog Routes
------------------------------------------------*/

Route::get('blog',[BlogController::class,'index'])->name('blog');
Route::get('addblog',[BlogController::class,'create'])->name('addblog');
Route::get('saveblog',[BlogController::class,'create'])->name('saveblog');


// Route::get('blogList',[BlogModelController::class,'index'])->name('blogList');
// Route::get('blogCreate',[BlogModelController::class,'create'])->name('blogCreate');
// Route::get('blogStore',[BlogModelController::class,'store'])->name('blogStore');
// // Route::get('blogEdit',[BlogModelController::class,'edit'])->name('blogEdit');
// // Route::get('blog',[BlogModelController::class,'index'])->name('blog');