<?php
	$user = $this->session->userdata("user_session");
	$user_image = $user->Image;
	if($user_image==""){
		$user_image = base_url("assets/base/img/layout/logos/logo-favicon.png");
	}else{
		$user_image = base_url("assets/base/uploads/".$user_image."");
	}
	$user_name = $user->First_Name;
?>
<div class="page-header navbar navbar-fixed-top"> 
  <!-- BEGIN HEADER INNER -->
  <div class="page-header-inner "> 
    <!-- BEGIN LOGO -->
    <div class="page-logo"> <a href="<?php echo site_url(); ?>"> <img src="<?php echo base_url("assets/base/img/layout/logos/logo-white.png")?>" alt="logo" class="logo-default" width="40" /> </a>
      <div class="menu-toggler sidebar-toggler"> 
        <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header --> 
      </div>
    </div>
    <!-- END LOGO --> 
    <!-- BEGIN RESPONSIVE MENU TOGGLER --> 
    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a> 
    <!-- END RESPONSIVE MENU TOGGLER --> 
    <!-- BEGIN PAGE ACTIONS --> 
    <!-- DOC: Remove "hide" class to enable the page header actions -->
    <!-- END PAGE ACTIONS --> 
    <!-- BEGIN PAGE TOP -->
    <div class="page-top"> 
      <!-- BEGIN TOP NAVIGATION MENU -->
      <div class="top-menu">
        <ul class="nav navbar-nav pull-right">
          <!-- BEGIN USER LOGIN DROPDOWN --> 
          <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
          <li class="dropdown dropdown-user"> <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> <img alt="" class="img-circle" src="<?php echo $user_image; ?>" /> <span class="username username-hide-on-mobile"> <?php echo $user_name; ?> </span> <i class="fa fa-angle-down"></i> </a>
            <ul class="dropdown-menu dropdown-menu-default">
              <li> <a href="<?php echo site_url("dashboard/logout"); ?>"> <i class="icon-key"></i> Log Out </a> </li>
            </ul>
          </li>
          <!-- END USER LOGIN DROPDOWN -->
        </ul>
      </div>
      <!-- END TOP NAVIGATION MENU --> 
    </div>
    <!-- END PAGE TOP --> 
  </div>
  <!-- END HEADER INNER --> 
</div>
