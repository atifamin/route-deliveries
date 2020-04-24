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

          <div class="c-checkbox has-primary1" align="left">

                <input type="checkbox" id="checkbox10-112" class="c-check check_box1" required="required">

                <label for="checkbox10-112"> <span></span> <span class="check"></span> <span class="box"></span> “I agree” for <a href="<?php echo site_url("terms"); ?>" style="text-decoration:underline">route terms of services.</a> </label>

              </div>

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

	}else if(!$('.check_box1').is(':checked')){

		alert("Please Check the agreement");

		return false;

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