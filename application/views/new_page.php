<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Route | Any Pickup, Any Delivery</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description" />
<meta content="" name="author" />
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
<link href="<?php echo base_url("assets/plugins/socicon/socicon.css")?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url("assets/plugins/bootstrap-social/bootstrap-social.css")?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url("assets/plugins/font-awesome/css/font-awesome.min.css")?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url("assets/plugins/simple-line-icons/simple-line-icons.min.css")?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url("assets/plugins/animate/animate.min.css")?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url("assets/plugins/bootstrap/css/bootstrap.min.css")?>" rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN: BASE PLUGINS  -->
<link href="<?php echo base_url("assets/plugins/revo-slider/css/settings.css")?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url("assets/plugins/revo-slider/css/layers.css")?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url("assets/plugins/revo-slider/css/navigation.css")?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url("assets/plugins/cubeportfolio/css/cubeportfolio.min.css")?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url("assets/plugins/owl-carousel/owl.carousel.css")?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url("assets/plugins/owl-carousel/owl.theme.css")?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url("assets/plugins/owl-carousel/owl.transitions.css")?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url("assets/plugins/fancybox/jquery.fancybox.css")?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url("assets/plugins/slider-for-bootstrap/css/slider.css")?>" rel="stylesheet" type="text/css" />
<!-- END: BASE PLUGINS -->
<!-- BEGIN THEME STYLES -->
<link href="<?php echo base_url("assets/base/css/plugins.css")?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url("assets/base/css/components.css")?>" id="style_components" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url("assets/base/css/themes/default.css")?>" rel="stylesheet" id="style_theme" type="text/css" />
<link href="<?php echo base_url("assets/base/css/custom.css")?>" rel="stylesheet" type="text/css" />
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="<?php echo base_url("assets/base/img/layout/logos/logo-favicon.png")?>" />
<style>
.c-layout-footer.c-layout-footer-3 .c-prefooter .c-container .c-links > li {
	border-bottom: 1px solid #fff !important;
}
.c-links li a {
	color: white !important;
}
</style>
</head>

<body class="c-layout-header-fixed c-layout-header-mobile-fixed">
<!-- BEGIN: LAYOUT/HEADERS/HEADER-1 --> 
<!-- BEGIN: HEADER -->




















<?php $user = $this->session->userdata("user_session"); ?>
<header class="c-layout-header c-layout-header-4 c-bordered c-layout-header-default-mobile" data-minimize-offset="80">
  <div class="c-navbar">
    <div class="container"> 
      <!-- BEGIN: BRAND -->
      <div class="c-navbar-wrapper clearfix">
        <div class="c-brand c-pull-left"> <a href="<?php echo site_url(); ?>" class="c-logo"> <img src="<?php echo base_url("assets/base/img/layout/logos/logo-3.png")?>" alt="JANGO" class="c-desktop-logo"> <img src="<?php echo base_url("assets/base/img/layout/logos/logo-3.png")?>" alt="JANGO" class="c-desktop-logo-inverse"> <img src="<?php echo base_url("assets/base/img/layout/logos/logo-3.png")?>" alt="JANGO" class="c-mobile-logo"> </a>
          <button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu"> <span class="c-line"></span> <span class="c-line"></span> <span class="c-line"></span> </button>
          <button class="c-topbar-toggler" type="button"> <i class="fa fa-ellipsis-v"></i> </button>
        </div>
        <!-- END: BRAND --> 
        
        <!-- BEGIN: HOR NAV --> 
        <!-- BEGIN: LAYOUT/HEADERS/MEGA-MENU --> 
        <!-- BEGIN: MEGA MENU --> 
        <!-- Dropdown menu toggle on mobile: c-toggler class can be applied to the link arrow or link itself depending on toggle mode -->
        <nav class="c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold">
          <ul class="nav navbar-nav c-theme-nav">
            <li> <a href="<?php echo site_url("become_router"); ?>" class="c-link dropdown-toggle">Become a Router <span class="c-arrow c-toggler"></span> </a> </li>
            <li class="c-menu-type-classic"> <a href="<?php echo site_url("about"); ?>" class="c-link dropdown-toggle">About Us <span class="c-arrow c-toggler"></span> </a> </li>
            <li> <a href="<?php echo site_url("contact_us"); ?>" class="c-link dropdown-toggle">Contact <span class="c-arrow c-toggler"></span> </a> </li>
            <?php if($this->session->userdata("user_session")){ ?>
            <li> <a href="<?php if($user->user_type=="3"){echo site_url("client/dashboard");}else if($user->user_type=="2"){echo site_url("router/dashboard");}else if($user->user_type=="1"){echo site_url("admin1/dashboard");} ?>"  class="c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-dark c-btn-circle c-btn-uppercase c-btn-sbold" > <i class="icon-list"></i> View Profile </a> </li>
            <?php }else{ ?>
            <li> <a href="javascript:;" data-toggle="modal" data-target="#login-form" class="c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-dark c-btn-circle c-btn-uppercase c-btn-sbold" > <i class="icon-user"></i> Sign Up/Login </a> </li>
            <?php } ?>
          </ul>
        </nav>
        <!-- END: MEGA MENU --> 
        <!-- END: LAYOUT/HEADERS/MEGA-MENU --> 
        <!-- END: HOR NAV --> 
      </div>
      <!-- BEGIN: LAYOUT/HEADERS/QUICK-CART --> 
      <!-- END: LAYOUT/HEADERS/QUICK-CART --> 
    </div>
  </div>
