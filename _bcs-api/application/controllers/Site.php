<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {
	public function index(){
		
		$url = array(
			"name"			=>	$this->uri->segment(1),
			"identifier"	=>	$this->uri->segment(2)
		);
		
		if($url['name'] != ""){
			$this->load->model('Looks_model');
			if($url['identifier'] != ""){
				$data['json'] = $this->Looks_model->find($url['identifier']);
			}else{
				$data['json'] = $this->Looks_model->index();
			}
			
			
			$this->load->view($url['name'], $data);
		}else{
			$this->load->view('site');
		}
	}
}
