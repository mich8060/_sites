<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class App extends CI_Controller {
	public function index() {
		$data['template'] = "pages/app";
		$this->load->view('sections/template',$data);
	}
}

/* End of file app.php */
/* Location: ./application/controllers/app.php */