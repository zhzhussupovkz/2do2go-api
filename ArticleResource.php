<?php

require_once(dirname(__FILE__).'/MainApi.php');

/**
* @author zhzhussupovkz@gmail.com
* @copyright (c) 2014 Zhussupov Zhassulan zhzhussupovkz@gmail.com
* ArticleResource class
*/
class ArticleResource extends MainApi {

	/**
	* Add a comment to the given article
	* @return json object
	*/
	public function addComments($params = array()) {
		$result = $this->send_request('/articles/comments/add', $params);
		return $result;
	}

	/**
	* Get article Method embed additional information in 
	* entity such as users in counters and increment visits counter. 
	* @return json object
	*/
	public function get($params = array()) {
		$result = $this->send_request('/articles/get', $params);
		return $result;
	}

	/**
	* Get Comments list
	* @return json object
	*/
	public function getComments($params = array()) {
		$result = $this->send_request('/articles/comments/getlist', $params);
		return $result;
	}

	/**
	* Get Articles list
	* @return json object
	*/
	public function getList($params = array()) {
		$result = $this->send_request('/articles/getlist', $params);
		return $result;
	}

	/**
	* Search Articles
	* @return json object
	*/
	public function search($params = array()) {
		$result = $this->send_request('/articles/search', $params);
		return $result;
	}
}

