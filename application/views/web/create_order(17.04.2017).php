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

#suggest_result1{
	background-color:white;
	position:absolute;
	width:94%;
	z-index:100;
	color:black;
	text-align:left;
}

#suggest_result1 ul li{
	list-style-type:none;
	 cursor:pointer;
}
#suggest_result1 ul li:hover{
	color:red;
}

#suggest_result2{
	background-color:white;
	position:absolute;
	width:94%;
	z-index:100;
	color:black;
	text-align:left;
}

#suggest_result2 ul li{
	list-style-type:none;
	 cursor:pointer;
}

#suggest_result2 ul li:hover{
	color:red;
}
</style>
<?php include(APPPATH."views/web/includes/header2.php"); ?>
<?php
$values = $this->session->userdata("user_input_val");

$values = (object)$values;

?>
<div class="c-content-box c-size-md c-bg-img-top c-bg-parallax main_background" style="background-image: url(<?php echo base_url("assets/base/img/content/backgrounds/main1_background.jpg)")?>">
  <div class="container">
    <div class="c-content-feature-11"   style="padding:2% 0">
      <div class="row" align="center">
        <form class="form-inline" action="<?php echo site_url("create_order/create_new"); ?>" method="post">
          <div class="col-md-6">
            <h3 class="c-font-54 c-font-thin c-font-white c-margin-b-40 c-font-uppercase">Pickup </h3>
            <div class="col-md-12">
            <div style="background-color:white;width: 420px;margin-bottom:2%;color:#69F; font-weight:500">Pin Your Pickup Location</div>
              <div id="us3" style="width: 420px; height: 400px;"></div>
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
              <div class="form-group col-md-12" style="margin:1% 0">
                <input type="text" class="form-control c-bg-transparent input-lg c-theme c-square suggested_place" placeholder="Place name" style="color: white !important;" name="pickup_place"  required="required" onkeyup="suggested_address()" value="<?php if($this->session->userdata("user_input_val")){echo $values->pickup_place;} ?>" autocomplete="off" >
                <div id="suggest_result1" style="display:none"></div>
              </div>
              <div class="form-group col-md-12" style="margin:1% 0">
                <input type="text" class="form-control c-bg-transparent input-lg c-theme c-square " placeholder="Address & suite #" id="us3-address" style="color: white !important;" name="pickup_address" required="required" value="<?php if($this->session->userdata("user_input_val")){echo $values->pickup_address;} ?>">
              </div>
              
                
              
              <!--<select class="form-control c-bg-transparent input-lg c-theme c-square " style="width:79%;margin:1% 0; background-color:#272d32 !important; color:white !important" name="pickup_items" required="required">
              <option label="Select Item" >Select Item</option>
              <?php //if($products->num_rows>0){ ?>
              <?php //foreach($products->result() as $products1){ ?>
              	<option value="<?php //echo $products1->id; ?>" <?php //if($this->session->userdata("user_input_val") && $products1->id==$values->pickup_items){echo 'selected="selected"';} ?>><?php //echo $products1->name; ?></option>
              <?php //}} ?>
              </select>-->
              <textarea col="10" row="10" class="form-control c-bg-transparent input-lg c-theme c-square" name="pickup_items" placeholder="Pickup Items" style="width:79%;margin:1% 0;height:155px;color:white !important" srequired="required"><?php if($this->session->userdata("user_input_val")){echo $values->pickup_items;} ?></textarea>
              
              
              
              
              <textarea col="10" row="10" class="form-control c-bg-transparent input-lg c-theme c-square" name="pickup_instructions" placeholder="Special instructions" style="width:79%;margin:1% 0;height:155px;color:white !important" srequired="required"><?php if($this->session->userdata("user_input_val")){echo $values->pickup_instructions;} ?></textarea>
            </div>
          </div>
          <div class="col-md-6">
            <h3 class="c-font-54 c-font-thin c-font-white c-margin-b-40 c-font-uppercase">Delivery </h3>
            <div class="col-md-12">
            <div style="background-color:white;width: 420px;margin-bottom:2%;color:#69F; font-weight:500">Pin Your Dropoff Location</div>
              <div id="us4" style="width: 420px; height: 400px;"></div>
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
              
              <div class="form-group col-md-12" style="margin:1% 0">
                <input type="text" class="form-control c-bg-transparent input-lg c-theme c-square suggested_place1" onkeyup="suggested_address1()" placeholder="Place name" style="color: white !important;" name="dropoff_place" required="required" value="<?php if($this->session->userdata("user_input_val")){echo $values->dropoff_place;} ?>" autocomplete="off">
                <div id="suggest_result2" style="display:none"></div>
              </div>
              <div class="form-group col-md-12" style="margin:1% 0">
                <input type="text" class="form-control c-bg-transparent input-lg c-theme c-square " placeholder="Address & suite #" id="us4-address" style="color: white !important;" name="dropoff_address" required="required" value="<?php if($this->session->userdata("user_input_val")){echo $values->dropoff_address;} ?>">
              </div>
              <!--<div class="form-group col-md-12" style="margin:1% 0">
                <input type="text" class="form-control c-bg-transparent input-lg c-theme c-square " placeholder="Dropoff Items" id="us4-address" style="color: white !important;width:100% !important;" name="dropoff_items" required="required" value="<?php //if($this->session->userdata("user_input_val")){echo $values->dropoff_items;} ?>">
              </div>-->
              <!--<select class="form-control c-bg-transparent input-lg c-theme c-square " style="width:79%;margin:1% 0; background-color:#272d32 !important; color:white !important" name="dropoff_items" required="required">
              <option label="Select Item" >Select Item</option>
              <?php //if($products->num_rows>0){ ?>
              <?php //foreach($products->result() as $products2){ ?>
              	<option value="<?php //echo $products2->id; ?>" <?php //if($this->session->userdata("user_input_val") && $products2->id==$values->dropoff_items){echo 'selected="selected"';} ?>><?php //echo $products2->name; ?></option>
              <?php //}} ?>
              </select>-->
              <textarea col="10" row="10" class="form-control c-bg-transparent input-lg c-theme c-square " placeholder="Special instructions" style="width:79%;margin:1% 0;height:155px;color:white !important" name="dropoff_instructions" required="required"><?php if($this->session->userdata("user_input_val")){echo $values->dropoff_instructions;} ?></textarea>
            </div>
          </div>
          
          <div class="col-md-12" style="margin:8% 0 2% 0 !important" >
            
            <?php if(!$this->session->userdata("user_session")){ ?>
            <div align="center" style="margin-left:28%" class="model_confirm">
                <div class="c-checkbox has-success" align="left">
                    <input type="checkbox" id="checkbox9-111" class="c-check check_box">
                    <label for="checkbox9-111">
                        <span></span>
                        <span class="check"></span>
                        <span class="box"></span> *You agree to pay for cost if items upon delivery completion. </label>
                </div>            
            </div>

            <a  class="btn btn-lg btn-danger c-btn-uppercase c-btn-square c-btn-bold lets_route" id="modal_btn"  style="padding: 12px 105px 11px 105px !important;" onclick="store_input_values()" >Let's Route</a>
            <?php }else{ ?>
            <div align="center" style="margin-left:28%" class="model_confirm">
                <div class="c-checkbox has-success" align="left">
                    <input type="checkbox" id="checkbox9-111" class="c-check check_box" required="required">
                    <label for="checkbox9-111">
                        <span></span>
                        <span class="check"></span>
                        <span class="box"></span> *You agree to pay for cost if items upon delivery completion. </label>
                </div>            
            </div>

            <button type="submit" class="btn btn-lg btn-danger c-btn-uppercase c-btn-square c-btn-bold lets_route"   style="padding: 12px 105px 11px 105px !important;" onclick="check_confirm()">Let's Route</button>
            <?php } ?>
            <div id="error_area"><p style="color:red">We cannot provide the services in your above sepcified areas, please check again</p></div>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
          </div>
          <div class="col-md-12" ><img src="<?php echo base_url("assets/base/img/layout/logos/Paypal-Logo.png")?>" alt="" style="width:20%"></div>
        </form>
      </div>
    </div>
  </div>
