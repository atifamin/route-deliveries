<?php include(APPPATH."views/web/includes/header1.php"); ?>
<style>
.brand_image {
	max-height: 55px;
}

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
.main_background {
	padding: 130px 0 !important;
}
.c-nav li a {
	font-size: 12px !important;
}
.input-lg {
	color: white !important;
	width: 300px !important;
}
.socicon-btn {
	background-color: white !important;
	color: #ab252b !important;
}
.scrolloff {
	pointer-events: none;
}
.mobile_picture {
	width: 20%;
	position: absolute;
	margin-top: -14%;
	right: 0;
}
.log-main-pic{
	width:25%;
}
 @media screen and (min-device-width: 999px) and (max-device-width: 1200px) {
.mobile_picture {
	width: 20%;
	position: absolute;
	margin-top: -14%;
	right: -25px;
}
}
 @media screen and (min-device-width: 0px) and (max-device-width: 998px) {
.mobile_picture {
	clear: both;
}
}
 @media screen and (min-device-width: 0px) and (max-device-width: 750px) {
.brand_image {
	max-height: 20px;
}
.brand_image_resp {
	width: 25% !important;
}
h3 {
	font-size: 325% !important;
}
.c-video {
	width: 100% !important;
	margin-top: 15% !important;
}
.backgorund_top {
	height: 455px !important;
}
.page_logo{
	margin-top:20%;
}
.mobile_picture {
	width: 30% !important;
	margin-top: -7% !important;
}
.deliver {
	margin-top: 10% !important;
}
.log-main-pic{
	width:50%;
}
.brand_image {
	min-height: 20px;
}
	.c-layout-footer-3{
		margin-top:30% !important;
	}

}
/*START SLIDER CSS*/

/* jssor slider bullet navigator skin 03 css */

        /*

        .jssorb03 div           (normal)

        .jssorb03 div:hover     (normal mouseover)

        .jssorb03 .av           (active)

        .jssorb03 .av:hover     (active mouseover)

        .jssorb03 .dn           (mousedown)

        */

.jssorb03 {
	position: absolute;
}
.jssorb03 div, .jssorb03 div:hover, .jssorb03 .av {
	position: absolute;
	/* size of bullet elment */

	width: 21px;
	height: 21px;
	text-align: center;
	line-height: 21px;
	color: white;
	font-size: 12px;
	background: url('img/b03.png') no-repeat;
	overflow: hidden;
	cursor: pointer;
}
.jssorb03 div {
	background-position: -5px -4px;
}
.jssorb03 div:hover, .jssorb03 .av:hover {
	background-position: -35px -4px;
}
.jssorb03 .av {
	background-position: -65px -4px;
}
.jssorb03 .dn, .jssorb03 .dn:hover {
	background-position: -95px -4px;
}
/* jssor slider arrow navigator skin 03 css */

        /*

        .jssora03l                  (normal)

        .jssora03r                  (normal)

        .jssora03l:hover            (normal mouseover)

        .jssora03r:hover            (normal mouseover)

        .jssora03l.jssora03ldn      (mousedown)

        .jssora03r.jssora03rdn      (mousedown)

        .jssora03l.jssora03ldn      (disabled)

        .jssora03r.jssora03rdn      (disabled)

        */

.jssora03l, .jssora03r {
	display: block;
	position: absolute;
	/* size of arrow element */

	width: 55px;
	height: 55px;
	cursor: pointer;
	background: url('img/a03.png') no-repeat;
	overflow: hidden;
}
.jssora03l {
	background-position: -3px -33px;
}
.jssora03r {
	background-position: -63px -33px;
}
.jssora03l:hover {
	background-position: -123px -33px;
}
.jssora03r:hover {
	background-position: -183px -33px;
}
.jssora03l.jssora03ldn {
	background-position: -243px -33px;
}
.jssora03r.jssora03rdn {
	background-position: -303px -33px;
}
.jssora03l.jssora03lds {
	background-position: -3px -33px;
	opacity: .3;
	pointer-events: none;
}
.jssora03r.jssora03rds {
	background-position: -63px -33px;
	opacity: .3;
	pointer-events: none;
}



