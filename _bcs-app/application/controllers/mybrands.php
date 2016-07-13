<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mybrands extends CI_Controller {
	public function index() {
		$data['template'] = "pages/mybrands";
		$this->load->view('sections/template',$data);
	}
}

/* End of file mybrands.php */
/* Location: ./application/controllers/mybrands.php */