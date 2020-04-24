<?php include(APPPATH."views/web/includes/header1.php"); ?>

<?php include(APPPATH."views/web/includes/header2.php"); ?>



<div class="c-content-box c-size-lg c-overflow-hide c-bg-white">

  <div class="container">

    <div class="c-shop-order-complete-1 c-content-bar-1 c-align-left c-bordered c-theme-border c-shadow">

      <div class="c-content-title-1">

        <h3 class="c-center c-font-uppercase c-font-bold">Confirm your Payment</h3>

        <div class="c-line-center c-theme-bg"></div>

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

              <h3 class="c-font-regular c-font-22">

              <span style="font-size:14px !important; color:#5dc09c"><strong>*Reminder</strong>: This payment is onyl for Route Delivery</span>

              <br />

              Grand Total : &nbsp; <span class="c-font-dark c-font-bold c-font-22">$<?php echo $order_detail->order_payment; ?></span> </h3>

            </li>

          </ul>

        </div>

      </div>

      <!-- END: ORDER DETAILS --> 

      <form id="paypal_checkout" action="https://www.paypal.com/cgi-bin/webscr" method="post">

      <input name="cmd" value="<?php echo $paypal_config->cmd; ?>" type="hidden">

      <input name="upload" value="<?php echo $paypal_config->upload; ?>" type="hidden">

      <input name="no_note" value="<?php echo $paypal_config->no_note; ?>" type="hidden">

      <input name="bn" value="<?php echo $paypal_config->bn; ?>" type="hidden">

      <input name="tax" value="<?php echo $paypal_config->tax; ?>" type="hidden">

      <input name="rm" value="<?php echo $paypal_config->rm; ?>" type="hidden">

      <input name="business" value="<?php echo $paypal_config->business; ?>" type="hidden">

      <input name="handling_cart" value="<?php echo $paypal_config->handling_cart; ?>" type="hidden">

      <input name="currency_code" value="<?php echo $paypal_config->currency_code; ?>" type="hidden">

      <input name="lc" value="<?php echo $paypal_config->Ic; ?>" type="hidden">

      <input name="return" value="<?php echo $paypal_config->return; ?>" type="hidden">

      <input name="cbt" value="<?php echo $paypal_config->cbt; ?>" type="hidden">

      <input name="cancel_return" value="<?php echo $paypal_config->cancel_return; ?>" type="hidden">

      <input name="custom" value="<?php echo $paypal_config->custom; ?>" type="hidden">

      <input name="notify_url" value="<?php echo $paypal_config->notify_url; ?>" type="hidden">

      <div id="item_1" class="itemwrap">

        <input name="item_name_1" value="<?php echo $paypal_config->item_name_1; ?>" type="hidden">

        <input name="quantity_1" value="<?php echo $paypal_config->quantity_1; ?>" type="hidden">

        <input name="amount_1" value="<?php echo $paypal_config->amount_1; ?>" type="hidden">

        <input name="shipping_1" value="<?php echo $paypal_config->shipping_1; ?>" type="hidden">

      </div>

      <input name="ppcheckoutbtn" value="<?php echo $paypal_config->ppcheckoutbtn; ?>" type="hidden">

    

      <div align="right" style="margin-left:28%" class="model_confirm">

                <div class="c-checkbox has-success" align="left">

                    <input type="checkbox" id="checkbox9-111" class="c-check check_box">

                    <label for="checkbox9-111">

                        <span></span>

                        <span class="check"></span>

                        <span class="box"></span> *You agree to pay for cost if items upon delivery completion. </label>

                </div>            

            </div>

      <div align="center"><button type="submit" onclick="check_confirm()" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold" style="padding:2% 4%">Proceed to Checkout</button></div>

      </form>

    </div>

  </div>

</div>

<?php include(APPPATH."views/web/includes/footer1.php"); ?>

<script type="text/javascript">



//check confirm here

function check_confirm(){

	if ($('.check_box').is(':checked')) {

	}else{

		alert("Please Check the agreement");

	}

}





</script>

<?php include(APPPATH."views/web/includes/footer2.php"); ?>

