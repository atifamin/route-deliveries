<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order_Detail extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata("user_session")){
			redirect();
		}
	}
	
	public function order($order_id){
		$data["order_detail"] = $this->Order_Model->get_order_byID($order_id);
		
		//getting order paypal response detail
		$data["paypal_response"] = json_decode($data["order_detail"]->paypal_response);
		
		//getting logged in user data
		$user_id = $data["order_detail"]->user_id;
		$data["user_data"] = $this->Auth_Model->user_byID($user_id);
		
		//getting assigned router detail
		$router_id = $data["order_detail"]->assigned_router;
		$data["router_data"] = $this->Admin_Model->get_driver($router_id);
		
		
		//echo "<pre>"; print_r($data); exit;
		$this->load->view('order_detail', $data);
	}
	
}
