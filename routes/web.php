<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Blog_ManageController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);

Route::get('/blog', [BlogController::class, 'index']);

Route::get('/blog/{slug}', [BlogController::class, 'show']);

Route::get('/blog_manage', [Blog_ManageController::class, 'index'])->name('blog_manage');

Route::get('/create', [Blog_ManageController::class, 'create']);

Route::post('/store', [Blog_ManageController::class, 'store']);

Route::get('/edit/{id}', [Blog_ManageController::class, 'edit']);

Route::post('/update', [Blog_ManageController::class, 'update']);

Route::delete('/delete/{id}', [Blog_ManageController::class, 'delete']);
