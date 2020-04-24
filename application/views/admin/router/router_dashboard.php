<?php include(APPPATH."views/admin/includes1/header1.php"); ?>
<?php include(APPPATH."views/admin/includes1/header2.php"); ?>
<?php include("includes/main_nav.php"); ?>
<div class="page-content-wrapper">
  <div class="page-content" style="min-height:500px !important">
    <h1 class="page-title"> Router Dashboard </h1>
    <div class="row">
      <div class="col-md-12">
        <div class="full-height-content full-height-content-scrollable">
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
                            <div class="tile-body"> <img src="http://localhost/vp/route2/assets/admin/img/order_recieved1.png" width="50"> </div>
                            <div class="tile-object">
                              <div class="name"> Total Order Recevied </div>
                              <br />
                              <div class="number"> <?php echo $recieved; ?> </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="tile bg-red-intense">
                            <div class="tile-body"> <img src="http://localhost/vp/route2/assets/admin/img/picked_up1.png" width="70"> </div>
                            <div class="tile-object">
                              <div class="name"> Total Orders Picked Up </div>
                              <div class="number"> <?php echo $picked_up; ?> </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="tile bg-green">
                            <div class="tile-body"> <img src="http://localhost/vp/route2/assets/admin/img/on_route1.png" width="50"> </div>
                            <div class="tile-object">
                              <div class="name"> Total Orders On Route </div>
                              <div class="number"> <?php echo $on_route; ?> </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="tile bg-blue-steel">
                            <div class="tile-body"> <img src="http://localhost/vp/route2/assets/admin/img/deliver1.png" width="50"> </div>
                            <div class="tile-object">
                              <div class="name"> Total Orders Delivered </div>
                              <div class="number"> <?php echo $delivered; ?> </div>
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
