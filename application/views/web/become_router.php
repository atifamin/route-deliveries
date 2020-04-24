<?php include(APPPATH."views/web/includes/header1.php"); ?>
<style>
.c-layout-header{
	border-bottom:0px !important;
}
.c-img-pos{
	width:100% !important;
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
.file {
	visibility: hidden;
	position: absolute;
}
.c-content-pricing-1 > .c-tile-container > .c-tile-small {
	margin: 40px 8px !important;
}
.content_become_router {
	margin-top: -15% !important;
}
.form_group{
	width:78% !important;
}
 @media screen and (min-device-width: 0px) and (max-device-width: 750px) {
.content_become_router {
	margin-top: 15% !important;
}
.font_main1 {
	font-size: 25px !important;
}
.font_main2 {
	font-size: 35px !important;
}
.main_font_main {
	width: 250px !important;
	margin-top: 10% !important;
	right: 10%;
}
#input_responsive1 {
	width: 150% !important;
}
#input_responsive2 {
	width: 150% !important;
}
.form_group{
	width:100% !important;
}
#input_responsive1{
	width:100% !important;
}
#input_responsive2{
	width:100% !important;
}
}
 @media screen and (min-device-width: 750px) and (max-device-width: 990px) {
.content_become_router {
	margin-top: 15% !important;
}
.main_font_main {
	margin-top: 10% !important;
	width: 600px !important;
	right: 10%;
}
#input_responsive1 {
	width: 150% !important;
}
#input_responsive2 {
	width: 150% !important;
}
}
</style>
<?php include(APPPATH."views/web/includes/header2.php"); ?>
<?php if($this->session->flashdata("router_signup_success")){ ?>

<div class="alert alert-success alert-dismissible" role="alert" style="margin-bottom:0px !important;" align="center"> <?php echo $this->session->flashdata("router_signup_success"); ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
</div>
<?php } ?>
<?php if($this->session->flashdata("router_signup_failed")){ ?>
<div class="alert alert-danger alert-dismissible" role="alert" style="margin-bottom:0px !important;" align="center"> <?php echo $this->session->flashdata("router_signup_failed"); ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
</div>
<?php } ?>

<!--<div class="c-content-box c-size-md c-no-padding c-bg-dark">

  <div class="c-content-feature-4">

    <div class="c-bg-parallax c-feature-bg c-content-left c-arrow c-border-right-dark" style="background-image: url(<?php echo base_url("assets/base/img/content/backgrounds/bg-51.jpg")?>)" align="center"> <span style="font-size:30px;color:white">Flexible hours. Be active.</span><br>

      <span style="font-size:60px;color:white"><strong>Meet great people around your city!</strong></span> </div>

    <div class="c-content-area c-content-right"></div>

    <div class="container">

      <div class="c-feature-content c-right" style="width:50% !important">

        <div class="c-content-v-center">

          <div class="c-wrapper">

            <div class="c-body">

              <div class="c-content-title-1 animated wow fadeInDown" data-wow-delay="0.2s">

                <h3 class="c-font-uppercase c-font-bold c-right c-font-white">Become a Router</h3>

              </div>

              <div class="c-content animated wow fadeInDown" data-wow-delay="0.7s">

                <form class="form-inline" action="<?php echo site_url("become_router/router_signup"); ?>" method="post" enctype="multipart/form-data">

                  <div class="col-md-12">

                    <div class="form-group" style="width:78% !important; margin:1% 0">

                      <input type="text" class="form-control c-bg-transparent input-lg c-theme c-square" name="first" style="color:white !important;" placeholder="First Name" required="required">

                      <input type="text" class="form-control c-bg-transparent input-lg c-theme c-square" name="last" style="color:white !important;" placeholder="Last Name" required="required">

                      <input type="email" class="form-control c-bg-transparent input-lg c-theme c-square" name="email" style="color:white !important;" placeholder="Email" required="required">

                    </div>

                    <div class="form-group" style="margin:1% 0">

                      <input type="text" class="form-control c-bg-transparent input-lg c-theme c-square" name="phone" style="color:white !important;" placeholder="Phone" required="required">

                      <input type="text" class="form-control c-bg-transparent input-lg c-theme c-square" name="city" style="color:white !important;" placeholder="City" required="required">

                    </div>

                    <div class="form-group" style="width:78% !important">

                      <input type="file" class="file" required="required" name="resume">

                      <div class="input-group col-xs-12"> <span class="input-group-addon" style="border-color:white !important; color:white !important; background-color:transparent !important;"><i class="glyphicon glyphicon-picture"></i></span>

                        <input type="text" class="form-control input-lg" disabled placeholder="Upload Resume" style="background-color:transparent !important;color:white !important;">

                        <span class="input-group-btn">

                        <button class="browse btn btn-primary input-lg" type="button" style="border-color:white !important; color:white !important;background-color:transparent !important;"><i class="glyphicon glyphicon-search"></i> Select File</button>

                        </span> </div>

                    </div>

                  </div>

                  <div class="col-md-12" style="margin-top:6% !important">

                    <button type="submit" class="btn btn-lg btn-danger c-btn-uppercase c-btn-square c-btn-bold" style="padding: 12px 20px 11px 20px !important;">Send</button>

                  </div>

                </form>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

