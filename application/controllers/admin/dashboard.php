<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends Admin_Controller {

	public function index() {
		$this->template->build('admin/dashboard/index');
	}

}


/* End of file */