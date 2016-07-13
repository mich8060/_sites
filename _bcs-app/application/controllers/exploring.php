<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Exploring extends CI_Controller {
	public function index() {
		$data['template'] = "pages/exploring";
		$this->load->view('sections/empty',$data);
	}
}

/* End of file exploring.php */
/* Location: ./application/controllers/exploring.php */