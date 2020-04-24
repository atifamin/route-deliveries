<?php include(APPPATH."views/admin/includes1/header1.php"); ?>
<style>
.tiles .tile{
	width:250px !important;
}

</style>
<?php include(APPPATH."views/admin/includes1/header2.php"); ?>
<?php include("includes/main_nav.php"); ?>
<div class="page-content-wrapper">
  <div class="page-content" style="min-height:500px !important">
    <h1 class="page-title"> Admin Dashboard </h1>
    <div class="row">
      <div class="col-md-12">
        <div class="full-height-content">
          <div class="full-height-content-body"> 
            <!--
          -- STARTING PAGE HERE
          -->
            <div class="row" style="margin-top:5%">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="page-content-inner">
                  <div class="portlet light " align="center">
                    <div class="portlet-body">
                      <div class="tiles">
                        <div class="col-md-3">
                          <div class="tile bg-green-meadow">
                            <div class="tile-body"> <i class="fa fa-shopping-cart"></i> </div>
                            <div class="tile-object">
                              <div class="name"> New Orders </div>
                              <div class="number"> <?php echo $current_orders; ?> </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="tile bg-red-intense">
                            <div class="tile-body"> <i class="fa fa-users"></i> </div>
                            <div class="tile-object">
                              <div class="name"> New Clients </div>
                              <div class="number"> <?php echo $total_clients; ?> </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="tile bg-green">
                            <div class="tile-body"> <i class="fa fa-star"></i> </div>
                            <div class="tile-object">
                              <div class="name"> Delivered </div>
                              <div class="number"> <?php echo $order_analysis; ?>% </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="tile bg-blue-steel">
                            <div class="tile-body"> <i class="fa fa-user"></i> </div>
                            <div class="tile-object">
                              <div class="name"> Drivers </div>
                              <div class="number"> <?php echo $total_active_routers; ?> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--
          -- STARTING PAGE HERE
          --> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include(APPPATH."views/admin/includes1/footer1.php"); ?>
<?php include(APPPATH."views/admin/includes1/footer2.php"); ?>
