<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Heros extends CI_Controller {

	public function index(){
        $this->load->library('simple_html_dom');
		$this->load->view('heros');
	}
}

/* End of file heros.php */
/* Location: ./application/controllers/heros.php */