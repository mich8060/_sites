<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Passions extends CI_Controller {
	public function index() {
		$data['template'] = "pages/passions";
		$this->load->view('sections/template',$data);
	}
}

/* End of file passions.php */
/* Location: ./application/controllers/passions.php */