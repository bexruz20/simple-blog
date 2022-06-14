<?php

use App\Http\Controllers\Admin\UsersController;
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


Route::get('/', function () {
    return view('index');
});


Route::get('/category', function () {
    return view('category/index');
});


Route::get('view', function () {
    return view('post/index');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('login', [\App\Http\Controllers\Admin\LoginController::class, 'index'])->name('admin.login');
    Route::post('create', [\App\Http\Controllers\Admin\LoginController::class, 'create'])->name('admin.create');
});


Route::group(['prefix' => 'admin','middleware' => ['auth']], function () {
    Route::resource('users',UsersController::class);
});

