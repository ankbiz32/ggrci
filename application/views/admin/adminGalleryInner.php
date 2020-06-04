
<div class="content-wrapper">
    
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><i class="fa fa-images"></i>&nbsp;&nbsp;Gallery</h1>
                <span class="text-muted text-lg">(Album name : <?=$cat_name?>)</span>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?=base_url('Admin')?>">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="<?=base_url('Admin/Gallery')?>">Gallery albums</a></li>
                  <li class="breadcrumb-item active"><?=$cat_name?></li>
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
                <h2 class="card-title col">List of Images:</h2>
                <button class="btn btn-primary ml-auto" data-toggle="modal" data-target="#addImage">+ Add more image</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="row">
               <?php foreach($images as $image){?>
                <div class="col-md-3 col-sm-4 col-xs-6 mb-5">
                    <img src="<?=base_url()?>assets/images/<?=$image->img_src?>" alt="<?=$image->alt_txt?>" height="180" width="180" style="object-fit:cover;">
                    <br>
                    <div class="row mt-2 ml-4">
                        <div class="col ml-3">
                            <a href="<?=base_url('Delete/galleryImg/'.$image->id)?>" onclick="confirmation(event)" class="btn del-btn btn-danger mr-2 mb-1" title="Delete Image"><i class="fa fa-trash-alt"></i></a>
                            <button class="btn btn-primary mb-1" data-toggle="modal" data-target="#editImg<?=$image->id?>" title="Edit Iimage"><i class="fa fa-edit"></i></button>
                        </div>
                    </div>
                </div>

                <!-- edit Image modal -->
                    <div class="modal fade" id="editImg<?=$image->id?>">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"><i class="fa fa-edit"></i>&nbsp; Edit image:</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form role="form" method="post" action="<?php echo base_url();?>Edit/gallImage/<?=$image->id?>" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="img">Replace Image:</label>
                                        <p class="text-muted text-sm">(Choose only if you want another image)</p>
                                        <div class="custom-file">
                                        <input type="file" class="custom-file-input form-control" id="img" name="img">
                                        <label class="custom-file-label" for="customFile">Choose image</label>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="alt_txt">Alt Name (optional) : </label>
                                        <p class="text-muted text-sm">( This is used when image is broken & also for SEO purposes )</p>
                                        <input type="text" class="form-control" value="<?=$image->alt_txt?>" name="alt_txt" id="alt_txt">
                                    </div>
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
                    </div>
                <!-- /edit Image modal -->

                
               <?php }?>
               </div>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>

      </div><!-- /.container-fluid -->
    </div>

</div> <!-- /.Wrapper -->

<!-- new Image modal -->
    <div class="modal fade" id="addImage">
      <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title">+ Add new image:</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <form role="form" method="post" action="<?php echo base_url();?>Add/gallImage/<?=$cat_id?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="img">Add Image:</label>
                    <div class="custom-file">
                    <input type="file" class="custom-file-input form-control" id="img" name="img" required>
                    <label class="custom-file-label" for="customFile">Choose image</label>
                </div>
                <div class="form-group mt-3">
                    <label for="alt_txt">Alt Name (optional) : </label>
                    <p class="text-muted text-sm">( This is used when image is broken & also for SEO purposes )</p>
                    <input type="text" class="form-control" name="alt_txt" id="alt_txt">
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
<!-- /new Image modal -->

<script>
    // Name of the file appearing on selecting image
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>
