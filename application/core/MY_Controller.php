<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends MX_Controller {

	public function __construct() {
		parent::__construct();
		
		//$this->load->spark('ion_auth/2.5.0');
		//$this->load->spark('template/1.9.0');
		//$this->load->spark('ci-flash/1.5.1');
		//$this->load->spark('DataMapper-ORM/1.8.2');
		
		// Add JS and CSS
		$this->template
					->append_metadata(script_tag('assets/jquery/jquery.min.js'))
					->append_metadata(link_tag('assets/bootstrap/css/bootstrap.min.css'))
					->append_metadata(script_tag('assets/bootstrap/css/bootstrap.min.js'))
					->append_metadata(link_tag('assets/css/global.css'));
	}

}

require_once dirname(__FILE__) . '/Admin_Controller.php';
require_once dirname(__FILE__) . '/Public_Controller.php';



/* End of file MY_Controller.php */