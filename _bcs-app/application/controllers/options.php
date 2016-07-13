<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Options extends CI_Controller {
	public function index() {
		$data['template'] = "pages/options";
		$this->load->view('sections/empty',$data);
	}
}

/* End of file options.php */
/* Location: ./application/controllers/options.php */