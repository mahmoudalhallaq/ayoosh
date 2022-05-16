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

Route::group(['prefix'=>'blog', 'as' => 'blogs.'], function (){
    Route::get('', [\App\Http\Controllers\BlogController::class, 'index'])->name('index');
    Route::get('add', [\App\Http\Controllers\BlogController::class, 'add_page'])->name('add_page');
    Route::post('add', [\App\Http\Controllers\BlogController::class, 'add'])->name('add');
    Route::get('/{id}', [\App\Http\Controllers\BlogController::class, 'article'])->name('article');
    Route::get('/{id}/update', [\App\Http\Controllers\BlogController::class, 'update_page'])->name('update_page');
    Route::post('/{id}/update', [\App\Http\Controllers\BlogController::class, 'update'])->name('update');
    Route::post('/{id}/comments/add', [\App\Http\Controllers\BlogController::class, 'add_comment'])->name('add_comment');
//    Route::get('delete/{id}', [\App\Http\Controllers\BlogController::class, 'delete'])->name('delete');
});
