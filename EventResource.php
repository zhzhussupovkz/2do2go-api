<?php

require_once(dirname(__FILE__).'/MainApi.php');

/**
* @author zhzhussupovkz@gmail.com
* @copyright (c) 2014 Zhussupov Zhassulan zhzhussupovkz@gmail.com
* EventResource class
*/
class EventResource extends MainApi {

	/**
	* Add a comment to the given event 
	* @return json object
	*/
	public function addComment($params = array()) {
		$result = $this->send_request('/events/comments/add', $params);
		return $result;
	}

	/**
	* Get event Method embed additional information in 
	* entity such as users in counters and increment visits counter.
	* @return json object
	*/
	public function get($params = array()) {
		$result = $this->send_request('/events/get', $params);
		return $result;
	}

	/**
	* Get comments list
	* @return json object
	*/
	public function getComments($params = array()) {
		$result = $this->send_request('/events/comments/getlist', $params);
		return $result;
	}

	/**
	* Get events list
	* @return json object
	*/
	public function getList($params = array()) {
		$result = $this->send_request('/events/comments/getlist', $params);
		return $result;
	}

	/**
	* Get recommended events for the given category 
	* @return json object
	*/
	public function getRecommends($params = array()) {
		$result = $this->send_request('/events/getrecommends', $params);
		return $result;
	}

	/**
	* Search events. Returns results sorted by default by search relevance. 
	* @return json object
	*/
	public function search($params = array()) {
		$result = $this->send_request('/events/search', $params);
		return $result;
	}

	/**
	* Vote for the event
	* Returns the resulting total votes count for this counter. 
	* There could be an optional `newBadges` field in response to incrementing a counter.  
	* @return json object
	*/
	public function vote($params = array()) {
		$result = $this->send_request('/events/vote', $params);
		return $result;
	}	

}

