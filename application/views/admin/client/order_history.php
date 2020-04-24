<?php include(APPPATH."views/web/includes/header1.php"); ?>
<style>
@media (min-width: 992px) {
.modal-lg {
	width: 1300px !important;
}
}
.block {
	padding: 3% 0% !important;
}
</style>
<?php include(APPPATH."views/web/includes/header2.php"); ?>

<div class="container-fluid">
  <?php include(APPPATH."views/admin/client/includes/dashboard_nav.php"); ?>
  <div class="c-layout-sidebar-content "> 
    <!-- BEGIN: PAGE CONTENT -->
    <div class="c-content-title-1">
      <h3 class="c-font-uppercase c-center c-font-bold">Order History</h3>
      <div class="c-line-center"></div>
    </div>
    <div class="c-content-panel">
      <div class="c-body">
        <div class="row">
          <div class="col-md-12">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th> Order ID </th>
                  <th> Date </th>
                  <!--<th> Item Description </th>
                  <th> Picup Address </th>
                  <th> Delivery Address </th>-->
                  <th> Total Amount </th>
                  <th> </th>
                </tr>
              </thead>
              <tbody>
                <?php if($orders->num_rows>0){ ?>
                <?php foreach($orders->result() as $orders){ ?>
                <tr>
                  <td><?php echo $orders->id; ?></td>
                  <td><?php echo $orders->date; ?></td>
                  <!--<td> <?php echo $orders->pickup_items; ?> </td>
                  <td> <?php echo $orders->pickup_address; ?> </td>
                  <td> <?php echo $orders->dropoff_address; ?> </td>-->
                  <td><?php echo $orders->order_payment; ?></td>
                  <td><a href="#" class="btn btn-danger c-btn-circle" data-toggle="modal" data-target=".bs-example-modal-lg" style="background-color:#c82026;" onclick="get_order(<?php echo $orders->id; ?>)"><i class="icon-size-fullscreen"></i>Status</a></td>
                </tr>
                <?php }}else{ ?>
                <tr>
                  <td colspan="4"><p align="center">No Record Found</p></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Large modal -->

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content c-square">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
        <h4 class="modal-title" id="myLargeModalLabel">Order Information</h4>
      </div>
      <div class="modal-body">
      <div class="order_data">
      
      </div>
      </div>
    </div>
    <!-- /.modal-content --> 
  </div>
  <!-- /.modal-dialog --> 
</div>
<?php include(APPPATH."views/web/includes/footer1.php"); ?>
<script>

function get_order(order_id){
	$.post("<?php echo site_url("client/order_history/get_order"); ?>",{order_id:order_id}).done(function(data){
		$(".order_data").html(data);
	});
}

</script>
<?php include(APPPATH."views/web/includes/footer2.php"); ?>
