<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Routers extends CI_Controller {
	
	public function index(){
		$this->load->view('web/routers');
	}
	
}
