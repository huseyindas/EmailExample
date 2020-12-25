<?php

use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('layouts.admin-master');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get( "/add-product", [ProductController::class, "show"])->name("product.add");
Route::post( "/save-product", [ProductController::class, "save"])->name("product.save");

Route::get("/email-body", [\App\Http\Controllers\Auth\RegisterController::class, "index"]);
