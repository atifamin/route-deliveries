<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Current_Orders extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$user = $this->session->userdata("user_session");
		$user_type = $user->user_type;
		if($user_type!="2"){
			redirect();
		}
	}
	
	public function index(){
		$data["orders"] = $this->Order_Model->unassigned_orders();
		$this->load->view('admin/router/current_orders', $data);
	}
	
	//order assigned to router
	public function order_assigned($order_id){
		$user = $this->session->userdata("user_session");
		$user_id = $user->id;
		$status = "Recieved";
		$satus1 = $this->Order_Model->order_assigned($user_id, $status, $order_id);
		if($satus1){
			$this->session->set_flashdata("order_assigned", "You have assigned an Order Successfully!");
			redirect("router/current_orders");
		}
	}

}
