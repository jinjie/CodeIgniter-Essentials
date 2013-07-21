<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Controller extends MY_Controller {

	public function __construct() {
		parent::__construct();
		
		if (! $this->ion_auth->logged_in()) {
			$this->flash->error("Please login.");
			
			redirect("auth/login?return_url=" . urlencode($this->uri->uri_string()));
		}
		
		$this->template->set_partial('navbar', 'admin/_partials/navbar');
		$this->template->set_partial('left_sidebar', 'admin/_partials/left_sidebar');
		$this->template->set_partial('footer', 'admin/_partials/footer');
		
		$this->template->set_layout('admin');
	}

}



/* End of file Admin_Controller.php */