<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Models\dashboard\category\Category;
use App\Models\dashboard\product\Product;
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
    return view('welcome');
})->name('home');
Route::get('/dashboard', function () {
    $countProduct = Product::get()->count();
    $countCategory = Category::get()->count();;
    return view('dashboard.dashboard', ['countProduct' => $countProduct, 'countCategory' => $countCategory]);
})->name('dashboard');
///Route::resource('dashboard/product', ProductController::class);
Route::resource('dashboard/category', CategoryController::class);
Route::resource('dashboard/product', ProductController::class);
