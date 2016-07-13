<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gift extends CI_Controller {
	public function index() {
		$data['template'] = "pages/gift";
		$this->load->view('sections/template',$data);
	}
}

/* End of file gift.php */
/* Location: ./application/controllers/gift.php */