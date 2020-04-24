<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Create_Order extends CI_Controller {

	

	function  __construct() {

		parent::__construct();

		//$this->load->library('paypal_lib');

	}

	

	public function index(){

		$data["pickup_locations"] = $this->Order_Model->load_pickup_locations();

		$data["products"] = $this->Admin_Model->all_products();

		$data["pickup_address"] = $this->input->post("pickup"); 
		$data["dropoff_address"] = $this->input->post("dropoff");

		$data["pickup_lat"] = $this->input->post("pickup_lat");

		$data["pickup_lon"] = $this->input->post("pickup_lon");

		$data["dropoff_lat"] = $this->input->post("dropoff_lat");

		$data["dropoff_lon"] = $this->input->post("dropoff_lon");
		
		

		/*if($pickup_lat=="34.0635016"){
			$data["pickup_lat"] = $pickup_lat;
		}else{
			$data["pickup_lat"] = "34.0635016";
		}
		
		if($pickup_lon=="-118.44551639999997"){
			$data["pickup_lon"] = $pickup_lon;
		}else{
			$data["pickup_lon"] = "-118.44951639999997";
		}

		if($dropoff_lat=="34.0635016"){
			$data["dropoff_lat"] = $dropoff_lat;
		}else{
			$data["dropoff_lat"] = "34.0635016";
		}

		if($dropoff_lon=="-118.44551639999997"){
			$data["dropoff_lon"] = $dropoff_lon;
		}else{
			$data["dropoff_lon"] = "-118.44051639999997";
		}*/

		$this->load->view('web/create_order', $data);

	}

	

	public function create_new(){

		

		$user = $this->session->userdata("user_session");

		$user_id = $user->id;

		$user_type = $user->user_type;

		if(!empty($user_id)){

			

			//getting latitude and logitude

			$pickup_lat = $this->input->post("pickup_lat");

			$pickup_lon = $this->input->post("pickup_lon");

			$dropoff_lat = $this->input->post("dropoff_lat");

			$dropoff_lon = $this->input->post("dropoff_lon");

			

			//getting distances from latitude and logitude

			$order_distance = $this->haversineGreatCircleDistance($pickup_lat, $pickup_lon, $dropoff_lat, $dropoff_lon);

			

			//converting km into miles

			$order_distance = sprintf('%0.2f', $order_distance * 0.621371);

			

			//$6.99 flat fee within 3 miles. every mile after 3 miles is charged $2.25 per mile.

			$flat_rate = 6.99;

			if($order_distance <=0){

				$total_amount = 0;

			}else if($order_distance > 0 && $order_distance <= 3){

				$total_amount = sprintf('%0.2f', $flat_rate);

			}else{

				//distance after 3 miles

				$distance_after_3miles = $order_distance - 3;

				

				//charges after 3 miles

				$charges = 2.25;

				$charges_after_3miles = $distance_after_3miles * $charges;

				

				$total_amount = sprintf('%0.2f', ($flat_rate + $charges_after_3miles));;

			}

			

			$order_payment = $total_amount;

			

			//getting order details

			$pickup_lat = $this->input->post("pickup_lat");

			$pickup_lon = $this->input->post("pickup_lon");

			$pickup_place = $this->input->post("pickup_place");

			$pickup_address = $this->input->post("pickup_address");

			$pickup_items = $this->input->post("pickup_items");

			$pickup_instructions = $this->input->post("pickup_instructions");

			$dropoff_lat = $this->input->post("dropoff_lat");

			$dropoff_lon = $this->input->post("dropoff_lon");

			$dropoff_place = $this->input->post("dropoff_place");

			$dropoff_address = $this->input->post("dropoff_address");

			$dropoff_items = $this->input->post("dropoff_items");

			$dropoff_instructions = $this->input->post("dropoff_instructions");

			

			//making an array to add order in the database

			$order_data = array(

					"user_id" => $user_id,

					"user_type" => $user_type,

					"order_distance" => $order_distance,

					"date" => date("Y-m-d H:i:s"),

					"assigned_router" => '0',

					"order_payment" => $order_payment,

					"pickup_lat" => $pickup_lat,

					"pickup_lon" => $pickup_lon,

					"pickup_place" => $pickup_place,

					"pickup_address" => $pickup_address,

					"pickup_items" => $pickup_items,

					"pickup_instructions" => $pickup_instructions,

					"dropoff_lat" => $dropoff_lat,

					"dropoff_lon" => $dropoff_lon,

					"dropoff_place" => $dropoff_place,

					"dropoff_address" => $dropoff_address,

					"dropoff_items" => $dropoff_items,

					"dropoff_instructions" => $dropoff_instructions,

					"status" => 'Pending',

					"payment_method" => 'Paypal',

				);

			

			//adding non-paid order and getting the non-paid order detail

			$data["order_detail"] = $this->Create_Order_Model->create_new($order_data);

						

			//getting order id to send in the paypal_config method

			$id = $data["order_detail"]->id;

			

			//getting the paypal configuration data and adding into objects

			$data["paypal_config"] = (object)$this->paypal_config($order_payment, $id);

			

			

			//echo "<pre>"; print_r($data); exit;

			$this->load->view("web/order_confirm", $data);

		}else{

			$this->session->set_flashdata("please_login", "Please Login OR Create an account to Route");

			redirect();

		}

		

		

		

		//$this->Create_Order_Model->create_new($user_id, $user_type, $order_distance);

	}

	

	public function paypal_config($order_payment, $id){

		$return = base_url()."paypal/success_return";

		$cancel_return = base_url()."paypal/cancel_return";

		$notify_url = base_url()."paypal/notify_url";

		

		

		$data = array(

				"cmd"=>"_cart",

				"upload"=>"1",

				"no_note"=>"0",

				"bn"=>"PP-BuyNowBF",

				"tax"=>"0",

				"rm"=>"2",

				"business"=>"routedeliveryservices@gmail.com",

				"handling_cart"=>"0",

				"currency_code"=>"USD",

				"Ic"=>"GB",

				"return"=>$return,

				"cbt"=>"Return to My Site",

				"cancel_return"=>$cancel_return,

				"custom"=>$id,

				"notify_url"=>$notify_url,

				"item_name_1"=>"Carport",

				"quantity_1"=>"1",

				"amount_1"=>$order_payment,

				"shipping_1"=>"0",

				"ppcheckoutbtn"=>"Checkout",

				);

		return $data;

	}

	

	public function haversineGreatCircleDistance($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo){

		  // convert from degrees to radians 

		  $earthRadius = 6371000;

		  $latFrom = deg2rad($latitudeFrom);

		  $lonFrom = deg2rad($longitudeFrom);

		  $latTo = deg2rad($latitudeTo);

		  $lonTo = deg2rad($longitudeTo);

		  

		  $latDelta = $latTo - $latFrom;

		  $lonDelta = $lonTo - $lonFrom;

		  

		  $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) + cos($latFrom)*cos($latTo)*pow(sin($lonDelta / 2), 2)));

		  $final = $angle * $earthRadius;

		  $final = $final/1000;

		  return $final;

	 }

	 	 

	

	

	//creating session for input fields of create order form

	public function store_input_values(){

			if($this->session->userdata("user_input_val")){

				$this->session->unset_userdata("user_input_val");

			}

		

			$data["pickup_lat"] = $this->input->post("pickup_lat");

			$data["pickup_lon"] = $this->input->post("pickup_lon");

			$data["pickup_place"] = $this->input->post("pickup_place");

			$data["pickup_address"] = $this->input->post("pickup_address");

			$data["pickup_items"] = $this->input->post("pickup_items");

			$data["pickup_instructions"] = $this->input->post("pickup_instructions");

			$data["pickup_status"] = $this->input->post("pickup_status");

			

			$data["dropoff_lat"] = $this->input->post("dropoff_lat");

			$data["dropoff_lon"] = $this->input->post("dropoff_lon");

			$data["dropoff_place"] = $this->input->post("dropoff_place");

			$data["dropoff_address"] = $this->input->post("dropoff_address");

			$data["dropoff_items"] = $this->input->post("dropoff_items");

			$data["dropoff_instructions"] = $this->input->post("dropoff_instructions");

			$data["dropoff_status"] = $this->input->post("dropoff_status");

			$this->session->set_userdata("user_input_val", $data);

			echo "Created";

	}

	

	

}

