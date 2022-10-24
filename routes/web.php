<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users\SampleController;
use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\FEController;


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




//Login-Registration
Route::get('/login', [SampleController::class, 'index'])->name('login')->middleware('alreadyLoggedIn');
Route::get('/registration', [SampleController::class, 'registration'])->name('registration')->middleware('alreadyLoggedIn');
Route::post('/validate_registration', [SampleController::class, 'validate_registration'])->name('validate_registration');
Route::post('/validate_login', [SampleController::class, 'validate_login'])->name('validate_login');
Route::post('/logout', [SampleController::class, 'logout'])->name('logout');


//Admin
Route::get('/dashboard', [FrontEndController::class, 'index'])->name('dashboard')->middleware('isLoggedIn');

//Category
Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/add-category', [CategoryController::class, 'add'])->name('add-category');
Route::post('/insert-category', [CategoryController::class, 'insert'])->name('insert-category');
Route::get('/edit-category/{id}', [CategoryController::class, 'edit']);
Route::put('/update-category/{id}', [CategoryController::class, 'update']);
Route::get('/delete-category/{id}', [CategoryController::class, 'destroy']);

//Product
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/add-product', [ProductController::class, 'add'])->name('add-product');
Route::post('/insert-product', [ProductController::class, 'insert'])->name('insert-product');
Route::get('/edit-product/{id}', [ProductController::class, 'edit']);
Route::put('/update-product/{id}', [ProductController::class, 'update']);
Route::get('/delete-product/{id}', [ProductController::class, 'destroy']);

//Front-end
Route::get('/', [FEController::class, 'index'])->name('home');
Route::get('/shop', [FEController::class, 'shop'])->name('shop');
Route::get('/about', [FEController::class, 'about'])->name('about');
Route::get('/news', [FEController::class, 'news'])->name('news');
Route::get('/contact', [FEController::class, 'contact'])->name('contact');
Route::get('/cart', [FEController::class, 'cart'])->name('cart');
Route::get('/category/{id}', [FEController::class, 'product_by_cate'])->name('product.category');
// Route::get('/fruit', [FEController::class, 'fruit'])->name('fruit');
// Route::get('/pizza', [FEController::class, 'pizza'])->name('pizza');
// Route::get('/cream', [FEController::class, 'cream'])->name('cream');
// Route::get('/drinks', [FEController::class, 'drinks'])->name('drinks');


