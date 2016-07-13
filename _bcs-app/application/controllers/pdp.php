<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pdp extends CI_Controller {
	public function index() {
		$data['template'] = "pages/pdp";
		$this->load->view('sections/template',$data);
	}
}

/* End of file pdp.php */
/* Location: ./application/controllers/pdp.php */