/*END SLIDER CSS*/
</style>
<?php include(APPPATH."views/web/includes/header2.php"); ?>
<?php if($this->session->flashdata("client_signup_success")){ ?>

<div class="alert alert-success alert-dismissible" role="alert" style="margin-bottom:0px !important;" align="center"> <?php echo $this->session->flashdata("client_signup_success"); ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
</div>
<?php } ?>
<?php if($this->session->flashdata("client_signup_failed")){ ?>
<div class="alert alert-danger alert-dismissible" role="alert" style="margin-bottom:0px !important;" align="center"> <?php echo $this->session->flashdata("client_signup_failed"); ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
</div>
<?php } ?>
<?php if($this->session->flashdata("please_login")){ ?>
<div class="alert alert-danger alert-dismissible" role="alert" style="margin-bottom:0px !important;" align="center"> <?php echo $this->session->flashdata("please_login"); ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
</div>
<?php } ?>
<div class="c-content-box c-size-md c-bg-img-top c-bg-parallax backgorund_top" style="background-image: url(<?php echo base_url("assets/base/img/content/backgrounds/main_background.jpg")?>); padding: 60px 0 15px 0 !important;">
  <div class="container">
    <div class="c-content-feature-11">
      <div class="row">
        <div class="col-md-12 c-grid" align="center">
          <div class="c-singup-form">
            <h3 class="c-font-54 c-font-thin c-font-white c-margin-b-40 c-font-uppercase" style="font-size:80px"> Any Pickup, <span class="c-theme-font c-font-bold">Any Delivery</span> </h3>
            <form class="form-inline" action="<?php echo base_url("create_order"); ?>" method="post" enctype="multipart/form-data" id="lets_route_form">
              <div class="form-group">
                <input type="text" class="form-control c-bg-transparent input-lg c-theme c-square controls" placeholder="Pickup Location" id="us5-address" name="pickup" required="required" style="color:white !important;width:315px !important">
                <input type="hidden" class="form-control" style="width: 110px;" id="us5-lat" name="pickup_lat" />
                <input type="hidden" class="form-control" style="width: 110px;" id="us5-lon" name="pickup_lon" />
                <div id="us5" style="width: 420px; height: 400px; display:none"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control c-bg-transparent input-lg c-theme c-square " placeholder="Drop Off Location" id="us6-address" name="dropoff" required="required" style="color:white !important; width:315px !important">
                <input type="hidden" class="form-control" style="width: 110px;" id="us6-lat" name="dropoff_lat" />
                <input type="hidden" class="form-control" style="width: 110px;" id="us6-lon" name="dropoff_lon" />
                <div id="us6" style="width: 420px; height: 400px; display:none"></div>
              </div>
              <br />
              <button type="button" class="btn btn-lg btn-danger c-btn-uppercase c-btn-square c-btn-bold" onclick="lets_route()" style="margin:3% 0" >Let's Route</button>
            </form>
          </div>
        </div>
        <div class="col-md-12" align="right"> <img src="<?php echo base_url("assets/base/img/content/backgrounds/pull_down_screen.png")?>" style="width:20%; " class="img-responsive mobile_picture" /> </div>
      </div>
    </div>
  </div>
</div>
<!-- BEGIN: CONTENT/MISC/LATEST-ITEMS-1 -->

<div class="c-content-box c-size-md c-bg-img-top page_logo" >
  <div class="container">
    <div class="col-md-12" align="center">
      <div class="c-content-feature-11"> <a href="<?php echo site_url(); ?>"> <img src="<?php echo base_url("assets/base/img/content/client-logos/logo.png")?>" class="log-main-pic" /> </a> </div>
    </div>
  </div>
</div>
<div class="c-content-box c-size-md c-bg-white deliver" style="padding:0px 0px 20px 0px !important;">
  <h1 class="c-center c-font-uppercase c-font-bold" style="font-size:42px">What can i have delivered</h1>
  <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:809px;height:150px;overflow:hidden;visibility:hidden;">
    <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
      <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
      <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
    </div>
    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:809px;height:150px;overflow:hidden;">
      <div> <img data-u="image" src="<?php echo base_url("assets/base/img/content/client-logos/pic-1.png")?>" /> </div>
      <div> <img data-u="image" src="<?php echo base_url("assets/base/img/content/client-logos/pic-2.png")?>" /> </div>
      <div> <img data-u="image" src="<?php echo base_url("assets/base/img/content/client-logos/pic-3.png")?>" /> </div>
      <div> <img data-u="image" src="<?php echo base_url("assets/base/img/content/client-logos/pic-4.jpg")?>" /> </div>
      <div> <img data-u="image" src="<?php echo base_url("assets/base/img/content/client-logos/pic-5.jpg")?>" /> </div>
      <div> <img data-u="image" src="<?php echo base_url("assets/base/img/content/client-logos/pic-6.jpg")?>" /> </div>
      <div> <img data-u="image" src="<?php echo base_url("assets/base/img/content/client-logos/pic-7.jpg")?>" /> </div>
      <div> <img data-u="image" src="<?php echo base_url("assets/base/img/content/client-logos/pic-8.jpg")?>" /> </div>
    </div>
    <span data-u="arrowleft" class="jssora03l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"></span> <span data-u="arrowright" class="jssora03r" style="top:0px;right:8px;width:55px;height:55px;" data-autocenter="2"></span> </div>
