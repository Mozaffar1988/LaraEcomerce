<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

Route::get('/', 'App\Http\Controllers\Fontend\PagesController@index')->name('index');
//Route::get('/', 'App\Http\Controllers\UserController@index');
Route::get('/contact','App\Http\Controllers\Fontend\PagesController@contact')->name('contact');
/*
Product Routes
All the routes for product frontend
*/
Route::get('/product','App\Http\Controllers\Fontend\ProductsController@index')->name('product');
Route::get('/products/{slug}','App\Http\Controllers\Fontend\ProductsController@show')->name('show');
/*

Admin Routes
All the routes for Admin Backend
*/
Route::group(['prefix'=>'admin'],function(){
/*
Route::get('/','App\Http\Controllers\AdminPagesController@Admin')->name('Admin.index');
Route::get('/product/create','App\Http\Controllers\AdminPagesController@create')->name('Admin.product.create');
*/

Route::get('/','App\Http\Controllers\Backend\PagesController@index')->name('admin.index');
//Product Routes
Route::group(['prefix'=>'/products'],function(){

    Route::get('/','App\Http\Controllers\Backend\ProductsController@index')->name('admin.products');
    Route::get('/create','App\Http\Controllers\Backend\ProductsController@create')->name('admin.product.create');
    Route::get('/edit/{id}','App\Http\Controllers\Backend\ProductsController@edit')->name('admin.product.edit');
    Route::post('/store','App\Http\Controllers\Backend\ProductsController@store')->name('admin.product.store');
    Route::post('/edit/{id}','App\Http\Controllers\Backend\ProductsController@update')->name('admin.product.update');
    Route::post('/delete/{id}','App\Http\Controllers\Backend\ProductsController@delete')->name('admin.product.delete');

    });

});