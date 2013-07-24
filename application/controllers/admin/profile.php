<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends Admin_Controller {

	public function change_password() {		
		if ($this->input->post('submit')) {
		
			// Checks if the password matches
			if ($this->input->post('password') !== $this->input->post('password2')) {
				$this->flash->error_now("Password do not match");
			} elseif ($this->input->post('password') == FALSE) {
				$this->flash->error_now("Please enter a password");
			} else {
				$change_password = $this->ion_auth->change_password(
					$this->session->userdata('identity'),
					$this->input->post('cur_password'),
					$this->input->post('password')
				);
				
				if ($change_password) {
					$this->flash->success_now($this->ion_auth->messages());
				} else {
					$this->flash->error_now($this->ion_auth->errors());
				}
			}
		}
		
		$this->template->build("profile/change_password");
	}

}


/* End of file */