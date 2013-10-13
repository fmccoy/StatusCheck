<?php

/**
 * StatusCheck
 * 
 * @version 1.0
 */

namespace StatusCheck;

class StatusCheck{
	public $url;

	public function __construct($url = null){
		$this->theStatus($url);
	}

	public function getStatus($url = null){
		if(!$url) return;
		$result = get_headers($url, 1);
		return $result;
	}

	public function theStatus($url = null){
		$status = $this->getStatus($url)
		if($status == 'HTTP/1.1 404 Not Found'){
			$result = '404';
		}
		return $result;
	}
}