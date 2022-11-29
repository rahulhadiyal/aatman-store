<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\Auth\AuthController;

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

/*Admin Route*/

Route::prefix('admin')->name('admin.')->group(function (){

    //AdminHomeController
    Route::get('dashboard', [AdminHomeController::class , 'index'])/*->middleware(Authenticate::class)*/->name('dashboard');

    // //AuthController
    // Route::get('login', [AuthController::class, 'index'])->name('login');
    // Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
    // Route::get('register', [AuthController::class, 'register'])->name('register');
    // Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
    // Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});