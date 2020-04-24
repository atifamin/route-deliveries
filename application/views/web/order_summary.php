<?php include(APPPATH."views/web/includes/header1.php"); ?>
<?php include(APPPATH."views/web/includes/header2.php"); ?>

<div class="c-content-box c-size-lg c-overflow-hide c-bg-white">
  <div class="container">
    <div class="c-shop-order-complete-1 c-content-bar-1 c-align-left c-bordered c-theme-border c-shadow">
      <div class="c-content-title-1">
        <h3 class="c-center c-font-uppercase c-font-bold">Payment Receipt</h3>
        <p align="center"><strong>Order Reciept Number: </strong><?php echo $paypal_response->payer_id; ?></p>
        <div class="c-line-center c-theme-bg"></div>
      </div>
      <div class="c-theme-bg">
        <p class="c-message c-center c-font-white c-font-20 c-font-sbold"> <i class="fa fa-check"></i> Thank you. Your order has been received. </p>
      </div>
      <!-- BEGIN: ORDER SUMMARY -->
      <div class="row c-order-summary c-center" style="padding:0px !important;">
        <ul class="c-list-inline list-inline">
          <li>
            <h3>Item Detail</h3>
            <p><?php echo $order_detail->pickup_items." / ".$order_detail->dropoff_items; ?></p>
          </li>
          <li>
            <h3>Date Purchased</h3>
            <p><?php echo $order_detail->date; ?></p>
          </li>
          <li>
            <h3>Miles</h3>
            <p><?php echo $order_detail->order_distance; ?></p>
          </li>
          <li>
            <h3>Payable Amount</h3>
            <p>$<?php echo $order_detail->order_payment; ?></p>
          </li>
          <li>
            <h3>Payment Method</h3>
            <p><?php echo $order_detail->payment_method; ?></p>
          </li>
        </ul>
      </div>
      <!-- END: ORDER SUMMARY --> 
      <!-- BEGIN: CUSTOMER DETAILS -->
      <div class="c-customer-details row" data-auto-height="true">
        <div class="col-md-6 col-sm-6 c-margin-t-20">
          <div data-height="height">
            <h3 class=" c-margin-b-20 c-font-uppercase c-font-22 c-font-bold">Pickup Address</h3>
            <ul class="list-unstyled">
              <li>Place Name: <?php echo $order_detail->pickup_place; ?></li>
              <li>Address: <?php echo $order_detail->pickup_address; ?></li>
              <li>Item Name: <?php echo $order_detail->pickup_items; ?></li>
              <li>Special Instructions: <?php echo $order_detail->pickup_instructions; ?> </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 c-margin-t-20">
          <div data-height="height">
            <h3 class=" c-margin-b-20 c-font-uppercase c-font-22 c-font-bold">Dropoff Address</h3>
            <ul class="list-unstyled">
              <li>Place Name: <?php echo $order_detail->dropoff_place; ?></li>
              <li>Address: <?php echo $order_detail->dropoff_address; ?></li>
              <li>Item Name: <?php echo $order_detail->dropoff_items; ?></li>
              <li>Special Instructions: <?php echo $order_detail->dropoff_instructions; ?> </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- END: CUSTOMER DETAILS --> 
      <!-- BEGIN: BANK DETAILS --> 
      
      <!-- END: BANK DETAILS --> 
      <!-- BEGIN: ORDER DETAILS -->
      <div class="c-order-details">
        <div class="c-row-item c-row-total c-right">
          <ul class="c-list list-unstyled">
            <li>
              <h3 class="c-font-regular c-font-22">Grand Total : &nbsp; <span class="c-font-dark c-font-bold c-font-22">$<?php echo $order_detail->order_payment; ?></span> </h3>
            </li>
          </ul>
        </div>
      </div>
      <!-- END: ORDER DETAILS --> 
      
    </div>
  </div>
</div>
<?php include(APPPATH."views/web/includes/footer1.php"); ?>
<?php include(APPPATH."views/web/includes/footer2.php"); ?>
