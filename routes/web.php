<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('home');
});


Route::get('test', [TestController::class, 'test'])->name('test');

Route::get('home', [TestController::class, 'home'])->name('home');

Route::get('beauty', [TestController::class, 'beauty'])->name('beauty');
Route::get('health', [TestController::class, 'health'])->name('health');
Route::get('clothing', [TestController::class, 'clothing'])->name('clothing');
Route::get('about', [TestController::class, 'about'])->name('about');


