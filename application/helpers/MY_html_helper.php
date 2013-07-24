<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function script_tag($src, $type = FALSE, $options = array()) {
	$script_types = array(
		'js'	=> 'text/javascript',
		'vbs'	=> 'text/vbscript',
	);
	
	
	if ( ! preg_match('#^https?://#i', $src)) {
		$src = base_url($src);
	}
	
	$exploded = explode('.', strtolower($src));
	$file_extension = $exploded[count($exploded) - 1];
	
	if ($type === FALSE) {
		if (array_key_exists($file_extension, $script_types)) {
			$type = $script_types[$file_extension];
		}
	}
	
	$options_imploder = array();
	foreach ($options as $key => $value) {
		$options_imploder[] = "{$key}=\"{$value}\"";
	}
	
	return '<script src="' . $src . '"' . ($type ? ' type="' . $type . '"' : '') . (count($options_imploder) ? ' ' : '') . implode(' ', $options_imploder) .'></script>';
}




/* End of file */