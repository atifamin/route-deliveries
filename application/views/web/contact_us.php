<?php include(APPPATH."views/web/includes/header1.php"); ?>

<?php include(APPPATH."views/web/includes/header2.php"); ?>

<div class="c-layout-breadcrumbs-1 c-fonts-uppercase c-fonts-bold" style="background-color:#272d32 !important">

  <div class="container">

    <h1 class="c-font-uppercase c-font-sbold" align="center" style="color:white"><strong>Contact Us</strong></h1>

  </div>

</div>

<?php if($this->session->flashdata("inquiry_added")){ ?>

<div class="alert alert-success alert-dismissible" role="alert" style="margin-bottom:0px !important;" align="center"> <?php echo $this->session->flashdata("inquiry_added"); ?>

  <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>

</div>

<?php } ?>

<?php if($this->session->flashdata("inquiry_error")){ ?>

<div class="alert alert-danger alert-dismissible" role="alert" style="margin-bottom:0px !important;" align="center"> <?php echo $this->session->flashdata("inquiry_error"); ?>

  <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>

</div>

<?php } ?>

  <div class="c-content-box c-size-md c-bg-white">

    <div class="container">

      

      <div class="c-content-panel" style="border:0px !important;">

        <div class="c-body" style="padding:0px !important;">

          <div class="c-content-tab-1 c-theme c-margin-t-30">

            <div class="clearfix">

              <ul class="nav nav-tabs c-font-uppercase c-font-bold">

                <li class="active"> <a href="#tab_1_1_content" data-toggle="tab">Route Customer service form</a> </li>

                <!--<li> <a href="#tab_1_2_content" data-toggle="tab">Business owner partnership form</a> </li>-->

              </ul>

            </div>

            <div class="tab-content c-bordered c-padding-lg">

              <div class="tab-pane active" id="tab_1_1_content">

                <h1 align="center"><strong>Contact us via our Route Customer service form</strong></h1>

                <p align="center"> The ROUTE team will promptly review your message/ concern as soon as possible. </p>

                <div class="row">

                  <div class="col-md-12">

                    <form class="form-horizontal" action="<?php echo site_url("admin1/customer_service/add"); ?>" method="post">

                      <hr>

                      <h3 align="center" style="margin-top:4%"><strong>Personal Information</strong></h3>

                      <div class="form-group" style="margin-top:2%" >

                        <label for="First_Name" class="col-md-2 control-label">First Name</label>

                        <div class="col-md-4">

                          <input type="text" class="form-control  c-square c-theme" id="First_Name" required="required" name="first_name" placeholder="First Name">

                        </div>

                        <label for="Last_Name" class="col-md-2 control-label">Last Name</label>

                        <div class="col-md-4"> 

                          <input type="text" class="form-control  c-square c-theme" id="Last_Name" required="required" name="last_name" placeholder="Last Name">

                        </div>

                      </div>

                      <div class="form-group" >

                        <label for="Email" class="col-md-2 control-label">Email</label>

                        <div class="col-md-4">

                          <input type="email" class="form-control  c-square c-theme" id="Email" required="required" name="email" placeholder="Email">

                        </div>

                        <label for="Phone" class="col-md-2 control-label">Phone</label>

                        <div class="col-md-4">

                          <input type="text" class="form-control  c-square c-theme" id="Phone" required="required" name="phone" placeholder="Phone">

                        </div>

                      </div>

                      <hr>

                      <h3 align="center" style="margin-top:4%"><strong>Message/Concern</strong></h3>

                      <div class="form-group" style="margin-top:2%" >

                        <label class="col-md-2 control-label">Message</label>

                        <div class="col-md-4">

                          <textarea class="form-control  c-square c-border-2px c-theme" rows="3" required="required" placeholder="Message" name="message" style="border:1px solid #CCC"></textarea>

                        </div>

                        <label class="col-md-2 control-label">Order #</label>

                        <div class="col-md-4">

                          <input type="text" class="form-control  c-square c-theme" placeholder="Order #" name="order_number">

                        </div>

                      </div>

                      

                      <hr>

                      <div class="form-group c-margin-t-40" align="center">

                        <div class="col-md-12">

                          <button type="submit" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">Submit</button>

                          <button type="submit" class="btn btn-default c-btn-square c-btn-uppercase c-btn-bold">Cancel</button>

                        </div>

                      </div>

                    </form>

                  </div>

                </div>

              </div>

              <!--<div class="tab-pane" id="tab_1_2_content">

                <h1 align="center"><strong>Contact us sub tab "Business owner partnership form"</strong></h1>

                <p align="center"> Thank you for considering a partnership with Route Delivery Services! Please provide us with some basic information to begin “routing” anything your business desires. The ROUTE team will promptly review your registration information and send you a confirmation email to begin receiving your order requests. </p>

                <div class="row">

                  <div class="col-md-12">

                    <form class="form-horizontal" action="<?php echo site_url("admin1/owner_partnership/add"); ?>" method="post">

                      <hr>

                      <h3 align="center" style="margin-top:4%"><strong>Personal Information</strong></h3>

                      <div class="form-group" style="margin-top:2%" >

                        <label for="First_Name" class="col-md-2 control-label">First Name</label>

                        <div class="col-md-4">

                          <input type="text" class="form-control  c-square c-theme" id="First_Name" name="first_name" placeholder="First Name" required="required">

                        </div>

                        <label for="Last_Name" class="col-md-2 control-label">Last Name</label>

                        <div class="col-md-4">

                          <input type="text" class="form-control  c-square c-theme" id="Last_Name" name="last_name" placeholder="Last Name" required="required">

                        </div>

                      </div>

                      <div class="form-group" >

                        <label for="Email" class="col-md-2 control-label">Email</label>

                        <div class="col-md-4">

                          <input type="email" class="form-control  c-square c-theme" id="Email" name="email" placeholder="Email" required="required">

                        </div>

                        <label for="Phone" class="col-md-2 control-label">Phone</label>

                        <div class="col-md-4">

                          <input type="text" class="form-control  c-square c-theme" id="Phone" name="phone" placeholder="Phone" required="required">

                        </div>

                      </div>

                      <hr>

                      <h3 align="center" style="margin-top:4%"><strong>Account information</strong></h3>

                      <div class="form-group" style="margin-top:2%" >

                        <label class="col-md-2 control-label">Business name</label>

                        <div class="col-md-4">

                          <input type="text" class="form-control  c-square c-theme" id="Business_name" name="business_name" placeholder="Business name" required="required">

                        </div>

                        <label class="col-md-2 control-label">Business Address</label>

                        <div class="col-md-4">

                          <input type="text" class="form-control  c-square c-theme" placeholder="Business Address" name="business_address" required="required">

                        </div>

                      </div>

                      <div class="form-group" >

                        <label class="col-md-2 control-label">Estimate # of deliveries</label>

                        <div class="col-md-4">

                          <input type="text" class="form-control  c-square c-theme" placeholder="Estimate # of deliveries" name="no_of_deliveries" required="required">

                        </div>

                        <label class="col-md-2 control-label">ZIP code</label>

                        <div class="col-md-4">

                          <input type="text" class="form-control  c-square c-theme" placeholder="ZIP code" name="zip_code" required="required">

                        </div>

                      </div>

                      <hr>

                      <div class="form-group c-margin-t-40" align="center">

                        <div class="col-md-12">

                          <button type="submit" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">Submit</button>

                          <button type="submit" class="btn btn-default c-btn-square c-btn-uppercase c-btn-bold">Cancel</button>

                        </div>

                      </div>

                    </form>

                  </div>

                </div>

              </div>-->

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

  <!-- END: PAGE CONTENT --> 

<?php include(APPPATH."views/web/includes/footer1.php"); ?>

<?php include(APPPATH."views/web/includes/footer2.php"); ?>

