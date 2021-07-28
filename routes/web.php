<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'index']);

Auth::routes();

Route::group(['middleware' => 'Admin'], function(){
    Route::get('/dashboard', [ProfileController::class, 'dashboardindex'])->name('dashboard');

    Route::get('/dashboard/about', [ProfileController::class, 'index'])->name('dashboard.about');
    Route::post('/dashboard/about', [ProfileController::class, 'profileinsertion'])->name('dashboard.about.store');
    Route::delete('/dashboard/about', [ProfileController::class, 'profiledeletion'])->name('dashboard.about.delete');

    Route::resource('/dashboard/skill', SkillController::class);
    Route::resource('/dashboard/education', EducationController::class);

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
