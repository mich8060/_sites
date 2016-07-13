<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {
	public function index() {
		$this->load->view('pages/site');
	}
}

/* End of file site.php */
/* Location: ./application/controllers/site.php */