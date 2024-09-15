<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactUSController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/home',[HomeController::class,'index'])->name('home');


Route::get('/customer.index',[CustomerController::class,'index'])->name('customer.index');
Route::get('/customer.create',[CustomerController::class,'create'])->name('customer.create');
Route::post('/customer',[CustomerController::class,'store'])->name('customer.store');
Route::get('/customer.edit/{id}',[CustomerController::class,'edit'])->name('customer.edit');
Route::put('/customer',[CustomerController::class,'update'])->name('customer.update');
Route::delete('/customer/{id}',[CustomerController::class,'destroy'])->name('customer.destroy');
Route::get('/customer.show/{id}',[CustomerController::class,'show'])->name('customer.show');



Route::get('/product.index',[ProductController::class,'index'])->name('product.index');
Route::get('/product.create',[ProductController::class,'create'])->name('product.create');
Route::post('/product',[ProductController::class,'store'])->name('product.store');
Route::get('/product/{product}/edit',[ProductController::class,'edit'])->name('product.edit');
Route::put('/product/{product}',[ProductController::class,'update'])->name('product.update');
Route::delete('/product/{product}/destroy',[ProductController::class,'destroy'])->name('product.destroy');
Route::get('/product/{product}',[ProductController::class,'show'])->name('product.show');

Route::get('/dashboard/product',[ProductController::class,'show'])->middleware(['auth', 'verified'])->name('dashboard.product');
Route::get('/dashboard/contact',[ContactUSController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard.contact');



Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [ContactUSController::class, 'submit'])->name('contact.submit');



Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
