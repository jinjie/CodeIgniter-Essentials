<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Group extends DataMapper {

	public $has_many = array(
		'user' => array(
			'join_table'	=> 'users_groups',
		),
	);

}


/* End of file */