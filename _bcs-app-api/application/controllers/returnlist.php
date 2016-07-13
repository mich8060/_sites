<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Returnlist extends CI_Controller {
	public function index(){
	    $segment = mysql_real_escape_string(strtolower($this->uri->segment(2)));
		$identifier = mysql_real_escape_string(strtolower($this->uri->segment(3)));
    	$this->load->model('Returns_model');
    	$data['query'] = $this->Returns_model->remaining($segment, $identifier);
		$this->load->view('returnlist', $data);
	}
}

/* End of file returnlist.php */
/* Location: ./application/controllers/returnlist.php */