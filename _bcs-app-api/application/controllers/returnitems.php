<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Returnitems extends CI_Controller {

	public function index(){
		$segment = mysql_real_escape_string(strtolower($this->uri->segment(1)));
		$identifier = mysql_real_escape_string(strtolower($this->uri->segment(2)));
		if($identifier == ""){
    		$this->load->model('Returns_model');
    		$data['query'] = $this->Returns_model->read();
		    $this->load->view('returnitems', $data);
	    }else{
    		$this->load->model('Returns_model');
    		$data['query'] = $this->Returns_model->specific($identifier);
		    $this->load->view('orderitems', $data);
	    }
	}
}

/* End of file returnitems.php */
/* Location: ./application/controllers/returnitems.php */