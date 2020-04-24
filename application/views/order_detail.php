<?php include(APPPATH."views/admin/includes1/header1.php"); ?>
<?php include(APPPATH."views/admin/includes1/header2.php"); ?>
<?php
	$user = $this->session->userdata("user_session");
	$user_type = $user->user_type;
	if($user_type=="1"){
		include(APPPATH."views/admin/admin/includes/main_nav.php");
	}else if($user_type=="2"){
		include(APPPATH."views/admin/router/includes/main_nav.php");
	}
?>

<div class="page-content-wrapper">
  <div class="page-content" style="min-height:650px !important">
    <div class="row">
      <div class="col-md-12">
        <div class="full-height-content">
          <div class="full-height-content-body"> 
            <!--
            -- STARTING PAGE HERE
            -->
            
            <?php

	$status = $order_detail->status;
	
	if($status=="Recieved" || $status=="Picked_Up" || $status=="On_Route" || $status=="Delivered"){
		$recieved_status = "active";
	}else{
		$recieved_status = "";
	}
	
	if($status=="Picked_Up" || $status=="On_Route" || $status=="Delivered"){
		$recieved_status = "done";
		$picked_status = "active";
	}else{
		$picked_status = "";
	}
	
	if($status=="On_Route" || $status=="Delivered"){
		$recieved_status = "done";
		$picked_status = "done";
		$route_status = "active";
	}else{
		$route_status = "";
	}
	
	if($status=="Delivered"){
		$recieved_status = "done";
		$picked_status = "done";
		$route_status = "done";
		$deliver_status = "last done";
	}else{
		$deliver_status = "last";
	}

