<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\http\Controllers\ProductController;
use App\http\Controllers\myController;
use App\http\Controllers\ProducController;
use App\Http\Controllers\OrderController;
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
Route::get('/upload', [myController::class, 'upload']);
Route::post('/up', [myController::class, 'up']);

Route::get('/checkout', [myController::class, 'checkout']);

Route::get('/admin', [myController::class, 'products2']);
Route::resource('/', ProductController::class);
Route::group(['prefix' => 'cart'], function () {
    Route::get('view', [CartController::class, 'view'])->name('cart.view');
    Route::get('add/{id}/{quantity?}', [CartController::class, 'add'])->name('cart.add');
    Route::get('remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
    Route::get('update/{id}/{quantity?}', [CartController::class, 'update'])->name('cart.update');
});



Route::resource('/order', OrderController::class);
Route::resource('/product', ProductController::class);
Route::resource('/produc', ProducController::class);
Route::get('/{name?}', [myController::class, 'web']);
Route::get('admin/add', [myController::class, 'addproduct']);



// quan ly order
Route::post('/admin/orders/{id}', [OrderController::class, 'update_giao']);
Route::get('/admin/order', [OrderController::class, 'order_quanly']);
Route::get('/admin/orderoff', [OrderController::class, 'order_dangmua']);
Route::get('/admin/orderon', [OrderController::class, 'order_hoanthanh']);
Route::get('/admin/orderdel', [OrderController::class, 'order_dahuy']);



