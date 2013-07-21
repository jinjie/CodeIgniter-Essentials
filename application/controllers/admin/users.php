<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Users extends Admin_Controller {

	public function index() {
		$users = new User();
		
		$users->get();
		
		$this->template->set(array(
			'users'	=> $users,
		));
		
		$this->template->set_partial('actions', 'admin/users/_actions');
		$this->template->build('admin/users/index');
	}

}


/* End of file */