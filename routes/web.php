<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;

Route::get('/', function () {
    return view('home');
});


Route::get('test', [TestController::class, 'test'])->name('test');

Route::get('home', [TestController::class, 'home'])->name('home');

//Route::get('products', [TestController::class, 'products'])->name('products');
Route::get('contact', [TestController::class, 'contact'])->name('contact');

Route::get('account', [TestController::class, 'account'])->name('account');

Route::get('basket', [TestController::class, 'basket'])->name('basket');

Route::get('about', [TestController::class, 'about'])->name('about');
Route::get('checkout', [TestController::class, 'checkout'])->name('checkout');



Route::get('list',[UserController::class,'list'])->name('list_user');
Route::get('show/{id}', [UserController::class,'show']);



Route::get('products',[ProductController::class,'list'])->name('products');

Route::post('checkout', [CheckoutController::class, 'saveAddress'])->name('checkout.saveaddress');
Route::post('checkout', [CheckoutController::class, 'placeOrder'])->name('checkout.placeorder');

