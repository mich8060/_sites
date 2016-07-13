<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fqa extends CI_Controller {
	public function index() {
		$data['template'] = "pages/fqa";
		$this->load->view('sections/template',$data);
	}
}

/* End of file fqa.php */
/* Location: ./application/controllers/fqa.php */