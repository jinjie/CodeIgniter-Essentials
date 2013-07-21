<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->template->set_layout('auth');
		
		$this->lang->load('auth', 'english');
		$this->lang->load('ion_auth', 'english');
	}
	
	public function login() {
		if ($this->ion_auth->logged_in()) {
			redirect("admin");
		}
		
		$this->template->title('Login');
		$this->load->helper('inflector');
		
		if ($this->input->post('login')) {			
			if ($this->config->item('identity', 'ion_auth') == 'email') {
				$this->form_validation->set_rules(array(
					array(
						'field'	=> 'identity',
						'label'	=> 'Email',
						'rules'	=> 'required|valid_email',
					),
				));
			} else {
				$this->form_validation->set_rules(array(
					array(
						'field'	=> 'identity',
						'label'	=> 'Email',
						'rules'	=> 'required',
					),
				));
			}
			
			if ($this->form_validation->run()) {
				$login = $this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $this->input->post('remember'));
				
				if (! $login) {
					$this->flash->error_now($this->ion_auth->errors());
				} else {
					$this->flash->success("Logged in successfully");
					
					if ($return_url = $this->input->get('return_url')) {
						redirect($this->input->get(urldecode($return_url)));
					} else {
						redirect("admin");
					}
				}
			}
		}
		
		$this->template->build('auth/login');
	}
	
	public function forgotten_password($hash = FALSE) {
		$this->template->title('Forgotten Password');
		$this->load->helper('inflector');
		
		if (! $hash) {
			if ($this->input->post('submit')) {
			
				if ($this->config->item('identity', 'ion_auth') == 'email') {
					$this->form_validation->set_rules(array(
						array(
							'field'	=> 'identity',
							'label'	=> 'Email',
							'rules'	=> 'required|valid_email',
						),
					));
				} else {
					$this->form_validation->set_rules(array(
						array(
							'field'	=> 'identity',
							'label'	=> 'Email',
							'rules'	=> 'required',
						),
					));
				}
				
				if ($this->form_validation->run()) {
					$forgotten_password = $this->ion_auth->forgotten_password($this->input->post('identity'));
					
					if (! $forgotten_password) {
						$this->flash->error_now($this->ion_auth->errors());
					} else {
						$this->flash->success_now($this->ion_auth->messages());
					}
				}
			}
		} else {
			$forgotten_password_complete = $this->ion_auth->forgotten_password_complete($hash);
			
			if (! $forgotten_password_complete) {
				$this->flash->error_now("Invalid hash. Please enter your email address to have your password reset link resent.");
			} else {
				$this->flash->success($this->ion_auth->messages());
				redirect("auth/login");
			}
		}
		
		$this->template->build('auth/forgotten_password');
	}
	
	public function change_password() {
		if (! $this->ion_auth->logged_in()) {
			$this->flash->error('Please login');
			redirect("auth/login");
		}
		
		$this->template->set_layout('admin');
		
		$this->template->set_partial('navbar', 'admin/_partials/navbar');
		$this->template->set_partial('left_sidebar', 'admin/_partials/left_sidebar');
		$this->template->set_partial('footer', 'admin/_partials/footer');
		
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
		
		$this->template->build("auth/change_password");
	}
	
	public function logout() {
		$this->ion_auth->logout();
		$this->flash->success($this->ion_auth->messages());
		
		redirect("auth/login");
	}

}



/* End of file auth.php */