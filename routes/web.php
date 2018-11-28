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

/*
 * Install Routes
 */

Route::put('/install', 'OllieFordandCo\Amaranth\Http\Controllers\InstallController@update');
Route::post('/install', 'OllieFordandCo\Amaranth\Http\Controllers\InstallController@store');
Route::get('/install/migrate', 'OllieFordandCo\Amaranth\Http\Controllers\InstallController@migrate');
Route::post('/install/admin', 'OllieFordandCo\Amaranth\Http\Controllers\InstallController@admin');
Route::get('/install', 'OllieFordandCo\Amaranth\Http\Controllers\InstallController@index');


Route::get('/login', 'OllieFordandCo\Amaranth\Http\Controllers\AuthController@index');

Route::get('/', 'OllieFordandCo\Amaranth\Http\Controllers\HomeController@index');
