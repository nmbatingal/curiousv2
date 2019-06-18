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

// Route::get('/', function () { return view('landing'); });
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/search', 'HomeController@search')->name('search');

Route::get('redirect/{driver}', 'Auth\LoginController@redirectToProvider')
    ->name('login.provider');

Route::get('{driver}/callback', 'Auth\LoginController@handleProviderCallback')
    ->name('login.callback');


Route::group(['as' => 'admin.', 'prefix' => 'admin',  'middleware' => 'auth'], function()
{
    Route::get('/', 'Admin\AdminController@index')->name('index');

    Route::get('/fields', 'Admin\AdminController@fields')->name('fields');

    // store category
    Route::post('/fields/category/upload', 'Admin\CategoryController@fileUpload')->name('category.upload');
    Route::post('/fields/category/field/store', 'Admin\CategoryController@addFieldCategory')->name('store.field_category');
    Route::post('/fields/category/domain/store', 'Admin\CategoryController@addDomainCategory')->name('store.domain_category');
    Route::post('/fields/category/subdomain/store', 'Admin\CategoryController@addSubdomainCategory')->name('store.subdomain_category');
});