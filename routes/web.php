<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ProductController;
use App\http\Controllers\myController;
use App\Http\Controllers\CartController;
use App\Helper\CartHelper;



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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', 'App\Http\Controllers\ProductController@index');
Route::group(['prefix' => 'cart'], function () {
    Route::get('view', [CartController::class, 'view'])->name('cart.view');
    Route::get('add/{id}/{quantity?}', [CartController::class, 'add'])->name('cart.add');
    Route::get('remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
    Route::get('update/{id}/{quantity?}', [CartController::class, 'update'])->name('cart.update');
});
// Route::resource('/product', 'App\Http\Controllers\ProductController::class');
Route::resource('/product', 'App\Http\Controllers\ProductController');

Route::get('/{name?}', [myController::class, 'web']);
