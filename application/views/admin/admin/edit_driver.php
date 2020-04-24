<?php include(APPPATH."views/admin/includes1/header1.php"); ?>
<?php include(APPPATH."views/admin/includes1/header2.php"); ?>
<?php include("includes/main_nav.php"); ?>
<div class="page-content-wrapper">
  <div class="page-content" style="min-height:650px !important">
    <div class="row">
      <div class="col-md-12">
        <div class="full-height-content">
          <div class="full-height-content-body"> 
            <!--
            -- STARTING PAGE HERE
            -->
            <div class="row">
              <div class="col-md-12">
                <div class="portlet light portlet-fit portlet-form ">
                  <div class="portlet-title">
                    <div class="caption"> <i class="icon-settings font-red"></i> <span class="caption-subject font-red sbold uppercase">Edit Driver</span> </div>
                  </div>
                  <div class="portlet-body">
                    <form action="<?php echo site_url("become_router/assign_password/".$driver->id); ?>" id="form_sample_1" class="form-horizontal" method="post">
                      <div class="form-body">
                        <div class="alert alert-danger display-hide">
                          <button class="close" data-close="alert"></button>
                          You have some form errors. Please check below. </div>
                        <div class="alert alert-success display-hide">
                          <button class="close" data-close="alert"></button>
                          Your form validation is successful! </div>
                        <div class="form-group" align="center">
                          <div class="col-md-offset-3 col-md-4 image">
                            <?php if(!empty($driver->Image)){ ?>
                            <img src="<?php echo site_url("assets/base/uploads/".$driver->Image."")?>" style="max-height:200px !important" class="img-responsive pic-bordered" alt="">
                            <?php }else{ ?>
                            <div align="center">
                              <p>No Image is selected yet by the router</p>
                            </div>
                            <?php } ?>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">First Name <span class="required"> * </span> </label>
                          <div class="col-md-4">
                            <input type="text" name="first" data-required="1" class="form-control" disabled="disabled" value="<?php echo $driver->First_Name; ?>" />
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Last Name <span class="required"> * </span> </label>
                          <div class="col-md-4">
                            <input type="text" class="form-control" disabled="disabled" value="<?php echo $driver->Last_Name; ?>"  />
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Email <span class="required"> * </span> </label>
                          <div class="col-md-4">
                            <input type="email" data-required="1" class="form-control" disabled="disabled" value="<?php echo $driver->Email; ?>"  />
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Phone <span class="required"> * </span> </label>
                          <div class="col-md-4">
                            <input type="text" data-required="1" class="form-control" disabled="disabled" value="<?php echo $driver->Phone; ?>"  />
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">City <span class="required"> * </span> </label>
                          <div class="col-md-4">
                            <input type="text" data-required="1" class="form-control" disabled="disabled" value="<?php echo $driver->City; ?>"  />
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Assign Password <span class="required"> * </span> </label>
                          <div class="col-md-4">
                            <input type="text" name="password" data-required="1" class="form-control" value="" />
                          </div>
                        </div>
                      </div>
                      <div class="form-actions">
                        <div class="row">
                          <div class="col-md-offset-3 col-md-9">
                            <button type="submit" class="btn green">Submit</button>
                            <button type="button" class="btn grey-salsa btn-outline">Cancel</button>
                          </div>
                        </div>
                      </div>
                    </form>
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
  </div>
</div>
<?php include(APPPATH."views/admin/includes1/footer1.php"); ?>
<script type="text/javascript">

var form1 = $('#form_sample_1');
var error1 = $('.alert-danger', form1);
var success1 = $('.alert-success', form1);

form1.validate({
	errorElement: 'span', //default input error message container
	errorClass: 'help-block help-block-error', // default input error message class
	focusInvalid: false, // do not focus the last invalid input
	ignore: "",  // validate all fields including form hidden input
	messages: {
		select_multi: {
			maxlength: jQuery.validator.format("Max {0} items allowed for selection"),
			minlength: jQuery.validator.format("At least {0} items must be selected")
		}
	},
	rules: {
		first: {
			required: true
		},
		input_group: {
			required: true
		},
		email: {
			required: true,
			email: true
		},
		last: {
			required: true
		},
		phone: {
			required: true
		},
		city: {
			required: true
		},
	},

	invalidHandler: function (event, validator) { //display error alert on form submit              
		success1.hide();
		error1.show();
		App.scrollTo(error1, -200);
	},

	errorPlacement: function (error, element) { // render error placement for each input type
		var cont = $(element).parent('.input-group');
		if (cont) {
			cont.after(error);
		} else {
			element.after(error);
		}
	},

	highlight: function (element) { // hightlight error inputs

		$(element)
			.closest('.form-group').addClass('has-error'); // set error class to the control group
	},

	unhighlight: function (element) { // revert the change done by hightlight
		$(element)
			.closest('.form-group').removeClass('has-error'); // set error class to the control group
	},

	success: function (label) {
		label
			.closest('.form-group').removeClass('has-error'); // set success class to the control group
	},
	

	submitHandler: function (form) {
		success1.show();
		form.submit();
		error1.hide();
	}

});


</script>
<?php include(APPPATH."views/admin/includes1/footer2.php"); ?>
