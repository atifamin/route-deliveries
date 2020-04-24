<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Order_History extends CI_Controller {

	

	public function __construct(){

		parent::__construct();

		$user = $this->session->userdata("user_session");

		$user_type = $user->user_type;

		if($user_type!="1"){

			redirect();

		}

	}

	

	public function index(){

		$data["order_history"] = $this->Admin_Model->order_history();

		$this->load->view('admin/admin/order_history', $data);

	}

		

}

