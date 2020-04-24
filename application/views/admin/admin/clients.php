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
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                  <div class="col-md-12"> 
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet light ">
                      <div class="portlet-title">
                        <div class="caption font-dark"> <i class="icon-settings font-dark"></i> <span class="caption-subject bold uppercase"> Clients Detail</span> </div>
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
                            </tr>
                          </thead>
                          <tbody>
                            <?php if($clients->num_rows>0){ ?>
                            <?php foreach($clients->result() as $clients){ ?>
                            <tr class="odd gradeX">
                              <td><?php echo $clients->id; ?></td>
                              <td><?php echo $clients->First_Name; ?></td>
                              <td><?php echo $clients->Last_Name; ?></td>
                              <td><?php echo $clients->Email; ?></td>
                              <td><?php echo $clients->City; ?></td>
                            </tr>
                            <?php }} ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
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
<?php include(APPPATH."views/admin/includes1/footer2.php"); ?>
