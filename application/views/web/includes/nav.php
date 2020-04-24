<?php $user = $this->session->userdata("user_session"); ?>

<header class="c-layout-header c-layout-header-4 c-bordered c-layout-header-default-mobile" data-minimize-offset="80">

  <div class="c-navbar">

    <div class="container"> 

      <!-- BEGIN: BRAND -->

      <div class="c-navbar-wrapper clearfix">

        <div class="c-brand c-pull-left"> <a href="<?php echo site_url(); ?>" class="c-logo"> <img src="<?php echo base_url("assets/base/img/layout/logos/logo-3.png")?>" alt="ROUTE" class="c-desktop-logo" style="width:145px; margin-top:-13%"> <img src="<?php echo base_url("assets/base/img/layout/logos/logo-3.png")?>" alt="ROUTE" class="c-desktop-logo-inverse"> <img src="<?php echo base_url("assets/base/img/layout/logos/logo-3.png")?>" alt="ROUTE" class="c-mobile-logo"> </a>

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

            <li> <a href="<?php echo site_url("become_router"); ?>" class="c-link dropdown-toggle">Become a Router </span> </a> </li>

            <li class="c-menu-type-classic"> <a href="<?php echo site_url("about"); ?>" class="c-link dropdown-toggle">About Us </span> </a> </li>

            <li> <a href="<?php echo site_url("contact_us"); ?>" class="c-link dropdown-toggle">Contact </a> </li>

            <?php if($this->session->userdata("user_session")){ ?>

            <li> <a href="<?php if($user->user_type=="3"){echo site_url("client/dashboard");}else if($user->user_type=="2"){echo site_url("router/dashboard");}else if($user->user_type=="1"){echo site_url("admin1/dashboard");} ?>"  class="c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-dark c-btn-circle c-btn-uppercase c-btn-sbold" > <i class="icon-list"></i> My Account </a> </li>

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