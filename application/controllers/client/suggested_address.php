<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Suggested_Address extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}
	
	public function address(){
		$user = $this->session->userdata("user_session");
		if(!empty($user)){
			$user_id = $user->id;
		}else{
			$user_id = 0;
		}
		
		$suggested_values = $this->input->post("suggested_values");
		if($user_id!="0"){
			$data = $this->Client_Model->suggested_address($suggested_values, $user_id);
			//echo"<pre>";print_r($data->result()); exit;
				if(!empty($data)){
					echo '<ul>';
					foreach($data->result() as $data){
						echo '<li onclick="add_address('.$data->id.')">'.$data->Place_Name.'</li>';
					}
					echo '</ul>';
				}else{
					echo "No Record Found";
				}
			
			
			//$this->load->view("admin/client/suggested_address", $data);
		}else{
			echo "No Record Found";
		}
	}
	
	
	public function address1(){
		$user = $this->session->userdata("user_session");
		if(!empty($user)){
			$user_id = $user->id;
		}else{
			$user_id = 0;
		}
		
		$suggested_values = $this->input->post("suggested_values");
		if($user_id!="0"){
			$data = $this->Client_Model->suggested_address($suggested_values, $user_id);
			//echo"<pre>";print_r($data->result()); exit;
				if(!empty($data)){
					echo '<ul>';
					foreach($data->result() as $data){
						echo '<li onclick="add_address1('.$data->id.')">'.$data->Place_Name.'</li>';
					}
					echo '</ul>';
				}else{
					echo "No Record Found";
				}
			
			
			//$this->load->view("admin/client/suggested_address", $data);
		}else{
			echo "No Record Found";
		}
	}
	
	public function get_address(){
		$id = $this->input->post("id");
		$data = $this->Client_Model->get_address($id);
		echo json_encode($data);
	}
	

}