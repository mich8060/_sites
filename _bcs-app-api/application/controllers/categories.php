<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categories extends CI_Controller {

	public function index(){
		$segment = mysql_real_escape_string(strtolower($this->uri->segment(1)));
		$identifier = mysql_real_escape_string(strtolower($this->uri->segment(2)));
	    if($identifier){
		    $this->load->view('categories');
	    }else{
    		$this->load->model('Category_model');
    		$data['query'] = $this->Category_model->read();
    		$this->load->view('api', $data);
	    }
	}
}

/* End of file categories.php */
/* Location: ./application/controllers/categories.php */