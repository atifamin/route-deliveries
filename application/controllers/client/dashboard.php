<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function __construct(){
		
		parent::__construct();

		$user = $this->session->userdata("user_session");
		$user_type = $user->user_type;
		if($user_type!="3"){
			redirect();
		}
	}
	
	public function index(){
		$this->load->view('admin/client/client_dashboard');
	}
	
}
