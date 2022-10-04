<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoBoxController;
use App\Http\Controllers\SliderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('getDesc/{category?}', [HomeController::class, 'getDesc'])->name('api.getDesc');

Route::get('faq', [FAQController::class, 'index'])->name('api.faq');

Route::get('infobox', [InfoBoxController::class, 'index'])->name('api.infobox');

Route::get('banner', [BannerController::class, 'index'])->name('api.banner');

Route::get('slider', [SliderController::class, 'index'])->name('api.slider');

Route::get('category', [CategoryController::class, 'index'])->name('api.category');
