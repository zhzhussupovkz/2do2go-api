<?php

require_once(dirname(__FILE__).'/MainApi.php');

/**
* @author zhzhussupovkz@gmail.com
* @copyright (c) 2014 Zhussupov Zhassulan zhzhussupovkz@gmail.com
* ArticleCategoryResource class
*/
class ArticleCategoryResource extends MainApi {

	/**
	* Get list of categories articles 
	* @return json object
	*/
	public function getList($params = array()) {
		$result = $this->send_request('/articlecategories/getlist', $params);
		return $result;
	}

	/**
	* Search for categories articles 
	* @return json object
	*/
	public function search($params = array()) {
		$result = $this->send_request('/articlecategories/search', $params);
		return $result;
	}

	/**
	* Add/remove subscribtion on the article category
	* Returns the resulting total subscribers count for this category. 
	* @return json object
	*/
	public function subscribe($params = array()) {
		$result = $this->send_request('/articlecategories/subscribe', $params);
		return $result;
	}
}

