<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Drivers extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$user = $this->session->userdata("user_session");
		$user_type = $user->user_type;
		if($user_type!="1"){
			redirect("home");
		}
	}
	
	public function all_drivers(){
		$data["all_drivers"] = $this->Admin_Model->all_drivers();
		$this->load->view('admin/admin/view_all_drivers', $data);
	}

	

	public function get_driver($id){

		$data["driver"] = $this->Admin_Model->get_driver($id);

		$this->load->view('admin/admin/edit_driver', $data);

	}

	

	public function delete_driver($id){

		$status = $this->Admin_Model->delete_driver($id);

		$this->session->set_flashdata("router_deleted", "You have Deleted a Router Successfully!");

		redirect("admin1/drivers/all_drivers");

	}

	

	

	//change the status of a router

	public function change_status(){

		$id = $this->input->post("id");

		$status = $this->input->post("status");

		$status = $this->Router_Signup_Model->change_status($id, $status);

		if($status){

			echo "Status Changed";

		}

	}



	

}

