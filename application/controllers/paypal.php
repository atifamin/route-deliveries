<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Paypal extends CI_Controller 
{
	public function  __construct(){
		parent::__construct();
		//$this->load->library('paypal_lib');
	}
	 
	public function success_return(){
		$this->session->unset_userdata("user_input_val");
		$response_data = (object)$_POST;
		$order_id = $response_data->custom;
		
		$this->notify_url($order_id);
		$data["order_detail"] = $this->Order_Model->get_order_byID($order_id);
		
		
		$paypal_response_data = $data["order_detail"]->paypal_response;
		$paypal_response_data = json_decode($paypal_response_data);
		$data["paypal_response"] = $paypal_response_data;
		
		
		//getting the pickup product/item name by id
		$pickup_product_id = $data["order_detail"]->pickup_items;
		$data["pickup_product"] = $this->Admin_Model->get_prod_byID($pickup_product_id);
		
		
		//getting the dropoff product/item name by id
		$dropoff_product_id = $data["order_detail"]->dropoff_items;
		$data["dropoff_product"] = $this->Admin_Model->get_prod_byID($dropoff_product_id);

		//echo "<pre>"; print_r($data); exit;
		$this->load->view("web/order_summary", $data);
		
		
	}
	
	public function cancel_return(){
		$this->session->unset_userdata("user_input_val");
		$this->load->view("web/order_cancel");
	}
	
	public function notify_url($order_id){
		$this->session->unset_userdata("user_input_val");
		$data = json_encode($_POST);
		$this->Order_Model->update_order_status($order_id, $data);
	}

}