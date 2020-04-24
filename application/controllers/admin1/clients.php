<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clients extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$user = $this->session->userdata("user_session");
		$user_type = $user->user_type;
		if($user_type!="1"){
			redirect();
		}
	}
	
	public function index(){
		$data["clients"] = $this->Admin_Model->view_all_clients();
		$this->load->view('admin/admin/clients', $data);
	}
	
}
