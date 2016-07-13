<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fb extends CI_Controller {

	public function index(){
        ini_set('user_agent','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.130 Safari/537.36');
	    $this->load->library('simple_html_dom');
        $this->load->view('fb');
	}
}

/* End of file fb.php */
/* Location: ./application/controllers/fb.php */