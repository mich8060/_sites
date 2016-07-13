<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rma extends CI_Controller {
	public function index() {
		$data['template'] = "pages/rma";
		$this->load->view('sections/template',$data);
	}
}

/* End of file rma.php */
/* Location: ./application/controllers/rma.php */