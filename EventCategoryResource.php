<?php

require_once(dirname(__FILE__).'/MainApi.php');

/**
* @author zhzhussupovkz@gmail.com
* @copyright (c) 2014 Zhussupov Zhassulan zhzhussupovkz@gmail.com
* EventCategoryResource class
*/
class EventCategoryResource extends MainApi {

	/**
	* Get events categories 
	* @return json object
	*/
	public function getList($params = array()) {
		$result = $this->send_request('/eventcategories/getlist', $params);
		return $result;
	}

	/**
	* Search for events categories
	* @return json object
	*/
	public function search($params = array()) {
		$result = $this->send_request('/eventcategories/search', $params);
		return $result;
	}

	/**
	* Add/remove subscribtion on the event category
	* Returns the resulting total subscribers count for this category.
	* @return json object
	*/
	public function subscribtion($params = array()) {
		$result = $this->send_request('/eventcategories/subscribtion', $params);
		return $result;
	}
}

