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

Route::get('/', 'App\Http\Controllers\PagesController@index')->name('index');
//Route::get('/', 'App\Http\Controllers\UserController@index');
Route::get('/contact','App\Http\Controllers\PagesController@contact')->name('contact');
Route::get('/product','App\Http\Controllers\PagesController@product')->name('product');
Route::group(['prefix'=>'admin'],function(){
/*
Route::get('/','App\Http\Controllers\AdminPagesController@Admin')->name('Admin.index');
Route::get('/product/create','App\Http\Controllers\AdminPagesController@create')->name('Admin.product.create');
*/

Route::get('/','App\Http\Controllers\AdminPagesController@index')->name('admin.index');
Route::get('/products','App\Http\Controllers\AdminPagesController@manage_products')->name('admin.products');
Route::get('/product/create','App\Http\Controllers\AdminPagesController@product_create')->name('admin.product.create');
Route::get('/product/edit/{id}','App\Http\Controllers\AdminPagesController@product_edit')->name('admin.product.edit');
Route::post('/product/create','App\Http\Controllers\AdminPagesController@product_store')->name('admin.product.store');

Route::post('/product/edit/{id}','App\Http\Controllers\AdminPagesController@product_update')->name('admin.product.update');



});