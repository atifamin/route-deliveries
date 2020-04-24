<?php
$seg1 = $this->uri->segment("1");
$seg2 = $this->uri->segment("2");
$seg3 = $this->uri->segment("3");
?>
<div class="c-layout-sidebar-menu c-theme" style="margin: 80px 0 40px 0 !important;"> 
    <!-- BEGIN: LAYOUT/SIDEBARS/SIDEBAR-MENU-1 -->
    <div class="c-sidebar-menu-toggler">
      <h3 class="c-title c-font-uppercase c-font-bold">Dashboard Navigation</h3>
      <a href="javascript:;" class="c-content-toggler" data-toggle="collapse" data-target="#sidebar-menu-1"> <span class="c-line"></span> <span class="c-line"></span> <span class="c-line"></span> </a> </div>
    <ul class="c-sidebar-menu collapse c-option-2" id="sidebar-menu-1">
      <li class="c-dropdown c-active c-open"> <a href="javascript:;" class="c-toggler"> Dashboard Menu <span class="c-arrow"></span> </a>
        <ul class="c-dropdown-menu">
          <li <?php if($seg2=="dashboard"){echo 'class="c-active"';} ?>> <a href="<?php echo site_url("client/dashboard"); ?>"><i class="icon-list"></i> Dashboard </a> </li>
          <li <?php if($seg2=="current_orders"){echo 'class="c-active"';} ?>> <a href="<?php echo site_url("client/current_orders"); ?>"><i class="icon-basket"></i> Current Orders </a> </li>
          <li <?php if($seg2=="order_history"){echo 'class="c-active"';} ?>> <a href="<?php echo site_url("client/order_history"); ?>"><i class="icon-magnifier"></i> Order History </a> </li>
          <li > <a href="<?php echo site_url("client/save_address"); ?>"><i class="icon-bubbles"></i> Saved Addresses </a> </li>
          <li > <a href="<?php echo site_url("dashboard/logout"); ?>"><i class="icon-logout"></i> Logout </a> </li>
        </ul>
      </li>
      <!--<li class="c-dropdown"> <a href="javascript:;" class="c-toggler">Sub Menu Section <span class="c-arrow"></span> </a>
        <ul class="c-dropdown-menu">
          <li> <a href="#">Example Link</a> </li>
          <li> <a href="#">Example Link</a> </li>
          <li> <a href="#">Example Link</a> </li> 
        </ul>
      </li>-->
    </ul>
    <!-- END: LAYOUT/SIDEBARS/SIDEBAR-MENU-1 --> 
  </div>