<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(ProductController::class)->group(function(){
    Route::post('/add-product', 'addProduct');   
    Route::get('/products', 'getAllProduct');
    Route::get('/product/{id}', 'getOneProduct');
    Route::post('/product/{id}', 'updateProduct');
    Route::delete('/product/{id}','deleteProduct');
    Route::get('/products/limits/{limit}','getLimit');
    Route::get('/products/category/{cate}','getByCategory');
    Route::get('/products/search/{search}', 'searchByName');
});
