<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BooksController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminBlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\admin\BookCategoryCantroller;
use App\Http\Controllers\Admin\BasbetController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes testtt
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class,'index'])->name('home');

Auth::routes();

Route::get('/show/{id}',[HomeController::class,'show_book'])->name('book.show');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/contacts',[ContactsController::class,'index'])->name('contacts');
Route::post('/messages',[ContactsController::class,'message'])->name('message');
Route::get('/news',[BlogController::class,'index'])->name('news');
Route::get('/news/{id}',[BlogController::class,'show'])->name('news-single');


//Admin panel uchun routelar
Route::prefix('admin')->group(function () {

    Route::get('/home',[AdminController::class,'index'])->name('admin.home')->middleware('admin');

    Route::get('/login-admin',[AdminController::class,'login_admin'])->name('login-admin');

    Route::post('/check_admin',[AdminController::class,'check_admin'])->name('admin-check');
    
    Route::prefix('/book')->group(function(){
        Route::get('/create',[BooksController::class,'create'])->name('admin.book.create')
        ->middleware('admin');
        Route::post('/store',[BooksController::class,'store'])->name('admin.book.store');
        Route::get('/index',[BooksController::class,'index'])->name('admin.book.index')
        ->middleware('admin');
        Route::get('/edit/{id}',[BooksController::class,'edit'])->name('admin.book.edit');
        Route::put('/update/{id}',[BooksController::class,'update'])->name('admin.book.update');
        Route::get('/delete/{id}',[BooksController::class,'destroy'])->name('admin.book.delete');
    });
    Route::resource('/blog',AdminBlogController::class)
    ->middleware('admin');
    Route::resource('/category',BookCategoryCantroller::class)
    ->middleware('admin');

    Route::get('message',[ContactsController::class,'get_messages'])
    ->name('all_messages')
    ->middleware("admin");
    Route::get('message/delete/{id}',[ContactsController::class,'delete_message'])
    ->name('delete_message')
    ->middleware("admin");

    //Yangilik qidirish uchun route
    Route::post('/blog/search/',[BlogController::class,'search'])->name('search-news');
    //Admin Paneldan Chiqish Uchun Route
    Route::get('admin/logout',[AdminController::class,'logout'])->name('logout_admin');
    //Profilga kirish uchun route
    Route::get('admin/profile/',[AdminController::class,'profile'])->name('admin-profile');
    //Admin malumotlarini update qulivchi route
    Route::post('/user/data/update/{id}',[AdminController::class,'update_user'])->name('update-user');
    
    //Admin(boshqa joylarga ham) tarafda bosh sahifaga barcha kitoblarni sonini chiqaruvchi route
    Route::get("/books/count",[BasbetController::class,'book_count']);


});



