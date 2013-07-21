<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function __construct() {
		parent::__construct();
		
		$this->load->spark('ion_auth/2.5.0');
		$this->load->spark('template/1.9.0');
		$this->load->spark('ci-flash/1.5.1');
		$this->load->spark('DataMapper-ORM/1.8.2');
	}

}



/* End of file MY_Controller.php */