</header>






















































<style>
::-webkit-input-placeholder { /* Chrome/Opera/Safari */
 color: #999 !important;
}
		::-moz-placeholder { /* Firefox 19+ */
 color: #999 !important;
}
		:-ms-input-placeholder { /* IE 10+ */
 color: #999 !important;
}
		:-moz-placeholder { /* Firefox 18- */
 color: #999 !important;
}
.input-lg{
	color:#333 !important;
	width:100% !important;
}
</style>

<div class="modal fade c-content-login-form" id="forget-password-form" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content c-square">
      <div class="modal-header c-no-border">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <h3 class="c-font-24 c-font-sbold">Password Recovery</h3>
        <p>To recover your password please fill in your email address</p>
        <form>
          <div class="form-group">
            <label for="forget-email" class="hide">Email</label>
            <input type="email" class="form-control input-lg c-square" id="forget-email" placeholder="Email">
          </div>
          <div class="form-group">
            <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Submit</button>
            <a href="javascript:;" class="c-btn-forgot" data-toggle="modal" data-target="#login-form" data-dismiss="modal">Back To Login</a> </div>
        </form>
      </div>
      <div class="modal-footer c-no-border"> <span class="c-text-account">Don't Have An Account Yet ?</span> <a href="javascript:;" data-toggle="modal" data-target="#signup-form" data-dismiss="modal" class="btn c-btn-dark-1 btn c-btn-uppercase c-btn-bold c-btn-slim c-btn-border-2x c-btn-square c-btn-signup">Signup!</a> </div>
    </div>
  </div>
