<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Plp extends CI_Controller {
	public function index() {
		$data['template'] = "pages/plp";
		$this->load->view('sections/template',$data);
	}
}

/* End of file plp.php */
/* Location: ./application/controllers/plp.php */