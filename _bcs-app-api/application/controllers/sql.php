<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sql extends CI_Controller {

	public function index(){
		$this->load->model('Category_model');
		$data['query'] = $this->Category_model->all();
		$this->load->view('sql', $data);
	}
}

/* End of file sql.php */
/* Location: ./application/controllers/sql.php */