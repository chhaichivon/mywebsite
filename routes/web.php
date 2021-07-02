<?php

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


Route::get('/abc', function () {
    return view('abc');
});


Route::resource('product', App\Http\Controllers\ProductController::class);

Route::resource('order', App\Http\Controllers\OrderController::class);


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/admin', function () {
    return view('admin.index');
});


Route::get('/admin/category', function () {
    return view('admin.category.index');
});



Route::get('/greeting', function () {
    return 'Hello World';
});

Route::get('/user/{id}', function ($id) {
    return 'User '.$id;
});

Route::get('/user/{name?}', function ($name = null) {
    return 'optional '.$name;
});


Route::get('/demo1', function () {
    return view('demo');
});

Route::get('/test1', function () {
    return view('test1');
});

Route::get('/test2', function () {
    return view('test2.test2');
});