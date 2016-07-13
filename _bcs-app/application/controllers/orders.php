<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Orders extends CI_Controller {
	public function index() {
		$data['template'] = "pages/orders";
		$this->load->view('sections/template',$data);
	}
}

/* End of file orders.php */
/* Location: ./application/controllers/orders.php */