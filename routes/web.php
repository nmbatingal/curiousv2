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
    return view('landing');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('redirect/{driver}', 'Auth\LoginController@redirectToProvider')
    ->name('login.provider');

Route::get('{driver}/callback', 'Auth\LoginController@handleProviderCallback')
    ->name('login.callback');


Route::group(['as' => 'admin.', 'prefix' => 'admin',  'middleware' => 'auth'], function()
{
    Route::get('/', 'Admin\AdminController@index')->name('index');
    Route::get('/fields', 'Admin\AdminController@fields')->name('fields');
    Route::post('/fields/category/upload', 'Admin\CategoryController@fileUpload')->name('category.upload');
});