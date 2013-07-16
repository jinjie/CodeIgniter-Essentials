<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cli extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}
	
	public function migrate() {
		$this->load->library('migration');
		$this->migration->latest();
	}

}


/* End of file */