<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Auth_Model extends CI_Model{
	
	public function authorization($email, $password){
		$this->db->where("Email", $email);
		$this->db->where("Password", $password);
		$this->db->where("status", "Active");
		return $this->db->get("users");
	}
	
	public function user_session($email){
		$this->db->where("Email", $email);
		$query = $this->db->get("users");
		return $query->row();
	}
	
	public function user_byID($id){
		$this->db->where("id", $id);
		$query = $this->db->get("users");
		return $query->row();
	}
	
}