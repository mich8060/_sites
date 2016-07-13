<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Scrap extends CI_Controller {

	public function index(){
        $this->load->library('simple_html_dom');
        $this->load->model('Scrap_model');
		$data['query'] = $this->Scrap_model->copy();
        $this->load->view('scrap');
	}
}

/* End of file scrap.php */
/* Location: ./application/controllers/scrap.php */