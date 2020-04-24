<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Current_Orders extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$user = $this->session->userdata("user_session");
		$user_type = $user->user_type;
		if($user_type!="3"){
			redirect();
		}
	}
	
	public function index(){
		$data["order_detail"] = $this->Client_Model->all_current_orders();
		$this->load->view('admin/client/current_orders', $data);
	}
		
	public function get_order(){
		$order_id = $this->input->post("order_id");
		
		//getting order detail
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
		$this->load->view("admin/client/current_order_status", $data);
	}
	
	public function add_order_feedback(){ 
		$feedback = $this->input->post("order_feedback");
		$order_id = $this->input->post("order_id");
		$data = $this->Order_Model->add_order_feedback($feedback, $order_id);
		if($data){
			echo "Thank you for providing us your feedback";
		}
	}
	
	
	//order rating entered and getting data of router
	public function order_rating(){ 
		$rate = $this->input->post("rate");
		$order_id = $this->input->post("order_id");
		
		$data["order_detail"] = $this->Order_Model->order_rating($rate, $order_id);
		$this->load->view("admin/client/order_rating", $data);
	}
	
	//router rating entered and getting data of router
	public function router_rating(){
		$router_rate = $this->input->post("router_rate");
		$order_id = $this->input->post("order_id");
		
		$data["order_detail"] = $this->Order_Model->router_rating($router_rate, $order_id);
		$this->load->view("admin/client/router_rating", $data);
	}
	
}