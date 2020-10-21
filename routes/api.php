<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\DataController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;
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



Route::post('register', [UserController::class,'register']);
Route::post('login', [UserController::class, 'login']);
Route::get('open', [DataController::class,'open']);
Route::get('categories', [CategoryController::class,'getCategories']);
Route::get('category/products/{id}', [ProductController::class,'getProductByCategory']);
Route::get('products', [ProductController::class, 'index']);

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('user', [UserController::class, 'getAuthenticatedUser']);
    Route::post('logout', [UserController::class, 'logout']);
    Route::get('closed', [DataController::class, 'closed']);

    // Другой способ
//    Route::group(['middleware' => ['role:admin']], function() {
//        Route::post('category/create', [CategoryController::class, 'store']);
//        Route::post('category/update/{id}', [CategoryController::class, 'update']);
//        Route::delete('category/delete/{id}', [CategoryController::class, 'destroy']);
//        Route::post('product/create', [ProductController::class, 'store']);
//        Route::post('product/update/{id}', [ProductController::class, 'update']);
//        Route::delete('product/delete/{id}', [ProductController::class, 'destroy']);
//    });
//
//    Route::group(['middleware' => ['role:moderator']], function() {
//        Route::post('category/create', [CategoryController::class, 'store']);
//        Route::post('category/update/{id}', [CategoryController::class, 'update']);
//        Route::post('product/create', [ProductController::class, 'store']);
//        Route::post('product/update/{id}', [ProductController::class, 'update']);
//    });
//
//    Route::group(['middleware' => ['role:user']], function() {
//        Route::post('category/create', [CategoryController::class, 'store']);
//        Route::post('product/create', [ProductController::class, 'store']);
//    });

        Route::post('category/create', [CategoryController::class, 'store']);
        Route::post('category/update/{id}', [CategoryController::class, 'update']);
        Route::delete('category/delete/{id}', [CategoryController::class, 'destroy']);
        Route::post('product/create', [ProductController::class, 'store']);
        Route::post('product/update/{id}', [ProductController::class, 'update']);
        Route::delete('product/delete/{id}', [ProductController::class, 'destroy']);
});
