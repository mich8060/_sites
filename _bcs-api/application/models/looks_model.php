<?php

class Looks_model extends CI_Model {
    
    function index(){
        $this->db->select('*');
		$this->db->from('look');
		$query = $this->db->get();
		$query = $query->result();

		foreach($query as $q){
			// Get associated images.
			$this->db->select('angle,url');
			$this->db->from('look_images');
			$this->db->where('ref_id', $q->id);
			$results = $this->db->get();
			$images = $results->result();
			$q->images = $images;
			
			// Get associated products.
			$this->db->select('sku,colorway,included,brand,title,price,image,options');
			$this->db->from('look_product');
			$this->db->where('ref_id', $q->id);
			$results = $this->db->get();
			$products = $results->result();
			$q->skus = $products;
		}
		
		return $query;
    }

    function find($identifier){
        $this->db->select('*');
		$this->db->from('look');
		$this->db->where('sku', $identifier);
		$query = $this->db->get();
		$query = $query->result();

		foreach($query as $q){
			// Get associated images.
			$this->db->select('angle,url');
			$this->db->from('look_images');
			$this->db->where('ref_id', $q->id);
			$results = $this->db->get();
			$images = $results->result();
			$q->images = $images;
			
			// Get associated products.
			$this->db->select('sku,colorway,included,brand,title,price,image,options,swatches');
			$this->db->from('look_product');
			$this->db->where('ref_id', $q->id);
			$results = $this->db->get();
			$products = $results->result();
			foreach($products as $p){
				$p->options = explode(",",$p->options);
				$p->swatches = explode(",",$p->swatches);
			}
			$q->skus = $products;
		}
		
		return $query;
    }
    
}

/* End of file looks_model.php */
/* Location: ./application/controllers/looks_model.php */