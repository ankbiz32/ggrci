
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-3">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="fa fa-globe"></i>&nbsp; GGEA web profile:</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url('Admin')?>">Home</a></li>
              <li class="breadcrumb-item active">GGEA web profile</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container fluid -->
    </div><!-- /.Content Header -->

      <!-- Content Main -->
    <div class="content">
      <div class="container-fluid">
      
        <div class="row mb-2">
          <div class="col">
            <div class="card">
                <div class="card-body d-flex flex-wrap">
                    <div class="col">
                      <label class="label pl-2">E-mail:</label><br>
                      <span class="p-2 bg-light"><?=$profile->email; ?></span> <br><br>
                      <label class="label pl-2">Contact no.:</label><br>
                      <span class="p-2 bg-light"><?=$profile->phone1; ?></span> <br>
                      <span class="p-2 bg-light mt-2" style="display:inline-block;"><?=$profile->phone2; ?></span> <br><br>
                      <label class="label pl-2">Address:</label><br>
                      <span class="p-2 bg-light "><?=$profile->address_line1; ?></span><br>
                      <span class="p-2 bg-light my-2" style="display:inline-block;"><?=$profile->address_line2; ?></span><br>
                      <span class="p-2 bg-light"><?=$profile->address_line3; ?></span><br><br>
                      <label class="label pl-2">Virtual tour link:</label><br>
                      <span class="p-2 bg-light"><?=$profile->virtual_tour; ?></span>
                    </div>
                    <div class="col">
                      <label class="label pl-2">Facebook link:</label><br>
                      <span class="p-2 bg-light"><?=$profile->fblink; ?></span><br><br>
                      <label class="label pl-2">Instagram link:</label><br>
                      <span class="p-2 bg-light"><?=$profile->twitterlink; ?></span><br><br>
                      <label class="label pl-2">Youtube channel link:</label><br>
                      <span class="p-2 bg-light"><?=$profile->youtubelink; ?></span><br><br>
                      <label class="label pl-2">Office timings:</label><br>
                      <span class="p-2 bg-light mb-2" style="display:inline-block;"><?=$profile->timing_1; ?></span> <br>
                      <span class="p-2 bg-light"><?=$profile->timing_2; ?></span>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#webproedit-modal"><i class="fa fa-edit" aria-hidden="true"></i> &nbsp; Edit Web profile </button>
                </div>
            </div>
          </div><!-- /.col -->
        </div><!-- /.row -->

      </div><!-- /.container-fluid -->
    </div><!--/. Content Main -->

</div><!-- /.wrapper -->


<!-- edit Web profile modal -->
  <div class="modal fade " id="webproedit-modal">
      <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title"><i class="fa fa-edit"></i>&nbsp; Edit web profile</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <form role="form" method="post" class="d-flex" action="<?php echo base_url();?>Edit/webProfile">
                  <div class="col">
                    <input type="text" class="form-control" name="id" id="id" value="<?=$profile->id; ?>" hidden>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email" id="email" value="<?=$profile->email; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="phone1">Contact no. :</label>
                        <input type="text" class="form-control" maxlength="12" minlength="10" pattern="[- 0-9]+" name="phone1" id="phone1" 
                        oninvalid="this.setCustomValidity('Enter a valid no.')" oninput="this.setCustomValidity('')" value="<?=$profile->phone1; ?>" required>
                        <input type="text" class="form-control" maxlength="12" minlength="10" pattern="[- 0-9]+" name="phone2" id="phone2" oninvalid="this.setCustomValidity('Enter a valid no.')" oninput="this.setCustomValidity('')" value="<?=$profile->phone2; ?>" >
                    </div>
                    <div class="form-group">
                        <label for="address_line1">Address:</label>
                        <input type="text" class="form-control" name="address_line1" id="address_line1" value="<?=$profile->address_line1; ?>" >
                        <input type="text" class="form-control" name="address_line2" id="address_line2" value="<?=$profile->address_line2; ?>" >
                        <input type="text" class="form-control" name="address_line3" id="address_line3" value="<?=$profile->address_line3; ?>" >
                    </div>
                    <div class="form-group">
                        <label for="virtual_tour">Virtual tour link:</label>
                        <input type="url" class="form-control" name="virtual_tour" id="virtual_tour" value="<?=$profile->virtual_tour; ?>" required>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                        <label for="fblink">Facebook link:</label>
                        <input type="url" class="form-control" name="fblink" id="fblink" value="<?=$profile->fblink;?>" required>
                    </div>
                    <div class="form-group">
                        <label for="instalink">Instagram Link:</label>
                        <input type="url" class="form-control" name="instalink" id="instalink" value="<?=$profile->instalink;?>" required>
                    </div>
                    <div class="form-group">
                        <label for="youtubelink">Youtube channel Link:</label>
                        <input type="url" class="form-control" name="youtubelink" id="youtubelink" value="<?=$profile->youtubelink;?>" required>
                    </div>
                    <div class="form-group">
                        <label for="youtubelink">Office timings:</label>
                        <input type="text" class="form-control" name="timing_1" id="timing_1" value="<?=$profile->timing_1;?>" required>
                        <input type="text" class="form-control" name="timing_2" id="timing_2" value="<?=$profile->timing_2;?>" required>
                    </div>
                  </div>
          </div>
          <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary" ><i class="fa fa-recycle"></i>&nbsp; Update</button>
              </form>
          </div>


      </div>
          <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
  </div>
<!-- /edit web profile modal -->
