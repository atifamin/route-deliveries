<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Router_Signup_Model extends CI_Model{
	//total order recieved for this active user
	public function order_recieved(){
		$user = $this->session->userdata("user_session");
		$user_id = $user->id;
		
		$this->db->select("COUNT(*) AS total_recieved");
		$this->db->from("orders");
		$this->db->where("assigned_router", $user_id);
		$this->db->where("status", "Recieved");
		$query = $this->db->get();
		$query_run = $query->row();
		return $query_run->total_recieved;
	}
	//total order picked_up for this active user
	public function order_picked_up(){
		$user = $this->session->userdata("user_session");
		$user_id = $user->id;
		
		$this->db->select("COUNT(*) AS total_pickedup");
		$this->db->from("orders");
		$this->db->where("assigned_router", $user_id);
		$this->db->where("status", "Picked_Up");
		$query = $this->db->get();
		$query_run = $query->row();
		return $query_run->total_pickedup;
	}
	//total order on_route for this active user
	public function order_on_route(){
		$user = $this->session->userdata("user_session");
		$user_id = $user->id;
		
		$this->db->select("COUNT(*) AS total_on_route");
		$this->db->from("orders");
		$this->db->where("assigned_router", $user_id);
		$this->db->where("status", "On_Route");
		$query = $this->db->get();
		$query_run = $query->row();
		return $query_run->total_on_route;
	}
	//total order delivered for this active user
	public function order_delivered(){
		$user = $this->session->userdata("user_session");
		$user_id = $user->id;
		
		$this->db->select("COUNT(*) AS total_delivered");
		$this->db->from("orders");
		$this->db->where("assigned_router", $user_id);
		$this->db->where("status", "Delivered");
		$query = $this->db->get();
		$query_run = $query->row();
		return $query_run->total_delivered;
	}
	public function router_signup($first, $last, $email, $phone, $city, $resume){
		$this->db->where("Email", $email);
		$query1 = $this->db->get("users");
		if($query1->num_rows()>0){
			return FALSE;
		}else{
			$data = array(
					"user_type" => "2",
					"First_Name" => $first,
					"Last_Name" => $last,
					"Email" => $email,
					"Phone" => $phone,
					"City" => $city,
					"Resume" => $resume,
					"status" => "Reject",
				);
			$this->db->insert("users", $data);
			return TRUE;
		}
	}
	
	public function view_old_orders(){
		$user = $this->session->userdata("user_session");
		$user_id = $user->id;
		$this->db->where("assigned_router", $user_id);
		$this->db->where("status", "Delivered");
		return $this->db->get("orders");
	}
	
	public function change_status($id, $status){
		$this->db->set("Status", $status);
		$this->db->where("id", $id);
		$this->db->update("users");
		return TRUE;
	}
	
	public function assign_password($id, $password){
		$this->db->set("Password", $password);
		$this->db->where("id", $id);
		$this->db->update("users");
		return TRUE;
	}
	
	//update router information
	public function update_router($id, $first, $last, $email, $phone, $city, $password, $image_name, $vehicle, $plates){
		$this->db->set("First_Name", $first);
		$this->db->set("Last_Name", $last);
		$this->db->set("Email", $email);
		$this->db->set("Phone", $phone);
		$this->db->set("City", $city);
		$this->db->set("Image", $image_name);
		$this->db->set("Password", $password);
		$this->db->set("Vehicle", $vehicle);
		$this->db->set("Plates", $plates);
		$this->db->where("id", $id);
		$this->db->update("users");
		return TRUE;
	}
	
		
}