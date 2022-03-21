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
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/exmple', 'ExmpleController@index');
Route::get('/exmple/create', 'ExmpleController@create');
Route::post('/exmple', 'ExmpleController@store');
Route::get('/exmple/edit/{id}', 'ExmpleController@edit');
Route::post('/exmple/update', 'ExmpleController@update');
Route::get('/exmple/delete/{id}', 'ExmpleController@delete');
Route::get('/exmple/show/{id}', 'ExmpleController@show');
Route::get('exmple/view/{id}', 'ExmpleController@view');
Route::get('/array', 'ArrayController@array');
Route::get('/count', 'ArrayController@count');
Route::get('/even', 'ArrayController@even');
Route::get('/oud', 'ArrayController@oud');
Route::get('/swap', 'ArrayController@swap');
Route::get('/palindrome', 'ArrayController@palindrome');
Route::get('/sum', 'ArrayController@sum');
Route::get('/sumeven', 'ArrayController@sumeven');
Route::get('/oudsum', 'ArrayController@oudsum');
Route::get('/indexeven', 'ArrayController@indexeven');
Route::get('/sort', 'ArrayController@sort');
Route::get('/sortd', 'ArrayController@sortd');
Route::get('/big', 'ArrayController@big');
Route::get('/prime', 'ArrayController@prime');
Route::get('/table', 'ArrayController@table');
Route::get('/table2', 'ArrayController@table2');
Route::get('/table3', 'ArrayController@table3');
Route::get('/exam', 'ArrayController@exam');
Route::get('/evenn', 'ArrayController@evenn');
Route::get('/star', 'ArrayController@star');
Route::get('/star2', 'ArrayController@star2');


