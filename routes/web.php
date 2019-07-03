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

Route::match(['GET', 'POST'], '/', [
    'uses' => 'PagesController@index',
    'as' => '/'
]);

Route::match(['GET', 'POST'], '/register', [
    'uses' => 'PagesController@register',
    'as' => 'home.register'
]);

Route::match(['GET', 'POST'], '/admin', [
    'uses' => 'AdminController@login',
    'as' => 'admin.login'
]);

Route::match(['GET', 'POST'], 'admin/dashboard', [
    'uses' => 'AdminController@dashboard',
    'as' => 'admin.dashboard'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
