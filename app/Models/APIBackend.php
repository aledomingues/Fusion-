<?php namespace App\Models;

use App\Models;

class APIBackend extends Models\API {
	protected $url = 'app.apiPath';

	public function getCredentials(){
		$accessToken = \Session::get('accessToken');

		if(!empty($accessToken)){
			$tokenType = $accessToken->token_type;
			$this->credentials = $accessToken->access_token;
			return $this->credentials;
		}

		return null;
	}
}