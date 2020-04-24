<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$user = $this->session->userdata("user_session");
		$user_type = $user->user_type;
		if($user_type!="2"){
			redirect();
		}
	}
	
	public function index(){
		$data["recieved"] = $this->Router_Signup_Model->order_recieved();
		$data["picked_up"] = $this->Router_Signup_Model->order_picked_up();
		$data["on_route"] = $this->Router_Signup_Model->order_on_route();
		$data["delivered"] = $this->Router_Signup_Model->order_delivered();
		//echo "<pre>"; print_r($data); exit;
		$this->load->view('admin/router/router_dashboard', $data);
	}
	
}
