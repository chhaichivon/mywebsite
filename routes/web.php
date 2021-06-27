<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('welcome');
});


Route::get('/Look', function () {
    return view('abc');
});


Route::resource('product', App\Http\Controllers\ProductController::class);


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/admin', function () {
    return view('admin.index');
});


Route::get('/admin/category', function () {
    return view('admin.category.index');
});

Route::get('/admin/category/create',function () {
    return view('admin.category.create');
});

Route::get('/book', function () {
    return view('category.index');
});
Route::get('/book/create', function () {
    return view('category.create');
});
Route::get('/book/show', function () {
    return view('category.show');
});
Route::get('/pen', function () {
    return view('category.index');
});
Route::get('/pen/create', function () {
    return view('category.create');
});