</div>--> 

<div class="c-content-box c-size-md c-no-padding c-bg-white">

  <div class="c-content-feature-4">

    <div class="c-bg-parallax c-feature-bg c-content-right c-arrow c-border-left-white" style="background-image: url(<?php echo base_url("assets/base/img/content/client-logos/pic-3-3.png")?>)"><div align="center" class="content_become_router" style="background-color: black; opacity: 0.7;"><span style="font-size:30px;color:white" class="font_main1">Choose your own hours, get paid weekly,</span><br /><span style="font-size:60px;color:white" class="font_main2"><strong>Impact your community!</strong></span></div></div>

    <div class="c-content-area c-content-left"></div>

    <div class="container">

    <!--<div class="row">

      <div align="right" style="color:yellow; position:absolute" class="col-md-12 main_font_main"> <span style="font-size:30px;color:yellow" class="font_main1">Flexible hours. Be active.</span><br>

        <span style="font-size:60px;color:yellow" class="font_main2"><strong>Meet great people around your city!</strong></span></div>

        </div>-->

      <div class="c-feature-content c-left">

        <div class="c-content-v-center">

          <div class="c-wrapper">

            <div class="c-body">

              <div class="c-content-title-1 animated wow fadeInDown" data-wow-delay="0.2s">

                <h3 class="c-font-uppercase c-font-bold ">Become a Router</h3>

              </div>

              <div class="c-content animated wow fadeInDown" data-wow-delay="0.7s"> <?php //echo site_url("become_router/router_signup"); ?>

                <form class="form-inline" action="<?php echo site_url("become_router/router_signup"); ?>" method="post" enctype="multipart/form-data">

                  <div class="col-md-12">

                    <div class="form-group" style="margin:1% 0">

                      <input type="text" class="form-control c-bg-transparent input-lg c-theme c-square" name="first" placeholder="First Name" required="required">

                      <input type="text" class="form-control c-bg-transparent input-lg c-theme c-square" name="last" placeholder="Last Name" required="required">

                      <input type="email" class="form-control c-bg-transparent input-lg c-theme c-square" name="email" placeholder="Email" required="required">

                    </div>

                    <div class="form-group" style="margin:1% 0">

                      <input type="text" class="form-control c-bg-transparent input-lg c-theme c-square" id="input_responsive1" name="phone" placeholder="Phone" required="required" >

                      <input type="text" class="form-control c-bg-transparent input-lg c-theme c-square" id="input_responsive2" name="city" placeholder="City" required="required" >

                    </div>

                    <div class="form-group" style="width:100% !important">

                      <input type="file" class="file" required="required" name="resume">

                      <div class="input-group col-xs-12"> <span class="input-group-addon" ><i class="glyphicon glyphicon-picture"></i></span>

                        <input type="text" class="form-control input-lg" disabled placeholder="Upload Resume" >

                        <span class="input-group-btn">

                        <button class="browse btn btn-primary input-lg" type="button" style="border-color:black !important;background-color:transparent !important;"><i class="glyphicon glyphicon-search"></i> Select File</button>

                        </span> </div>

                    </div>

                  </div>

                  <div class="col-md-12" style="margin-top:6% !important">

                    <button type="submit" class="btn btn-lg btn-danger c-btn-uppercase c-btn-square c-btn-bold" style="padding: 12px 20px 11px 20px !important;">Send</button>

                  </div>

                </form>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

</div> 

