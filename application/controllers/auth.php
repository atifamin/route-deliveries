<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {
	
	public function __construct()
{
    parent::__construct();
}
	
	public function index(){
		//$this->load->view('web/mission');
	}
	
	public function authorization(){
		$email = $this->input->post("email");
		$password = $this->input->post("password");
		$password = md5($password);
		$status = $this->Auth_Model->authorization($email, $password);
		if($status->num_rows()=="0"){
			echo "0";
		}else{
			$this->user_session($email);
			$user = $status->row();
			$user_type = $user->user_type;
			if($_SERVER['HTTP_REFERER']==base_url("create_order")){
				$user_type = "4";
				echo $user_type;
			}else{
				echo $user_type;
			}
		}
	}
	
	public function user_session($email){
		$session_data = $this->Auth_Model->user_session($email);
		$this->session->set_userdata("user_session", $session_data);
	}
	
}
