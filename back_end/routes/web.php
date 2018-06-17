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

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::resource('/delete','AdminController');
//Route::get("admin/json/{id}", "AdminController@showJson");

Route::get('admin', function () {
    return view('layout.admin_template');
});

Route::get('admin/car/list', 'CarController@index');
Route::get('admin/car/create', 'CarController@create');
Route::post('admin/car/store','CarController@store');
Route::delete('/car/destroy/{id}','CarController@destroy');


Route::get('admin/brand/list', 'BrandController@index');
Route::post('admin/brand/store','BrandController@store');
Route::delete('/brand/destroy/{id}','BrandController@destroy');
Route::get('/brand/{id}/edit','BrandController@edit');
Route::put('/brand/update/{id}','BrandController@update');
Route::post('/brand/destroyMany/{id}','BrandController@destroyMany');

Route::get('admin/clazz/list', 'ClazzController@index');
Route::post('admin/clazz/store','ClazzController@store');
Route::delete('/clazz/destroy/{id}','ClazzController@destroy');
Route::get('/clazz/{id}/edit','ClazzController@edit');
Route::put('/clazz/update/{id}','ClazzController@update');

Route::get('admin/preorder/list', 'PreorderController@index');
Route::post('admin/preorder/store','PreorderController@store');

Route::get('admin/color/list', 'ColorController@index');
Route::post('admin/color/store','ColorController@store');
Route::delete('/color/destroy/{id}','ColorController@destroy');
Route::get('/color/{id}/edit','ColorController@edit');
Route::put('/color/update/{id}','ColorController@update');



Route::get('admin/country/list', 'CountryController@index');
Route::post('admin/country/store','CountryController@store');
Route::delete('/country/destroy/{id}','CountryController@destroy');
Route::get('/country/{id}/edit','CountryController@edit');
Route::put('/country/update/{id}','CountryController@update');

Route::get('admin/image/list', 'ImageController@index');
Route::post('admin/image/store','ImageController@store');

Route::get('admin/stock/list', 'StockController@index');
Route::post('admin/stock/store','StockController@store');
