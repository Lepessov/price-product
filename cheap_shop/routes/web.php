<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\FilterController;
use Illuminate\Support\Facades\Auth;
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

Route::group(['namespace'=>'App\Http\Controllers'],function (){
    Route::get('/','MainController')->name('main');

    Route::group(['namespace'=>'Product','prefix'=>'products'],function(){
        Route::get('/',  'IndexController')->name('product.index');
        Route::get('/{product}',  'ShowController')->name('product.show');
        Route::post('/{product}/comments',  'CommentController')->name('comment.show');
    });
});
Auth::routes();

