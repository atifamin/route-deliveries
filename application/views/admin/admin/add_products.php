<?php include(APPPATH."views/admin/includes1/header1.php"); ?>
<?php include(APPPATH."views/admin/includes1/header2.php"); ?>
<?php include("includes/main_nav.php"); ?>
<div class="page-content-wrapper">
  <div class="page-content" style="min-height:650px !important">
    <div class="row">
      <div class="col-md-12">
        <div class="full-height-content">
          <div class="full-height-content-body"> 
            <!--
            -- STARTING PAGE HERE
            -->
            <div class="row">
              <div class="col-md-12"> 
                <!-- BEGIN VALIDATION STATES-->
                <div class="portlet light portlet-fit portlet-form ">
                  <div class="portlet-title">
                    <div class="caption"> <i class="icon-settings font-red"></i> <span class="caption-subject font-red sbold uppercase">Add Product</span> </div>
                  </div>
                  <div class="portlet-body">
                    <form action="<?php echo site_url("admin1/products/add_new_product"); ?>" class="form-horizontal" method="post">
                      <div class="form-body">
                        <div class="form-group">
                          <label class="control-label col-md-3">Product Name <span class="required"> * </span> </label>
                          <div class="col-md-4">
                            <input type="text" name="product_name" data-required="1" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="form-actions">
                        <div class="row">
                          <div class="col-md-offset-3 col-md-9">
                            <button type="submit" class="btn green">Submit</button>
                            <a href="<?php echo site_url("admin1/dashboard");; ?>">
                            <button type="button" class="btn grey-salsa btn-outline">Cancel</button>
                            </a> </div>
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
