<?php 
/*
	author: besingamk
	date: 09/17/2014
*/


// debug array /  print_r
if ( !function_exists("dprint")) {
	function dprint($array) {
		echo "<pre>";
		print_r($array);
		echo "</pre>";
	}
}

// json context type
if ( !function_exists("contextJson")) {
	function contextJson() {
		header('content-type: application/json');
	}
}

//xml context type
if ( ! function_exists("contextXml") ) {
	function contextXml() {
		header("Content-type: text/xml");
	}
}

// redirect using header()
if ( ! function_exists("redirect") ) {
	function redirect($url) {
		header('Location:'. $url);
	}
}

// redirect using meta tag
if ( !function_exists("metaredirect")) {
	function metaredirect($url) {
		echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
	}
}


// user level 
if (! function_exists("is_active")) {
	function is_active() {
		$CI =& get_instance();
		// instantiating session class
		// do be done the restriction function for active users only
		// return false if not active or not a users
		// codes below
	}
}

// is log in
if ( !function_exists("is_logged")) {
	function is_logged() {
		$session =& get_instance();
		//$usermeta = unserialize($session->session->userdata['usermeta']);
		if ( $session->session->userdata('is_logged') == 1) {
			return true;
		}

		return false;
	}
}

// return user meta, return all user meta if param is default
if ( !function_exists("user_meta")) {
	function user_meta($param = null) {
		$session =& get_instance();

		if ($param == null) {
			return unserialize($session->session->userdata('usermeta'));
		} else {
			$userdata = unserialize($session->session->userdata('usermeta'));
			return $userdata[$param];
		}	
	}
}


?>