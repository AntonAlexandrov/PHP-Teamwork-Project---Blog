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
	'as' => 'administrate',
	'uses' => 'AdminController@desktop'
]);

Route::get('/logout', [
	'as' => 'logout',
	'uses' => 'AdminController@logout'
]);

Route::get('home', 'WelcomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