<!-- BEGIN: CONTENT/MISC/ABOUT-1 -->
<!--<div class="c-content-box c-size-md c-bg-white" style="padding:60px 0 0 0 !important;">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 wow animated fadeInLeft"> 
        <!-- Begin: Title 1 component --
        <div class="c-content-title-1">
          <h3 class="c-font-uppercase c-font-bold">Become Router</h3>
          <div class="c-line-left c-theme-bg"></div>
        </div>
        <!-- End--
        <form class="form-inline" action="<?php echo site_url("become_router/router_signup"); ?>" method="post" enctype="multipart/form-data">
          <div class="col-md-12">
            <div class="form-group form_group" style="margin:1% 0">
              <input type="text" class="form-control c-bg-transparent input-lg c-theme c-square" name="first" style="color:white !important;" placeholder="First Name" required="required">
              <input type="text" class="form-control c-bg-transparent input-lg c-theme c-square" name="last" style="color:white !important;" placeholder="Last Name" required="required">
              <input type="email" class="form-control c-bg-transparent input-lg c-theme c-square" name="email" style="color:white !important;" placeholder="Email" required="required">
            </div>
            <div class="form-group form_group" style="margin:1% 0">
              <input type="text" class="form-control c-bg-transparent input-lg c-theme c-square" name="phone" style="color:white !important;" placeholder="Phone" required="required">
              <input type="text" class="form-control c-bg-transparent input-lg c-theme c-square" name="city" style="color:white !important;" placeholder="City" required="required">
            </div>
            <div class="form-group form_group">
              <input type="file" class="file" required="required" name="resume">
              <div class="input-group col-xs-12"> <span class="input-group-addon" style="border-color:#CCC !important; color:#333 !important; background-color:transparent !important;"><i class="glyphicon glyphicon-picture"></i></span>
                <input type="text" class="form-control input-lg" disabled placeholder="Upload Resume" style="background-color:transparent !important;color:white !important;">
                <span class="input-group-btn">
                <button class="browse btn btn-primary input-lg" type="button" style="border-color:white !important; color:white !important;background-color:#333;"><i class="glyphicon glyphicon-search"></i> Select File</button>
                </span> </div>
            </div>
          </div>
          <div class="col-md-12" style="margin-top:6% !important">
            <button type="submit" class="btn btn-lg btn-danger c-btn-uppercase c-btn-square c-btn-bold" style="padding: 12px 20px 11px 20px !important;">Send</button>
          </div>
        </form>
      </div>
      <div class="col-sm-6 wow animated fadeInRight">
        
            <div class="row"> <img class="c-img-pos" src="assets/base/img/content/client-logos/pic-3.png" alt="" /></div>
      </div>
    </div>
  </div>
</div>-->
<!-- END: CONTENT/MISC/ABOUT-1 -->

<div class="c-content-box c-size-md c-bg-grey-1">
  <div class="container">
    <div class="c-content-pricing-1">
      <h1 style="padding:0 5% 0 5% !important"><strong>Become a ROUTER</strong></h1>
      <p style="padding:0 5% 0 5% !important">Be a part of something bigger in your community. Our team not only provides services to our clients, but also gives back to our community by contributing to Feed the Children Foundation.</p>
      <p style="padding:0 5% 0 5% !important">Our Routers earn $15-$25 on average/hour while enjoying the benefits of a workplace with flexible hours, and an upbeat, social-friendly environment..</p>
      <div class="c-tile-container">
        <div class="c-tile c-tile-small wow animate fadeInLeft" style="padding:50px 0 170px 0 !important;"> <span class="glyphicon glyphicon-usd" style="font-size:78px; color:#c82026"></span>
          <p class="c-price" style="font-size:30px !important">Earn Great Cash</p>
          <p style="width:60%; margin:0 auto;">You are paid for each order you complete. Additionally, you receive 100% of your tips. Most Routers earn $15-$25/ hour.
 </p>
        </div>
        <div class="c-tile c-tile-small wow animate fadeInUp" style="padding:50px 0 170px 0 !important;"> <span class="glyphicon glyphicon-time" style="font-size:78px; color:#c82026"></span>
          <p class="c-price" style="font-size:30px !important">Choose your own hours</p>
          <p style="width:60%; margin:0 auto;">Route Delivery is expanding tremendously this 2017
and we need your help to maintain our reputation of 
excellence. We work together and determine the best times 
you are able to work
. </p>
        </div>
        <div class="c-tile c-tile-small wow animate fadeInRight" style="padding:50px 0 170px 0 !important;"> <span class="glyphicon glyphicon-phone" style="font-size:78px; color:#c82026"></span>
          <p class="c-price" style="font-size:30px !important">What You Need</p>
          <p style="width:60%; margin:0 auto;">You must have a valid CA driver’s license and have a clean DMV record. You should own a bike, scooter, car, truck, or van. In order to use our Router system you must have an iPhone or Android. </p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- END: CONTENT/PRICING/PRICING-1 --> 

<!-- END: PAGE CONTENT -->

<?php include(APPPATH."views/web/includes/footer1.php"); ?>
<script type="text/javascript">



$(document).on('click', '.browse', function(){

  var file = $(this).parent().parent().parent().find('.file');

  file.trigger('click');

});

$(document).on('change', '.file', function(){

  $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));

});



</script>
<?php include(APPPATH."views/web/includes/footer2.php"); ?>
