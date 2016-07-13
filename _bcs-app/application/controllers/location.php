<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Location extends CI_Controller {
	public function index() {
		$data['template'] = "pages/location";
		$this->load->view('sections/clean',$data);
	}
}

/* End of file location.php */
/* Location: ./application/controllers/location.php */