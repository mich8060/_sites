<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Receipt extends CI_Controller {
	public function index() {
		$data['template'] = "pages/receipt";
		$this->load->view('sections/template',$data);
	}
}

/* End of file receipt.php */
/* Location: ./application/controllers/receipt.php */