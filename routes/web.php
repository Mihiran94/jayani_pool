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

Route::get('/index','PagesController@index');
Route::get('/projects','PagesController@index1');
Route::get('/services','PagesController@index2');
Route::get('/blog','PagesController@index3');
Route::get('/about','PagesController@index4');
Route::get('/contact','PagesController@index5');
Route::get('/store','PagesController@index6');

Auth::routes();
//Route::view('/login','layouts.login');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin','middleware'=>'auth'], function(){
    Route::get('/', function(){
        return view('admin.index');
    })->name('admin.index');

    Route::resource('pools', 'PoolDesignController');
    Route::resource('category', 'CategoriesController');
});



