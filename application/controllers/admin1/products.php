<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$user = $this->session->userdata("user_session");
		$user_type = $user->user_type;
		if($user_type!="1"){
			redirect();
		}
	}
	
	public function add(){
		$this->load->view('admin/admin/add_products');
	}
	
	public function add_new_product(){
		$product_name = $this->input->post("product_name");
		$status = $this->Admin_Model->add_new_product($product_name);
		if($status){
			$this->session->set_flashdata("product_added", "You have Added a Product Successfully!");
			redirect("admin1/products/view");
		}
	}
	
	
	//view all products
	public function view(){
		$data["products"] = $this->Admin_Model->all_products();
		$this->load->view('admin/admin/view_products', $data);
	}
	
	//getting product by id
	public function get_prod_byID(){
		$id = $this->input->post("id");
		$data = $this->Admin_Model->get_prod_byID($id);
		echo json_encode($data);
	}
	
	//update product
	public function update_product(){
		$product_name = $this->input->post("product_name");
		$id = $this->input->post("product_id");
		$status = $this->Admin_Model->update_product($product_name, $id);
		if($status){
			$this->session->set_flashdata("product_updated", "You have Updated a Product Successfully!");
			redirect("admin1/products/view");
		}
	}
	
	//delete product
	public function delete_product($id){
		$status = $this->Admin_Model->delete_product($id);
		if($status){
			$this->session->set_flashdata("product_deleted", "You have Deleted a Product Successfully!");
			redirect("admin1/products/view");
		}
	}
		
}
