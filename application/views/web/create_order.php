<?php include(APPPATH."views/web/includes/header1.php"); ?>
<style>
::-webkit-input-placeholder { /* Chrome/Opera/Safari */
 color: white !important;
}

		::-moz-placeholder { /* Firefox 19+ */
 color: white !important;
}

		:-ms-input-placeholder { /* IE 10+ */
 color: white !important;
}

		:-moz-placeholder { /* Firefox 18- */
 color: white !important;
}
input {
	color: white !important;
}
#suggest_result1 {
	background-color: white;
	position: absolute;
	width: 94%;
	z-index: 100;
	color: black;
	text-align: left;
}
#suggest_result1 ul li {
	list-style-type: none;
	cursor: pointer;
}
#suggest_result1 ul li:hover {
	color: red;
}
#suggest_result2 {
	background-color: white;
	position: absolute;
	width: 94%;
	z-index: 100;
	color: black;
	text-align: left;
}
#suggest_result2 ul li {
	list-style-type: none;
	cursor: pointer;
}
#suggest_result2 ul li:hover {
	color: red;
}
.c-margin-b-40 {
	margin-bottom: 0px !important;
}
</style>
<?php include(APPPATH."views/web/includes/header2.php"); ?>
<?php

$values = $this->session->userdata("user_input_val");



$values = (object)$values;





?>

<div class="c-content-box c-size-md c-bg-img-top c-bg-parallax main_background" style="background-image: url(<?php echo base_url("assets/base/img/content/backgrounds/main1_background.jpg)")?>">
  <div class="container">
    <div class="alert alert-success alert-dismissible" role="alert" style="margin-bottom:0px !important;" align="center" id="top-message"> Please Select the Area </strong>.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
    </div>
    <div id="map" style="width: 100%; height: 500px;"></div>
    <div class="c-content-feature-11"   style="padding:2% 0">
      <div class="row" align="center">
        <form class="form-inline" action="<?php echo site_url("create_order/create_new"); ?>" method="post">
          <div class="col-md-6">
            <h3 class="c-font-54 c-font-thin c-font-white c-margin-b-40 c-font-uppercase">Pickup </h3>
            <div class="col-md-12">
              <div class="clearfix">&nbsp;</div>
              <div class="m-t-small">
                <div class="col-sm-3">
                  <input type="hidden" class="form-control" style="width: 110px; color:black !important" id="us3-lat" value="<?php if(!empty($values->pickup_lat)){echo $values->pickup_lat; }else{if($pickup_lat!="0" || $pickup_lat!=""){echo $pickup_lat;}else{echo "34.0635016";}}?>" name="pickup_lat" />
                </div>
                <div class="col-sm-3">
                  <input type="hidden" class="form-control" style="width: 110px; color:black !important" id="us3-lon" value="<?php if(!empty($values->pickup_lon)){echo $values->pickup_lon;}else{if($pickup_lon!="0" || $pickup_lon!=""){echo $pickup_lon;}else{echo "-118.44551639999997";}}?>" name="pickup_lon" />
                </div>
                <div class="col-sm-3">
                  <input type="hidden" class="form-control" id="pickup_status" style="width: 110px;color:black !important" value="<?php  if(!empty($values->pickup_status)){echo $values->pickup_status; }?>" />
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="col-md-12">
              <div class="form-group col-md-12" style="margin:1% 0;width:100% !important;">
                <input type="text" class="form-control c-bg-transparent input-lg c-theme c-square suggested_place" placeholder="Place name" style="color: white !important;" name="pickup_place"  required="required" onkeyup="suggested_address()" value="<?php if($this->session->userdata("user_input_val")){echo $values->pickup_place;} ?>" autocomplete="off" >
                <div id="suggest_result1" style="display:none"></div>
              </div>
              <div class="form-group col-md-12" style="margin:1% 0;width:100% !important;">
                <input type="text" class="form-control c-bg-transparent input-lg c-theme c-square " placeholder="Address & suite #" id="us3-address" style="color: white !important;" name="pickup_address" required="required" 
                value="<?php 
				if(!empty($pickup_address)){
					echo $pickup_address;
				}else if($this->session->userdata("user_input_val")){
					echo $values->pickup_address;
				} 
				?>">
              </div>
              <textarea col="10" row="10" class="form-control c-bg-transparent input-lg c-theme c-square" name="pickup_items" placeholder="Pickup Items" style="width:94% !important;margin:1% 0;height:155px;color:white !important" srequired="required"><?php if($this->session->userdata("user_input_val")){echo $values->pickup_items;} ?>

