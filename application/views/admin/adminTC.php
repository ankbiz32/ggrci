
<div class="content-wrapper">
    
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><i class="fa fa-file"></i>&nbsp;&nbsp;TC</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?=base_url('Admin')?>">Dashboard</a></li>
                  <li class="breadcrumb-item active">TC</li>
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
                <h2 class="card-title col">List of TC:</h2>
                <a href="<?=base_url('Add/TC')?>" class="btn btn-primary ml-auto" title="Add TC">+ Add TC</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="bookdt" class="table table-bordered table-hover" style="width:100%">
                  <thead>
                    <tr>
                      <th>Student name</th>
                      <th>DOB</th>
                      <th>Father's name</th>
                      <th>TC</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- display Data-->
                    <?php foreach ($data as $d){?>
                      <tr>
                        <td><?=$d->name?></td>
                        <td class=""><?=date('d-m-Y',strtotime($d->dob))?></td>
                        <td><?=$d->fname?></td>
                        <td>
                            <a href="<?=base_url()?>assets/tc/<?=$d->img_src?>" target="_blank">
                              <?='<i class="fa fa-file"></i> '.$d->img_src?>
                            </a>
                        </td>
                        <td>
                          <a href="<?=base_url('Edit/TC/'.$d->id)?>" class="btn btn-primary mb-1" title="Edit TC"><i class="fa fa-edit"></i></a>
                          <a href="<?=base_url('Delete/TC/'.$d->id)?>" onclick="confirmation(event)" class="btn del-btn btn-danger mb-1" title="Delete TC"><i class="fa fa-trash-alt"></i></a>
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
