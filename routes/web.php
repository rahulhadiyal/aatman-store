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

/*Admin Route*/

Route::prefix('admin')->name('admin.')->group(function (){

    //AdminHomeController
    Route::get('dashboard', [AdminHomeController::class , 'index'])->middleware(Authenticate::class)->name('dashboard');
    
});