</textarea>
              <textarea col="10" row="10" class="form-control c-bg-transparent input-lg c-theme c-square" name="pickup_instructions" placeholder="Special instructions" style="width:94% !important;margin:1% 0;height:155px;color:white !important" srequired="required"><?php if($this->session->userdata("user_input_val")){echo $values->pickup_instructions;} ?>

</textarea>
            </div>
          </div>
          <div class="col-md-6">
            <h3 class="c-font-54 c-font-thin c-font-white c-margin-b-40 c-font-uppercase">Delivery </h3>
            <div class="col-md-12">
              <div class="clearfix">&nbsp;</div>
              <div class="m-t-small">
                <div class="col-sm-3">
                  <input type="hidden" class="form-control" style="width: 110px;color:black !important" id="us4-lat" value="<?php if(!empty($values->dropoff_lat)){echo $values->dropoff_lat;}else{if($dropoff_lat!="0" || $dropoff_lat!=""){echo $dropoff_lat;}else{echo "34.0635016";}} ?>" name="dropoff_lat" />
                </div>
                <div class="col-sm-3">
                  <input type="hidden" class="form-control" style="width: 110px;color:black !important" id="us4-lon" value="<?php if(!empty($values->dropoff_lon)){echo $values->dropoff_lon;}else{if($dropoff_lon!="0" || $dropoff_lon!=""){echo $dropoff_lon;}else{echo "-118.44551639999997";}} ?>" name="dropoff_lon" />
                </div>
                <div class="col-sm-3">
                  <input type="hidden" class="form-control" id="dropoff_status" style="width: 110px;color:black !important" value="<?php  if(!empty($values->dropoff_status)){echo $values->dropoff_status; }?>" />
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="col-md-12">
              <div class="form-group col-md-12" style="margin:1% 0;width:100% !important;">
                <input type="text" class="form-control c-bg-transparent input-lg c-theme c-square suggested_place1" onkeyup="suggested_address1()" placeholder="Place name" style="color: white !important;" name="dropoff_place" required="required" value="<?php if($this->session->userdata("user_input_val")){echo $values->dropoff_place;} ?>" autocomplete="off">
                <div id="suggest_result2" style="display:none"></div>
              </div>
              <div class="form-group col-md-12" style="margin:1% 0;width:100% !important;">
                <input type="text" class="form-control c-bg-transparent input-lg c-theme c-square " placeholder="Address & suite #" id="us4-address" style="color: white !important;" name="dropoff_address" required="required" value="<?php if(!empty($dropoff_address)){
					echo $dropoff_address;
				}else if($this->session->userdata("user_input_val")){echo $values->dropoff_address;} ?>">
              </div>
              <textarea col="10" row="10" class="form-control c-bg-transparent input-lg c-theme c-square " placeholder="Special instructions" style="width:94% !important;margin:1% 0;height:155px;color:white !important" name="dropoff_instructions" required="required"><?php if($this->session->userdata("user_input_val")){echo $values->dropoff_instructions;} ?>

</textarea>
            </div>
          </div>
          <div class="col-md-12" style="margin:8% 0 2% 0 !important" >
            <?php if(!$this->session->userdata("user_session")){ ?>
            <div align="center" style="margin-left:28%" class="model_confirm">
              <div class="c-checkbox has-success" align="left">
                <input type="checkbox" id="checkbox9-111" class="c-check check_box">
                <label for="checkbox9-111"> <span></span> <span class="check"></span> <span class="box"></span> *You agree to pay for cost if items upon delivery completion. </label>
              </div>
            </div>
            <a  class="btn btn-lg btn-danger c-btn-uppercase c-btn-square c-btn-bold lets_route" id="modal_btn"  style="padding: 12px 105px 11px 105px !important;" onclick="store_input_values()" >Let's Route</a>
            <?php }else{ ?>
            <div align="center" style="margin-left:28%" class="model_confirm">
              <div class="c-checkbox has-success" align="left">
                <input type="checkbox" id="checkbox9-111" class="c-check check_box" required="required">
                <label for="checkbox9-111"> <span></span> <span class="check"></span> <span class="box"></span> *You agree to pay for cost if items upon delivery completion. </label>
              </div>
            </div>
            <button type="submit" class="btn btn-lg btn-danger c-btn-uppercase c-btn-square c-btn-bold lets_route"   style="padding: 12px 105px 11px 105px !important;" onclick="check_confirm()">Let's Route</button>
            <?php } ?>
            <div id="error_area">
              <p style="color:red">We cannot provide the services in your above sepcified areas, please check again</p>
            </div>
          </div>
          
          <!--<div class="col-md-12" ><img src="<?php echo base_url("assets/base/img/layout/logos/Paypal-Logo.png")?>" alt="" style="width:20%"></div>-->
          
        </form>
      </div>
    </div>
  </div>
