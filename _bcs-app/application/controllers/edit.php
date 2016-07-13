<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Edit extends CI_Controller {
	public function index() {
		$data['template'] = "pages/edit";
		$this->load->view('sections/clean',$data);
	}
}

/* End of file edit.php */
/* Location: ./application/controllers/edit.php */