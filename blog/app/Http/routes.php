<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
	'as' => 'home',
	'uses' => 'WelcomeController@index'
]);

Route::get('articles/{slug}', [
	'as' => 'article',
	'uses' => 'WelcomeController@article'
]);

Route::get('tag/{slug}', [
	'as' => 'tagged',
	'uses' => 'WelcomeController@tags'
]);

Route::get('/admin', [
	'as' => 'adminpage',
	'uses' => 'AdminController@desktop'
]);

Route::get('admin/posts/{id}/edit', 'AdminController@edit');

Route::post('admin/posts/{id}/refresh', 'AdminController@refresh');

Route::get('admin/posts/{id}/delete', 'AdminController@delete');

Route::get('admin/posts/newPost', [
	'as' => 'newPost',
	'uses' =>'AdminController@newPost'
]);

Route::post('admin/posts/newPost', 'AdminController@createNewPost');

Route::get('/logout', [
	'as' => 'logout',
	'uses' => 'AdminController@logout'
]);

Route::get('/desktop', 'AdminController@desktop');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