</div>
<div class="c-content-box c-size-md c-bg-img-top" style="background-image: url(<?php echo base_url("assets/base/img/content/backgrounds/bg-84.jpg")?>)">
  <div class="container" align="center" style="padding-left:2%">
    <div class="col-md-3 col-sm-3 col-xs-3 brand_image_resp"> <a href="http://www.laweekly.com/"> <img src="<?php echo base_url("assets/base/img/content/client-logos/brand-logo1.jpg")?>" class="img-responsive brand_image" /> </a> </div>
    <div class="col-md-3 col-sm-3 col-xs-3 brand_image_resp"> <a href="http://www.cbs.com/"> <img src="<?php echo base_url("assets/base/img/content/client-logos/brand-logo2.jpg")?>" class="img-responsive brand_image" /> </a> </div>
    <div class="col-md-3 col-sm-3 col-xs-3 brand_image_resp"> <a href="http://www.latimes.com/"> <img src="<?php echo base_url("assets/base/img/content/client-logos/brand-logo3.jpg")?>" class="img-responsive brand_image" /> </a> </div>
    <div class="col-md-3 col-sm-3 col-xs-3 brand_image_resp"> <a href="http://www.feedthechildren.org/"> <img src="<?php echo base_url("assets/base/img/content/client-logos/brand-logo4.jpg")?>" class="img-responsive brand_image" /> </a> </div>
  </div>
</div>
<div class="c-content-box c-size-md c-bg-img-top c-no-padding c-pos-relative">
  <div class="container">
    <div class="c-content-contact-1 c-opt-1">
      <div class="row" data-auto-height=".c-height">
        <div class="col-sm-8 c-desktop"></div>
        <div class="col-sm-4">
          <div class="c-body">
            <div class="c-section">
              <h3 style="text-transform:none;">Hours & Routing Areas</h3>
            </div>
            <div class="c-section">
              <div class="c-content-label c-font-uppercase c-font-bold c-theme-bg">Areas</div>
              <p>Westwood, Los Angeles, CA, United States</p>
            </div>
            <div class="c-section">
              <div class="c-content-label c-font-uppercase c-font-bold c-theme-bg">Hours</div>
              <p> <strong>Sun-Wed</strong> 10:00AM - 9:00PM <br/>
                <strong>Thurs-Sat</strong> 10:00AM - 3:00AM </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="c-content-contact-1-gmap" >
    <section id="canvas1" class="map">
      <iframe id="map_canvas1" frameborder="0" style="border:0; width:100% !important; height:500px !important" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJecf92oa8woARVlNT9X_x42M&key=AIzaSyB817afzToi3HSAZPdCidje_ZArSfy2nic" allowfullscreen></iframe>
    </section>
    
    <!--<iframe frameborder="0" style="border:0; width:100% !important; height:100% !important" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJP5iLHkCuEmsRwMwyFmh9AQU&key=AIzaSyB817afzToi3HSAZPdCidje_ZArSfy2nic" allowfullscreen></iframe>--> 
    
  </div>
</div>
<?php include(APPPATH."views/web/includes/footer1.php"); ?>
<script type="text/javascript" src='https://maps.google.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyANGFXCJqEp3TUD6Ew6VLO_j9cuvSlk4qw'></script> 
<script src="<?php echo base_url("assets/base/js/dist/locationpicker.jquery.min.js")?>"></script> 
<script src="<?php echo base_url("assets/base/js/jssor.slider-23.1.1.min.js")?>" type="text/javascript"></script> 

<!-- END: PAGE SCRIPTS --> 

<!-- END: LAYOUT/BASE/BOTTOM --> 

<script type="text/javascript">



function lets_route(){

	setInterval(function(){ 

		$("#lets_route_form").submit();;

	}, 1000);

}





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

	

	$(document).ready(function () {



        // you want to enable the pointer events only on click;



        $('#map_canvas1').addClass('scrolloff'); // set the pointer events to none on doc ready

        $('#canvas1').on('click', function () {

            $('#map_canvas1').removeClass('scrolloff'); // set the pointer events true on click

        });



        // you want to disable pointer events when the mouse leave the canvas area;



        $("#map_canvas1").mouseleave(function () {

            $('#map_canvas1').addClass('scrolloff'); // set the pointer events to none when mouse leaves the map area

        });

    });







//START BRAND SLIDER

jssor_1_slider_init = function() {

	var jssor_1_options = {

	  $AutoPlay: 1,

	  $AutoPlaySteps: 4,

	  $SlideDuration: 160,

	  $SlideWidth: 200,

	  $SlideSpacing: 3,

	  $Cols: 4,

	  $ArrowNavigatorOptions: {

		$Class: $JssorArrowNavigator$,

		$Steps: 4

	  },

	  $BulletNavigatorOptions: {

		$Class: $JssorBulletNavigator$,

		$SpacingX: 1,

		$SpacingY: 1

	  }

	};



	var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);



	/*responsive code begin*/

	/*remove responsive code if you don't want the slider scales while window resizing*/

	function ScaleSlider() {

		var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;

		if (refSize) {

			refSize = Math.min(refSize, 809);

			jssor_1_slider.$ScaleWidth(refSize);

		}

		else {

			window.setTimeout(ScaleSlider, 30);

		}

	}

	ScaleSlider();

	$Jssor$.$AddEvent(window, "load", ScaleSlider);

	$Jssor$.$AddEvent(window, "resize", ScaleSlider);

	$Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);

	/*responsive code end*/

};

jssor_1_slider_init();



//END BRAND SLIDER

</script>
<?php include(APPPATH."views/web/includes/footer2.php"); ?>
