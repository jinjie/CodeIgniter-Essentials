<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends MY_Controller {

	public function __construct() {
		parent::__construct();
	}
	
	public function login() {
		$this->template->title('Login');
		$this->template->set_layout('default');
		
		if ($this->input->post('login')) {
			$login = $this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $this->input->post('remember'));
			
			if (! $login) {
				$this->flash->error_now($this->ion_auth->errors());
			}
		}
		
		$this->template->build('auth/login');
	}

}



/* End of file auth.php */