
<div class="content-wrapper">
    
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><i class="fa fa-images"></i>&nbsp;&nbsp;Gallery</h1>
                <span class="text-muted">(Albums)</span>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?=base_url('Admin')?>">Dashboard</a></li>
                  <li class="breadcrumb-item active">Gallery Albums</li>
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
                <h2 class="card-title col">List of Gallery albums:</h2>
                <button class="btn btn-primary ml-auto" data-toggle="modal" data-target="#addCategory">+ Add new Album</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="bookdt" class="table table-bordered table-hover" style="width:100%">
                  <thead>
                    <tr>
                      <th>S. No.</th>
                      <th>Album name</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- display Data-->
                    <?php $c=1; foreach ($categories as $category){?>
                      <tr>
                        <td><?=$c?></td>
                        <td><?=$category->name?></td>
                        <td>
                          <a href="<?=base_url('Delete/gallCategory/'.$category->id)?>" onclick="confirmation(event)" class="btn del-btn btn-danger mb-1" title="Delete Album"><i class="fa fa-trash-alt"></i></a>
                          <button class="btn btn-primary mb-1" data-toggle="modal" data-target="#editCategory<?=$category->id?>" title="Edit Album"><i class="fa fa-edit"></i></button>
                          <a href="<?=base_url('Admin/galleryInner/'.$category->id)?>" class="btn btn-warning mb-1" title="View Images of this album"><i class="fa fa-eye"></i></a>
                        </td>
                      </tr>

                      <!-- edit Album modal -->
                        <div class="modal fade" id="editCategory<?=$category->id?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"> <i class="fa fa-edit"></i> &nbsp; Edit Album:</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form role="form" method="post" action="<?php echo base_url();?>Edit/gallCategory/<?=$category->id?>">
                                        <div class="form-group">
                                            <label for="name">Album name:</label>
                                            <input type="text" class="form-control" name="name" id="name" value="<?=$category->name?>" required>
                                        </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-recycle"></i>&nbsp; Update</button>
                                    </form>
                                </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                      <!-- /edit Album modal -->

                    <?php $c++; }?>

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


<!-- new Album modal -->
  <div class="modal fade" id="addCategory">
      <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title">+ Add new Album:</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <form role="form" method="post" action="<?php echo base_url();?>Add/gallCategory" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Album name:</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>
                <div class="form-group">
                <label for="img">Add an image to the album:</label>
                <div class="custom-file">
                <input type="file" class="custom-file-input form-control" id="img" name="img" accept=".jpg, .jpeg, .png, .bmp, .svg" required>
                <label class="custom-file-label" for="customFile">Choose image</label>
                </div>
            </div>
          </div>
          <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary">+ Add</button>
              </form>
          </div>
          </div>
          <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
  </div>
<!-- /new Album modal -->

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
      "scrollX": true
    });
  });
</script>

<script>
    // Name of the file appearing on selecting image
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>
