<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Base extends CI_Controller {
	public function index() {
		$data['template'] = "pages/base";
		$this->load->view('sections/template',$data);
	}
}

/* End of file base.php */
/* Location: ./application/controllers/base.php */