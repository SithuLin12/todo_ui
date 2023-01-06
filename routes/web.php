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

// redirect route
// Route::redirect('/', 'post/create', )->name('post#create#page');

// crete page
Route::get('/',[PostController::class,'post'])->name('post#create#page');

// create post
Route::post('post/create',[PostController::class,'postCreate'])->name('post#create');

// delete post
Route::get('post/delete/{id}',[PostController::class,'postDelete'])->name('post#delete');

// read post
Route::get('post/read/{id}',[PostController::class,'postRead'])->name('post#read');

// edit page
Route::get('post/edit/{id}',[PostController::class,'postEdit'])->name('post#edit');

// update post
Route::post('post/update',[PostController::class,'postUpdate'])->name('post#update');
