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
            <?php if($this->session->flashdata("inquiry_deleted")){ ?>
            <div class="alert alert-danger alert-dismissible" role="alert" style="margin-bottom:0px !important;" align="center"> <?php echo $this->session->flashdata("inquiry_deleted"); ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <?php } ?>
            <?php if($this->session->flashdata("inquiry_error")){ ?>
            <div class="alert alert-danger alert-dismissible" role="alert" style="margin-bottom:0px !important;" align="center"> <?php echo $this->session->flashdata("inquiry_error"); ?>
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
                        <div class="caption font-dark"> <i class="icon-settings font-dark"></i> <span class="caption-subject bold uppercase"> Business Owner Partnership Inquiries</span> </div>
                      </div>
                      <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                          <thead>
                            <tr>
                              <th> ID </th>
                              <th> First Name </th>
                              <th> Last Name </th>
                              <th> Email </th>
                              <th> Phone </th>
                              <th> Action </th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php if($owner_partnership->num_rows()>0){ ?>
                            <?php foreach($owner_partnership->result() as $inquiry){ ?>
                            <tr class="odd gradeX">
                              <td><?php echo $inquiry->id; ?></td>
                              <td><?php echo $inquiry->first_name; ?></td>
                              <td><?php echo $inquiry->last_name; ?></td>
                              <td><?php echo $inquiry->email; ?></td>
                              <td><?php echo $inquiry->phone; ?></td>
                              <td><a data-toggle="modal" href="#basic" class="btn btn-icon-only green" onClick="load_inquiry(<?php echo $inquiry->id; ?>)" ><i class="fa fa-arrows-alt"></i></a> <a href="<?php echo site_url("admin1/owner_partnership/delete/".$inquiry->id); ?>" class="btn btn-icon-only red confirm_delete" ><i class="fa fa-times"></i></a></td>
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
            
            <!--
            -- END PAGE HERE
            --> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="basic" tabindex="-1" role="basic" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title">Inquiry</h4>
      </div>
      <div class="modal-body">
        <div id="modal_body"> </div>
      </div>
    </div>
    <!-- /.modal-content --> 
  </div>
  <!-- /.modal-dialog --> 
</div>
<!-- /.modal -->
<?php include(APPPATH."views/admin/includes1/footer1.php"); ?>
<script type="text/javascript">

function load_inquiry(id){
	$.post("<?php echo site_url("admin1/owner_partnership/get_by_id"); ?>", {id:id}).done(function(data){
		//console.log(data);
		$("#modal_body").html(data);
	});
}

//delete record
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
