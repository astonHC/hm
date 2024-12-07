<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BasketController;

Route::get('/', function () {
    return view('home');
});


Route::get('test', [TestController::class, 'test'])->name('test');

Route::get('home', [TestController::class, 'home'])->name('home');

//Route::get('products', [TestController::class, 'products'])->name('products');
Route::get('contact', [TestController::class, 'contact'])->name('contact');

Route::get('account', [TestController::class, 'account'])->name('account');


Route::get('about', [TestController::class, 'about'])->name('about');


Route::get('list',[UserController::class,'list'])->name('list_user');
Route::get('show/{id}', [UserController::class,'show']);

Route::get('products',[ProductController::class,'list'])->name('products');

/**Middleware is a mehcnism that allows you to perform actions such as authentication, logging, validaition and such 
 * before or after the request is processed by your controller. Ultimately, it acts as a bridge between request and a response. */



    Route::get('basket',[BasketController::class, 'view'])->name('basket.view');

    Route::post('/basket/add/{productID}',[BasketController::class, 'addToBasket'])->name('basket.add');

    Route::delete('/basket/remove/{productID}',[BasketController::class, 'removeFromBasket'])->name('basket.remove');