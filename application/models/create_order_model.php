<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Create_Order_Model extends CI_Model{
	
	public function create_new($data){
		$this->db->insert("orders", $data);
		$last_id = $this->db->insert_id();
		
		//getting order detail
		return $this->order_by_id($last_id);
	}
	
	public function order_by_id($id){
		$this->db->where("id", $id);
		$query = $this->db->get("orders");
		return $query->row();
	}
	
	
		
}