<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index() {
		$data['template'] = "pages/home";
		$this->load->view('sections/template',$data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */