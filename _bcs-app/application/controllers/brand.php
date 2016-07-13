<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Brand extends CI_Controller {
	public function index() {
		$data['template'] = "pages/brand";
		$this->load->view('sections/template',$data);
	}
}

/* End of file brand.php */
/* Location: ./application/controllers/brand.php */