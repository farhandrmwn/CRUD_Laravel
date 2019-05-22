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

Route::get('/', function () {
    return view('welcome');
});
Route::post('prosestambah','Crudcontroller@tambahdata');

Route::get('read', function(){
    return view('read');
});

Route::get('read','Crudcontroller@lihatdata');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
route::resource('biodata','BiodataController');
