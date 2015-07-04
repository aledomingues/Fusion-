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
Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');
Route::get('vantagens', function(){
	return View::make('layouts.vantagens');
});
Route::get('demonstracao', function(){
	return View::make('layouts.demonstracao');
});
Route::get('contato', function(){
	return View::make('layouts.contato');
});
Route::get('termos-de-uso', function(){
	return View::make('layouts.termos-de-uso');
});
Route::get('politica-de-privacidade', function(){
	return View::make('layouts.politica-de-privacidade');
});
Route::get('register', function(){
	return View::make('auth.register');
});
//Users
Route::get('login', 'UsersController@login');
Route::post('login', 'UsersController@doLogin');
Route::get('logout', 'UsersController@logout');
//Route::get('profile', 'UsersController@profile');
Route::get('profile', function(){
	return View::make('users.profile');
});
Route::get('password', function(){
	return View::make('auth.password');
});
//Companies
Route::get('conheca', function(){
	return View::make('layouts.conheca');
});
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);



