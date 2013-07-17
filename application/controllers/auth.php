<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends MY_Controller {

	public function __construct() {
		parent::__construct();
	}
	
	public function login() {
		$this->template->title('Login');
		$this->template->set_layout('default');
		$this->template->build('auth/login');
	}

}



/* End of file auth.php */