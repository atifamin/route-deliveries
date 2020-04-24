<?php include(APPPATH."views/admin/includes1/header1.php"); ?>
    <style>
#map {
	height: 400px;
	width: 80% !important;
}
#map1 {
	height: 400px;
	width: 80% !important;
}
</style>
    <?php include(APPPATH."views/admin/includes1/header2.php"); ?>
    <?php include("includes/main_nav.php"); ?>
<div class="page-content-wrapper">
  <div class="page-content" style="min-height:650px !important">
    <div class="row">
      <div class="col-md-12"> 
        
        <!--
            -- STARTING PAGE HERE
            -->
        
        <div class="portlet box blue">
          <div class="portlet-title">
            <div class="caption"> Define New Services Area </div>
            <div class="tools"> <a href="javascript:;" class="collapse"> </a> <a href="#portlet-config" data-toggle="modal" class="config"> </a> </div>
          </div>
          <div class="portlet-body">
            <div class="tabbable-custom nav-justified">
              <ul class="nav nav-tabs nav-justified">
                <li class="active"> <a href="#tab_1_1_1" data-toggle="tab"> </a> </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="tab_1_1_1">
                  <div align="left">
                    <h4><strong>Define Your Pickup Area Here</strong></h4>
                  </div>
                  <div id="map"></div>
                  <div align="left">
                  <input type="text" style="display:none" id="pickup_area"> 
                  <textarea id="pickup_final_area" style="display:none"> </textarea>
                 
                    <input type="button" class="btn btn-primary c-btn-uppercase c-btn-square c-btn-bold" value="Save Pickup Service Area" onClick="add_pickup_services()">
                    <a href="<?php echo site_url("admin1/services_area"); ?>" class="btn btn-danger c-btn-uppercase c-btn-square c-btn-bold">Cancel</a></div>
                  <div align="left" style="margin-top:5%">
                    <h4><strong>Define Your Dropoff Area Here</strong></h4>
                  </div>
                  <div id="map1"></div>
                  <div align="left">
                  <input type="text" style="display:none" id="dropoff_area">
                  <textarea id="dropoff_final_area" style="display:none"> </textarea>
                    <input type="button" class="btn btn-success c-btn-uppercase c-btn-square c-btn-bold" value="Save Dropoff Service Area" onClick="add_dropoff_services()">
                    <a href="<?php echo site_url("admin1/services_area"); ?>" class="btn btn-danger c-btn-uppercase c-btn-square c-btn-bold">Cancel</a></div>
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
<?php include(APPPATH."views/admin/includes1/footer1.php"); ?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANGFXCJqEp3TUD6Ew6VLO_j9cuvSlk4qw&libraries=geometry&callback=initMap"
        async defer></script> 
<script>
      // This example requires the Geometry library. Include the libraries=geometry
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=geometry">

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: {lat: 34.0635016, lng: -118.44551639999997},
		  draggableCursor:'crosshair',
        });
        var poly = new google.maps.Polyline({
          strokeColor: '#000000',
          strokeOpacity: 1,
          strokeWeight: 3,
          map: map
        });

        // Add a listener for the click event
        google.maps.event.addListener(map, 'click', function(event) {
          addLatLngToPoly(event.latLng, poly);
        });
		
		
		
		
		
		
		
		
		
		var map1 = new google.maps.Map(document.getElementById('map1'), {
          zoom: 15,
          center: {lat: 34.0635016, lng: -118.44551639999997},
		  draggableCursor:'crosshair',
        });
        var poly1 = new google.maps.Polyline({
          strokeColor: '#000000',
          strokeOpacity: 1,
          strokeWeight: 3,
          map: map1
        });

        // Add a listener for the click event
        google.maps.event.addListener(map1, 'click', function(event) {
          addLatLngToPoly1(event.latLng, poly1);
        });
      }

      /**
       * Handles click events on a map, and adds a new point to the Polyline.
       * Updates the encoding text area with the path's encoded values.
       */
      function addLatLngToPoly(latLng, poly) {
        var path = poly.getPath();
		
        // Because path is an MVCArray, we can simply append a new coordinate
        // and it will automatically appear
        path.push(latLng);
		
		document.getElementById("pickup_area").value = latLng;
		
		var lat_lng = document.getElementById("pickup_area").value;
		lat_lng = lat_lng.replace("(", "");
		lat_lng = lat_lng.replace(")", "");
		
		var lat_lng = lat_lng.split(",");
		//{lat: 34.072213164561504, lng: -118.46222877502441},

		var lat_lng = "{lat:" + lat_lng[0] + ", lng:" + lat_lng[1] + "},";
		
		$("#pickup_final_area").append(lat_lng);
		
		

		
		
		
		
		
		
		

        // Update the text field to display the polyline encodings
        var encodeString = google.maps.geometry.encoding.encodePath(path);
        if (encodeString) {
          /*document.getElementById('encoded-polyline').value = encodeString;*/
        }
      
	  }
	  
	  
	  
      /**
       * Handles click events on a map, and adds a new point to the Polyline.
       * Updates the encoding text area with the path's encoded values.
       */
      function addLatLngToPoly1(latLng, poly) {
        var path = poly.getPath();
        // Because path is an MVCArray, we can simply append a new coordinate
        // and it will automatically appear
        path.push(latLng);
		
		
		document.getElementById("dropoff_area").value = latLng;
		
		var lat_lng = document.getElementById("dropoff_area").value;
		lat_lng = lat_lng.replace("(", "");
		lat_lng = lat_lng.replace(")", "");
		
		var lat_lng = lat_lng.split(",");
		//{lat: 34.072213164561504, lng: -118.46222877502441},

		var lat_lng = "{lat:" + lat_lng[0] + ", lng:" + lat_lng[1] + "},";
		
		$("#dropoff_final_area").append(lat_lng);
		
		
		

        // Update the text field to display the polyline encodings
        var encodeString = google.maps.geometry.encoding.encodePath(path);
        if (encodeString) {
          /*document.getElementById('encoded-polyline').value = encodeString;*/
        }
      
	  }
	  
	  
	  
	  
	  
	  

function add_pickup_services(){
	var pickup = $("#pickup_final_area").val();
	$.post("<?php echo site_url("admin1/services_area/add_pickup"); ?>",{pickup:pickup}).done(function(data){
		console.log(data);
		location.reload();
	});
}

function add_dropoff_services(){
	var droppoff = $("#dropoff_final_area").val();
	$.post("<?php echo site_url("admin1/services_area/add_droppoff"); ?>",{droppoff:droppoff}).done(function(data){
		console.log(data);
		location.reload();
	});
}
	  
	  
    </script>
<?php include(APPPATH."views/admin/includes1/footer2.php"); ?>