</div>
<?php include(APPPATH."views/web/includes/footer1.php"); ?>

<!-- END: LAYOUT/BASE/BOTTOM --> 

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANGFXCJqEp3TUD6Ew6VLO_j9cuvSlk4qw&libraries=geometry,places&callback=initAutocomplete" async defer></script> 
<script type="text/javascript">





$(document).ready(function(){

	<?php if($this->session->userdata("user_input_val")){ ?>

		setInterval(function(){ $("#lets_route").click(); }, 3000);

	<?php } ?>

});



$(".lets_route").hide();



if(document.getElementById("pickup_status").value=="pickup_yes" && document.getElementById("dropoff_status").value=="dropoff_yes"){

	$(".lets_route").show();

	$("#error_area").hide();

	$(".model_confirm").show();

}else{

	$(".lets_route").hide();

	$("#error_area").show();

	$(".model_confirm").hide();

}





/*

*

*

*   START MAP FUNCTION

*

*

*/



function initAutocomplete(){

	

	//START: dynamic pickup latitude and longitude

	pickup_latitude = <?php if(!empty($values->pickup_lat)){echo $values->pickup_lat; }else{if($pickup_lat!="0" || $pickup_lat!=""){echo $pickup_lat;}else{echo "34.0635016";}}?>;

	pickup_longitude = <?php if(!empty($values->pickup_lon)){echo $values->pickup_lon;}else{if($pickup_lon!="0" || $pickup_lon!=""){echo $pickup_lon;}else{echo "-118.44951639999997";}}?>;	

	var pickupLatLng = {lat: pickup_latitude, lng: pickup_longitude};

	//END: dynamic pickup latitude and longitude

	

	//START: dynamic dropoff latitude and longitude

	dropoff_latitude = <?php if(!empty($values->dropoff_lat)){echo $values->dropoff_lat;}else{if($dropoff_lat!="0" || $dropoff_lat!=""){echo $dropoff_lat;}else{echo "34.0635016";}} ?>;

	dropoff_longitude = <?php if(!empty($values->dropoff_lon)){echo $values->dropoff_lon;}else{if($dropoff_lon!="0" || $dropoff_lon!=""){echo $dropoff_lon;}else{echo "-118.44051639999997";}} ?>;

	var dropoffLatLng = {lat: dropoff_latitude, lng: dropoff_longitude};

	//END: dynamic dropoff latitude and longitude

	

	

	//START: Initializing Map

	map = new google.maps.Map(document.getElementById('map'), {

		center: pickupLatLng,

		zoom: 16

	});

	//END: Initializing Map

	
	
	



	//START: Restricted Areas of Pickup Location

	var restrictedPikckupCoords = [<?php if(!empty($pickup_locations->Pickup_Locations)){echo $pickup_locations->Pickup_Locations;} ?>];

	var RestrictedPickupPolygon = new google.maps.Polygon({

		paths: restrictedPikckupCoords,

		strokeColor: '#00a153',

		strokeOpacity: 0.2,

		strokeWeight: 2,

		fillColor: '#00a153',

		fillOpacity: 0.1

	});

	RestrictedPickupPolygon.setMap(map);

	//END: Restricted Areas of Pickup Location	

	

	//START: Restricted Areas of Pickup Location

	var restrictedDropoffCoords = [<?php if(!empty($pickup_locations->Droppoff_Locations)){echo $pickup_locations->Droppoff_Locations;} ?>];

	var RestrictedDropoffPolygon = new google.maps.Polygon({

		paths: restrictedDropoffCoords,

		strokeColor: '#a10053',

		strokeOpacity: 0.2,

		strokeWeight: 2,

		fillColor: '#a10053',

		fillOpacity: 0.1

	});

	RestrictedDropoffPolygon.setMap(map);	

	//END: Restricted Areas of Pickup Location



	//START: Adding New Marker and infowindow of dropoff location

	dropofflocation = dropoffLatLng;

	var dropoffmarker = new google.maps.Marker({

		position: dropofflocation,

		map: map,

		draggable: true,

	});

	dropoffinfowindow = new google.maps.InfoWindow({

		content: "Select Dropoff Location",

	});

	dropoffinfowindow.open(map, dropoffmarker);

	//END: Adding New Marker and infowindow of dropoff location



	//START: Adding New Marker and infowindow of pickup location

	pickuplocation = pickupLatLng;

	var pickupmarker = new google.maps.Marker({

		position: pickuplocation,

		map: map,

		draggable: true,

		primaryColor: "#0000FF", 

		cornercolor:"#0000FF"

	});

	var pickupinfowindow = new google.maps.InfoWindow({

		content: "Select Pickup Location",

	});

	pickupinfowindow.open(map, pickupmarker);

	//END: Adding New Marker and infowindow of pickup location

	

	//START: Adding New Static polyline of pickup location and dropoff location

	var flightPlanCoordinates = [

		pickuplocation,

		dropofflocation,

	];

	var flightPath = new google.maps.Polyline({

		path: flightPlanCoordinates,

		geodesic: true,

		strokeColor: '#00a18c',

		strokeOpacity: 1.0,

		strokeWeight: 2

	});

	flightPath.setMap(map);

	//END: Adding New Static polyline of pickup location and dropoff location

	

	var pickupinfowindow1=null;

	var pickupTriMarker=null;





	//START: Setting Autocomplete of Pickup Location in the map//
	p_input = document.getElementById("us3-address");
	var p_searchBox = new google.maps.places.SearchBox(p_input);
	p_searchBox.addListener('places_changed', function() {
	  var p_places = p_searchBox.getPlaces();
	});

	var p_autocomplete = new google.maps.places.Autocomplete(p_input);
	var p_geocoder1 = new google.maps.Geocoder();
	var p_address1 = p_autocomplete;

	p_autocomplete.addListener('place_changed', function() {
		var p_address1 = document.getElementById('us3-address').value;
		p_geocoder1.geocode({'address': p_address1}, function(results, status) {
		pickupLatLng = {lat: results[0].geometry.location.lat(), lng: results[0].geometry.location.lng()};
		  if (status === 'OK') {
			map.setCenter(results[0].geometry.location);
			
			
			pickupmarker.setPosition(pickupLatLng);
			/*p_marker = new google.maps.Marker({

			  map: map,

			  position: pickupLatLng,

			  draggable:true,

			});*/
			
			document.getElementById('us3-lat').value = results[0].geometry.location.lat();
			document.getElementById('us3-lon').value = results[0].geometry.location.lng();
		  } else {
			alert('Geocode was not successful for the following reason: ' + status);
		  }
		});
	});
	 //END: Setting Autocomplete of Pickup Location in the map//

	//START: Setting Autocomplete of Dropoff Location in the map//
	d_input = document.getElementById("us4-address");
	var d_searchBox = new google.maps.places.SearchBox(d_input);
	d_searchBox.addListener('places_changed', function() {
	  var d_places = p_searchBox.getPlaces();
	});

	var d_autocomplete = new google.maps.places.Autocomplete(d_input);
	var d_geocoder1 = new google.maps.Geocoder();
	var d_address1 = d_autocomplete;

	d_autocomplete.addListener('place_changed', function() {
		var d_address1 = document.getElementById('us4-address').value;
		d_geocoder1.geocode({'address': d_address1}, function(results, status) {

		dropoffLatLng = {lat: results[0].geometry.location.lat(), lng: results[0].geometry.location.lng()};
		  if (status === 'OK') {
			map.setCenter(results[0].geometry.location);

			
			
			dropoffmarker.setPosition(dropoffLatLng);
			
			

			document.getElementById('us4-lat').value = results[0].geometry.location.lat();
			document.getElementById('us4-lon').value = results[0].geometry.location.lng();
		  } else {
			alert('Geocode was not successful for the following reason: ' + status);
		  }
		});
	});
	//END: Setting Autocomplete of Pickup Location in the map//

























	

	//START: Adding a listener of pickup marker, on dragging pickup marker deleting previous polyline, and adding new polyline, deleting previous pickup infowindow and adding new pickup info window

	pickupmarker.addListener('dragend', function(e) {
		if (pickupinfowindow1) {
			pickupinfowindow1.close();
		}

		if (pickupTriMarker) {
			pickupTriMarker.setMap(null);
		}

		//Deleting previous polyline
		flightPath.setMap(null);

		//Deleting previous infowindow 
		pickupinfowindow.setMap(null);

		

		

		//update pickuplocation variable here to add new polyline

		pickuplocation = e.latLng;

		

		//START: adding new polyline here

		flightPlanCoordinates = [

			pickuplocation,

			dropofflocation,

		];

		flightPath = new google.maps.Polyline({

			path: flightPlanCoordinates,

			geodesic: true,

			strokeColor: '#00a18c',

			strokeOpacity: 1.0,

			strokeWeight: 2

		});

		flightPath.setMap(map);

		//END: adding new polyline here

		

		

		//START: Setting up restricted areas of pickup locations here

		//setting up contains location marker color

		var p_resultColor =

			google.maps.geometry.poly.containsLocation(e.latLng, RestrictedPickupPolygon) ?

			'blue' :

			'red';

		//setting up contains location result paths (if you ping true than return "m 0 -1 l 1 2 -2 0 z" :, else 0

		var p_resultPath =

			google.maps.geometry.poly.containsLocation(e.latLng, RestrictedPickupPolygon) ?

			// A triangle.

			"m 0 -1 l 1 2 -2 0 z" :

			google.maps.SymbolPath.CIRCLE;

		//adding contains location markers

		pickupTriMarker = new google.maps.Marker({

			position: e.latLng,

			map: map,

			icon: {

				path: p_resultPath,

				fillColor: p_resultColor,

				fillOpacity: .3,

				strokeColor: 'white',

				strokeWeight: .2,

				scale: 10

			}

		});

		//setting up the let's route button, if yes than active, if no than deactive

		if(p_resultPath){

			p_contentString = "<span style='color:green'>Available Pickup</span>";

			document.getElementById("pickup_status").value = "pickup_yes";
			document.getElementById("top-message").innerHTML = "Pickup service available";
			$("#top-message").css("background-color", "#5dc09c");

		}else{

			p_contentString = "<span style='color:red'>Not Available Pickup</span>";

			document.getElementById("pickup_status").value = "pickup_no";
			document.getElementById("top-message").innerHTML = "Pickup service is not available";
			$("#top-message").css("background-color", "#e7505a");
			

		}

		

		//setting up new info window

		pickupinfowindow1 = new google.maps.InfoWindow({

			content: p_contentString,

		});

		pickupinfowindow1.open(map, pickupmarker);

		

		//END: Setting up restricted areas of pickup locations here

		

		//START: After dragging marker, updating address latitude and longitude and fill in the input fields

		var p_geocoder = new google.maps.Geocoder();

		var new_lat = e.latLng.lat();

		var new_lng = e.latLng.lng();

		var p_n_latlng = {lat: new_lat, lng: new_lng};

		p_geocoder.geocode({'location': p_n_latlng}, function(results, status) {

		  if (status === 'OK') {

			  if (results[1]) {

			   /* marker = {

				  position: latlng,

				  map: map

				};*/

				document.getElementById('us3-address').value = results[1].formatted_address;

				document.getElementById('us3-lat').value = results[0].geometry.location.lat();

				document.getElementById('us3-lon').value = results[0].geometry.location.lng();

			  } else {

				window.alert('No results found');

			  }

			} else {

			  window.alert('Geocoder failed due to: ' + status);

		   }

		  

		});

		//END: After dragging marker, updating address latitude and longitude and fill in the input fields

		

		//START: setting up the pickup box yes or no

		if(document.getElementById("pickup_status").value=="pickup_yes" && document.getElementById("dropoff_status").value=="dropoff_yes"){

			$(".lets_route").show();

			$("#error_area").hide();

			$(".model_confirm").show();

		}else{

			$(".lets_route").hide();

			$("#error_area").show();

			$(".model_confirm").hide();

		}

		//END: setting up the pickup box yes or no



	});

	//END: Adding a listener of pickup marker, on dragging pickup marker deleting previous polyline, and adding new polyline, deleting previous pickup infowindow and adding new pickup info window

	

	

	var dropoffinfowindow1=null;

	var dropoffTriMarker=null;

	

	//START Adding a listener of dropoff marker, on dragging dropoff marker deleting previous polyline, and adding new polyline, deleting previous dropoff infowindow and adding new dropoff info window

	dropoffmarker.addListener('dragend', function(e) {

		if (dropoffinfowindow1) {

			dropoffinfowindow1.close();

		}

		

		if (dropoffTriMarker) {

			dropoffTriMarker.setMap(null);

		}



		//Deleting previous polyline

		flightPath.setMap(null);

		//Deleting previous infowindow 

		dropoffinfowindow.setMap(null);

		

		//update pickuplocation variable here to add new polyline

		dropofflocation = e.latLng;

		

		//START: adding new polyline here

		flightPlanCoordinates = [

			pickuplocation,

			dropofflocation,

		];

		flightPath = new google.maps.Polyline({

			path: flightPlanCoordinates,

			geodesic: true,

			strokeColor: '#00a18c',

			strokeOpacity: 1.0,

			strokeWeight: 2

		});

		flightPath.setMap(map);

		//END: adding new polyline here

		

		

		//START: Setting up restricted areas of dropoff locations here

		//setting up contains location marker color

		var d_resultColor =

			google.maps.geometry.poly.containsLocation(e.latLng, RestrictedDropoffPolygon) ?

			'blue' :

			'red';

		//setting up contains location result paths (if you ping true than return "m 0 -1 l 1 2 -2 0 z" :, else 0		 

		var d_resultPath =

			google.maps.geometry.poly.containsLocation(e.latLng, RestrictedDropoffPolygon) ?

			// A triangle.

			"m 0 -1 l 1 2 -2 0 z" :

			google.maps.SymbolPath.CIRCLE;

		//adding contains location markers	

		dropoffTriMarker = new google.maps.Marker({

			position: e.latLng,

			map: map,

			icon: {

				path: d_resultPath,

				fillColor: d_resultColor,

				fillOpacity: .3,

				strokeColor: 'white',

				strokeWeight: .2,

				scale: 10

			}

		});

				

		//setting up the let's route button, if yes than active, if no than deactive	

		if(d_resultPath){

			d_contentString = "<span style='color:green'>Available Dropoff</span>";

			document.getElementById("dropoff_status").value = "dropoff_yes";
			document.getElementById("top-message").innerHTML = "Dropoff service available";
			$("#top-message").css("background-color", "#5dc09c");

		}else{

			d_contentString = "<span style='color:red'>Not Available Dropoff</span>";

			document.getElementById("dropoff_status").value = "dropoff_no";
			document.getElementById("top-message").innerHTML = "Dropoff service is not available";
			$("#top-message").css("background-color", "#e7505a");

		}

		

		//setting up new info window

		dropoffinfowindow1 = new google.maps.InfoWindow({

			content: d_contentString,

		});

		dropoffinfowindow1.open(map, dropoffmarker);

		

		

		//END: Setting up restricted areas of pickup locations here

		

		//START: After dragging marker, updating address latitude and longitude and fill in the input fields

		var d_geocoder = new google.maps.Geocoder();

		var new_lat1 = e.latLng.lat();

		var new_lng1 = e.latLng.lng();

		var d_n_latlng = {lat: new_lat1, lng: new_lng1};

		d_geocoder.geocode({'location': d_n_latlng}, function(results, status) {

			if (status === 'OK') {

				if (results[1]) {

				 /* marker = {

					position: latlng,

					map: map

				  };*/

				  document.getElementById('us4-address').value = results[1].formatted_address;

				  document.getElementById('us4-lat').value = results[0].geometry.location.lat();

				  document.getElementById('us4-lon').value = results[0].geometry.location.lng();

				} else {

				  window.alert('No results found');

				}

			  } else {

				window.alert('Geocoder failed due to: ' + status);

			 }

		});

		//END: After dragging marker, updating address latitude and longitude and fill in the input fields

		

		

		//START: setting up the pickup box yes or no

		if(document.getElementById("pickup_status").value=="pickup_yes" && document.getElementById("dropoff_status").value=="dropoff_yes"){

			$(".lets_route").show();

			$("#error_area").hide();

			$(".model_confirm").show();

		}else{

			$(".lets_route").hide();

			$("#error_area").show();

			$(".model_confirm").hide();

		}

		//END: setting up the pickup box yes or no

	});

	





}





