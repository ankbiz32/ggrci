
<div class="content-wrapper">
    
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><?=isset($d)?'<i class="fa fa-edit"></i>':'<i class="fa fa-plus"></i>'?>&nbsp;&nbsp;<?=isset($d)?"Edit ":"Add "?>News</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?=base_url('Admin')?>">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="<?=base_url('Admin/News')?>">News</a></li>
                  <li class="breadcrumb-item active"><?=isset($d)?"Edit ":"Add "?> News</li>
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
                        <div class="form-group col-md-12">
                            <label for="heading" class="m-0">News heading: <small>(max 100 characters)</small></label>
                            <input type="text" class="form-control mt-2 text-lg" minlength="1" maxlength="100" name="heading" value="<?=isset($d)?$d->heading:''?>" id="heading" required>
                        </div>
                        <div class="form-group col-md-4 col-sm-12">
                            <label for="date" class="m-0">Date:</label>
                            <input type="date" class="form-control mt-2" name="date" value="<?=isset($d)?date('Y-m-d',strtotime($d->date)):date('Y-m-d')?>" id="date" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="img" class="m-0">Choose image: </label> <small class="mb-3">( jpg, jpeg, png & bmp allowed )</small>
                            <div class="custom-file mt-2">
                                <input type="file" class="custom-file-input" id="img" name="img" accept=".jpg, .jpeg, .png, .bmp">
                                <label class="custom-file-label" for="img">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="content" class="">News Details:</label>
                            <textarea name="content" id="content" class="form-control" rows="10" required><?=isset($d)?$d->content:null?></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <a href="<?=base_url('Admin/News')?>" class="btn btn-default mr-3">Cancel</a> 
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
