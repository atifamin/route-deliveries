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
              <div id="us3" style="width: 420px; height: 400px;"></div>
              <div class="clearfix">&nbsp;</div>
              <div class="m-t-small">
                <div class="col-sm-3">
                  <input type="text" class="form-control" style="width: 110px; color:black !important" id="us3-lat" name="pickup_lat" />
                </div>
                <div class="col-sm-3">
                  <input type="text" class="form-control" style="width: 110px; color:black !important" id="us3-lon" name="pickup_lon" />
                </div>
                <div class="col-sm-3">
                  <input type="text" class="form-control" style="width: 110px;color:black !important" id="us3-zip" name="zip" />
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="col-md-12">
              <div class="form-group col-md-12" style="margin:1% 0">
                <input type="text" class="form-control c-bg-transparent input-lg c-theme c-square suggested_place" placeholder="Place name" style="color: white !important;" name="pickup_place" required="required" onkeyup="suggested_address()" value="<?php if($this->session->userdata("user_input_val")){echo $values->pickup_place;} ?>" autocomplete="off" >
                <div id="suggest_result1" style="display:none"></div>
              </div>
              <div class="form-group col-md-12" style="margin:1% 0">
                <input type="text" class="form-control c-bg-transparent input-lg c-theme c-square " placeholder="Address & suite #" id="us3-address" style="color: white !important;" name="pickup_address" required="required" value="<?php if($this->session->userdata("user_input_val")){echo $values->pickup_address;} ?>">
              </div>
              <div class="form-group col-md-12" style="margin:1% 0">
                <input type="text" class="form-control c-bg-transparent input-lg c-theme c-square " placeholder="Pickup Items"  style="color: white !important;" name="pickup_items" required="required" value="<?php if($this->session->userdata("user_input_val")){echo $values->pickup_items;} ?>">
              </div>
              <!--<select class="form-control c-bg-transparent input-lg c-theme c-square " style="width:79%;margin:1% 0; background-color:#272d32 !important; color:white !important" name="pickup_items" required="required">
              <option label="Select Item" >Select Item</option>
              <?php //if($products->num_rows>0){ ?>
              <?php //foreach($products->result() as $products1){ ?>
              	<option value="<?php //echo $products1->id; ?>" <?php //if($this->session->userdata("user_input_val") && $products1->id==$values->pickup_items){echo 'selected="selected"';} ?>><?php //echo $products1->name; ?></option>
              <?php //}} ?>
              </select>-->
              <textarea col="10" row="10" class="form-control c-bg-transparent input-lg c-theme c-square" name="pickup_instructions" placeholder="Special instructions" style="width:79%;margin:1% 0;height:155px;color:white !important" style="color: white !important;" required="required"><?php if($this->session->userdata("user_input_val")){echo $values->pickup_instructions;} ?></textarea>
            </div>
          </div>
          <div class="col-md-6">
            <h3 class="c-font-54 c-font-thin c-font-white c-margin-b-40 c-font-uppercase">Delivery </h3>
            <div class="col-md-12">
              <div id="us4" style="width: 420px; height: 400px;"></div>
              <div class="clearfix">&nbsp;</div>
              <div class="m-t-small">
                <div class="col-sm-3">
                  <input type="text" class="form-control" style="width: 110px;color:black !important" id="us4-lat" name="dropoff_lat" />
                </div>
                <div class="col-sm-3">
                  <input type="text" class="form-control" style="width: 110px;color:black !important" id="us4-lon" name="dropoff_lon" />
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
              <div class="form-group col-md-12" style="margin:1% 0">
                <input type="text" class="form-control c-bg-transparent input-lg c-theme c-square " placeholder="Dropoff Items" id="us4-address" style="color: white !important;width:100% !important;" name="dropoff_items" required="required" value="<?php if($this->session->userdata("user_input_val")){echo $values->dropoff_items;} ?>">
              </div>
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
          <div class="col-md-12" style="margin:4% 0 !important"><a href="javascript:;"><img src="<?php echo base_url("assets/base/img/layout/logos/Paypal-Logo.png")?>" alt="" style="width:20%"></a></div>
          <div class="col-md-12">
            
            <?php if(!$this->session->userdata("user_session")){ ?>
            <a  class="btn btn-lg btn-danger c-btn-uppercase c-btn-square c-btn-bold" data-toggle="modal" data-target="#login-form" style="padding: 12px 105px 11px 105px !important;" onclick="store_input_values()">Let's Route</a>
            <?php }else{ ?>
            <button type="submit" class="btn btn-lg btn-danger c-btn-uppercase c-btn-square c-btn-bold" id="lets_route" style="padding: 12px 105px 11px 105px !important;">Let's Route</button>
            <?php } ?>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>



























