<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order_History extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$user = $this->session->userdata("user_session");
		$user_type = $user->user_type;
		if($user_type!="2"){
			redirect();
		}
	}
	
	public function index(){
		$data["orders"] = $this->Router_Signup_Model->view_old_orders();
		$this->load->view('admin/router/order_history', $data);
	}
	
}
