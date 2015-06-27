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
		      'email' => \Session::get('email'),
		      'password' => \Session::get('password'),
			);

			\Session::forget('email');
			\Session::forget('password');
		} else {
			$user = \Input::get();

			$data = array(
			  'email' => $user['email'],
			  'password' => $user['password'],
			);
		}

		$login = APIBackend::post('auth/login', $data);
		
		if($login['return_code'] == 406){
			return \Response::json($login['response'], $login['return_code']);
		}

		if(!empty($login['response']->token)){
			\Session::put('isLogged', true);
			\Session::put('userData', $login['response']);

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
		\Session::forget('isLogged');
		\Session::forget('userData');

		return \Redirect::to('/');
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
