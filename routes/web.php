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
//Route for pages
Route::match(['GET', 'POST'], '/', [
    'uses' => 'PagesController@index',
    'as' => '/'
]);

Route::match(['GET', 'POST'], '/register', [
    'uses' => 'PagesController@register',
    'as' => 'home.register'
]);


//Route For Admin
Route::match(['GET', 'POST'], '/admin', [
    'uses' => 'AdminController@login',
    'as' => 'admin.login'
]);
Route::match(['GET', 'POST'], 'admin/dashboard', [
    'uses' => 'AdminController@dashboard',
    'as' => 'admin.dashboard'
]);
Route::match(['GET', 'POST'], 'admin/add-category', [
    'uses' => 'AdminController@addCategory',
    'as' => 'admin.category'
]);
Route::match(['GET', 'POST'], 'add-category/store', [
    'uses' => 'AdminController@storeCategory',
    'as' => 'category.store'
]);
Route::match(['GET', 'POST'], 'add-category/{id}',[
    'uses' => 'AdminController@showCategory',
    'as' => 'category.show'
]);
Route::match(['DELETE'], 'add-category/{id}',[
    'uses' => 'AdminController@destroyCategory',
    'as' => 'category.destroy'
]);
Route::match(['PUT'], 'add-category/{id}',[
    'uses' => 'AdminController@updateCategory',
    'as' => 'category.update'
]);
Route::match(['GET', 'POST'], 'admin/add-location',[
    'uses' => 'LocationController@addLocation',
    'as' => 'admin.location'
]);
Route::match(['GET', 'POST'], 'add-location/store', [
    'uses' => 'LocationController@store',
    'as' => 'location.store'
]);
Route::match(['GET', 'POST'], 'add-location/{id}', [
    'uses' => 'LocationController@show',
    'as' => 'location.show'
]);
Route::match(['DELETE'], 'add-location/{id}', [
    'uses' => 'LocationController@destroy',
    'as' => 'location.destroy'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

