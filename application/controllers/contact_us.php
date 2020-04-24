<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_Us extends CI_Controller {
	
	public function index(){
		$this->load->view('web/contact_us');
	}
	
}
