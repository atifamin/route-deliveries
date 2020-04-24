<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Client_Model extends CI_Model{
	
	//client signup
	public function client_signup($first, $last, $email, $password, $phone, $city){
		$this->db->where("Email", $email);
		$query1 = $this->db->get("users");
		if($query1->num_rows()>0){
			return FALSE;
		}else{
			$data = array(
					"user_type" => "3",
					"First_Name" => $first,
					"Last_Name" => $last,
					"Email" => $email,
					"Password" => $password,
					"Phone" => $phone,
					"City" => $city,
				);
			$this->db->insert("users", $data);
			return TRUE;
		}
	}
	
	//view all orders by user
	public function all_current_orders(){
		$user = $this->session->userdata("user_session");
		$user_type = $user->user_type;
		$user_id = $user->id;
		if($user_type=="3"){
			$query = $this->db->query('SELECT * FROM orders WHERE orders.user_id = '.$user_id.' AND orders.`status` <> "Delivered" AND orders.`status` <> "Pending"');
			return $query;
		}else{
			$this->db->query('SELECT * FROM orders WHERE `status` <> "Pending"');
			return $this->db->get();
		}
	}
	
	//client old model
	public function client_old_orders($user_id){
		$this->db->where("user_id", $user_id);
		$this->db->where("status", "Delivered");
		return $this->db->get("orders");
	}
	
	
	//add new client addresses
	public function add_new_address($User_Id, $Place_Name, $Saved_Address, $Longitude, $Latitude){
		$data = array(
					"User_Id" => $User_Id,
					"Place_Name" => $Place_Name,
					"Saved_Address" => $Saved_Address,
					"Longitude" => $Longitude,
					"Latitude" => $Latitude,
				);
			$this->db->insert("user_addresses", $data);
			return TRUE;
	}
	
	public function load_all_address($User_Id){
		$this->db->where("User_Id", $User_Id);
		return $this->db->get("user_addresses");
		
	}
	
	public function delete_address($id){
		$this->db->where("id", $id);
		$this->db->delete("user_addresses");
		return TRUE;
	}
	
	//getting suggested addresses
	public function suggested_address($suggested_values, $user_id){
		$this->db->select("*");
		$this->db->from("user_addresses");
		$this->db->where("User_Id", $user_id);
		$this->db->where("Place_Name LIKE '%".$suggested_values."%'");
		return $this->db->get();
		/*$this->db->where("Place_Name LIKE '%".$suggested_values."%'");
		$query = $this->db->query("SELECT * FROM user_addresses WHERE Place_Name LIKE '%".$suggested_values."%'");
		return $query->result();*/
	}
	
	public function get_address($id){
		$this->db->where("id", $id);
		$query = $this->db->get("user_addresses");
		return $query->row();
	}
	
}