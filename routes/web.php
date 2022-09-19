<?php

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




Route::get('/', 'WebController@index');
Route::get('/index', 'WebController@index');
Route::get('show/{id}','WebController@show');
Route::get('/about', 'WebController@about');
Route::get('/special', 'WebController@special');
Route::get('/contact', 'WebController@contact');
Route::get('/samsung', 'WebController@samsung');
Route::get('/xiaomi', 'WebController@xiaomi');
Route::get('/huawei', 'WebController@huawei');
Route::get('/search', 'WebController@search');










 

Auth::routes();



//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/brands/create', 'BrandsController@create')->name('brands.create');
//Route::post('/brands/store', 'BrandsController@store')->name('brands.store');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/brands/create', 'BrandsController@create')->name('brands.create');
Route::get('/brands', 'BrandsController@index')->name('brands.index');
Route::get('/brands/{id}', 'BrandsController@destroy')->name('brands.destroy');
Route::post('/brands/store', 'BrandsController@store')->name('brands.store');
Route::post('/brands/{id}/update', 'BrandsController@update')->name('brands.update');
Route::get('/brands/{id}/edit', 'BrandsController@edit')->name('brands.edit');




Route::get('/mobiles/create', 'MobilesController@create')->name('mobiles.create');
Route::get('/mobiles', 'MobilesController@index')->name('mobiles.index');
Route::get('/mobiles/{id}', 'MobilesController@destroy')->name('mobiles.destroy');
Route::post('/mobiles/store', 'MobilesController@store')->name('mobiles.store');
Route::post('/mobiles/{id}/update', 'MobilesController@update')->name('mobiles.update');
Route::get('/mobiles/{id}/edit', 'MobilesController@edit')->name('mobiles.edit');







