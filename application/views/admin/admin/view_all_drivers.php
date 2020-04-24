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
            <?php if($this->session->flashdata("router_edit_success")){ ?>
            <div class="alert alert-success alert-dismissible" role="alert" style="margin-bottom:0px !important;" align="center"> <?php echo $this->session->flashdata("router_edit_success"); ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <?php } ?>
            <?php if($this->session->flashdata("router_deleted")){ ?>
            <div class="alert alert-danger alert-dismissible" role="alert" style="margin-bottom:0px !important;" align="center"> <?php echo $this->session->flashdata("router_deleted"); ?>
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
                        <div class="caption font-dark"> <i class="icon-settings font-dark"></i> <span class="caption-subject bold uppercase"> Drivers Detail</span> </div>
                      </div>
                      <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                          <thead>
                            <tr>
                              <th> ID </th>
                              <th> First Name </th>
                              <th> Last Name </th>
                              <th> Email </th>
                              <th> Address </th>
                              <th> Approve/Unapprove </th>
                              <th> Action </th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php if($all_drivers->num_rows()>0){ ?>
                            <?php foreach($all_drivers->result() as $drivers){ ?>
                            <tr class="odd gradeX">
                              <td><?php echo $drivers->id; ?></td>
                              <td><?php echo $drivers->First_Name; ?></td>
                              <td><?php echo $drivers->Last_Name; ?></td>
                              <td><?php echo $drivers->Email; ?></td>
                              <td><?php echo $drivers->City; ?></td>
                              <td><div class="mt-action-buttons ">
                                  <div class="btn-group btn-group-circle">
                                    <button type="button" class="btn <?php if($drivers->Status!="Active"){ echo "btn-outline";} ?> green btn-sm" onclick="change_status(<?php echo $drivers->id; ?>, 'Active')">Appove</button>
                                    <button type="button" class="btn <?php if($drivers->Status!="Reject"){ echo "btn-outline";} ?> red btn-sm" onclick="change_status(<?php echo $drivers->id; ?>, 'Reject')">Reject</button>
                                  </div>
                                </div></td>
                              <td><a href="<?php echo site_url("admin1/drivers/get_driver/".$drivers->id); ?>" class="btn btn-icon-only green" ><i class="fa fa-edit"></i></a> <a href="<?php echo site_url("admin1/drivers/delete_driver/".$drivers->id); ?>" class="btn btn-icon-only red" ><i class="fa fa-times"></i></a></td>
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
<?php include(APPPATH."views/admin/includes1/footer1.php"); ?>
<script type="text/javascript">

function change_status(id, status){
	$.post("<?php echo site_url("admin1/drivers/change_status"); ?>", {id:id, status:status}).done(function(data){
		location.reload();
	});
}

</script>
<?php include(APPPATH."views/admin/includes1/footer2.php"); ?>
