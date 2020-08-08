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
    //return view('welcome');
    return redirect()->route('admin.product');
});

Route::group(['namespace' => 'Admin'], function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::group(['prefix' => 'product'], function () {
            Route::get('/', 'ProductController@index')->name('admin.product');

            Route::get('/add', 'ProductController@create');
            Route::post('/add', 'ProductController@store');

            Route::get('/edit/{id}', 'ProductController@edit');
            Route::post('/edit/{id}', 'ProductController@update');

            Route::delete('/delete/{id}', 'ProductController@destroy');
        });
    });
});
