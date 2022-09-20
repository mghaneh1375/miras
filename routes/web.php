<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoBoxController;
use App\Http\Controllers\SliderController;
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

Route::middleware(['auth'])->group(function() {

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

});

Route::middleware(['auth', 'editorLevel'])->group(function() {

    Route::resource('brand', BrandController::class)->only(['store', 'destroy', 'update', 'index']);

    Route::view('brand/create', 'admin.brand.create');



    Route::resource('infobox', InfoBoxController::class)->except(['show', 'update']);
    
    Route::post('infobox/{infobox}', [InfoBoxController::class, 'update'])->name('infobox.update');



    Route::resource('slider', SliderController::class)->except(['show', 'update']);
    
    Route::post('slider/{slider}', [SliderController::class, 'update'])->name('slider.update');


    
    Route::resource('banner', BannerController::class)->except(['show', 'update']);
    
    Route::post('banner/{banner}', [BannerController::class, 'update'])->name('banner.update');



    Route::resource('faq', FAQController::class)->except(['show', 'update']);

    Route::post('faq/{faq}', [FAQController::class, 'update'])->name('faq.update');
    
    Route::resource('config', ConfigController::class)->only(['index']);

    Route::post('config', [ConfigController::class, 'update'])->name('config.update');

    Route::post('uploadImg', [HomeController::class, 'uploadImg'])->name('uploadImg');

    Route::get('/panel', function () {
        return view('admin.home');
    })->name('panel');
});

Route::get('category/list', [CategoryController::class, 'list'])->name('category.list');

Route::view('addCategory', 'admin.category.create')->name('category.add');

Route::get('updateCategory/{category}', [CategoryController::class, 'update'])->name('category.update');

Route::post('updateCategory/{category}', [CategoryController::class, 'doUpdate'])->name('category.doUpdate');

Route::post('storeCategory', [CategoryController::class, 'store'])->name('category.store');

Route::delete('removeCategory/{category}', [CategoryController::class, 'remove'])->name('category.remove');

Route::post('login', [AuthController::class, 'login'])->name('login');

Route::view('login', 'admin.login')->name('loginPage');

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/cart-empty', function () {
    return view('cart-empty');
})->name('cart-empty');

Route::get('/product/{productId}/{productName}', function () {
    return view('product');
})->name('single-product');

Route::view('alaki', 'alaki');
Route::get('/checkout-successful', function () {
    return view('checkout-successful');
})->name('checkout-successful');

Route::get('/checkout-unsuccessful', function () {
    return view('checkout-unsuccessful');
})->name('checkout-unsuccessful');

Route::get('/login-register', function () {
    return view('login-register');
})->name('login-register');

Route::get('/verification', function () {
    return view('verification');
})->name('verification');

Route::get('/come', function () {
    return view('come');
})->name('come');

Route::get('/password-reset', function () {
    return view('password-reset');
})->name('password-reset');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/404', function () {
    return view('404');
})->name('404');

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');