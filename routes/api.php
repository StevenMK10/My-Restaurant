<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\CategoriesController;
use App\http\Controllers\AuthController;
use App\http\Controllers\MenusController;
use App\http\Controllers\OrdersController;
use App\http\Controllers\PaymentController;
use App\http\Controllers\OrderdetailsController;


Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::middleware(['auth:sanctum'])->group(function() {
    Route::apiResources([
        'categories' =>CategoriesController::class,
        'menus' =>MenusController::class,
        'orders' =>OrdersController::class,
        'payment' =>PaymentController::class,
        'orderdetails' =>OrderdetailsController::class,
    ]);
});