<?php include(APPPATH."views/web/includes/footer1.php"); ?>
<!-- BEGIN: PAGE SCRIPTS --> 
<script src="<?php echo base_url("assets/base/js/scripts/pages/2col-portfolio.js")?>" type="text/javascript"></script> 
<!-- END: PAGE SCRIPTS --> 
<!-- END: LAYOUT/BASE/BOTTOM --> 
<script type="text/javascript" src='https://maps.google.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyANGFXCJqEp3TUD6Ew6VLO_j9cuvSlk4qw'></script> 
<script src="<?php echo base_url("assets/base/js/dist/locationpicker.jquery.js")?>"></script> 
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<script type="text/javascript">


$(document).ready(function(){
	<?php if($this->session->userdata("user_input_val")){ ?>
		setInterval(function(){ $("#lets_route").click(); }, 3000);
	<?php } ?>
});

	function updateControls(addressComponents) {
		$('#us3-zip').val(addressComponents.postalCode);
	}
	
	$('#us3').locationpicker({
		
		location: {
			latitude: <?php if($this->session->userdata("user_input_val")){echo $values->pickup_lat;}else{if($pickup_lat!="0" || $pickup_lat!=""){echo $pickup_lat;}else{echo "34.0635016";}} ?>,
			longitude: <?php if($this->session->userdata("user_input_val")){echo $values->pickup_lon;}else{if($pickup_lon!="0" || $pickup_lon!=""){echo $pickup_lon;}else{echo "-118.44551639999997";}} ?>,
		},
		radius: 10,
		inputBinding: {
			latitudeInput: $('#us3-lat'),
			longitudeInput: $('#us3-lon'),
			radiusInput: $('#us3-radius'),
			locationNameInput: $('#us3-address')
		},
		enableAutocomplete: true,
		onchanged: function (currentLocation, radius, isMarkerDropped) {
			var addressComponents = $(this).locationpicker('map').location.addressComponents;
			updateControls(addressComponents);
		},
		oninitialized: function (component) {
			var addressComponents = $(component).locationpicker('map').location.addressComponents;
			updateControls(addressComponents);
		}
		
	});
	
	$('#us4').locationpicker({
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
	});


//creating session for input values which user entered in create order form 
function store_input_values(){
	var pickup_lat = $("input[name=pickup_lat]").val();
	var pickup_lon = $("input[name=pickup_lon]").val();
	var pickup_place = $("input[name=pickup_place]").val();
	var pickup_address = $("input[name=pickup_address]").val();
	var pickup_items = $("input[name=pickup_items]").val();
	var pickup_instructions = $("textarea[name=pickup_instructions]").val();
	
	var dropoff_lat = $("input[name=dropoff_lat]").val();
	var dropoff_lon = $("input[name=dropoff_lon]").val();
	var dropoff_place = $("input[name=dropoff_place]").val();
	var dropoff_address = $("input[name=dropoff_address]").val();
	var dropoff_items = $("input[name=dropoff_items]").val();
	var dropoff_instructions = $("textarea[name=dropoff_instructions]").val();
	
	$.post("<?php echo site_url("create_order/store_input_values"); ?>",{pickup_lat:pickup_lat,pickup_lon:pickup_lon,pickup_place:pickup_place,pickup_address:pickup_address,pickup_items:pickup_items,pickup_instructions:pickup_instructions,dropoff_lat:dropoff_lat,dropoff_lon:dropoff_lon,dropoff_place:dropoff_place,dropoff_address:dropoff_address,dropoff_items:dropoff_items,dropoff_instructions:dropoff_instructions}).done(function(data){
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