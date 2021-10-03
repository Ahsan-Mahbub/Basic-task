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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/insert', [PostController::class, 'frontview']);

Route::get('/post-list', [PostController::class, 'index'])->name('post.list');
Route::get('post-create', [PostController::class, 'create'])->name('post.create');
Route::post('post-store', [PostController::class, 'store'])->name('post.store');
Route::get('post-edit/{id}', [PostController::class, 'edit'])->name('post.edit');
Route::post('post-update/{id}', [PostController::class, 'update'])->name('post.update');
Route::delete('post-delete/{id}', [PostController::class, 'destroy'])->name('post.delete');
