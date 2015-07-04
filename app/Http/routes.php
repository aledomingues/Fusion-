
Skip to content
This repository

    Pull requests
    Issues
    Gist

    @claytoncm

You don't have any verified emails. We recommend verifying at least one email.

Email verification helps our support team verify ownership if you lose account access and allows you to receive all the notifications you ask for.

3
0

    0

aledomingues/Fusion-

Fusion-/app/Http/routes.php
@claytoncm claytoncm 5 days ago Criação das páginas do layout

2 contributors
@claytoncm
@danielsatiro
65 lines (50 sloc) 1.557 kB
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

    Status API Training Shop Blog About Help 

    © 2015 GitHub, Inc. Terms Privacy Security Contact 

