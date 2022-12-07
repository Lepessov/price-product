<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\FilterController;
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
});
Route::group(['namespace'=>'App\Http\Controllers\Product','prefix'=>'products'],function(){
    Route::get('/',  'IndexController')->name('product');


});
// Route::get('/products', [ProductController::class, 'index']);
// Route::get('/categories', [CategoryController::class, 'index']);
// Route::get('/products/{category}', ProductController::class, 'filter');
