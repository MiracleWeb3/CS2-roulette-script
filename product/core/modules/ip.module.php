<?php 
	function getip() {
 		if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"),"unknown"))
 			$ip = getenv("HTTP_CLIENT_IP");
		elseif (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown"))
 			$ip = getenv("HTTP_X_FORWARDED_FOR");
		elseif (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown"))
 	 		$ip = getenv("REMOTE_ADDR");

		elseif (!empty($_SERVER['REMOTE_ADDR']) && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown"))
 	   		$ip = $_SERVER['REMOTE_ADDR'];
 	 	else
  	  		$ip = "unknown";
 	 	return($ip);
	}
	
	function iptoken($salt = false) {
		return md5(($salt? $salt.':' : '').CMSSECRET.':'.getip());
	}
?>