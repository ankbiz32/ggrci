
<div class="content-wrapper">
    
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><i class="fa fa-circle"></i>&nbsp;&nbsp;Top Achievers</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?=base_url('Admin')?>">Dashboard</a></li>
                  <li class="breadcrumb-item">Achievers</li>
                  <li class="breadcrumb-item active">Top achievers</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div> <!-- /.Content header -->
    
    <!-- Content Main-->
    <div class="content">
      <div class="container-fluid">

        <div class="row mt-3">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
              <div class="card-header row">
                <h2 class="card-title col">List of top achievers:</h2>
                <a href="<?=base_url('Add/TopAch')?>" class="btn btn-primary ml-auto" title="Add achiever">+ Add more</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="bookdt" class="table table-bordered table-hover" style="width:100%">
                  <thead>
                    <tr>
                      <th>Image</th>
                      <th>Name</th>
                      <th>Class</th>
                      <th>Batch</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- display Data-->
                    <?php foreach ($ach as $d){?>
                      <tr>
                        <td><img src="<?=base_url()."assets/images/$d->img_src"?>" alt="Image" height="80" style="object-fit:contain;"></td>
                        <td><?=$d->name?></td>
                        <td><?=$d->class?></td>
                        <td><?=$d->batch?></td>
                        <td>
                          <a href="<?=base_url('Edit/TopAch/'.$d->id)?>" class="btn btn-primary mb-1" title="Edit achiever"><i class="fa fa-edit"></i></a>
                          <a href="<?=base_url('Delete/TopAch/'.$d->id)?>" onclick="confirmation(event)" class="btn del-btn btn-danger mb-1" title="Delete achiever"><i class="fa fa-trash-alt"></i></a>
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


<script>

// Init Datatable
  $(function () {
    $('#bookdt').DataTable({
      "pageLength": 10,
      "paging": true,
      "lengthChange": true,
      "searching": true,
      // "ordering": true,
      "info": true,
      "autoWidth": true,
      "scrollX": true
    });
  });

</script>
