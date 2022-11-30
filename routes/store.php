<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Store\StoreHomeController;

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

Route::prefix('store')->name('store.')->group(function (){

    Route::get('/', [StoreHomeController::class, 'index'])->name('');

});