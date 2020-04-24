<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My_Orders extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$user = $this->session->userdata("user_session");
		$user_type = $user->user_type;
		if($user_type!="2"){
			redirect();
		}
	}
	
	public function index(){
		$data["router_active_orders"] = $this->Order_Model->router_active_orders();
		$this->load->view('admin/router/my_orders', $data);
	}
	
	public function order_status($id){
		$data["order_byID"] = $this->Order_Model->get_order_byID($id);
		$this->load->view('admin/router/order_status', $data);
	}
	
	public function change_status(){
		$id = $this->input->post("id");
		$status = $this->input->post("status");
		$status = $this->Order_Model->change_status($id, $status);
		if($status){
			echo "Status Changed";
		}
	}
}
