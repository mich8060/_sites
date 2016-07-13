<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller {
	public function index() {
		$data['template'] = "pages/account";
		$this->load->view('sections/template',$data);
	}
}

/* End of file account.php */
/* Location: ./application/controllers/account.php */