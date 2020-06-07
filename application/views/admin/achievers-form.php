
<div class="content-wrapper">
    
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><?=isset($d)?'<i class="fa fa-edit"></i>':'<i class="fa fa-plus"></i>'?>&nbsp;&nbsp;<?=isset($d)?"Edit ":"Add "?>Achiever</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?=base_url('Admin')?>">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="<?=base_url('Admin/TopAch')?>">Top Achievers</a></li>
                  <li class="breadcrumb-item active"><?=isset($d)?"Edit ":"Add "?> achiever</li>
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
              <div class="card-body">
                <form action="<?=$submit?>" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name" class="m-0">Name:</label>
                            <input type="text" class="form-control mt-2" minlength="1" maxlength="30" name="name" value="<?=isset($d)?$d->name:''?>" id="name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="class" class="m-0">Class:</label>
                            <input type="text" class="form-control mt-2" minlength="1" maxlength="30" name="class" value="<?=isset($d)?$d->class:''?>" id="class" placeholder="Example: XII" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="batch" class="m-0">Batch:</label>
                            <input type="text" class="form-control mt-2" minlength="1" maxlength="30" name="batch" value="<?=isset($d)?$d->batch:''?>" id="batch" placeholder="Example: 2019" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="img" class="m-0">Student's image: </label> <small class="mb-3">( jpg, jpeg, png & bmp allowed )</small>
                            <div class="custom-file mt-2">
                                <input type="file" class="custom-file-input" id="img" name="img" accept=".jpg, .jpeg, .png, .bmp" required>
                                <label class="custom-file-label" for="img">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <a href="<?=base_url('Admin/TopAch')?>" class="btn btn-default mr-3">Cancel</a> 
                            <?php if(isset($d)){?>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-recycle"></i> Update</button>
                            <?php } else {?>
                                <button type="submit" class="btn btn-primary">+ Add</button>
                            <?php }?>
                        </div>
                    </div>
                </form>

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


// Name of the file appearing on selecting image
  $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });

</script>
