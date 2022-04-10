<?php

use App\Http\Controllers\AdminPanel\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;

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


// *****Template******

Route::get('/', [HomeController::class, 'index'])->name('home');


//*******Admin Panel Routes*******

Route::get('/admin', [AdminHomeController::class, 'index'])->name('admin');

//*******Admin Category Routes*******

Route::get('/admin/category',[CategoryController::class,'index'])->name('admin_category');
Route::get('/admin/category/create',[CategoryController::class,'create'])->name('admin_category_create');
Route::post('/admin/category/store',[CategoryController::class,'store'])->name('admin_category_store');