/*

*

*

*   EBD MAP FUNCTION

*

*

*/





//check confirm here

function check_confirm(){

	if ($('.check_box').is(':checked')) {

	}else{

		alert("Please Check the agreement");

	}

}



//creating session for input values which user entered in create order form 

function store_input_values(){

	var modal_btn = $("#modal_icon").val();

	



	if ($('.check_box').is(':checked')) {

		$("#modal_btn").attr("data-toggle","modal");

		$("#modal_btn").attr("data-target","#login-form");

	}else{

		alert("Please Check the agreement");

	}

	//data-toggle="modal" data-target="#login-form"

	

	

	var pickup_lat = $("input[name=pickup_lat]").val();

	var pickup_lon = $("input[name=pickup_lon]").val();

	var pickup_place = $("input[name=pickup_place]").val();

	var pickup_address = $("input[name=pickup_address]").val();

	var pickup_items = $("textarea[name=pickup_items]").val();

	var pickup_instructions = $("textarea[name=pickup_instructions]").val();

	var pickup_status = $("#pickup_status").val();

	

	var dropoff_lat = $("input[name=dropoff_lat]").val();

	var dropoff_lon = $("input[name=dropoff_lon]").val();

	var dropoff_place = $("input[name=dropoff_place]").val();

	var dropoff_address = $("input[name=dropoff_address]").val();

	var dropoff_items = $("input[name=dropoff_items]").val();

	var dropoff_instructions = $("textarea[name=dropoff_instructions]").val();

	var dropoff_status = $("#dropoff_status").val();

	

	$.post("<?php echo site_url("create_order/store_input_values"); ?>",{pickup_lat:pickup_lat,pickup_lon:pickup_lon,pickup_place:pickup_place,pickup_address:pickup_address,pickup_items:pickup_items,pickup_instructions:pickup_instructions,pickup_status:pickup_status,dropoff_lat:dropoff_lat,dropoff_lon:dropoff_lon,dropoff_place:dropoff_place,dropoff_address:dropoff_address,dropoff_items:dropoff_items,dropoff_instructions:dropoff_instructions,dropoff_status:dropoff_status}).done(function(data){

		console.log(data);

	});

}



