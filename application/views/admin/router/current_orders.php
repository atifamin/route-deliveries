<?php include(APPPATH."views/admin/includes1/header1.php"); ?>
<?php include(APPPATH."views/admin/includes1/header2.php"); ?>
<?php include("includes/main_nav.php"); ?>
<div class="page-content-wrapper">
  <div class="page-content" style="min-height:500px !important">
    <div class="row">
      <div class="col-md-12">
        <div class="full-height-content full-height-content-scrollable">
          <div class="full-height-content-body"> 
            <!--
            -- STARTING PAGE HERE
            -->
            <?php if($this->session->flashdata("order_assigned")){ ?>
            <div class="alert alert-success alert-dismissible" role="alert" style="margin-bottom:0px !important;" align="center"> <?php echo $this->session->flashdata("order_assigned"); ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <?php } ?>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                  <div class="col-md-12"> 
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet light ">
                      <div class="portlet-title">
                        <div class="caption font-dark"> <i class="icon-settings font-dark"></i> <span class="caption-subject bold uppercase"> All Un-Assigned Orders</span> </div>
                      </div>
                      <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                          <thead>
                            <tr>
                              <th> Order ID </th>
                              <th> Date </th>
                              <th> Item Description </th>
                              <th> Picup Address </th>
                              <th> Delivery Address </th>
                              <th> Total Amount </th>
                              <th> Status </th>
                              <th> Add Status </th>
                              <th> Action </th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php if($orders->num_rows()>0){ ?>
                            <?php foreach($orders->result() as $orders){ ?>
                            <tr class="odd gradeX">
                              <td><?php echo $orders->id; ?></td>
                              <td><?php echo $orders->date; ?></td>
                              <td><?php echo $orders->pickup_items; ?></td>
                              <td><?php echo $orders->pickup_address; ?></td>
                              <td><?php echo $orders->dropoff_address; ?></td>
                              <td><?php echo $orders->order_payment; ?></td>
                              <td><?php
						if($orders->status=="Pending"){
							$class = "bg-red-intense";
						}else if($orders->status=="Active"){
							$class = "bg-purple-wisteria";
						}else if($orders->status=="Recieved"){
							$class = "bg-grey-gallery";
						}else if($orders->status=="Picked_Up"){
							$class = "bg-yellow-casablanca";
						}else if($orders->status=="On_Route"){
							$class = "bg-blue-sharp";
						}else if($orders->status=="Delivered"){
							$class = "bg-green-jungle";
						}
					?>
                                <span class="label label-sm <?php echo $class; ?>"> <?php echo $orders->status; ?> </span></td>
                              <td><a href="<?php echo site_url("router/current_orders/order_assigned/".$orders->id); ?>" class="btn btn-xs red dropdown-toggle"> Take this Order </a></td>
                              <td><a href="<?php echo site_url("order_detail/order/".$orders->id); ?>" class="btn btn-xs green dropdown-toggle"> Detail </a></td>
                            </tr>
                            <?php }} ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET--> 
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
