<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wishlist extends CI_Controller {
	public function index() {
		$data['template'] = "pages/wishlist";
		$this->load->view('sections/template',$data);
	}
}

/* End of file wishlist.php */
/* Location: ./application/controllers/wishlist.php */