<?php include(APPPATH."views/web/includes/header1.php"); ?>
<?php include(APPPATH."views/web/includes/header2.php"); ?>
<div class="container-fluid">
  <?php include(APPPATH."views/admin/client/includes/dashboard_nav.php"); ?>
  <div class="c-layout-sidebar-content" style="min-height:450px"> 
    <!-- BEGIN: PAGE CONTENT -->
    <div class="c-content-title-1">
      <h3 class="c-font-uppercase c-center c-font-bold">Dashboard</h3>
      <div class="c-line-center"></div>
    </div>
    <p>You can directly route from here.</p>
    <div class="col-md-12">
    <form action="<?php echo base_url("create_order"); ?>" method="post" enctype="multipart/form-data">
      <div class="col-md-4">
        <div class="form-group">
          <input type="text" class="form-control c-bg-transparent input-lg c-theme c-square controls" placeholder="Pickup Location" id="us5-address" name="pickup" required="required" >
                <input type="hidden" class="form-control" style="width: 110px;" id="us5-lat" name="pickup_lat" />
                <input type="hidden" class="form-control" style="width: 110px;" id="us5-lon" name="pickup_lon" />
                <div id="us5" style="width: 420px; height: 400px; display:none"></div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <input type="text" class="form-control c-bg-transparent input-lg c-theme c-square " placeholder="Drop Off Location" id="us6-address" name="dropoff" required="required" >
                <input type="hidden" class="form-control" style="width: 110px;" id="us6-lat" name="dropoff_lat" />
                <input type="hidden" class="form-control" style="width: 110px;" id="us6-lon" name="dropoff_lon" />
                <div id="us6" style="width: 420px; height: 400px; display:none"></div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <button type="submit" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold" style="padding:3% 8% !important">Lets's Route</button>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>
<?php include(APPPATH."views/web/includes/footer1.php"); ?>
<script type="text/javascript" src='https://maps.google.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyANGFXCJqEp3TUD6Ew6VLO_j9cuvSlk4qw'></script> 
<script src="<?php echo base_url("assets/base/js/dist/locationpicker.jquery.min.js")?>"></script> 

<script type="text/javascript">

	$('#us5').locationpicker({
		location: {
			latitude: 0,
			longitude: 0
		},
		radius: 10,
		inputBinding: {
			latitudeInput: $('#us5-lat'),
			longitudeInput: $('#us5-lon'),
			radiusInput: $('#us5-radius'),
			locationNameInput: $('#us5-address')
		},
		enableAutocomplete: true,
		onchanged: function (currentLocation, radius, isMarkerDropped) {
			// Uncomment line below to show alert on each Location Changed event
			//alert("Location changed. New location (" + currentLocation.latitude + ", " + currentLocation.longitude + ")");
		}
	});
	
	
	$('#us6').locationpicker({
		location: {
			latitude: 0,
			longitude: 0
		},
		radius: 10,
		inputBinding: {
			latitudeInput: $('#us6-lat'),
			longitudeInput: $('#us6-lon'),
			radiusInput: $('#us6-radius'),
			locationNameInput: $('#us6-address')
		},
		enableAutocomplete: true,
		onchanged: function (currentLocation, radius, isMarkerDropped) {
			// Uncomment line below to show alert on each Location Changed event
			//alert("Location changed. New location (" + currentLocation.latitude + ", " + currentLocation.longitude + ")");
		}
	});

</script>
<?php include(APPPATH."views/web/includes/footer2.php"); ?>
