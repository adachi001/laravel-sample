<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UploadController;
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
    return view('start');  //　変更：welcome -> start
});
Auth::routes();

Route::get('/post/{id}',[PostController::class,'detail']);
Route::get('/home', [PostController::class, 'index']);
Route::get('/add', [PostController::class, 'create']);
Route::post('postStore', [PostController::class, 'store'])->name('postStore');