<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Services_Area extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$user = $this->session->userdata("user_session");
		$user_type = $user->user_type;
		if($user_type!="1"){
			redirect();
		}
	}
	
	public function index(){
		$data["order_history"] = $this->Admin_Model->order_history();
		$this->load->view('admin/admin/services_area', $data);
	}
	
	public function add_pickup(){
		$pickup = $this->input->post("pickup");
		$data = $this->Admin_Model->add_pickup($pickup);
		if($data){
			echo "Location Added";
		}
	}
	
	public function add_droppoff(){
		$droppoff = $this->input->post("droppoff");
		$data = $this->Admin_Model->add_droppoff($droppoff);
		if($data){
			echo "Location Added";
		}
	}
}