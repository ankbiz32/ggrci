
<div class="content-wrapper">
    
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="ml-2 mb-2 text-dark"><?=isset($notice)? '<i class="fa fa-edit"></i>':'+'?>&nbsp;&nbsp;<?=isset($notice) ? 'Edit ' : 'Add '?>Notice</h1>
            </div><!-- /.col -->
            <div class="col-sm-6 mb-2">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?=base_url('Admin')?>">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="<?=base_url('Admin/Notice')?>">Notice</a></li>
                  <li class="breadcrumb-item active"><?=isset($notice) ? 'Edit ' : 'Add '?>Notice</li>
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
              <div class="card-body">
                <form role="form" method="post" action="<?=$submissonPath?>" enctype="multipart/form-data">
                    <!-- <div class="row"> -->
                        <div class="form-group">
                            <label for="content">Notice:</label>
                            <textarea class="form-control" name="content" id="content" rows="5" required><?=isset($notice->content) ? $notice->content : null ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="img">File for Notice:</label>
                            <?php if (isset($notice->file_src) AND $notice->file_src!='_blank_'){ ?>}
                                <p class="text-muted">( Choose only if you want to change the current file )</p>
                            <?php }?>
                            <div class="custom-file">
                            <input type="file" class="custom-file-input form-control" id="notice_file" name="notice_file">
                            <label class="custom-file-label" for="customFile">Choose File</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="status">Status:</label>
                            <select name="status" id="status" class="form-control" required>
                            <option value="">-- Choose one --</option>
                                <option <?php if(isset($notice->status) AND $notice->status == 'new'){echo ' selected';}?> value="new">New</option>
                                <option <?php if(isset($notice->status) AND $notice->status == 'old'){echo ' selected';}?>  value="old">Old</option>
                            </select>
                        </div>
                    <!-- </div> -->
                    <a href="<?=base_url('Admin/Notice')?>" class="btn btn-default">Cancel</a> 
                    <?php if (isset($notice)){?>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-recycle"></i>&nbsp;Update</button>
                    <?php } else{?>
                        <button type="submit" class="btn btn-primary">+ Add</button>
                    <?php }?>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
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
