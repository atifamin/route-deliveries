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
            <?php if($this->session->flashdata("product_updated")){ ?>
            <div class="alert alert-success alert-dismissible" role="alert" style="margin-bottom:0px !important;" align="center"> <?php echo $this->session->flashdata("product_updated"); ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <?php } ?>
            <?php if($this->session->flashdata("product_added")){ ?>
            <div class="alert alert-success alert-dismissible" role="alert" style="margin-bottom:0px !important;" align="center"> <?php echo $this->session->flashdata("product_added"); ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <?php } ?>
            <?php if($this->session->flashdata("product_deleted")){ ?>
            <div class="alert alert-danger alert-dismissible" role="alert" style="margin-bottom:0px !important;" align="center"> <?php echo $this->session->flashdata("product_deleted"); ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <?php } ?>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                  <div class="col-md-12"> 
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet light ">
                      <div class="portlet-title">
                        <div class="caption font-dark"> <i class="icon-settings font-dark"></i> <span class="caption-subject bold uppercase"> View All Products </span> </div>
                      </div>
                      <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                          <thead>
                            <tr>
                              <th> ID </th>
                              <th> Product Name </th>
                              <!--<th> Last Name </th>
                  <th> Email </th>
                  <th> Approve/Unapprove </th>-->
                              <th> Action </th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php if($products->num_rows()>0){ ?>
                            <?php foreach($products->result() as $products){ ?>
                            <tr class="odd gradeX">
                              <td><?php echo $products->id; ?></td>
                              <td><?php echo $products->name; ?></td>
                              <!--<td><?php //echo $drivers->Last_Name; ?></td>
                  <td><?php //echo $drivers->Email; ?></td>
                  <td><?php //echo $drivers->City; ?></td>-->
                              <td><a href="#basic" data-toggle="modal" class="btn btn-icon-only green" onClick="edit(<?php echo $products->id; ?>)" ><i class="fa fa-edit"></i></a> <a href="<?php echo site_url("admin1/products/delete_product/".$products->id); ?>"  class="btn btn-icon-only red confirm_delete" ><i class="fa fa-times"></i></a></td>
                            </tr>
                            <?php }} ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET--> 
                  </div>
                </div>
              </div>
            </div>
            <div class="modal fade" id="basic" tabindex="-1" role="basic" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Edit Product</h4>
                  </div>
                  <form action="<?php echo site_url("admin1/products/update_product"); ?>" class="form-horizontal" method="post">
                    <div class="modal-body">
                      <div class="form-body">
                        <div class="form-group">
                          <label class="control-label col-md-3">Product Name <span class="required"> * </span> </label>
                          <div class="col-md-4">
                            <input name="product_id" type="hidden" />
                            <input type="text" name="product_name" data-required="1" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn green">Update changes</button>
                    </div>
                  </form>
                </div>
                <!-- /.modal-content --> 
              </div>
              <!-- /.modal-dialog --> 
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

function edit(id){
	$.post("<?php echo site_url("admin1/products/get_prod_byID"); ?>", {id:id}).done(function(data){
		var data = JSON.parse(data);
		$("input[name=product_name]").val(data["name"]);
		$("input[name=product_id]").val(data["id"]);
	});
}

$(".confirm_delete").click(function(){
	var r = confirm("Are you sure, you want to delete!");
	if(r == true){
		return true;
	}else{
		return false;
	}
});

</script>
<?php include(APPPATH."views/admin/includes1/footer2.php"); ?>
