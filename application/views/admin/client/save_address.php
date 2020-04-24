<?php include(APPPATH."views/web/includes/header1.php"); ?>
<style>
@media (min-width: 992px) {
.modal-lg {
	width: 1300px !important;
}
}
.block {
	padding: 3% 0% !important;
}
</style>
<?php include(APPPATH."views/web/includes/header2.php"); ?>

<div class="container-fluid">
  <?php include(APPPATH."views/admin/client/includes/dashboard_nav.php"); ?>
  <div class="c-layout-sidebar-content "> 
    <!-- BEGIN: PAGE CONTENT -->
    <div class="c-content-title-1">
      <h3 class="c-font-uppercase c-center c-font-bold">Saved Addresses</h3>
      <div class="c-line-center"></div>
    </div>
    <?php if($this->session->flashdata("address_added")){ ?>
    <div class="alert alert-success alert-dismissible" role="alert" style="margin-bottom:0px !important;" align="center"> <?php echo $this->session->flashdata("address_added"); ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
    </div>
    <?php } ?>
    <?php if($this->session->flashdata("address_deleted")){ ?>
    <div class="alert alert-danger alert-dismissible" role="alert" style="margin-bottom:0px !important;" align="center"> <?php echo $this->session->flashdata("address_deleted"); ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
    </div>
    <?php } ?>
    <div class="alert alert-success alert-dismissible" role="alert" style="margin-bottom:0px !important;" align="center"> Route service is only available near <strong>Westwood, Los Angeles, CA, United States</strong>.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
    <div class="c-content-panel">
      <div class="c-body">
        <div class="row">
        
          <form class="form-inline" action="<?php echo site_url("client/save_address/add_new_address"); ?>" method="post">
            <div class="col-md-12">
            
              <div id="us9" style="width: 900px; height: 400px;"></div>
              <div class="clearfix">&nbsp;</div>
              <div class="m-t-small">
                <div class="col-sm-3">
                  <input type="hidden" class="form-control" style="width: 110px;" id="us9-lat" name="Latitude" />
                </div>
                <div class="col-sm-3">
                  <input type="hidden" class="form-control" style="width: 110px;" id="us9-lon" name="Longitude" />
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="form-group col-md-5" style="margin:1% 0; padding:0px !important;">
                <input type="text" class="form-control c-bg-transparent input-lg c-theme c-square " placeholder="Place name" name="Place_Name" required="required" value="">
              </div>
              <div class="form-group col-md-5" style="margin:1% 0;">
                <input type="text" class="form-control c-bg-transparent input-lg c-theme c-square " placeholder="Address & suite #" id="us9-address" name="Saved_Address" required="required" value="">
              </div>
            </div>
            <div class="col-md-12">
              <button type="submit" class="btn btn-lg btn-danger c-btn-uppercase c-btn-square c-btn-bold" style="padding: 12px 105px 11px 105px !important;">Add New Address</button>
            </div>
          </form>
        </div>
        <div class="row" style="margin-top:5%">
          <div class="col-md-12">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th> ID </th>
                  <th> Place Name </th>
                  <th> Address </th>
                  <th>  </th>
                </tr>
              </thead>
              <tbody>
                <?php if($addresses->num_rows>0){ ?>
                <?php foreach($addresses->result() as $addresses){ ?>
                <tr>
                  <td><?php echo $addresses->Place_Name; ?></td>
                  <td><?php echo $addresses->Saved_Address; ?></td>
                  <td><a href="<?php echo site_url("client/save_address/delete_address/".$addresses->id); ?>" ><i class="icon-trash" style="color:red"></i></a></td>
                </tr>
                <?php }}else{ ?>
                <tr>
                  <td colspan="4"><p align="center">No Record Found</p></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Large modal -->

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content c-square">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
        <h4 class="modal-title" id="myLargeModalLabel">Order Information</h4>
      </div>
      <div class="modal-body">
        <div class="order_data"> </div>
      </div>
    </div>
    <!-- /.modal-content --> 
  </div>
  <!-- /.modal-dialog --> 
</div>
<?php include(APPPATH."views/web/includes/footer1.php"); ?>
<script type="text/javascript" src='https://maps.google.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyANGFXCJqEp3TUD6Ew6VLO_j9cuvSlk4qw'></script> 
<script src="<?php echo base_url("assets/base/js/dist/locationpicker.jquery.js")?>"></script> 
<script type="text/javascript">

$('#us9').locationpicker({
		
	location: {
		latitude: 34.0635016,
		longitude: -118.44551639999997,
	},
	radius: 10,
	inputBinding: {
		latitudeInput: $('#us9-lat'),
		longitudeInput: $('#us9-lon'),
		radiusInput: $('#us9-radius'),
		locationNameInput: $('#us9-address')
	},
	enableAutocomplete: true,
	onchanged: function (currentLocation, radius, isMarkerDropped) {
		// Uncomment line below to show alert on each Location Changed event
		//alert("Location changed. New location (" + currentLocation.latitude + ", " + currentLocation.longitude + ")");
	}
	
});

</script>
<?php include(APPPATH."views/web/includes/footer2.php"); ?>
