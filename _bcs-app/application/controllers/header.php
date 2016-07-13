<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Header extends CI_Controller {
	public function index() {
		$data['template'] = "pages/header";
		$this->load->view('sections/clean',$data);
	}
}

/* End of file header.php */
/* Location: ./application/controllers/header.php */