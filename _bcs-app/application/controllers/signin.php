<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signin extends CI_Controller {
	public function index() {
		$data['template'] = "pages/signin";
		$this->load->view('sections/template',$data);
	}
}

/* End of file signin.php */
/* Location: ./application/controllers/signin.php */