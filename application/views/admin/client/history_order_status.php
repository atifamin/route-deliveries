<?php

$status = $order_detail->status;

if($status=="Recieved" || $status=="Picked_Up" || $status=="On_Route" || $status=="Delivered"){
	$recieved_image = "order_recieved1";
	$recieved_background = 'style="background-color:#26C281"';
	$recieved_color = 'style="color:white"';
}else{
	$recieved_image = "order_recieved";
	$recieved_background = "";
	$recieved_color = "";
}

if($status=="Picked_Up" || $status=="On_Route" || $status=="Delivered"){
	$picked_image = "picked_up1";
	$picked_background = 'style="background-color:#26C281"';
	$picked_color = 'style="color:white"';
}else{
	$picked_image = "picked_up";
	$picked_background = "";
	$picked_color = "";
}

if($status=="On_Route" || $status=="Delivered"){
	$route_image = "on_route1";
	$route_background = 'style="background-color:#26C281"';
	$route_color = 'style="color:white"';
}else{
	$route_image = "on_route";
	$route_background = "";
	$route_color = "";
}

if($status=="Delivered"){
	$deliver_image = "on_route1";
	$deliver_background = 'style="background-color:#26C281"';
	$deliver_color = 'style="color:white"';
}else{
	$deliver_image = "on_route";
	$deliver_background = "";
	$deliver_color = "";
}


?>

