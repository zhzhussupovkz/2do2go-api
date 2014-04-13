<?php

require_once(dirname(__FILE__).'/Auth.php');

/**
* @author zhzhussupovkz@gmail.com
* @copyright (c) 2014 Zhussupov Zhassulan zhzhussupovkz@gmail.com
* MainApi - class for sending API requests
*/
class MainApi {

	//auth
	private $oauth;

	//access token
	private $access_token;

	//api url
	private $api_url = 'https://2do2go.fitdev.ru/msk/api/2.0';

	//constructor
	public function __construct($client_id, $client_secret) {
		$this->oauth = new Auth($client_id, $client_secret);
		$this->access_token = $this->oauth->get_bearer_token;
	}

	/**
	* send api requests
	* @return json object
	*/
	private function send_request($method, $params) {
		$token = array('access_token' => $this->access_token);
		$params = array_merge($token, $params);
		$header = array(
			'Content-Type: application/json',
			);

		$url = $this->url.'/'.$method;

		$options = array(
			CURLOPT_URL => $url,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_SSL_VERIFYPEER => 0,
		);
		$ch = curl_init();
		curl_setopt_array($ch, $options);
		$result = curl_exec($ch);
		if ($result == false)
			throw new Exception(curl_error($ch));
		curl_close($ch);
		$final = json_decode($result, TRUE);
		if (!$final)
			throw new Exception('Получены неверные данные, пожалуйста, убедитесь, что запрашиваемый метод API существует');
		return $final;
	}
}

