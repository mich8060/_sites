<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Collections extends CI_Controller {

	public function index(){
	    $this->load->library('simple_html_dom');
        $this->load->view('collections');
	}
}

/* End of file collections.php */
/* Location: ./application/controllers/collections.php */