<div class="c-content-panel">
  <div class="c-body" style="padding:0px !important; border:0px !important">
    <div class="c-content-tab-1 c-theme c-margin-t-30">
      <div class="clearfix">
        <ul class="nav nav-tabs c-font-uppercase c-font-bold">
          <li class="active"> <a href="#tab_1_1_content" data-toggle="tab">Status</a> </li>
          <li> <a href="#tab_1_2_content" data-toggle="tab">Detail</a> </li>
          <li> <a href="#tab_1_3_content" data-toggle="tab">Information</a> </li>
        </ul>
      </div>
      <div class="tab-content c-bordered c-padding-lg">
        <div class="tab-pane active" id="tab_1_1_content">
          <div class="row">
            <div class="col-md-3 col-sm-12 block" <?php echo $recieved_background; ?>>
              <div class="c-content-step-1 c-opt-1">
                <div class="c-icon"> <img src="<?php echo base_url("assets/admin/img/".$recieved_image.".png")?>" width="50" /> </div>
                <div class="c-title c-font-20 c-font-bold c-font-uppercase" <?php echo $recieved_color; ?>>1. Order Recieved</div>
              </div>
            </div>
            <div class="col-md-3 col-sm-12 block" data-wow-delay="0.2s" <?php echo $picked_background; ?>>
              <div class="c-content-step-1 c-opt-1">
                <div class="c-icon"> <img src="<?php echo base_url("assets/admin/img/".$picked_image.".png")?>" width="90" /> </div>
                <div class="c-title c-font-20 c-font-bold c-font-uppercase" <?php echo $picked_color; ?>>2. Order Picked Up</div>
              </div>
            </div>
            <div class="col-md-3 col-sm-12 block" data-wow-delay="0.4s" <?php echo $route_background; ?>>
              <div class="c-content-step-1 c-opt-1">
                <div class="c-icon"> <img src="<?php echo base_url("assets/admin/img/".$route_image.".png")?>" width="45" /> </div>
                <div class="c-title c-font-20 c-font-bold c-font-uppercase" <?php echo $route_color; ?>>3. On Route </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-12 block" data-wow-delay="0.4s" <?php echo $deliver_background; ?>>
              <div class="c-content-step-1 c-opt-1">
                <div class="c-icon"> <img src="<?php echo base_url("assets/admin/img/".$deliver_image.".png")?>" width="45" /> </div>
                <div class="c-title c-font-20 c-font-bold c-font-uppercase" <?php echo $deliver_color; ?>>3. Delivered</div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="tab_1_2_content">
          <div class="c-content-box c-size-md c-bg-white" style="padding:0px !important;">
            <div class="container">
              <div class="row">
                <div class="col-md-4" align="center"><strong>Order ID:&nbsp;</strong> <?php echo $order_detail->id; ?> </div>
                <div class="col-md-4" align="center"><strong>Date:&nbsp;</strong> <?php echo $order_detail->date; ?> </div>
                <div class="col-md-4" align="center"><strong>Status:&nbsp;</strong> <?php echo $order_detail->status; ?> </div>
              </div>
              <div class="row" style="margin-top:2%">
                <div class="col-sm-6">
                  <div class="c-content-feature-1" >
                    <div align="center"> <img src="<?php echo base_url("assets/admin/img/on_route.jpg")?>" width="55" /> </div>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" class="form-control  c-square c-theme" placeholder="Place" value="<?php echo $order_detail->pickup_place; ?>" >
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" class="form-control  c-square c-theme" placeholder="Pickup Items" value="<?php echo $order_detail->pickup_items; ?>" >
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" class="form-control  c-square c-theme" placeholder="Pickup Location" value="<?php echo $order_detail->pickup_address; ?>" >
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                        <textarea class="form-control  c-square c-theme" rows="3" style="resize:none" ><?php echo $order_detail->pickup_instructions; ?></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="c-content-feature-1" data-wow-delay="0.2s">
                    <div align="center"> <img src="<?php echo base_url("assets/admin/img/deliver.jpg")?>" width="60" /> </div>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" class="form-control  c-square c-theme" placeholder="Place" value="<?php echo $order_detail->dropoff_place; ?>" >
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" class="form-control  c-square c-theme" placeholder="Dropoff Items" value="<?php echo $order_detail->dropoff_items; ?>" >
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                        <input type="text" class="form-control  c-square c-theme" placeholder="Dropoff Location" value="<?php echo $order_detail->dropoff_address; ?>" >
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                        <textarea class="form-control  c-square c-theme" rows="3" style="resize:none" ><?php echo $order_detail->dropoff_instructions; ?></textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="tab_1_3_content">
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
                      <span id="router_rating">
                      <?php for($i=1; $i<=5; $i++){ ?>
                      <?php
						  $router_rating = $order_detail->router_rating;
							if(!empty($router_rating) && $i<=$router_rating){
								$class = "glyphicon glyphicon-heart";
							}else{
								$class = "icon-heart";
							}
					  ?>
                      	<a href="javascript:;" onclick="router_rating(<?php echo $i; ?>, <?php echo $order_detail->id; ?>)"><span class="<?php echo $class; ?>"></span></a>
                      <?php } ?>
                      </span>
                      </p>
                    </div>
                  </div>
                  <?php }else{ ?>
                  <div class="col-md-6">
                    <p align="center">No router has assigned yet</p>
                  </div>
                  <?php } ?>
                  <!--end: widget 1-1 --> 
                </div>
                <div class="col-md-6"> 
                  <!--begin: widget 1-2 -->
                  <div class="mt-widget-1">
                    <h1 class="mt-username" style="margin-top:5%"><strong>Payment Method</strong></h1>
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
                <div class="col-md-12" align="center" style="border:1px solid #999">
                  <h1 style="text-transform:uppercase">Provide us ur feedback</h1>
                  <p style="color:#aa242a; display:none" id="feedback_message"></p>
                  <div class="form-group">
                    <div class="col-md-6">
                      <label>Help Us to Get Better</label>
                      <br />
                      <span id="order_rating">
                      <?php for($i=1; $i<=5; $i++){ ?>
						  <?php
								$order_rating = $order_detail->order_rating;
								if(!empty($order_rating) && $i<=$order_rating){
									$class = "glyphicon-star";
								}else{
									$class = "glyphicon-star-empty";
								}
                            ?>
                      			<a href="javascript:;" onclick="order_rating(<?php echo $i; ?>, <?php echo $order_detail->id; ?>)" ><span class="glyphicon <?php echo $class; ?> star_<?php echo $i; ?>"></span></a>
                      <?php } ?>
                      </span>
                  </div>
                  <div class="form-group">
                    <div class="col-md-6">
                      <textarea class="form-control  c-square c-theme" rows="3" name="order_feedback" style="resize:none" ><?php if(!empty($order_detail->order_feedback)){echo $order_detail->order_feedback;} ?>
</textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12" style="margin:2% 0% !important;">
                      <button type="button" class="btn btn-danger" onclick="add_order_feedback(<?php echo $order_detail->id; ?>)">Send Feedback</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">

function add_order_feedback(order_id){
	var order_feedback = $("textarea[name=order_feedback]").val();
	$.post("<?php echo site_url("client/current_orders/add_order_feedback"); ?>",{order_id:order_id, order_feedback:order_feedback}).done(function(data){
		$("#feedback_message").html(data);
		$("#feedback_message").fadeIn();
	});
}


function order_rating(rate, order_id){
	$.post("<?php echo site_url("client/current_orders/order_rating"); ?>",{rate:rate, order_id:order_id}).done(function(data){
		$("#order_rating").html(data);
	});
}

function router_rating(router_rate, order_id){
	$.post("<?php echo site_url("client/current_orders/router_rating"); ?>",{router_rate:router_rate, order_id:order_id}).done(function(data){
		$("#router_rating").html(data);
	});
}

</script>