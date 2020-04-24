<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Order_Model extends CI_Model{
	
	public function unassigned_orders(){
		$this->db->where("status", "Active");
		return $this->db->get("orders");
	}
	
	//asssign order to the router
	public function order_assigned($user_id, $status, $order_id){
		$this->db->set("assigned_router", $user_id);
		$this->db->set("status", $status);
		$this->db->where("id", $order_id);
		$this->db->update("orders");
		return TRUE;
	}
	
	//router active orders
	public function router_active_orders(){
		$user = $this->session->userdata("user_session");
		$user_id = $user->id;
		$query = $this->db->query("SELECT * FROM orders WHERE orders.assigned_router = $user_id AND orders.`status` <> 'Delivered' AND orders.`status` <> 'Pending'");
		return $query;
	}
	
	//get order by id
	public function get_order_byID($id){
		$this->db->where("id", $id);
		$query = $this->db->get("orders");
		return $query->row();
	}
	
	//change status of order
	public function change_status($id, $status){
		$this->db->set("status", $status);
		$this->db->where("id", $id);
		$this->db->update("orders");
		return TRUE;
	}
	
	//update order_status by id
	public function update_order_status($order_id, $data){
		$this->db->set("status", "Active");
		$this->db->set("paypal_response", $data);
		$this->db->where("id", $order_id);
		$this->db->update("orders");
	}
	
	//add order feedback by a user
	public function add_order_feedback($feedback, $order_id){
		$this->db->set("order_feedback", $feedback);
		$this->db->where("id", $order_id);
		$this->db->update("orders");
		return TRUE;
	}
	
	//add order rating by a user
	public function order_rating($rate, $order_id){
		$this->db->set("order_rating", $rate);
		$this->db->where("id", $order_id);
		$this->db->update("orders");
		
		$this->db->where("id", $order_id);
		$query = $this->db->get("orders");
		return $query->row();
	}
	
	
	public function router_rating($rate, $order_id){
		$this->db->set("router_rating", $rate);
		$this->db->where("id", $order_id);
		$this->db->update("orders");
		
		$this->db->where("id", $order_id);
		$query = $this->db->get("orders");
		return $query->row();
	}
	
	//select all data of pickup locations from area_of_services 
	public function load_pickup_locations(){
		$this->db->where("Status", "Active");
		$query = $this->db->get("area_of_services");
		return $query->row();
	}		
}