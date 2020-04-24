<?php
$seg1 = $this->uri->segment("1");
$seg2 = $this->uri->segment("2");
$seg3 = $this->uri->segment("3");
?>
<div class="page-sidebar-wrapper">
  <div class="page-sidebar navbar-collapse collapse">
    <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-compact" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
      <li class="nav-item start <?php if($seg1==TRUE && $seg2=="dashboard"){echo "active";} ?> "> <a href="<?php echo site_url("router/dashboard"); ?>" class="nav-link nav-toggle"> <i class="icon-home"></i> <span class="title">Dashboard</span></a> </li>
      
      <li class="nav-item start <?php if($seg1==TRUE && $seg2=="current_orders"){echo "active";} ?> "> <a href="<?php echo site_url("router/current_orders"); ?>" class="nav-link nav-toggle"> <i class="fa fa-shopping-cart"></i> <span class="title">Take Orders</span></a> </li>
      	
      
      <li class="nav-item start <?php if($seg1==TRUE && ($seg2=="my_orders" || $seg2=="order_history") || $seg1=="order_detail"){echo "active";} ?>"> <a href="javascript:;" class="nav-link nav-toggle"> <i class="fa fa-folder-open-o"></i> <span class="title">My Orders</span> <span class="arrow"></span> </a>
        <ul class="sub-menu">
          <li class="nav-item start <?php if($seg1==TRUE && $seg2=="my_orders"){echo "active";} ?>"> <a href="<?php echo site_url("router/my_orders"); ?>" class="nav-link "> <i class="fa fa-tasks"></i> <span class="title">Current Orders</span> </a> </li>
          <li class="nav-item start <?php if($seg1==TRUE && $seg2=="order_history"){echo "active";} ?>"> <a href="<?php echo site_url("router/order_history"); ?>" class="nav-link "> <i class="fa fa-history"></i> <span class="title">Order History</span> </a> </li>
        </ul>
      </li>
      
      
      <li class="nav-item start <?php if($seg1==TRUE && $seg2=="my_profile"){echo "active";} ?> "> <a href="<?php echo site_url("router/my_profile"); ?>" class="nav-link nav-toggle"> <i class="fa fa-user"></i> <span class="title">My Profile</span></a> </li>
      
      
    </ul>
  </div>
</div>
