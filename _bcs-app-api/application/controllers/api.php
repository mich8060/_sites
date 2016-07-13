<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends CI_Controller {

	public function index(){
		
		$segment = mysql_real_escape_string(strtolower($this->uri->segment(1)));
		$identifier = mysql_real_escape_string(strtolower($this->uri->segment(2)));
		
		$this->load->model('Category_model');
		
		//$data['query'] = $this->Category_model->add($segment);
		
		if($segment == ""){
			$data['query'] = $this->Category_model->read();
		}else{	
			$data['query'] = $this->Category_model->category($segment);
		}
		
		$this->load->view('api', $data);
	}
}

/* End of file api.php */
/* Location: ./application/controllers/api.php */