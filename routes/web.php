<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ResepsionisController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin', 'middleware'=>'isAdmin'], function (){
    Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::get('profile',[AdminController::class,'profile'])->name('admin.profile');
    Route::get('settings',[AdminController::class,'isettings'])->name('admin.settings');
});

Route::group(['prefix'=>'user', 'middleware'=>'isUser'], function (){
    Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');
    Route::get('profile',[UserController::class,'profile'])->name('user.profile');
    Route::get('settings',[UserController::class,'settings'])->name('user.settings');
});

Route::group(['prefix'=>'resepsionis', 'middleware'=>'isResepsionis'], function (){
    Route::get('dashboard',[ResepsionisController::class,'index'])->name('resepsionis.dashboard');
    Route::get('profile',[ResepsionisController::class,'profile'])->name('resepsionis.profile');
    Route::get('settings',[ResepsionisController::class,'settings'])->name('resepsionis.settings');
});