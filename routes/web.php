<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
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

Route::get('/', [BaseController::class, 'index'])->name('index');

Route::get('/post/{slug}', [PostController::class, 'post'])->name('post');

Route::post('/store', [BaseController::class, 'store'])->name('contact.store');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