</div>
<div class="modal fade c-content-login-form" id="signup-form" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content c-square">
      <div class="modal-header c-no-border">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <h3 class="c-font-24 c-font-sbold">Create An Account</h3>
        <p>Please fill in below form to create an account with us</p>
        <form action="<?php echo site_url("client/client_signup"); ?>" method="post" id="client_signup">
          <div class="form-group">
            <label class="hide">First Name</label>
            <input type="text" class="form-control input-lg c-square" name="client_signup_first" placeholder="First Name" required="required">
          </div>
          <div class="form-group">
            <label class="hide">Last Name</label>
            <input type="text" class="form-control input-lg c-square" name="client_signup_last" placeholder="Last Name">
          </div>
          <div class="form-group">
            <label class="hide">Email</label>
            <input type="email" class="form-control input-lg c-square" name="client_signup_email" placeholder="Email">
          </div>
          <div class="form-group">
            <label class="hide">Password</label>
            <input type="password" class="form-control input-lg c-square" name="client_signup_password" placeholder="Password">
          </div>
          <div class="form-group">
            <label class="hide">Contact No.</label>
            <input type="text" class="form-control input-lg c-square" name="client_signup_phone" placeholder="Phone No.">
          </div>
          <div class="form-group">
            <label class="hide">City</label>
            <input type="text" class="form-control input-lg c-square" name="client_signup_city" placeholder="City">
          </div>
          <div class="form-group">
            <button type="button" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login" onclick="client_signup()">Signup</button>
            <a href="javascript:;" class="c-btn-forgot" data-toggle="modal" data-target="#login-form" data-dismiss="modal">Back To Login</a> </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade c-content-login-form" id="login-form" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content c-square">
      <div class="modal-header c-no-border">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <h3 class="c-font-24 c-font-sbold">Please Login Here!</h3>
        <p>Let's make today a great day!</p>
        <span id="login_error" style="display:none">
        <p style="color:red" align="center">Wrong Username OR Password!</p>
        
        </span>
        <p align="center" id="loader" style="display:none"><img src="<?php echo base_url("assets/base/img/Loading_icon.gif"); ?>" width="100" /></p>
        <form>
          <div class="form-group">
            <label for="login-email" class="hide">Email</label>
            <input type="email" class="form-control input-lg c-square" id="login-email" placeholder="Email" required>
          </div>
          <div class="form-group">
            <label for="login-password" class="hide">Password</label>
            <input type="password" class="form-control input-lg c-square" id="login-password" placeholder="Password" required>
          </div>
          <div class="form-group">
            <div class="c-checkbox">
              <input type="checkbox" id="login-rememberme" class="c-check">
              <label for="login-rememberme" class="c-font-thin c-font-17"> <span></span> <span class="check"></span> <span class="box"></span> Remember Me </label>
            </div>
          </div>
          <div class="form-group">
            <button type="button" id="login_btn" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login" onclick="login()">Login</button>
            <a href="javascript:;" data-toggle="modal" data-target="#forget-password-form" data-dismiss="modal" class="c-btn-forgot">Forgot Your Password ?</a> </div>
        </form>
      </div>
      <div class="modal-footer c-no-border"> <span class="c-text-account">Don't Have An Account Yet ?</span> <a href="javascript:;" data-toggle="modal" data-target="#signup-form" data-dismiss="modal" class="btn c-btn-dark-1 btn c-btn-uppercase c-btn-bold c-btn-slim c-btn-border-2x c-btn-square c-btn-signup">Signup!</a> </div>
    </div>
  </div>
</div>
<script type="text/javascript">

function login(){
	
	var email = $("#login-email").val();
	var password = $("#login-password").val();
	if(email==""){
		alert("Email field is empty");
		return false;
	}
	if(password==""){
		alert("Password field is empty");
		return false;
	}
	$("#loader").fadeIn();
	$.post("<?php echo site_url("auth/authorization"); ?>",{email:email, password:password}).done(function(data){
		if(data=="0"){
			$("#loader").fadeOut(function(){
				$("#login_error").fadeIn();
			});
		}else{
			//window.location.replace("<?php //echo site_url("client"); ?>");
			if(data=="1"){
				window.location.replace("<?php echo site_url("admin1/dashboard"); ?>");
			}else if(data=="2"){
				window.location.replace("<?php echo site_url("router/dashboard"); ?>");
			}else if(data=="3"){
				window.location.replace("<?php echo site_url("client/dashboard"); ?>");
			}else if(data=="4"){
				window.location.replace("<?php echo site_url("create_order"); ?>");
			}
		}
	});
}


//Validation
function valid_success(field1){
	$(field1).change(function(){
		$(field1).css("border-color", "#999");
	});
}

function client_signup(){
	var first = $("input[name=client_signup_first]");
	var last = $("input[name=client_signup_last]");
	var email = $("input[name=client_signup_email]");
	var password = $("input[name=client_signup_password]");
	var phone = $("input[name=client_signup_phone]");
	var city = $("input[name=client_signup_city]");
	
	if(first.val()==""){
		validation(first);
	}else if(last.val()==""){
		validation(last);
	}else if(email.val()==""){
		validation(email);
	}else if(password.val()==""){
		validation(password);
	}else if(phone.val()==""){
		validation(phone);
	}else if(city.val()==""){
		validation(city);
	}else{
		$("#client_signup").submit();
	}
	
	
	valid_success(first);
	valid_success(last);
	valid_success(email);
	valid_success(password);
	valid_success(phone);
	valid_success(city);
}

function validation(field){
	if(field.val()==""){
		$(field).css("border-color", "red");
	}
}


</script>






























<!-- END: HEADER --> 
<!-- BEGIN: PAGE CONTAINER -->
<div class="c-layout-page"> 
  <!-- BEGIN: PAGE CONTENT --> 

  <!-- END: PAGE CONTENT --> 