//suggested personal pickup saved addresses

function suggested_address(){

	var suggested_values = $(".suggested_place").val();

	$.post("<?php echo site_url("client/suggested_address/address") ?>", {suggested_values:suggested_values}).done(function(data){

		$( "#suggest_result1").fadeIn();

		$( "#suggest_result1").html(data);

	});

}



function add_address(id){

	$.post("<?php echo site_url("client/suggested_address/get_address") ?>", {id:id}).done(function(data){

		var data = JSON.parse(data);

		$("input[name=pickup_lat]").val(data.Latitude);

		$("input[name=pickup_lon]").val(data.Longitude);

		$("input[name=pickup_place]").val(data.Place_Name);

		$("input[name=pickup_address]").val(data.Saved_Address);

		$( "#suggest_result1").fadeOut();

	});

}



//suggested personal pickup saved addresses

function suggested_address1(){

	var suggested_values = $(".suggested_place1").val();

	$.post("<?php echo site_url("client/suggested_address/address1") ?>", {suggested_values:suggested_values}).done(function(data){

		$( "#suggest_result2").fadeIn();

		$( "#suggest_result2").html(data);

	});

}



function add_address1(id){

	$.post("<?php echo site_url("client/suggested_address/get_address") ?>", {id:id}).done(function(data){

		var data = JSON.parse(data);

		$("input[name=dropoff_lat]").val(data.Latitude);

		$("input[name=dropoff_lon]").val(data.Longitude);

		$("input[name=dropoff_place]").val(data.Place_Name);

		$("input[name=dropoff_address]").val(data.Saved_Address);

		$( "#suggest_result2").fadeOut();

	});

}







</script>
<?php include(APPPATH."views/web/includes/footer2.php"); ?>
