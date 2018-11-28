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

Route::post('/login', 'OllieFordandCo\Amaranth\Http\Controllers\AuthController@postLogin');
Route::get('/login', 'OllieFordandCo\Amaranth\Http\Controllers\AuthController@login')->name('login');

Route::get('/dashboard', 'OllieFordandCo\Amaranth\Http\Controllers\DashboardController@index');

Route::get('/', 'OllieFordandCo\Amaranth\Http\Controllers\HomeController@index');
