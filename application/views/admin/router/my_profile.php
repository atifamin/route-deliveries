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
            <?php if($this->session->flashdata("router_updated")){ ?>
            <div class="alert alert-success alert-dismissible" role="alert" style="margin-bottom:0px !important;" align="center"> <?php echo $this->session->flashdata("router_updated"); ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <?php } ?>
            <?php if($this->session->flashdata("router_error")){ ?>
            <div class="alert alert-danger alert-dismissible" role="alert" style="margin-bottom:0px !important;" align="center"> <?php echo $this->session->flashdata("router_error"); ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <?php } ?>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="portlet light ">
                  <div class="portlet-title">
                    <div class="caption"> <i class="icon-settings font-dark"></i> <span class="caption-subject font-dark sbold uppercase">Edit Profile</span> </div>
                  </div>
                  <div class="portlet-body form">
                    <form class="form-horizontal" action="<?php echo site_url("router/my_profile/edit_router/".$driver->id); ?>" role="form" method="post" enctype="multipart/form-data">
                      <div class="form-body">
                      <div class="form-group">
                        <label class="col-md-2 control-label">First Name</label>
                        <div class="col-md-4">
                          <input type="text" class="form-control" name="first" placeholder="Enter first" value="<?php echo $driver->First_Name; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-2 control-label">Last Name</label>
                        <div class="col-md-4">
                          <input type="text" class="form-control" name="last" placeholder="Enter last name" value="<?php echo $driver->Last_Name; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-2 control-label">Email</label>
                        <div class="col-md-4">
                          <input type="text" class="form-control" name="email" placeholder="Enter email" value="<?php echo $driver->Email; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-2 control-label">Phone</label>
                        <div class="col-md-4">
                          <input type="text" class="form-control" name="phone" placeholder="Enter phone" value="<?php echo $driver->Phone; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-2 control-label">City</label>
                        <div class="col-md-4">
                          <input type="text" class="form-control" name="city" placeholder="Enter city" value="<?php echo $driver->City; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-2 control-label">Vehicle Number</label>
                        <div class="col-md-4">
                          <input type="text" class="form-control" name="vehicle" placeholder="Enter vehicle" value="<?php echo $driver->Vehicle; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-2 control-label">Plates</label>
                        <div class="col-md-4">
                          <input type="text" class="form-control" name="plates" placeholder="Enter plates" value="<?php echo $driver->Plates; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-2 control-label">Change Password</label>
                        <div class="col-md-4">
                          <input type="text" class="form-control" name="password" placeholder="Enter password">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-2 control-label">Upload Your Image </label>
                        <div class="col-md-4">
                          <input type="file" name="image" class="form-control">
                        </div>
                      </div>
                      <div class="form-actions">
                        <div class="row">
                          <div class="col-md-offset-3 col-md-9">
                            <button type="submit" class="btn green">Submit</button>
                            <button type="button" class="btn default">Cancel</button>
                          </div>
                        </div>
                      </div>
                    </form>
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
