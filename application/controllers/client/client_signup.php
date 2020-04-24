<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client_Signup extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$first = $this->input->post("client_signup_first");
		$last = $this->input->post("client_signup_last");
		$email = $this->input->post("client_signup_email");
		$password = $this->input->post("client_signup_password");
		$password = md5($password);
		$phone = $this->input->post("client_signup_phone");
		$city = $this->input->post("client_signup_city");
		
		$status = $this->Client_Model->client_signup($first, $last, $email, $password, $phone, $city);
		if($status){
			$session_data = $this->Auth_Model->user_session($email);
			$this->session->set_userdata("user_session", $session_data);
			$this->session->set_flashdata("client_signup_success", "Well done! You are successfully registered with us.");
			redirect();
		}else{
			$this->session->set_flashdata("client_signup_failed", "This email is already registered with us.");
			redirect();
		}
	}
	
}
