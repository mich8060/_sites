<?php

class Category_model extends CI_Model {
	
	public function all() {
	    $this->db->select('*');
		$this->db->from('categories');
		$query = $this->db->get();
		
		if($query->num_rows() > 0) {
			foreach($query->result() as $row){
				$data[] = $row;
			}
			return $data;
		}
	}
	
	public function read() {
		$this->db->select('*');
		$this->db->from('categories');
		$this->db->where('parent', ''); 
		$this->db->order_by('order','asc');
		$query = $this->db->get();
		
		if($query->num_rows() > 0) {
			foreach($query->result() as $row){
				$data[] = $row;
			}
			return $data;
		}
		
	}
	
	public function category($segment){
		$this->db->select('*');
		$this->db->from('categories');
		$this->db->where('parent', $segment);
		$this->db->order_by('name','asc');
		$query = $this->db->get();
		
		if($query->num_rows() > 0) {
			foreach($query->result() as $row){
				$data[] = $row;
			}
			return $data;
		}
	}
	
	public function add($segment){
		$json = json_decode(file_get_contents("http://api.backcountry.com/mobile/brands"));
		foreach($json as $j){
			$insert = array(
				'bcs_id'	=>	$j->id,
				'name'		=>	$j->name,
				'hasChild'	=>	'0',
				'parent'	=>	'appCat000001',
				'order'		=>	''
			);
			$this->db->insert('categories', $insert); 
		}
	}
	
}

/* End of file category_model.php */
/* Location: ./application/controllers/category_model.php */