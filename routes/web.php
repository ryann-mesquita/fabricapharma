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

Route::prefix('admin')
       ->group(function(){
        /**
         * Routes Groups 
         */
        Route::get('groups/create', 'App\Http\Controllers\Admin\GroupController@create')->name('groups.create');
        Route::get('groups', 'App\Http\Controllers\Admin\GroupController@index')->name('groups.index');
        Route::put('groups/{id}/edit', 'App\Http\Controllers\Admin\GroupController@update')->name('groups.update');
        Route::get('groups/{id}/edit', 'App\Http\Controllers\Admin\GroupController@edit')->name('groups.edit');
        Route::delete('groups/{id}', 'App\Http\Controllers\Admin\GroupController@delete')->name('groups.delete');

        Route::get('groups/{id}', 'App\Http\Controllers\Admin\GroupController@show')->name('groups.show');
        Route::post('groups', 'App\Http\Controllers\Admin\GroupController@store')->name('groups.store');
        Route::delete('groups/{id}', 'App\Http\Controllers\Admin\GroupController@delete')->name('groups.delete');


        /**
         * Routes Products
         */
        
        Route::get('products/create', 'App\Http\Controllers\Admin\ProductController@create')->name('products.create');
        Route::put('products/{id}/edit', 'App\Http\Controllers\Admin\ProductController@update')->name('products.update');
        Route::get('products/{id}/edit', 'App\Http\Controllers\Admin\ProductController@edit')->name('products.edit');
        Route::any('products/search', 'App\Http\Controllers\Admin\ProductController@search')->name('products.search');
        Route::delete('products/{id}', 'App\Http\Controllers\Admin\ProductController@delete')->name('products.delete');
        Route::get('products/{id}', 'App\Http\Controllers\Admin\ProductController@show')->name('products.show');
        Route::post('products', 'App\Http\Controllers\Admin\ProductController@store')->name('products.store');
        Route::get('products', 'App\Http\Controllers\Admin\ProductController@index')->name('products.index');

        /**
         * Home Dashboard
         */
        Route::get('admin', 'App\Http\Controllers\Admin\ProductController@index')->name('admin.index');
});

Route::get('/', function () {
    return view('welcome');
});
