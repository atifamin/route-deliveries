<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Save_Address extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$user = $this->session->userdata("user_session");
		$user_type = $user->user_type;
		if($user_type!="3"){
			redirect();
		}
	}
	
	public function index(){
		$user = $this->session->userdata("user_session");
		$User_Id = $user->id;
		
		$data["addresses"] = $this->Client_Model->load_all_address($User_Id);
		$this->load->view('admin/client/save_address', $data);
	}
	
	public function add_new_address(){
		$user = $this->session->userdata("user_session");
		$User_Id = $user->id;
		
		$Place_Name = $this->input->post("Place_Name");
		$Saved_Address = $this->input->post("Saved_Address");
		$Longitude = $this->input->post("Longitude");
		$Latitude = $this->input->post("Latitude");
		$status = $this->Client_Model->add_new_address($User_Id, $Place_Name, $Saved_Address, $Longitude, $Latitude);
		if($status){
			$this->session->set_flashdata("address_added", "You have added an address successfully");
			redirect("client/save_address");
		}
	}
	
	public function delete_address($id){
		$status = $this->Client_Model->delete_address($id);
		if($status){
			$this->session->set_flashdata("address_deleted", "You have deleted an address...");
			redirect("client/save_address");
		}
	}
	
	
}