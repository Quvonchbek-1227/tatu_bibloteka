<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BooksController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminBlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactsController;
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

Route::get('/',[HomeController::class,'index']);

Auth::routes();

Route::get('/show/{id}',[HomeController::class,'show_book'])->name('book.show');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/contacts',[ContactsController::class,'index'])->name('contacts');
Route::post('/messages',[ContactsController::class,'message'])->name('message');
Route::get('/news',[BlogController::class,'index'])->name('news');
Route::get('/news/{id}',[BlogController::class,'show'])->name('news-single');


//Admin panel uchun routelar
Route::prefix('admin')->group(function () {
    Route::get('/home',[AdminController::class,'index'])->name('admin.home')->middleware('auth');
    Route::prefix('/book')->group(function(){
        Route::get('/create',[BooksController::class,'create'])->name('admin.book.create');
        Route::post('/store',[BooksController::class,'store'])->name('admin.book.store');
        Route::get('/index',[BooksController::class,'index'])->name('admin.book.index');
        Route::get('/edit/{id}',[BooksController::class,'edit'])->name('admin.book.edit');
        Route::put('/update/{id}',[BooksController::class,'update'])->name('admin.book.update');
        Route::get('/delete/{id}',[BooksController::class,'destroy'])->name('admin.book.delete');
    });
    Route::resource('/blog',AdminBlogController::class);
});



