<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {
	public function index() {
		$data['template'] = "pages/profile";
		$this->load->view('sections/template',$data);
	}
}

/* End of file profile.php */
/* Location: ./application/controllers/profile.php */