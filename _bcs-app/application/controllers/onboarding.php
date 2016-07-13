<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Onboarding extends CI_Controller {
	public function index() {
		$data['template'] = "pages/onboarding";
		$this->load->view('sections/clean',$data);
	}
}

/* End of file onboarding.php */
/* Location: ./application/controllers/onboarding.php */