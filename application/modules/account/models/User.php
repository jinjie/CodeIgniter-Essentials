<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User extends DataMapper {

	public $has_many = array(
		'group' => array(
			'join_table'	=> 'users_groups',
		),
	);

}


/* End of file */