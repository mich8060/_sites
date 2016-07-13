<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Intro extends CI_Controller {
	public function index() {
		$data['template'] = "pages/intro";
		$this->load->view('sections/clean',$data);
	}
}

/* End of file intro.php */
/* Location: ./application/controllers/intro.php */