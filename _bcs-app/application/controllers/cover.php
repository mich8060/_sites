<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cover extends CI_Controller {
	public function index() {
		$data['template'] = "pages/cover";
		$this->load->view('sections/template',$data);
	}
}

/* End of file cover.php */
/* Location: ./application/controllers/cover.php */