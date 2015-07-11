<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\APIBackend;

class UsersController extends Controller {

	public function login(){
		return view('auth.login');
	}

	public function doLogin() {
		if (\Session::get('email')){
			$data = array(
		      'username' => \Session::get('email'),
		      'password' => \Session::get('password'),
			);

			\Session::forget('email');
			\Session::forget('password');
		} else {
			$user = \Input::get();

			$data = array(
			  'username' => $user['email'],
			  'password' => $user['password'],
			);
		}

		$data['client_id'] =  \Config::get('auth.clientId');
		$data['client_secret'] =  \Config::get('auth.clientSecret');
		$data['grant_type'] =  \Config::get('auth.grantType');

		$accessToken = APIBackend::post('oauth/access-token', $data);
		
		if($accessToken->info['http_code'] != 200){
			return \Response::json($accessToken, $accessToken->info['http_code']);
		}

		if(!empty($accessToken->access_token)){
			unset($accessToken->info);

			\Session::put('accessToken', $accessToken);

			$userData = APIBackend::get('users/user-data');

			if($userData->info['http_code'] != 200){
				return \Response::json($userData, $userData->info['http_code']);
			}

			unset($userData->info);
			\Session::put('isLogged', true);
			\Session::put('userData', $userData);

			$next = url('profile'); 
			if (!is_null(\Session::get('next'))){
				$next = Session::get('next');
				\Session::forget('next');				
			}

			$redirect = array('redirect' => $next);
			return \Response::json($redirect, 200);
		}
	}

	public function logout() {
		\Session::forget('accessToken');
		\Session::forget('isLogged');
		\Session::forget('userData');

		return \Redirect::to('/');
	}

	public function profile(){
		$userData = \Session::get('userData');
		return view('users.profile', ['userData' => $userData]);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
