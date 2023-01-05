<?php

use Illuminate\Support\Facades\Route;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/',[PostController::class,'post'])->name('post');

// crete page
Route::get('/',[PostController::class,'post'])->name('post#create#page');

// create post
Route::post('post/create',[PostController::class,'postCreate'])->name('post#create');

// delete post
Route::get('post/delete/{id}',[PostController::class,'postDelete'])->name('post#delete');

// read post
Route::get('post/read/{id}',[PostController::class,'postRead'])->name('post#read');
