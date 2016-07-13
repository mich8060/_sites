<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {
	public function index() {
		$data['template'] = "pages/cart";
		$this->load->view('sections/template',$data);
	}
}

/* End of file cart.php */
/* Location: ./application/controllers/cart.php */