</div>






















<?php include(APPPATH."views/web/includes/footer1.php"); ?>
<!-- BEGIN: PAGE SCRIPTS --> 
<!--<script src="<?php //echo base_url("assets/base/js/scripts/pages/2col-portfolio.js")?>" type="text/javascript"></script> -->
<!-- END: PAGE SCRIPTS --> 
<!-- END: LAYOUT/BASE/BOTTOM --> 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANGFXCJqEp3TUD6Ew6VLO_j9cuvSlk4qw&libraries=geometry,places&callback=initAutocomplete" async defer></script>
<!--<script src="<?php //echo base_url("assets/base/js/dist/locationpicker.jquery.js")?>"></script> -->
<!--<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->


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
	
	
		
		
		
		
		
		function initAutocomplete(){
			pickup_latitude = <?php if(!empty($values->pickup_lat)){echo $values->pickup_lat; }else{if($pickup_lat!="0" || $pickup_lat!=""){echo $pickup_lat;}else{echo "34.0635016";}}?>;
			pickup_longitude = <?php if(!empty($values->pickup_lon)){echo $values->pickup_lon;}else{if($pickup_lon!="0" || $pickup_lon!=""){echo $pickup_lon;}else{echo "-118.44551639999997";}}?>;
			
			
			var p_myLatLng = {lat: pickup_latitude, lng: pickup_longitude};
			var p_map = new google.maps.Map(document.getElementById('us3'), {
				center: p_myLatLng,
				zoom: 14,
			  /*draggableCursor:'crosshair',*/
        	});
			
			var p_marker = new google.maps.Marker({
			  map: p_map,
			  position: p_myLatLng,
			  draggable:true,
			});
			
			
			p_input = document.getElementById("us3-address");
			var p_searchBox = new google.maps.places.SearchBox(p_input);
			p_searchBox.addListener('places_changed', function() {
			  var p_places = p_searchBox.getPlaces();
			});
			
			var p_autocomplete = new google.maps.places.Autocomplete(p_input);
			var p_geocoder = new google.maps.Geocoder();
			
			var p_address = p_autocomplete;
			
			 p_autocomplete.addListener('place_changed', function() {
			 	
					var p_address = document.getElementById('us3-address').value;
					p_geocoder.geocode({'address': p_address}, function(results, status) {
						p_myLatLng = {lat: results[0].geometry.location.lat(), lng: results[0].geometry.location.lng()};
					  if (status === 'OK') {
						p_map.setCenter(results[0].geometry.location);
						
						p_marker = new google.maps.Marker({
						  map: p_map,
						  position: p_myLatLng,
						  draggable:true,
						});
						
						document.getElementById('us3-lat').value = results[0].geometry.location.lat();
						document.getElementById('us3-lon').value = results[0].geometry.location.lng();
					  } else {
						alert('Geocode was not successful for the following reason: ' + status);
					  }
					});
			 });
			 
			 
			 var triangleCoords = [<?php if(!empty($pickup_locations->Pickup_Locations)){echo $pickup_locations->Pickup_Locations;} ?>];
			 
			  var p_Triangle = new google.maps.Polygon({
				  	paths: triangleCoords,
					strokeColor: '#004156',
					strokeOpacity: 0.8,
					strokeWeight: 2,
					fillColor: '#57bfe1',
					fillOpacity: 0.15
				});
			
			 p_Triangle.setMap(p_map);


			google.maps.event.addListener(p_marker, "dragend", function(e){
				console.log(e);
				var new_lat = e.latLng.lat();
				var new_lng = e.latLng.lng();
				var p_n_latlng = {lat: new_lat, lng: new_lng};
				p_geocoder.geocode({'location': p_n_latlng}, function(results, status) {
					
					
					console.log(results);
					
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
				
				
				
				
				var p_resultColor =
					  google.maps.geometry.poly.containsLocation(e.latLng, p_Triangle) ?
					  'blue' :
					  'red';
					 
					var p_resultPath =
					  google.maps.geometry.poly.containsLocation(e.latLng, p_Triangle) ?
					  // A triangle.
					  "m 0 -1 l 1 2 -2 0 z" :
					  google.maps.SymbolPath.CIRCLE;
					
					new google.maps.Marker({
						position: e.latLng,
						map: p_map,
						icon: {
						  path: p_resultPath,
						  fillColor: p_resultColor,
						  fillOpacity: .3,
						  strokeColor: 'white',
						  strokeWeight: .2,
						  scale: 10
						}
					});
					
					
					
					if(p_resultPath){
						p_contentString = "Available";
						document.getElementById("pickup_status").value = "pickup_yes";
						//$("input[name=pickup_satus]").val() = "1";
						//document.getElementById("btn").removeAttribute("disabled", "disabled");
					}else{
						p_contentString = "<span style='color:red'>Not Available</span>";
						document.getElementById("pickup_status").value = "pickup_no";
						//$("input[name=pickup_satus]").val() = "0";
						//document.getElementById("btn").setAttribute("disabled", "disabled");
					}
					
					 p_infowindow = new google.maps.InfoWindow({
					  content: p_contentString,
					});
					
					p_infowindow.open(p_map, p_marker);
					
				
			
			
			
			if(document.getElementById("pickup_status").value=="pickup_yes" && document.getElementById("dropoff_status").value=="dropoff_yes"){
				$(".lets_route").show();
				$("#error_area").hide();
				$(".model_confirm").show();
			}else{
				$(".lets_route").hide();
				$("#error_area").show();
				$(".model_confirm").hide();
			}
			
			
			});
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			dropoff_latitude = <?php if(!empty($values->dropoff_lat)){echo $values->dropoff_lat;}else{if($dropoff_lat!="0" || $dropoff_lat!=""){echo $dropoff_lat;}else{echo "34.0635016";}} ?>;
			
			dropoff_longitude = <?php if(!empty($values->dropoff_lon)){echo $values->dropoff_lon;}else{if($dropoff_lon!="0" || $dropoff_lon!=""){echo $dropoff_lon;}else{echo "-118.44551639999997";}} ?>;
			
			var d_myLatLng = {lat: dropoff_latitude, lng: dropoff_longitude};
			var d_map = new google.maps.Map(document.getElementById('us4'), {
				center: d_myLatLng,
				zoom: 14,
			  /*draggableCursor:'crosshair',*/
        	});
			
			var d_marker = new google.maps.Marker({
			  map: d_map,
			  position: d_myLatLng,
			  draggable:true,
			});
			
			
			d_input = document.getElementById("us4-address");
			var d_searchBox = new google.maps.places.SearchBox(d_input);
			d_searchBox.addListener('places_changed', function() {
			  var d_places = d_searchBox.getPlaces();
			});
			
			var d_autocomplete = new google.maps.places.Autocomplete(d_input);
			var d_geocoder = new google.maps.Geocoder();
			
			var d_address = d_autocomplete;
			
			 d_autocomplete.addListener('place_changed', function() {
			 	
					var d_address = document.getElementById('us4-address').value;
					d_geocoder.geocode({'address': d_address}, function(results, status) {
						d_myLatLng = {lat: results[0].geometry.location.lat(), lng: results[0].geometry.location.lng()};
					  if (status === 'OK') {
						d_map.setCenter(results[0].geometry.location);
						
						d_marker = new google.maps.Marker({
						  map: d_map,
						  position: d_myLatLng,
						  draggable:true,
						});
						
						document.getElementById('us4-lat').value = results[0].geometry.location.lat();
						document.getElementById('us4-lon').value = results[0].geometry.location.lng();
					  } else {
						alert('Geocode was not successful for the following reason: ' + status);
					  }
					});
			 });
			 
			 
			 var triangleCoords = [<?php if(!empty($pickup_locations->Droppoff_Locations)){echo $pickup_locations->Droppoff_Locations;} ?>];
			 
			  var d_Triangle = new google.maps.Polygon({
				  	paths: triangleCoords,
					strokeColor: '#004156',
					strokeOpacity: 0.8,
					strokeWeight: 2,
					fillColor: '#57bfe1',
					fillOpacity: 0.15
				  });
				
			d_Triangle.setMap(d_map);


			google.maps.event.addListener(d_marker, "dragend", function(e){
				console.log(e);
				var new_lat = e.latLng.lat();
				var new_lng = e.latLng.lng();
				var d_n_latlng = {lat: new_lat, lng: new_lng};
				d_geocoder.geocode({'location': d_n_latlng}, function(results, status) {
					
					
					console.log(results);
					
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
				
				
				
				
				var d_resultColor =
					  google.maps.geometry.poly.containsLocation(e.latLng, d_Triangle) ?
					  'blue' :
					  'red';
					 
					var d_resultPath =
					  google.maps.geometry.poly.containsLocation(e.latLng, d_Triangle) ?
					  // A triangle.
					  "m 0 -1 l 1 2 -2 0 z" :
					  google.maps.SymbolPath.CIRCLE;
					
					new google.maps.Marker({
						position: e.latLng,
						map: d_map,
						icon: {
						  path: d_resultPath,
						  fillColor: d_resultColor,
						  fillOpacity: .3,
						  strokeColor: 'white',
						  strokeWeight: .2,
						  scale: 10
						}
					});
					
					
					
					if(d_resultPath){
						d_contentString = "Available";
						document.getElementById("dropoff_status").value = "dropoff_yes";
						/*document.getElementById("lets_route").removeAttribute("disabled", "disabled");*/
					}else{
						d_contentString = "<span style='color:red'>Not Available</span>";
						document.getElementById("dropoff_status").value = "dropoff_no";
						/*document.getElementById("lets_route").("disabled", "disabled");*/
					}
					
					 d_infowindow = new google.maps.InfoWindow({
					  content: d_contentString,
					});
					
					d_infowindow.open(d_map, d_marker);
					
				
			
			
			if(document.getElementById("pickup_status").value=="pickup_yes" && document.getElementById("dropoff_status").value=="dropoff_yes"){
				$(".lets_route").show();
				$("#error_area").hide();
				$(".model_confirm").show();
			}else{
				$(".lets_route").hide();
				$("#error_area").show();
				$(".model_confirm").hide();
			}
			
			
			
			});
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
		
		}
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		






























































































	
	/*$('#us4').locationpicker({
		location: {
			latitude: <?php if($this->session->userdata("user_input_val")){echo $values->dropoff_lat;}else{if($dropoff_lat!="0" || $dropoff_lat!=""){echo $dropoff_lat;}else{echo "34.0635016";}} ?>,
			longitude: <?php if($this->session->userdata("user_input_val")){echo $values->dropoff_lon;}else{if($dropoff_lon!="0" || $dropoff_lon!=""){echo $dropoff_lon;}else{echo "-118.44551639999997";}} ?>
		},
		radius: 10,
		inputBinding: {
			latitudeInput: $('#us4-lat'),
			longitudeInput: $('#us4-lon'),
			radiusInput: $('#us4-radius'),
			locationNameInput: $('#us4-address')
		},
		enableAutocomplete: true,
		onchanged: function (currentLocation, radius, isMarkerDropped) {
			// Uncomment line below to show alert on each Location Changed event
			//alert("Location changed. New location (" + currentLocation.latitude + ", " + currentLocation.longitude + ")");
		}
	});*/

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
	var pickup_items = $("input[name=pickup_items]").val();
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