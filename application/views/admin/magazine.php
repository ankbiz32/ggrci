
<div class="content-wrapper">
    
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><i class="fa fa-circle"></i>&nbsp;&nbsp; Spectrum magazine</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?=base_url('Admin')?>">Dashboard</a></li>
                  <li class="breadcrumb-item">Uploads</li>
                  <li class="breadcrumb-item active">Magazine</li>
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
            <form action="<?=base_url('Edit/Magazine')?>" method="post" enctype="multipart/form-data">
                <div class="card card-primary">
                    <div class="card-header" style="">
                        <span class="text-bold">Spectrum Magazine pdf</span> <a href="<?=base_url('assets/magazine/mag.pdf')?>" target="_blank"><i class="fa fa-info-circle fa-lg float-right mt-2"></i></a>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group">
                            <label>(Max. 10 MB)</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="aimg" name="img" accept=".pdf" required>
                                <label class="custom-file-label mb-0" for="aimg">Upload</label>
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
            <form action="<?=base_url('Edit/MagazineThumb')?>" method="post" enctype="multipart/form-data">
                <div class="card card-primary">
                    <div class="card-header" style="">
                        <span class="text-bold">Magazine thumbnail</span> <a href="<?=base_url('assets/magazine/mag.png')?>" target="_blank"><i class="fa fa-info-circle fa-lg float-right mt-2"></i></a>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group">
                            <label>(Max. 1 MB)</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="aimg" name="img" accept=".png, .jpg, .jpeg, .bmp" required>
                                <label class="custom-file-label mb-0" for="aimg">Upload</label>
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
