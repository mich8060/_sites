<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Orders_empty extends CI_Controller {
	public function index() {
		$data['template'] = "pages/orders_empty";
		$this->load->view('sections/template',$data);
	}
}

/* End of file orders_empty.php */
/* Location: ./application/controllers/orders_empty.php */