?>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="portlet light ">
                  <div class="portlet-body">
                    <div class="row">
                      <div class="col-lg-12 col-xs-12 col-sm-12">
                        <div class="portlet light ">
                          <div class="portlet-title">
                            <div class="caption caption-md"> <i class="icon-bar-chart font-dark hide"></i> <span class="caption-subject font-green-steel bold uppercase">Order Detail</span> </div>
                          </div>
                          <div class="portlet-body">
                            <div class="table-scrollable table-scrollable-borderless">
                              <table class="table table-hover table-light">
                                <thead>
                                  <tr class="uppercase">
                                    <th> Order Id# </th>
                                    <th> Pick up Location </th>
                                    <th> Drop off </th>
                                    <th> DATE </th>
                                    <th> STATUS </th>
                                  </tr>
                                </thead>
                                <tr>
                                  <td><?php echo $order_detail->id; ?></td>
                                  <td><?php echo $order_detail->pickup_address; ?></td>
                                  <td><?php echo $order_detail->dropoff_address; ?></td>
                                  <td><?php echo $order_detail->date; ?></td>
                                  <td><span class="label label-sm label-success"> <?php echo $order_detail->status; ?> </span></td>
                                </tr>
                              </table>
                            </div>
                            <div class="col-lg-12" style="margin-top:3%">
                              <div class="col-lg-6" align="center"><img src="<?php echo site_url("assets/admin/img/on_route.jpg")?>" width="90"></div>
                              <div class="col-lg-6" align="center"><img src="<?php echo site_url("assets/admin/img/deliver.jpg")?>" width="100"></div>
                            </div>
                            <div class="col-lg-12">
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <input type="text" class="form-control" placeholder="Place Name" value="<?php echo $order_detail->pickup_place; ?>">
                                </div>
                                <div class="form-group">
                                  <input type="text" class="form-control" placeholder="Pickup Items" value="<?php echo $order_detail->pickup_items; ?>">
                                </div>
                                <div class="form-group">
                                  <input type="text" class="form-control" placeholder="Phone Number" value="<?php echo $user_data->Phone; ?>">
                                </div>
                                <div class="form-group">
                                  <input type="text" class="form-control" placeholder="Item Description" value="<?php echo $order_detail->pickup_items; ?>">
                                </div>
                                <div class="form-group">
                                  <textarea class="form-control" rows="3" placeholder="Special Instructions"><?php echo $order_detail->pickup_instructions; ?></textarea>
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <input type="text" class="form-control" placeholder="Place Name" value="<?php echo $order_detail->dropoff_place; ?>">
                                </div>
                                <div class="form-group">
                                  <input type="text" class="form-control" placeholder="Dropoff Items" value="<?php echo $order_detail->dropoff_items; ?>">
                                </div>
                                <div class="form-group">
                                  <textarea class="form-control" rows="3" placeholder="Special Instructions"><?php echo $order_detail->dropoff_instructions; ?></textarea>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="portlet light ">
                  <div class="portlet-body">
                    <div class="row">
                      <div class="col-md-6"> 
                        <!--begin: widget 1-1 -->
                        <?php if(!empty($router_data)){ ?>
                        <div class="mt-widget-1">
                          <div class="mt-img"> <img src="<?php echo site_url("assets/base/uploads/".$router_data->Image."")?>" width="100"> </div>
                          <div class="mt-body">
                            <h3 class="mt-username"><?php echo $router_data->First_Name." ".$router_data->Last_Name; ?></h3>
                            <p class="mt-user-title"><?php echo $router_data->Email; ?></p>
                            <p class="mt-user-title"><strong>Vehicle:</strong> <?php echo $router_data->Vehicle; ?></p>
                            <p class="mt-user-title"><strong>Plates:</strong> <?php echo $router_data->Plates; ?></p>
                            <p class="mt-user-title"><strong>Phone #</strong> <?php echo $router_data->Phone; ?></p>
                            <p class="mt-user-title">
                              <?php for($a=1; $a<=5; $a++){ ?>
                              <?php
                    $router_rating = $order_detail->router_rating;
                    if(!empty($router_rating) && $a<=$router_rating){
                        $class1 = "glyphicon glyphicon-heart";
                    }else{
                        $class1 = "icon-heart";
                    }
                ?>
                              <span class="<?php echo $class1; ?>"></span>
                              <?php } ?>
                            </p>
                          </div>
                        </div>
                        <?php }else{ ?>
                        <div class="col-md-6">
                          <p class="mt-user-title" align="center">No router has assigned yet</p>
                        </div>
                        <?php } ?>
                        <!--end: widget 1-1 --> 
                      </div>
                      <div class="col-md-6"> 
                        <!--begin: widget 1-2 -->
                        <div class="mt-widget-1">
                          <h3 class="mt-username" style="margin-top:5%"><strong>Payment Method</strong></h3>
                          <div > <img src="<?php echo site_url("assets/admin/img/Paypal-Logo.png")?>" width="200"> </div>
                          <div class="mt-body" style="margin-top:5%">
                            <h3 class="mt-username" align="left">Reference</h3>
                            <p class="mt-user-title"> <strong>Route deliver user ID:</strong> <?php echo $paypal_response->payer_id; ?> </p>
                            <p class="mt-user-title"> <strong>Route deliver user Email:</strong> <?php echo $paypal_response->payer_email; ?> </p>
                            <p class="mt-user-title"> <?php echo $paypal_response->verify_sign; ?> </p>
                            <p class="mt-user-title"> <strong>Total:</strong> $<?php echo number_format($order_detail->order_payment); ?> </p>
                          </div>
                        </div>
                        <!--end: widget 1-2 --> 
                      </div>
                    </div>
                  </div>
                </div>
                <div class="portlet light ">
                  <div class="portlet-body">
                    <div class="row">
                      <div class="mt-element-step">
                        <div class="row step-line">
                          <div class="col-md-3 mt-step-col first <?php echo $recieved_status; ?>">
                            <div class="mt-step-number bg-white">1</div>
                            <div class="mt-step-title uppercase font-grey-cascade">Order Recieved</div>
                            <div class="mt-step-content font-grey-cascade"><img src="<?php echo site_url("assets/admin/img/order_recieved.png")?>" width="50"></div>
                          </div>
                          <div class="col-md-3 mt-step-col second <?php echo $picked_status; ?>">
                            <div class="mt-step-number bg-white">2</div>
                            <div class="mt-step-title uppercase font-grey-cascade">Picked Up</div>
                            <div class="mt-step-content font-grey-cascade"><img src="<?php echo site_url("assets/admin/img/picked_up.png")?>" width="80"></div>
                          </div>
                          <div class="col-md-3 mt-step-col <?php echo $route_status; ?>">
                            <div class="mt-step-number bg-white">3</div>
                            <div class="mt-step-title uppercase font-grey-cascade">On Route to You</div>
                            <div class="mt-step-content font-grey-cascade"><img src="<?php echo site_url("assets/admin/img/on_route.png")?>" width="50"></div>
                          </div>
                          <div class="col-md-3 mt-step-col <?php echo $deliver_status; ?>">
                            <div class="mt-step-number bg-white">4</div>
                            <div class="mt-step-title uppercase font-grey-cascade">Delivered</div>
                            <div class="mt-step-content font-grey-cascade"><img src="<?php echo site_url("assets/admin/img/deliver.png")?>" width="50"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="portlet light ">
                  <div class="portlet-body">
                    <div class="row">
                      <div class="col-md-6" align="center">
                        <h4><strong>Help Us to Get Better</strong></h4>
                        <?php for($i=1; $i<=5; $i++){ ?>
                        <?php
				$order_rating = $order_detail->order_rating;
				if(!empty($order_rating) && $i<=$order_rating){
					$class = "fa fa-star";
				}else{
					$class = "fa fa-star-o";
				}
			?>
                        <i class="<?php echo $class; ?>"></i>
                        <?php } ?>
                        <!--<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i> --></div>
                      <div class="col-md-6">
                        <h4><strong>Tell Us How We Did</strong></h4>
                        <div class="form-group">
                          <textarea class="form-control" rows="3" placeholder="Feedback" style="resize:none"><?php if(!empty($order_detail->order_feedback)){echo $order_detail->order_feedback;} ?>
</textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--
            -- END PAGE HERE
            --> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include(APPPATH."views/admin/includes1/footer1.php"); ?>
<?php include(APPPATH."views/admin/includes1/footer2.php"); ?>
