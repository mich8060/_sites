<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Collections extends CI_Controller {
	public function index() {
		$data['template'] = "pages/collections";
		$this->load->view('sections/template',$data);
	}
}

/* End of file collections.php */
/* Location: ./application/controllers/collections.php */