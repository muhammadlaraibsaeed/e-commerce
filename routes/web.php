<?php

use App\Http\Controllers\Frontend\ContactController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ShopController;

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

// Frontend Development

Route::resource("homes",HomeController::class);
Route::resource("shops",ShopController::class);
Route::resource("contact",ContactController::class);
// Backend Development


// Ajax Handling


// Auth Route for Authentication 

Auth::routes();
Route::get('/page/about', [ShopController::class, 'about'])->name('about.page');
Route::get("/pages/shopping/details",[ShopController::class,"shoppingDetail"])->name("shop.details");
Route::get("/pages/shopping/shoppingCart",[ShopController::class,"shoppingCart"])->name("shopping.cart");
Route::get("/pages/shopping/checkout",[ShopController::class,"checkout"])->name("shopping.checkout");
Route::get("/pages/blogdetails",[ShopController::class,"blogDetails"])->name("blog.details");