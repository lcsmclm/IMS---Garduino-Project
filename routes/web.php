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

// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes();
//Route::get('/home', 'HomeController@index');
Route::get('/', 'UserplantsController@index')->middleware('auth');
Route::get('/user/plantdetails/{id}', 'UserplantsController@show')->middleware('auth');
Route::get('/statistics', 'UserplantsController@statistics')->middleware('auth');
Route::get('/statistics/{id}', 'UserplantsController@statdetails')->middleware('auth');

Route::get('plantlist', 'PlantlistController@index')->middleware('auth');
Route::get('plantlist/detail/{id}','PlantlistController@show')->middleware('auth');

Route::get('plantlist/search/{q}','PlantlistController@search')->middleware('auth');
Route::get('settings','UserController@settings')->middleware('auth');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->middleware('auth');

Route::get('/add-plant', function () {
    return view('addplant');
})->middleware('auth');
