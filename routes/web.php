<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoBoxController;
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

    Route::resource('faq', FAQController::class)->except(['show', 'update']);

    Route::post('faq/{faq}', [FAQController::class, 'update'])->name('faq.update');
    
    Route::resource('config', ConfigController::class)->only(['index']);

    Route::post('config', [ConfigController::class, 'update'])->name('config.update');

    Route::post('uploadImg', [HomeController::class, 'uploadImg'])->name('uploadImg');

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
    return view('admin.home');
})->name('home');
