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
Route::match(['GET', 'POST'], 'posts/{url}', [
    'uses' => 'PagesController@single',
    'as' => 'post.single'
])->where('url','[\w\d\-\_]+');


//Route For Admin
Route::match(['GET', 'POST'], '/admin', [
    'uses' => 'AdminController@login',
    'as' => 'admin.login'
]);
Route::match(['GET', 'POST'], 'admin/dashboard', [
    'uses' => 'AdminController@dashboard',
    'as' => 'admin.dashboard'
]);
//Category Sections
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
Route::match(['PUT'], 'add-category/{id}/updateCategory',[
    'uses' => 'AdminController@updateCategory',
    'as' => 'category.update'
]);
Route::match(['DELETE'], 'add-category/{id}',[
    'uses' => 'AdminController@destroyCategory',
    'as' => 'category.destroy'
]);
Route::match(['GET', 'POST'], 'categories/{url}', [
    'uses' => 'AdminController@single',
    'as' => 'category.single'
]);

//Locations Section
Route::match(['GET', 'POST'], 'admin/add-location',[
    'uses' => 'AdminController@addLocation',
    'as' => 'admin.location'
]);
Route::match(['GET', 'POST'], 'add-location/store', [
    'uses' => 'AdminController@storeLocation',
    'as' => 'location.store'
]);
Route::match(['GET', 'POST'], 'add-location/{id}', [
    'uses' => 'AdminController@showLocation',
    'as' => 'location.show'
]);
Route::match(['PUT'], 'add-category/{id}/updateLocation',[
    'uses' => 'AdminController@updateLocation',
    'as' => 'location.update'
]);
Route::match(['DELETE'], 'add-location/{id}', [
    'uses' => 'AdminController@destroyLocation',
    'as' => 'location.destroy'
]);


//Routing for posts
Route::match(['GET', 'POST'], '/post-list', [
    'uses' => 'PostController@index',
    'as' => 'post.list'
]);
Route::match(['GET', 'POST'], '/posting-page', [
    'uses' => 'PostController@create',
    'as' => 'post.create'
]);
Route::match(['GET', 'POST'], 'posting-page/store', [
    'uses' => 'PostController@store',
    'as' => 'post.store'
]);
Route::match(['GET', 'POST'], 'posting-page/{id}', [
    'uses' => 'PostController@show',
    'as' => 'post.show'
]);
Route::match(['GET', 'POST'], 'post-list/{id}', [
    'uses' => 'PostController@edit',
    'as' => 'post.edit'
]);
Route::match(['DELETE'], 'post-list/{id}', [
    'uses' => 'PostController@destroy',
    'as' => 'Post.destroy'
]);
Route::match(['PUT'], 'post-list/{id}', [
    'uses' => 'PostController@update',
    'as' => 'post.update'
]);

Auth::routes();



