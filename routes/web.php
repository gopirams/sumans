<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use Laravel\Cashier\Checkout;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/product/{id}', [ProductsController::class, 'show'])->name('product.show');


Route::post('/purchase/{product}', [ProductsController::class, 'confirmPurchase'])->name('purchase.confirm');

Route::get('/thankyou', [ProductsController::class, 'thankyou']);

Route::get('/', [ProductsController::class, 'index'])->name('home');
