
<div class="content-wrapper">
    
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="ml-2 mb-2 text-dark"><i class="fa fa-users"></i>&nbsp;&nbsp;Users</h1>
            </div><!-- /.col -->
            <div class=" mb-2 col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?=base_url('Admin')?>">Dashboard</a></li>
                  <li class="breadcrumb-item active">Users</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div> <!-- /.Content header -->
    
    <!-- Content Main-->
    <div class="content">
      <div class="container-fluid">

        <div class="row mt-2">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
            <div class="card-header row">
                <h2 class="card-title col">List of registered users:</h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="bookdt" class="table table-bordered table-hover" style="width:100%">
                  <thead>
                    <tr>
                      <th>User Id</th>
                      <th>Registered on</th>
                      <th>E-mail</th>
                      <th>Name</th>
                      <th>Contact no.</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- display Data-->
                    <?php foreach ($users as $i){?>
                      <tr>
                        <td><?=$i->user_id?></td>
                        <td><?=date('d-m-Y',strtotime($i->created_on))?></td>
                        <td>
                            <?=$i->email?>
                            <?php if($i->email_verified=='0'){?>
                                <br><span class="badge badge-warning">Un-verified</span> <br>OTP : <?=$i->email_token?>
                            <?php }else{ ?>
                                <br><span class="badge badge-success">Verified</span>
                            <?php }?>
                        </td>
                        <td><?=$i->fname?> <?=$i->lname?></td>
                        <td><?=$i->phone?></td>
                        <td>
                          <a href="<?=base_url('Admin/ResetPwd/').$i->user_id?>" onclick="confirmation(event)" class="btn btn-warning btn-xs text-bold">Reset password</a>
                          <a href="<?=base_url('Admin/DeleteUser/').$i->user_id?>" onclick="confirmation(event)" class="btn btn-danger btn-xs text-bold">Delete User</a>
                        </td>
                      </tr>

                
                    <?php }?>

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>

      </div><!-- /.container-fluid -->
    </div>

</div> <!-- /.Wrapper -->


<!-- DataTable assets -->
<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>

<!-- Init Datatable -->
<script>
  $(function () {
    $('#bookdt').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "scrollX": true,
      "order": [[ 0, "desc" ]]
    });
  });
</script>
