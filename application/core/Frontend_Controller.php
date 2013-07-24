<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frontend_Controller extends MY_Controller {
	
	public function __construct() {
		parent::__construct();
		
		$this->template->set_theme('frontend');
		
		$this->template
					->append_metadata(link_tag('assets/css/frontend.css'));
	}
	
}



/* End of file Frontend_Controller.php */