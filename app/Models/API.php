<?php namespace App\Models;

abstract class API
{
	protected $url;
	protected $credentials;

	public static function post($url, $data){
		$data = json_encode($data);
		return self::dispatchRequest('POST', $url, $data);
	}

	public static function get($url, $params = null){
		$url = $url . ($params ? '?'.http_build_query($params, null, '&') : '');
		return self::dispatchRequest('GET', $url);
	}

	public static function put($url, $data){
		$data = json_encode($data);
		return self::dispatchRequest('PUT', $url, $data);
	}

	protected static function dispatchRequest($method, $url, $data = null){
		$instance = new static;
		$ch = curl_init($instance->getUrl() . $url);

		if ($instance->getCredentials() != null) :
			curl_setopt($ch, CURLOPT_HTTPHEADER, array("Authorization: Basic " . base64_encode($instance->getCredentials()), 'Content-Type: application/json'));
			curl_setopt($ch, CURLOPT_USERPWD, $instance->getCredentials());
		endif;

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);

		if ($method == 'HEAD') :
			curl_setopt($ch, CURLOPT_NOBODY, true);
		endif;

		if(!is_null($data)):
			curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
		endif;

		$exec = curl_exec($ch);
		$info = curl_getinfo($ch);

		// close cURL resource, and free up system resources
		curl_close($ch);

		return array('response' => json_decode($exec), 'return_code' => $info['http_code']);
	}

	public static function delete($url, $data = array()){
		$data = json_encode($data);
		return self::dispatchRequest('DELETE', $url, $data);
	}

	public function getUrl(){
		return Config::get($this->url);
	}

	public function getCredentials(){
		if(isset($this->credentials)) return $this->credentials;

		return null;
	}

	public static function head($url){
		return self::dispatchRequest('HEAD', $url);
	}
}