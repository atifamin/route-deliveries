<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Owner_Partnership extends CI_Controller {
	

	public function index(){
		
		$user = $this->session->userdata("user_session");
		$user_type = $user->user_type;
		if($user_type!="1"){
			$data["owner_partnership"] = $this->Admin_Model->owner_partnership_all();
			$this->load->view('admin/admin/owner_partnership', $data);
		}


	}

	

	public function add(){

		$first_name = $this->input->post("first_name");

		$last_name = $this->input->post("last_name");

		$email = $this->input->post("email");

		$phone = $this->input->post("phone");

		$business_name = $this->input->post("business_name");

		$business_address = $this->input->post("business_address");

		$no_of_deliveries = $this->input->post("no_of_deliveries");

		$zip_code = $this->input->post("zip_code");

		$date = date("Y-m-d");

		

		$status = $this->Admin_Model->add_owner_partnership_inquiry($first_name, $last_name, $email, $phone, $business_name, $business_address, $no_of_deliveries, $zip_code, $date);

		if($status){

			$data["customer_service"] = array(

				"date" => $date,

				"first_name" => $first_name,

				"last_name" => $last_name,

				"email" => $email,

				"phone" => $phone,

				"business_name" => $business_name,

				"business_address" => $business_address,

				"no_of_deliveries" => $no_of_deliveries,

				"zip_code" => $zip_code,

			);

			$this->sendemail($data);

			$this->session->set_flashdata("inquiry_added", "Thank you for contacting us, we'll get back to you soon!");

			redirect("contact_us");

		}else{

			$this->session->set_flashdata("inquiry_error", "Message not sent, Please try again!");

			redirect("contact_us");

		}

	}

	

	public function delete($id){

		$status = $this->Admin_Model->delete_owner_partnership_inquiry($id);

		if($status){

			$this->session->set_flashdata("inquiry_deleted", "One Record is Deleted Successfully!");

			redirect("admin1/owner_partnership");

		}else{

			$this->session->set_flashdata("inquiry_error", "Message not deleted, Please try again!");

			redirect("admin1/owner_partnership");

		}

	}

	

	public function get_by_id(){

		$id = $this->input->post("id");

		$data["inquiry"] = $this->Admin_Model->get_by_id_owner_inquiry($id);

		$this->load->view('admin/admin/owner_partnership_by_id', $data);

	}
	
	
	public function sendemail($data){
		$data_new["data"] = (object)$data["customer_service"];
		$from = $data_new["data"]->email;
		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'vp2015786@gmail.com',
			'smtp_pass' => 'kyqldvhglnuwninq',
			'mailtype'  => 'html', 
			'charset'   => 'iso-8859-1'
		);
		$this->load->library('email');
		$this->email->initialize($config);
		$this->email->set_newline("\r\n");
		
		$email_message = $this->load->view('business_owner_email', $data_new, true);
		
		//$file_name= './assets/base/uploads/'.$data['upload_data']['file_name'];
		$this->email->from($from, 'Inquiry');
        $this->email->to('info@routedeliveries.com'); 
        $this->email->subject('Business Owner Partnership Inquiry');
        $this->email->message($email_message);
		//$this->email->attach($file_name);
		
		$result = $this->email->send();
	}


}

