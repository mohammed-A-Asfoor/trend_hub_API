<?php

use App\Http\Controllers\CategoryControlller;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\InfluencersConrtoller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Sub_CategoryControlller;
use App\Models\Sub_Category;
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
Route::apiResource('/influencers',InfluencersConrtoller::class);

Route::apiResource('/gallery',GalleryController::class);
Route::apiResource('/products',ProductController::class);
Route::apiResource('/categories',CategoryControlller::class)->only([
    'index',
    'show',
]);
Route::apiResource('/sub_categories',Sub_CategoryControlller::class)->only([
    'index',
    'show',
    'filter'
]);
Route::post('/gallery/influnser',[GalleryController::class,'filter']);
