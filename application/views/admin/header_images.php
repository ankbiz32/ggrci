
<div class="content-wrapper">
    
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><i class="fa fa-circle"></i>&nbsp;&nbsp;Header Images</h1>
                <p class="mt-2 mb-0">( Max size : 1MB )</p>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?=base_url('Admin')?>">Dashboard</a></li>
                  <li class="breadcrumb-item active">Header Images</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div> <!-- /.Content header -->
    
    <!-- Content Main-->
    <div class="content">
      <div class="container-fluid">
      <div class="row mt-3">
        <div class="col-md-3 col-sm-6 mb-3">
            <form action="<?=base_url('Edit/Header_images/header-about')?>" method="post" enctype="multipart/form-data">
                <div class="card card-primary">
                    <div class="card-header" style="">
                        <span class="text-bold">About Us</span> <a href="<?=base_url('assets/images/header-about.jpg')?>" target="_blank"><i class="fa fa-info-circle fa-lg float-right mt-2"></i></a>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="aimg" name="img" accept=".jpg, .jpeg, .png, .bmp" required>
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

        <div class="col-md-3 col-sm-6 mb-3">
            <form action="<?=base_url('Edit/Header_images/header-admissions')?>" method="post" enctype="multipart/form-data">
                <div class="card card-primary">
                    <div class="card-header" style="">
                        <span class="text-bold">Admission procedure</span> <a href="<?=base_url('assets/images/header-admissions.jpg')?>" target="_blank"><i class="fa fa-info-circle fa-lg float-right mt-2"></i></a>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="pimg" name="img" accept=".jpg, .jpeg, .png, .bmp" required>
                                <label class="custom-file-label mb-0" for="pimg">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-3 col-sm-6 mb-3">
            <form action="<?=base_url('Edit/Header_images/header-tc')?>" method="post" enctype="multipart/form-data">
                <div class="card card-primary">
                    <div class="card-header" style="">
                        <span class=" text-bold">TC</span> <a href="<?=base_url('assets/images/header-tc.jpg')?>" target="_blank"><i class="fa fa-info-circle fa-lg float-right mt-2"></i></a>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="pimg" name="img" accept=".jpg, .jpeg, .png, .bmp" required>
                                <label class="custom-file-label mb-0" for="pimg">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-3 col-sm-6 mb-3">
            <form action="<?=base_url('Edit/Header_images/header-facilities')?>" method="post" enctype="multipart/form-data">
                <div class="card card-primary">
                    <div class="card-header" style="">
                        <span class=" text-bold">Facilities</span> <a href="<?=base_url('assets/images/header-facilities.jpg')?>" target="_blank"><i class="fa fa-info-circle fa-lg float-right mt-2"></i></a>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="pimg" name="img" accept=".jpg, .jpeg, .png, .bmp" required>
                                <label class="custom-file-label mb-0" for="pimg">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-3 col-sm-6 mb-3">
            <form action="<?=base_url('Edit/Header_images/header-media')?>" method="post" enctype="multipart/form-data">
                <div class="card card-primary">
                    <div class="card-header" style="">
                        <span class="text-bold">Gallery</span> <a href="<?=base_url('assets/images/header-media.jpg')?>" target="_blank"><i class="fa fa-info-circle fa-lg float-right mt-2"></i></a>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="pimg" name="img" accept=".jpg, .jpeg, .png, .bmp" required>
                                <label class="custom-file-label mb-0" for="pimg">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-3 col-sm-6 mb-3">
            <form action="<?=base_url('Edit/Header_images/header-legal')?>" method="post" enctype="multipart/form-data">
                <div class="card card-primary">
                    <div class="card-header" style="">
                        <span class="text-bold">Legal</span> <a href="<?=base_url('assets/images/header-legal.jpg')?>" target="_blank"><i class="fa fa-info-circle fa-lg float-right mt-2"></i></a>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="pimg" name="img" accept=".jpg, .jpeg, .png, .bmp" required>
                                <label class="custom-file-label mb-0" for="pimg">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-3 col-sm-6 mb-3">
            <form action="<?=base_url('Edit/Header_images/header-contact')?>" method="post" enctype="multipart/form-data">
                <div class="card card-primary">
                    <div class="card-header" style="">
                        <span class="text-bold">Contact</span> <a href="<?=base_url('assets/images/header-contact.jpg')?>" target="_blank"><i class="fa fa-info-circle fa-lg float-right mt-2"></i></a>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="pimg" name="img" accept=".jpg, .jpeg, .png, .bmp" required>
                                <label class="custom-file-label mb-0" for="pimg">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-3 col-sm-6 mb-3">
            <form action="<?=base_url('Edit/Header_images/header-news')?>" method="post" enctype="multipart/form-data">
                <div class="card card-primary">
                    <div class="card-header" style="">
                        <span class="text-bold">News</span> <a href="<?=base_url('assets/images/header-news.jpg')?>" target="_blank"><i class="fa fa-info-circle fa-lg float-right mt-2"></i></a>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="pimg" name="img" accept=".jpg, .jpeg, .png, .bmp" required>
                                <label class="custom-file-label mb-0" for="pimg">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-3 col-sm-6 mb-3">
            <form action="<?=base_url('Edit/Header_images/header-notice')?>" method="post" enctype="multipart/form-data">
                <div class="card card-primary">
                    <div class="card-header" style="">
                        <span class="text-bold">Notice</span> <a href="<?=base_url('assets/images/header-notice.jpg')?>" target="_blank"><i class="fa fa-info-circle fa-lg float-right mt-2"></i></a>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="pimg" name="img" accept=".jpg, .jpeg, .png, .bmp" required>
                                <label class="custom-file-label mb-0" for="pimg">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-3 col-sm-6 mb-3">
            <form action="<?=base_url('Edit/Header_images/header-achievers')?>" method="post" enctype="multipart/form-data">
                <div class="card card-primary">
                    <div class="card-header" style="">
                        <span class="text-bold">Achievers</span> <a href="<?=base_url('assets/images/header-achievers.jpg')?>" target="_blank"><i class="fa fa-info-circle fa-lg float-right mt-2"></i></a>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="pimg" name="img" accept=".jpg, .jpeg, .png, .bmp" required>
                                <label class="custom-file-label mb-0" for="pimg">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-3 col-sm-6 mb-3">
            <form action="<?=base_url('Edit/Header_images/header-privacy')?>" method="post" enctype="multipart/form-data">
                <div class="card card-primary">
                    <div class="card-header" style="">
                        <span class="text-bold">Privacy</span> <a href="<?=base_url('assets/images/header-privacy.jpg')?>" target="_blank"><i class="fa fa-info-circle fa-lg float-right mt-2"></i></a>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="pimg" name="img" accept=".jpg, .jpeg, .png, .bmp" required>
                                <label class="custom-file-label mb-0" for="pimg">Choose file</label>
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
