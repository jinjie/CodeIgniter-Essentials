<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// Reference: http://ellislab.com/forums/viewthread/159535/#775628
/**
 * Make set_value also returned fields that is not validated
 */
if ( ! function_exists('set_value'))
{
	function set_value($field = '', $default = '', $prep = FALSE)
	{
		$OBJ =& _get_validation_object();
	
		if ($OBJ === TRUE && isset($OBJ->_field_data[$field]))
		{
			if ($prep) 
				return form_prep($OBJ->set_value($field, $default));
			else
				return $OBJ->set_value($field, $default);
		}
		else
		{
			if ( ! isset($_POST[$field]))
			{
			  return $default;
			}
	
			if ($prep)
				return form_prep($_POST[$field]);
			else
				return $_POST[$field];
		}
	}
}




/* End of file */