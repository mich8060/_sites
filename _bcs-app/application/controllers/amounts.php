<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Amounts extends CI_Controller {
	public function index() {
		$data['template'] = "pages/amounts";
		$this->load->view('sections/empty',$data);
	}
}

/* End of file amounts.php */
/* Location: ./application/controllers/amounts.php */