<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\UsuarioController;
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

Route::resource('/index', UsuarioController::class);
Route::view('/','login.form')->name('login.form');
Route::post('/auth',[loginController::class,'auth'])->name('login.auth');

Route::get('/admin/dashboard',[DashboardController::class,'index'])->name('admin.dashboard');
