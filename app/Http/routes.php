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

//Route::get('/', 'WelcomeController@index');
//Route::get('home', 'HomeController@index');

//HomeController
Route::get('/', 'HomeController@index');
Route::get('/blog', 'HomeController@blog');
Route::get('/me', 'HomeController@me');
Route::get('/book', 'HomeController@book');
Route::get('/movie', 'HomeController@movie');
Route::get('/fitness', 'HomeController@fitness');
Route::get('/project', 'HomeController@project');

Route::get('/articles/{id}', 'ArticlesController@show');
Route::post('comment/store', 'CommentsController@store');

Route::controllers([
    'console/auth' => 'Auth\AuthController',
]);


Route::group(['prefix' => 'console', 'middleware' => 'auth'], function(){
    Route::any('/', 'console\MainController@index');
    Route::resource('main', 'console\MainController');
} );

//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

//Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function()
//{
//	Route::get('/', 'AdminHomeController@index');
//	Route::resource('articles', 'PagesController');
//	Route::resource('comments', 'CommentsController');
//});