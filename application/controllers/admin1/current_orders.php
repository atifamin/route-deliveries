<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Current_Orders extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$user = $this->session->userdata("user_session");
		$user_type = $user->user_type;
		if($user_type!="1"){
			redirect();
		}
	}
	
	public function index(){
		$data["current_orders"] = $this->Admin_Model->current_orders();
		$this->load->view('admin/admin/current_orders', $data);
	}

	public function track_order(){
		$this->load->view('admin/admin/track_order');
	}
		
}
