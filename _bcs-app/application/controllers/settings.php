<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends CI_Controller {
	public function index() {
		$data['template'] = "pages/settings";
		$this->load->view('sections/template',$data);
	}
}

/* End of file settings.php */
/* Location: ./application/controllers/settings.php */