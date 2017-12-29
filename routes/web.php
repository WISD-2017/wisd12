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



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');





Route::get('/admin', 'Admin\HomeController@index')->name('admin.home');

Route::get('/admin/post/add', 'Admin\HomeController@postadd')->name('admin.post.add');

Route::get('/admin/ingredient/list', 'Admin\HomeController@ingredientlist')->name('admin.ingredient.list');
Route::get('/admin/ingredient/add', 'Admin\HomeController@ingredientadd')->name('admin.ingredient.add');
