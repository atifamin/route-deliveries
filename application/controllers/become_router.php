<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Become_Router extends CI_Controller {

	

	public function __construct(){

		parent::__construct();

		$this->load->library('email');

		$this->load->helper(array('form', 'url'));

	}

	

	public function index(){

		$this->load->view('web/become_router');

	}

	

	public function router_signup(){

		

		$first = $this->input->post("first");

		$last = $this->input->post("last");

		$email = $this->input->post("email");

		$phone = $this->input->post("phone");

		$city = $this->input->post("city");

		//$resume = $_FILES['resume']['name'];

		

		$config['upload_path']          = './assets/base/uploads/';

		$config['allowed_types']        = 'pdf|gif|jpg|png|doc|docx';

		$this->load->library('upload', $config);

		$file = $this->upload->do_upload('resume');

		if (!($file)){

				$error = array('error' => $this->upload->display_errors());

				echo "<pre>"; print_r($error); exit;

		}

		else{

			$data = array('upload_data' => $this->upload->data());

			$file_name = $data['upload_data']['file_name'];

			

			//enter router information to the database

			$status = $this->Router_Signup_Model->router_signup($first, $last, $email, $phone, $city, $file_name);

			

			if($status){

				$data["router_data"] = (object)array("first"=>$first, "last"=>$last, "email"=>$email, "phone"=>$phone, "city"=>$city);

				$this->email($email, $data);

				$this->session->set_flashdata("router_signup_success", "Thank you for registering as a router with us, We'll contact you soon.");

				redirect("become_router");

			

			}else{

				$this->session->set_flashdata("router_signup_failed", "This email is already registered with us.");

				redirect("become_router");

			}

		}

	}


	public function assign_password($id){

		$password = md5($this->input->post("password"));

		

		$status = $this->Router_Signup_Model->assign_password($id, $password);

		if($status){

			$this->session->set_flashdata("router_edit_success", "You have Updated Router Successfully!");

			redirect("admin1/drivers/all_drivers");

		}

	}

	public function email($Email, $data){
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
		
		$email_message = $this->load->view('router_email', $data, true);
		
		$file_name= './assets/base/uploads/'.$data['upload_data']['file_name'];
		$this->email->from($Email, 'New Router');
        $this->email->to('info@routedeliveries.com'); 
        $this->email->subject('New Router Register');
        $this->email->message($email_message);
		$this->email->attach($file_name);
		
		$result = $this->email->send();
	}

}

