<?php

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

Route::get('/admin/login', ['as'=>'login', 'uses'=>'admin\AdminController@index']);
Route::post('/admin/login', ['as'=>'login', 'uses'=>'admin\AdminController@login']);

Route::middleware('multiauth:admin')->group(function(){
Route::group(['prefix'=>'/admin', 'as'=>'admin.'], function(){

    Route::get('/dashboard', ['as'=>'dash', 'uses'=>'admin\AdminController@create']);
    Route::get('/logout', ['as'=>'logout', 'uses'=>'admin\AdminController@logout']);
    Route::get('/category/delete/{id}', ['as'=>'category.delete', 'uses'=>'Admin\CateoryController@destroy']);
    Route::get('/product/delete/{id}', ['as'=>'product.delete', 'uses'=>'Admin\ProductController@destroy']);
    Route::resource('/category', 'Admin\CateoryController');
    Route::resource('/product', 'Admin\ProductController');
});
});


