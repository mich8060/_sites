<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Checkout extends CI_Controller {
	public function index() {
		$data['template'] = "pages/checkout";
		$this->load->view('sections/template',$data);
	}
}

/* End of file checkout.php */
/* Location: ./application/controllers/checkout.php */