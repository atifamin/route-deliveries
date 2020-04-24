<?php

defined('BASEPATH') OR exit('No direct script access allowed');





class Admin_Model extends CI_Model{

	//getting new total number of orders for dashboard analysis

	public function number_of_orders(){

		$this->db->select("COUNT(*) AS new_orders");

		$this->db->from("orders");

		$this->db->where("STATUS <> 'Delivered' AND STATUS <> 'Pending'");

		$query = $this->db->get();

		//echo "<pre>"; print_r($query->row()); exit;

		$query_run = $query->row();

		return $query_run->new_orders;

	}

	//getting new total number of orders for dashboard analysis

	public function number_of_clients(){

		$this->db->select("COUNT(*) AS total_clients");

		$this->db->from("users");

		$this->db->where("user_type", "3");

		$query = $this->db->get();

		$query_run = $query->row();

		return $query_run->total_clients;

	}

	//getting new total number of orders for dashboard analysis

	public function number_of_routers(){

		$this->db->select("COUNT(*) AS total_routers");

		$this->db->from("users");

		$this->db->where("user_type", "2");

		$this->db->where("status", "Active");

		$query = $this->db->get();

		$query_run = $query->row();

		return $query_run->total_routers;

	}

	//getting new total number of orders for dashboard analysis

	public function completed_orders_analysis(){

		//Collecting total number of orders

		$this->db->select("COUNT(*) AS total_orders");

		$this->db->from("orders");

		$this->db->where("status", "Pending");

		$query = $this->db->get();

		$query_run = $query->row();

		$total_orders = $query_run->total_orders;

		

		//Collection total ordres completed/delivered

		$this->db->select("COUNT(*) AS total_completed_prders");

		$this->db->from("orders");

		$this->db->where("status", "Delivered");

		$query = $this->db->get();

		$query_run = $query->row();

		$total_completed_orders = $query_run->total_completed_prders;
		

		if($total_completed_orders!=0 && $total_orders !=0){
			//calculating the percentage
			$order_delivery_analysis = ($total_completed_orders/$total_orders)*100;
		}else{
			$order_delivery_analysis = "0";
		}

		
		
		
		return round($order_delivery_analysis);
		//print_r(round($order_delivery_analysis)); exit;

		

	}

	//view all clients to admin panel

	public function view_all_clients(){

		$this->db->where("user_type", "3");

		$this->db->order_by("id", "DESC");

		return $this->db->get("users");

	}

		

	public function all_drivers(){

		$this->db->where("user_type", "2");

		return $this->db->get("users");

	}

	

	public function get_driver($id){

		$this->db->where("id", $id);

		$query = $this->db->get("users");

		return $query->row();

	}

	

	public function delete_driver($id){

		$this->db->where("id", $id);

		$this->db->delete("users");

	}

	

	//load all current orders

	public function current_orders(){

		$query = $this->db->query("SELECT * FROM orders WHERE status <> 'Delivered' AND `status` <> 'Pending'");

		return $query;

	}

	

	//load all completed orders

	public function order_history(){

		$query = $this->db->query("SELECT * FROM orders WHERE status = 'Delivered'");

		return $query;

	}

	

	//add new product

	public function add_new_product($product_name){

		$data = array("name"=>$product_name);

		$this->db->insert("products", $data);

		return TRUE;

	}

	

	//load all product

	public function all_products(){

		return $this->db->get("products");

	}

	

	//get product by id

	public function get_prod_byID($id){

		$this->db->where("id", $id);

		$query = $this->db->get("products");

		return $query->row();

	}

	

	//update product

	public function update_product($product_name, $id){

		$this->db->set("name", $product_name);

		$this->db->where("id", $id);

		$this->db->update("products");

		return TRUE;

	}

	

	//delete product

	public function delete_product($id){

		$this->db->where("id", $id);

		$this->db->delete("products");

		return TRUE;

	}

	

	//adding pickup services locations coordinates

	public function add_pickup($pickup){

		$this->db->set("Pickup_Locations", $pickup);

		$this->db->where("Status", "Active");

		$this->db->update("area_of_services");

		return TRUE;

	}

	

	//adding dropoff services locations coordinates

	public function add_droppoff($droppoff){

		$this->db->set("Droppoff_Locations", $droppoff);

		$this->db->where("Status", "Active");

		$this->db->update("area_of_services");

		return TRUE;

	}

	

	//adding customer service inquiry form

	public function add_customer_service_inquiry($first_name, $last_name, $email, $phone, $message, $order_number, $date){

		$data = array(

			"first_name" => $first_name,

			"last_name" => $last_name,

			"email" => $email,

			"phone" => $phone,

			"message" => $message,

			"order_number" => $order_number,

			"date" => $date,

		);

		$query = $this->db->insert("customer_service_inquiries", $data);

		if($query){

			return TRUE;

		}else{

			return FALSE;

		}

	}

	

	//load all customer service inquiry forms

	public function customer_service_all(){

		return $this->db->get("customer_service_inquiries");

	}

	

	//deleting customer service by id

	public function delete_customer_service_inquiry($id){

		$this->db->where("id", $id);

		$query = $this->db->delete("customer_service_inquiries");

		if($query){

			return TRUE;

		}else{

			return FALSE;

		}

	}

	

	//getting data by id of customer service inquiry

	public function get_by_id_customer_inquiry($id){

		$this->db->where("id", $id);

		$query = $this->db->get("customer_service_inquiries");

		return $query->row();

	}

	

	//add owner partnership inquiries

	public function add_owner_partnership_inquiry($first_name, $last_name, $email, $phone, $business_name, $business_address, $no_of_deliveries, $zip_code, $date){

		$data = array(

			"first_name" => $first_name,

			"last_name" => $last_name,

			"email" => $email,

			"phone" => $phone,

			"business_name" => $business_name,

			"business_address" => $business_address,

			"no_of_deliveries" => $no_of_deliveries,

			"zip_code" => $zip_code,

			"date" => $date,

		);

		$query = $this->db->insert("owner_partnership_inquiries", $data);

		if($query){

			return TRUE;

		}else{

			return FALSE;

		}

	}

	

	//load all owner partnership inquiries forms

	public function owner_partnership_all(){

		return $this->db->get("owner_partnership_inquiries");

	}

	

	//deleting customer service by id

	public function delete_owner_partnership_inquiry($id){

		$this->db->where("id", $id);

		$query = $this->db->delete("owner_partnership_inquiries");

		if($query){

			return TRUE;

		}else{

			return FALSE;

		}

	}

	

	//getting data by id of customer service inquiry

	public function get_by_id_owner_inquiry($id){

		$this->db->where("id", $id);

		$query = $this->db->get("owner_partnership_inquiries");

		return $query->row();

	}

}