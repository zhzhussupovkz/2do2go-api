<?php

require_once(dirname(__FILE__).'/MainApi.php');

/**
* @author zhzhussupovkz@gmail.com
* @copyright (c) 2014 Zhussupov Zhassulan zhzhussupovkz@gmail.com
* BadgesResource class
*/
class BadgesResource extends MainApi {

	/**
	* Unset badges
	* @return json object
	*/
	public function unset($params = array()) {
		$result = $this->send_request('/badges/unset', $params);
		return $result;
	}
}

