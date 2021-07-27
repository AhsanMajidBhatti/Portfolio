<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin;

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
    return view('layouts');
});

Route::get('/', [AboutController::class, 'index']);

Route::get('/login', [AdminController::class, 'loginindex']);
Route::post('/login', [AdminController::class, 'login'])->name('loginsubmit');

Route::get('/dashboard', function(){
    return view('admin.dashboard');
});

Route::resource('/admin/about', Admin\AboutController::class);
