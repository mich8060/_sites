<?php

class Returns_model extends CI_Model {
	
	public function read() {
		$query = $this->db->query('SELECT * FROM returns ORDER BY "status" ASC');
		
		if($query->num_rows() > 0) {
			foreach($query->result() as $row){
			    
			    $q = $this->db->query("SELECT * FROM return_products WHERE ref_number='".$row->number."'");
			    if($q->num_rows() > 0) {
			        foreach($q->result() as $r){
			            $row->product[] = $r;
		            }
		        }
				
				$data[] = $row;
			}
			return $data;
		}	
	}
	
	public function specific($identifier){
	    $query = $this->db->query("SELECT * FROM return_products WHERE ref_number='".$identifier."'");
		
		if($query->num_rows() > 0) {
			foreach($query->result() as $row){
				$data[] = $row;
			}
			return $data;
		}
	}
	
	public function remaining($order, $sku){
	    $query = $this->db->query("SELECT * FROM return_products WHERE sku != '".$sku."' AND ref_number='".$order."'");
	    if($query->num_rows() > 0) {
			foreach($query->result() as $row){
				$data[] = $row;
			}
			return $data;
		}
	}
	
}

/* End of file returns_model.php */
/* Location: ./application/controllers/returns_model.php */