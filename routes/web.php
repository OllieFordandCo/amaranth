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
Route::get('/install', 'OllieFordandCo\Amaranth\Http\Controllers\InstallController@index');

Route::get('/', 'OllieFordandCo\Amaranth\Http\Controllers\HomeController@index');
