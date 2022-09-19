<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoBoxController;
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

Route::get('getDesc/{category?}', [HomeController::class, 'getDesc'])->name('api,getDesc');

Route::get('faq', [FAQController::class, 'index']);

Route::get('infobox', [InfoBoxController::class, 'index'])->name('api.infobox');

Route::get('banner', [BannerController::class, 'index'])->name('api.banner');
