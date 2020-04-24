<?php include(APPPATH."views/admin/includes1/header1.php"); ?>
<style>
.mt-widget-3 .mt-head .mt-head-button>button {
	width: auto !important;
}
</style>
<?php include(APPPATH."views/admin/includes1/header2.php"); ?>
<?php include("includes/main_nav.php"); ?>
<div class="page-content-wrapper">
  <div class="page-content" style="min-height:500px !important">
    <h1 class="page-title"> Add Order Status </h1>
    <div class="row">
      <div class="col-md-12">
        <div class="full-height-content full-height-content-scrollable">
          <div class="full-height-content-body"> 
            <!--
            -- STARTING PAGE HERE
            -->
            
            <div class="portlet light portlet-fit ">
              <div class="portlet-body">
                <div class="table-scrollable table-scrollable-borderless">
                  <table class="table table-hover table-light">
                    <thead>
                      <tr class="uppercase">
                        <th> Order ID </th>
                        <th> Date </th>
                        <th> Picked Up Location </th>
                        <th> Drop Off Location </th>
                        <th> Total Amount </th>
                      </tr>
                    </thead>
                    <tr>
                      <td><?php echo $order_byID->id; ?></td>
                      <td><?php echo $order_byID->date; ?></td>
                      <td><?php echo $order_byID->pickup_address; ?></td>
                      <td><?php echo $order_byID->dropoff_address; ?></td>
                      <td><?php echo $order_byID->order_payment; ?></td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
            <?php

			$status = $order_byID->status;
			
			if($status=="Recieved" || $status=="Picked_Up" || $status=="On_Route" || $status=="Delivered"){
				$recieved_class = "bg-green-jungle";
				$recieved_btn ='disabled="disabled"';
				$recieved_check_class = "fa fa-check";
			}else{
				$recieved_class = "bg-grey-gallery";
				$recieved_btn ='';
				$recieved_check_class = "fa fa-close";
			}
			
			if($status=="Picked_Up" || $status=="On_Route" || $status=="Delivered"){
				$picked_up_class = "bg-green-jungle";
				$picked_up_btn ='disabled="disabled"';
				$picked_up_check_class = "fa fa-check";
			}else{
				$picked_up_class = "bg-grey-gallery";
				$picked_up_btn ='';
				$picked_up_check_class = "fa fa-close";
			}
			
			if($status=="On_Route" || $status=="Delivered"){
				$on_route_class = "bg-green-jungle";
				$on_route_btn ='disabled="disabled"';
				$on_route_check_class = "fa fa-check";
			}else{
				$on_route_class = "bg-grey-gallery";
				$on_route_btn ='';
				$on_route_check_class = "fa fa-close";
			}
			
			if($status=="Delivered"){
				$delivered_class = "bg-green-jungle";
				$delivered_btn ='disabled="disabled"';
				$delivered_check_class = "fa fa-check";
			}else{
				$delivered_class = "bg-grey-gallery";
				$delivered_btn ='';
				$delivered_check_class = "fa fa-close";
			}
			
			?>
            <div class="portlet light portlet-fit ">
              <div class="portlet-body">
                <div class="row">
                  <div class="col-md-3">
                    <div class="mt-widget-3">
                      <div class="mt-head <?php echo $recieved_class; ?>">
                        <div class="mt-head-icon"> <img src="<?php echo base_url("assets/admin/img/order_recieved1.png")?>" width="50"> </div>
                        <span class="mt-head-date" style="font-size:30px"> <i class="<?php echo $recieved_check_class; ?>"></i> </span>
                        <div class="mt-head-button">
                          <button type="button" class="btn btn-circle btn-outline white" <?php echo $recieved_btn; ?> onclick="change_status(<?php echo $order_byID->id; ?>, 'Recieved')">Mark As Recieved</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="mt-widget-3">
                      <div class="mt-head <?php echo $picked_up_class; ?>">
                        <div class="mt-head-icon"> <img src="<?php echo base_url("assets/admin/img/picked_up1.png")?>" width="70"> </div>
                        <span class="mt-head-date" style="font-size:30px"> <i class="<?php echo $picked_up_check_class; ?>"></i> </span>
                        <div class="mt-head-button">
                          <button type="button" class="btn btn-circle btn-outline white" <?php echo $picked_up_btn; ?> onclick="change_status(<?php echo $order_byID->id; ?>, 'Picked_Up')">Mark As Picked Up</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="mt-widget-3">
                      <div class="mt-head <?php echo $on_route_class; ?>">
                        <div class="mt-head-icon"> <img src="<?php echo base_url("assets/admin/img/on_route1.png")?>" width="50"> </div>
                        <span class="mt-head-date" style="font-size:30px"> <i class="<?php echo $on_route_check_class; ?>"></i> </span>
                        <div class="mt-head-button">
                          <button type="button" class="btn btn-circle btn-outline white" <?php echo $on_route_btn; ?> onclick="change_status(<?php echo $order_byID->id; ?>, 'On_Route')">Mark As On Route</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="mt-widget-3">
                      <div class="mt-head <?php echo $delivered_class; ?>">
                        <div class="mt-head-icon"> <img src="<?php echo base_url("assets/admin/img/deliver1.png")?>" width="50"> </div>
                        <span class="mt-head-date" style="font-size:30px"> <i class="<?php echo $delivered_check_class; ?>"></i> </span>
                        <div class="mt-head-button">
                          <button type="button" class="btn btn-circle btn-outline white" <?php echo $delivered_btn; ?> onclick="change_status(<?php echo $order_byID->id; ?>, 'Delivered')">Mark As Delivered</button>
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
<script type="text/ecmascript">

function change_status(id, status){
	$.post("<?php echo site_url("router/my_orders/change_status"); ?>",{id:id, status:status}).done(function(data){
		location.reload();
	});
}

</script>
<?php include(APPPATH."views/admin/includes1/footer2.php"); ?>
