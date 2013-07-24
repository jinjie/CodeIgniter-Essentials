<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Users extends Admin_Controller {

	public function index() {
		$users = new User();
		
		$users->get();
		
		$this->template->set(array(
			'users'	=> $users,
		));
		
		$this->template->set_partial('actions', 'users/_actions');
		$this->template->build('users/index');
	}
	
	public function create() {
		if ($this->input->post('submit')) {
			if ($this->_save()) {
				$this->flash->success($this->ion_auth->messages());
				redirect("admin/users");
			} else {
				$this->flash->error_now($this->ion_auth->errors());
			}
		}
		
		$this->template->build('users/form');
	}
	
	public function edit($id = FALSE) {
		if (! $user = new User($id)) {
			$this->flash->error("User does not exist");
			redirect("admin/users");
		}
		
		$this->template->set(array(
			'user'	=> $user,
		));
		
		if ($this->input->post('submit')) {
			if ($this->_save($id)) {
				$this->flash->success_now($this->ion_auth->messages());
			} else {
				$this->flash->error_now($this->ion_auth->errors());
			}
		}
		
		$this->template->build("users/form");
	}
	
	public function delete($id = FALSE) {
		/**
		 * Cannot delete yourself
		 */
		 
		if ($this->session->userdata('user_id') == $id) {
			$this->flash->error("Cannot delete yourself!");
		} else {
			if ($this->ion_auth->delete_user($id)) {
				$this->flash->success($this->ion_auth->messages());
			} else {
				$this->flash->error($this->ion_auth->errors());
			}
		}
		
		redirect("admin/users");
	}
	
	private function _save($id = FALSE) {
		$this->form_validation->set_rules(array(
			array(
				'field'	=> 'first_name',
				'label'	=> 'First Name',
				'rules'	=> 'required',
			),
			array(
				'field'	=> 'last_name',
				'label'	=> 'Last Name',
				'rules'	=> 'required',
			),
			array(
				'field'	=> 'username',
				'label'	=> 'Username',
				'rules'	=> 'required',
			),
			array(
				'field'	=> 'email',
				'label'	=> 'Email',
				'rules'	=> 'required|valid_email',
			),
		));
		
		if (! $id) {
			// A new user require password to be entered
			$this->form_validation->set_rules(array(
				array(
					'field'	=> 'password',
					'label'	=> 'Password',
					'rules'	=> 'required',
				),
				array(
					'field'	=> 'password2',
					'label'	=> 'Confirm Password',
					'rules'	=> 'required|matches[password]',
				),
			));
		}
		
		if ($this->form_validation->run()) {
			if (! $id) {
				// If this is a new user
				return $this->ion_auth->register(
					set_value('username'),
					set_value('password'),
					set_value('email'),
					array(
						'first_name'	=> set_value('first_name'),
						'last_name'		=> set_value('last_name'),
					)
				);
			} else {
				// This is updating of a user
				$update_data = array(
					'first_name'	=> set_value('first_name'),
					'last_name'		=> set_value('last_name'),
					'username'		=> set_value('username'),
					'email'			=> set_value('email'),
				);
				
				if (set_value('password')) {
					$update_data['password'] = set_value('password');
				}
				
				return $this->ion_auth->update($id, $update_data);
			}
		}
	}

}


/* End of file */