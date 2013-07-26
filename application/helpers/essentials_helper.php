<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function check_method($method_name, $css_class = 'active') {
	$ci =& get_instance();
	
	if (is_array($method_name)) {
		if (in_array($ci->router->fetch_method, $method_name)) {
			return $css_class;
		}
	} else {	
		if (strtolower($ci->router->fetch_method()) === strtolower($method_name)) {
			return $css_class;
		}
	}
	
	return FALSE;
}

function check_class($class_name, $css_class = 'active') {
	$ci =& get_instance();

	if (is_array($class_name)) {
		if (in_array($ci->router->fetch_class(), $class_name)) {
			return $css_class;
		}
	} else {	
		if (strtolower($ci->router->fetch_class()) === strtolower($class_name)) {
			return $css_class;
		}
	}
	
	return FALSE;
}




/* End of file essentials_helper.php */