</div>
<!-- END: PAGE CONTAINER --> 
<!-- BEGIN: LAYOUT/FOOTERS/FOOTER-6 --> 
<a name="footer"></a>
  <footer class="c-layout-footer c-layout-footer-3" style="background-color:#aa242a; color:white !important">
    <div class="c-prefooter" style="padding: 80px 0 0px 0;">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <div class="c-container c-first">
              <div class="c-content-title-1"> <a href="<?php echo site_url(); ?>"> <img src="<?php echo base_url("assets/base/img/layout/logos/logo-white.png")?>" alt="" class="img-responsive" /> </a>
                <div class="c-line-left hide"></div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="c-container">
              <div class="col-md-6">
                <ul class="c-links">
                  <li> <a href="<?php echo site_url("mission"); ?>">Our Mission</a> </li>
                  <li> <a href="<?php echo site_url("pricing"); ?>">Pricing</a> </li>
                  <li> <a href="<?php echo site_url("routers"); ?>">Routers</a> </li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="c-links">
                  <li> <a href="<?php echo site_url("terms"); ?>">Terms of Services</a> </li>
                  <li> <a href="<?php echo site_url("privacy"); ?>">Privacy policy</a> </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="c-container c-last">
              <ul class="c-socials">
                <li> <a href="#"> <i class="icon-social-facebook"></i> </a> </li>
                <li> <a href="#"> <i class="icon-social-twitter"></i> </a> </li>
                <li> <a href="#"> <i class="icon-social-youtube"></i> </a> </li>
                <li> <a href="#"> <i class="icon-social-tumblr"></i> </a> </li>
              </ul>
              <ul class="c-address">
                <li> <i class="icon-call-end c-theme-font" style="color: #1e2226 !important;"></i>(323) 488-4569</li>
                <li> <i class="icon-envelope c-theme-font" style="color: #1e2226 !important;"></i> routedeliveryservices@gmail.com </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
<!-- END: LAYOUT/FOOTERS/FOOTER-6 --> 
<!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
<div class="c-layout-go2top"> <i class="icon-arrow-up"></i> </div>
<!-- END: LAYOUT/FOOTERS/GO2TOP --> 
<!-- BEGIN: LAYOUT/BASE/BOTTOM --> 
<!-- BEGIN: CORE PLUGINS --> 
<!--[if lt IE 9]>
	<script src="../assets/global/plugins/excanvas.min.js"></script> 
	<![endif]--> 
<script src="assets/plugins/jquery.min.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-migrate.min.js" type="text/javascript"></script> 
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery.easing.min.js" type="text/javascript"></script> 
<script src="assets/plugins/reveal-animate/wow.js" type="text/javascript"></script> 
<script src="assets/base/js/scripts/reveal-animate/reveal-animate.js" type="text/javascript"></script> 
<!-- END: CORE PLUGINS --> 
<!-- BEGIN: LAYOUT PLUGINS --> 
<script src="assets/plugins/revo-slider/js/jquery.themepunch.tools.min.js" type="text/javascript"></script> 
<script src="assets/plugins/revo-slider/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script> 
<script src="assets/plugins/revo-slider/js/extensions/revolution.extension.slideanims.min.js" type="text/javascript"></script> 
<script src="assets/plugins/revo-slider/js/extensions/revolution.extension.layeranimation.min.js" type="text/javascript"></script> 
<script src="assets/plugins/revo-slider/js/extensions/revolution.extension.navigation.min.js" type="text/javascript"></script> 
<script src="assets/plugins/revo-slider/js/extensions/revolution.extension.video.min.js" type="text/javascript"></script> 
<script src="assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script> 
<script src="assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script> 
<script src="assets/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script> 
<script src="assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script> 
<script src="assets/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script> 
<script src="assets/plugins/slider-for-bootstrap/js/bootstrap-slider.js" type="text/javascript"></script> 
<!-- END: LAYOUT PLUGINS --> 
<!-- BEGIN: THEME SCRIPTS --> 
<script src="assets/base/js/components.js" type="text/javascript"></script> 
<script src="assets/base/js/components-shop.js" type="text/javascript"></script> 
<script src="assets/base/js/app.js" type="text/javascript"></script> 
<script>
	$(document).ready(function()
	{
		App.init(); // init core    
	});
</script> 
</body>
</html>