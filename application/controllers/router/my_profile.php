<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My_Profile extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$user = $this->session->userdata("user_session");
		$user_type = $user->user_type;
		if($user_type!="2"){
			redirect();
		}
	}

	public function index(){
		$user = $this->session->userdata("user_session");
		$user_id = $user->id;
		$data["driver"] = $this->Admin_Model->get_driver($user_id);
		$this->load->view('admin/router/my_profile', $data);
	}

	public function edit_router($id){
		//User Session Data
		$user = $this->session->userdata("user_session");

		//Uploading File
		$config['upload_path']          = './assets/base/uploads/';
		$config['allowed_types']        = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->do_upload('image');
		$uploaded_data = array('upload_data' => $this->upload->data());
		$image_name = $uploaded_data['upload_data']['file_name'];

		//Checking if user didnt updated the image
		if(!empty($image_name)){
			$image_name;
		}else{
			$image_name = $user->Image;
		}

		$first = $this->input->post("first");
		$last = $this->input->post("last");
		$email = $this->input->post("email");
		$phone = $this->input->post("phone");
		$city = $this->input->post("city");
		$vehicle = $this->input->post("vehicle");
		$plates = $this->input->post("plates");

		//checking if user entered the password or not
		if(($this->input->post("password")!="")){
			$password = md5($this->input->post("password"));
		}else{
			$password = $user->Password;
		}

		$status = $this->Router_Signup_Model->update_router($id, $first, $last, $email, $phone, $city, $password, $image_name, $vehicle, $plates);
		if($status){
			$this->session->unset_userdata("user_session");
			$session_data = $this->Auth_Model->user_session($email);
			$this->session->set_userdata("user_session", $session_data);
			$this->session->set_flashdata("router_updated", "You have updated your profile successfully.");
			redirect("router/my_profile");
		}else{
			$this->session->set_flashdata("router_error", "Something went wrong.");
			redirect("router/my_profile");
		}
	}

}

