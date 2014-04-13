<?php

/**
* @author zhzhussupovkz@gmail.com
* @copyright (c) 2014 Zhussupov Zhassulan zhzhussupovkz@gmail.com
* Auth - basic class for authorization and registration
*/
class Auth {

	//client id
	private $client_id;

	//client secret
	private $client_secret;

	//auth url
	private $auth_url = 'https://auth2do2go.fitdev.ru';

	//constructor
	public function __construct($client_id, $client_secret) {
		$this->client_id = $client_id;
		$this->client_secret = $client_secret;
	}

	/**
	* get token type bearer
	* @return string access token
	*/
	public function get_bearer_token() {
		$required = array('client_id' => $this->client_id, 'client_secret' => $this->client_secret);
		$data = json_encode($required);

		$url = $this->auth_url.'/oauth/token';
		$header = array(
			'Content-Type: application/json',
			'grant_type:client_credentials',
			'scope:anonymous'
			);

		$options = array(
			CURLOPT_URL => $url,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_SSL_VERIFYPEER => 0,
			CURLOPT_POSTFIELDS => $data,
			CURLOPT_HTTPHEADER => $header,
		);
		$ch = curl_init();
		curl_setopt_array($ch, $options);
		$result = curl_exec($ch);
		if ($result == false)
			throw new Exception(curl_error($ch));
		curl_close($ch);
		$result = json_decode($response);
		if (!$result)
			throw new Exception('Server response invalid data type');
		return $result->access_token;
	}
}

