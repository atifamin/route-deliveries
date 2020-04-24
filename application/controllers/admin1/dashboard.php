<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$user = $this->session->userdata("user_session");
		$user_type = $user->user_type;
		if($user_type!="1"){
			redirect();
		}
	}
	
	public function index(){
		$data["current_orders"] = $this->Admin_Model->number_of_orders();
		$data["total_clients"] = $this->Admin_Model->number_of_clients();
		$data["total_active_routers"] = $this->Admin_Model->number_of_routers();
		$data["order_analysis"] = $this->Admin_Model->completed_orders_analysis();
		//echo "<pre>";print_r($data);exit; 
		$this->load->view('admin/admin/admin_dashboard', $data);
	}
	
}
