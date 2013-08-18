<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Controller extends MY_Controller {

	public function __construct() {
		parent::__construct();
		
		if (! $this->ion_auth->logged_in()) {
			$this->flash->error("Please login.");
			
			redirect("account/login?return_url=" . urlencode($this->uri->uri_string()));
		}
		
		$this->template->set_partial('navbar', 'partials/navbar');
		$this->template->set_partial('left_sidebar', 'partials/left_sidebar');
		$this->template->set_partial('footer', 'partials/footer');
		
		$this->template->set_theme('admin');
		$this->template->set_layout('2col_left_sidebar_navbar');
		
		$this->template
					->append_metadata(link_tag('assets/css/admin.css'));
	}

}



/* End of file Admin_Controller.php */