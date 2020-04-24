<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function logout(){
		$this->session->unset_userdata("user_session");
		$this->session->unset_userdata("user_input_val");
		redirect();
	}
	
}
