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

Route::get('/error', function () {
    return view('errors.404');
})->name('error404');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function(){
    return view('admin.index');
})->name('admin');



Route::group(['middleware' => 'admin'], function(){
    Route::resource('/admin/user', 'AdminUserController');
    Route::resource('/admin/post', 'AdminPostsController');
    Route::resource('/admin/category', 'AdminCategoriesController');
});