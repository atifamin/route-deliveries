<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Customer_Service extends CI_Controller {

	public function index(){
		$user = $this->session->userdata("user_session");
		$user_type = $user->user_type;
		if($user_type!="1"){
			$data["customer_service"] = $this->Admin_Model->customer_service_all();
			$this->load->view('admin/admin/customer_service', $data);
		}
	}

	

	public function add(){

		$first_name = $this->input->post("first_name");

		$last_name = $this->input->post("last_name");

		$email = $this->input->post("email");

		$phone = $this->input->post("phone");

		$message = $this->input->post("message");

		$order_number = $this->input->post("order_number");

		$date = date("Y-m-d");

		

		$status = $this->Admin_Model->add_customer_service_inquiry($first_name, $last_name, $email, $phone, $message, $order_number, $date);

		if($status){

			$data["customer_service"] = array(

				"order_number" => $order_number,

				"date" => $date,

				"first_name" => $first_name,

				"last_name" => $last_name,

				"email" => $email,

				"phone" => $phone,

				"message" => $message,

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

		$status = $this->Admin_Model->delete_customer_service_inquiry($id);

		if($status){

			$this->session->set_flashdata("inquiry_deleted", "One Record is Deleted Successfully!");

			redirect("admin1/customer_service");

		}else{

			$this->session->set_flashdata("inquiry_error", "Message not deleted, Please try again!");

			redirect("admin1/customer_service");

		}

	}

	

	public function get_by_id(){

		$id = $this->input->post("id");

		$data["inquiry"] = $this->Admin_Model->get_by_id_customer_inquiry($id);

		$this->load->view('admin/admin/customer_service_by_id', $data);

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
		
		$email_message = $this->load->view('customer_service_email', $data_new, true);
		
		//$file_name= './assets/base/uploads/'.$data['upload_data']['file_name'];
		$this->email->from($from, 'Inquiry');
        $this->email->to('info@routedeliveries.com'); 
        $this->email->subject('Customer Service Inquiry');
        $this->email->message($email_message);
		//$this->email->attach($file_name);
		
		$result = $this->email->send();
	}

}

