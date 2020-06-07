
<div class="content-wrapper">
    
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><i class="fa fa-circle"></i>&nbsp;&nbsp;School tour video</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?=base_url('Admin')?>">Dashboard</a></li>
                  <li class="breadcrumb-item active">Tour video</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div> <!-- /.Content header -->
    
    <!-- Content Main-->
    <div class="content">
      <div class="container-fluid">
      <div class="row mt-3">
        <div class="col-md-4 col-sm-6 mb-3">
            <form action="<?=base_url('Edit/tourVid')?>" method="post" enctype="multipart/form-data">
                <div class="card card-primary">
                    <div class="card-header" style="">
                        <span class="text-bold">Video</span> <a href="<?=base_url('assets/video/ggr-video.mp4')?>" target="_blank"><i class="fa fa-info-circle fa-lg float-right mt-2"></i></a>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group">
                            <label>(Max. 10 MB)</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="img" name="img" accept=".mp4, .mpeg, .mpg, .avi, .mkv, .mov" required>
                                <label class="custom-file-label mb-0" for="aimg">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-4 col-sm-6 mb-3">
            <form action="<?=base_url('Edit/tourVidThumb')?>" method="post" enctype="multipart/form-data">
                <div class="card card-primary">
                    <div class="card-header" style="">
                        <span class="text-bold">Video thumbnail</span> <a href="<?=base_url('assets/video/vid-thumb.jpg')?>" target="_blank"><i class="fa fa-info-circle fa-lg float-right mt-2"></i></a>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group">
                            <label>(Max. 1 MB)</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="img" name="img" accept=".jpg, .jpeg, .png, .bmp" required>
                                <label class="custom-file-label mb-0" for="aimg">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </div>
            </form>
        </div>

      </div>


      </div><!-- /.container-fluid -->
    </div>

</div> <!-- /.Wrapper -->

<script>
// Name of the file appearing on selecting image
  $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });

</script>
