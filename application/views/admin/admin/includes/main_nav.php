<?php
$seg1 = $this->uri->segment("1");
$seg2 = $this->uri->segment("2");
$seg3 = $this->uri->segment("3");
?>
<div class="page-sidebar-wrapper">
  <div class="page-sidebar navbar-collapse collapse">
    <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-compact" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
      <li class="nav-item start <?php if($seg1==TRUE && $seg2=="dashboard"){echo "active";} ?> "> <a href="<?php echo site_url("admin1/dashboard"); ?>" class="nav-link nav-toggle"> <i class="icon-home"></i> <span class="title">Dashboard</span></a> </li>
      
      
      <!--<li class="nav-item start <?php //if($seg1==TRUE && ($seg1==TRUE && $seg2=="products")){echo "active";} ?>"> <a href="javascript:;" class="nav-link nav-toggle"> <i class="fa fa-server"></i> <span class="title">Products/Items</span> <span class="arrow <?php //if($seg1==TRUE && ($seg1==TRUE && $seg2=="products")){echo "open";} ?>"></span> </a>
        <ul class="sub-menu">
          <li class="nav-item start <?php //if($seg1==TRUE && $seg2=="products" && $seg3=="add"){echo "active";} ?>"> <a href="<?php //echo site_url("admin1/products/add"); ?>" class="nav-link "> <i class="fa fa-plus-square-o"></i> <span class="title">Add</span> </a> </li>
          <li class="nav-item start <?php //if($seg1==TRUE && $seg2=="products" && $seg3=="view"){echo "active";} ?>"> <a href="<?php //echo site_url("admin1/products/view"); ?>" class="nav-link "> <i class="fa fa-align-justify"></i> <span class="title">View All</span> </a> </li>
        </ul>
      </li>-->
      
      
      
      <li class="nav-item start <?php if($seg1==TRUE && ($seg2=="current_orders" || $seg2=="order_history") || $seg1=="order_detail"){echo "active";} ?>"> <a href="javascript:;" class="nav-link nav-toggle"> <i class="fa fa-shopping-cart"></i> <span class="title">Orders</span> <span class="arrow <?php if($seg1==TRUE && ($seg2=="current_orders" || $seg2=="order_history") || $seg1=="order_detail"){echo "open";} ?>"></span> </a>
        <ul class="sub-menu">
          <li class="nav-item start <?php if($seg1==TRUE && $seg2=="current_orders"){echo "active";} ?>"> <a href="<?php echo site_url("admin1/current_orders"); ?>" class="nav-link "> <i class="fa fa-folder-open-o"></i> <span class="title">Current Orders</span> </a> </li>
          <li class="nav-item start <?php if($seg1==TRUE && $seg2=="order_history"){echo "active";} ?>"> <a href="<?php echo site_url("admin1/order_history"); ?>" class="nav-link "> <i class="fa fa-history"></i> <span class="title">Order History</span> </a> </li>
        </ul>
      </li>
      <li class="nav-item start <?php if($seg1==TRUE && ($seg2=="drivers" )){echo "active";} ?> "> <a href="<?php echo site_url("admin1/drivers/all_drivers"); ?>" class="nav-link nav-toggle"> <i class="fa fa-user"></i> <span class="title">Drivers</span></a> </li>
      <li class="nav-item start <?php if($seg1==TRUE && $seg2=="clients"){echo "active";} ?> "> <a href="<?php echo site_url("admin1/clients"); ?>" class="nav-link nav-toggle"> <i class="fa fa-users"></i> <span class="title">Clients</span></a> </li>
      
      
      
      <li class="nav-item start <?php if($seg1==TRUE && $seg2=="services_area"){echo "active";} ?> "> <a href="<?php echo site_url("admin1/services_area"); ?>" class="nav-link nav-toggle"> <i class="fa fa-users"></i> <span class="title">Services Area</span></a> </li>
      
      
      
      
      
      <li class="nav-item start <?php if($seg1==TRUE && ($seg2=="current_orders" || $seg2=="order_history") || $seg1=="order_detail"){echo "active";} ?>"> <a href="javascript:;" class="nav-link nav-toggle"> <i class="fa fa-shopping-cart"></i> <span class="title">Inquiries</span> <span class="arrow <?php if($seg1==TRUE && ($seg2=="current_orders" || $seg2=="order_history") || $seg1=="order_detail"){echo "open";} ?>"></span> </a>
        <ul class="sub-menu">
          <li class="nav-item start <?php if($seg1==TRUE && $seg2=="customer_service"){echo "active";} ?>"> <a href="<?php echo site_url("admin1/customer_service"); ?>" class="nav-link "> <i class="fa fa-folder-open-o"></i> <span class="title">Customer Service</span> </a> </li>
          <li class="nav-item start <?php if($seg1==TRUE && $seg2=="owner_partnership"){echo "active";} ?>"> <a href="<?php echo site_url("admin1/owner_partnership"); ?>" class="nav-link "> <i class="fa fa-history"></i> <span class="title">Owner Partnership</span> </a> </li>
        </ul>
      </li>
      
      
    </ul>
  </div>
</div>

