<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PostController;


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



Route::get('/products' , [ItemController::class,'index']);
Route::get('/products/create' , [ItemController::class,'create'])->name('products.create');
Route::post('/products/store' , [ItemController::class,'store'])->name('products.store');
Route::get('/products/edit/{id}' , [ItemController::class,'edit'])->name('products.edit');
Route::post('/products/update/{id}' , [ItemController::class,'update'])->name('products.update');
Route::get('/products/destroy/{id}' , [ItemController::class,'destroy'])->name('products.destroy');
Route::get('/products/show' , [ItemController::class,'getData'])->name('products.show');
// Route::get('/products/show', 'ItemController@getData')->name('products.show');

Route::resource('posts', PostController::class);