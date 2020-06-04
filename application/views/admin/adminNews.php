
<div class="content-wrapper">
    
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="ml-2 mb-2 text-dark"><i class="fa fa-newspaper"></i>&nbsp;&nbsp;News</h1>
            </div><!-- /.col -->
            <div class=" mb-2 col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?=base_url('Admin')?>">Dashboard</a></li>
                  <li class="breadcrumb-item active">News</li>
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
              <div class="card-header row">
                <h2 class="card-title col">List of News:</h2>
                <a href="<?=base_url('Add/News')?>" class="btn btn-primary ml-auto" title="Add News">+ Add News</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="bookdt" class="table table-bordered table-hover" style="width:100%">
                  <thead>
                    <tr>
                      <th style="min-width:60px">S. No.</th>
                      <th>Heading</th>
                      <th>Content</th>
                      <th>Image</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- display Data-->
                    <?php $i=1; foreach ($news as $thisNews){?>
                      <tr>
                        <td ><?=$i?>.</td>
                        <td><?=$thisNews->heading?></td>
                        <td>
                            <?=substr($thisNews->content,0,100).'<p class="text-xs mt-4"><i class="fa fa-calendar-alt"> </i> '
                            .date('d-m-Y',strtotime($thisNews->date)).'</p>'?>
                        </td>
                        <td>
                            <img src="<?=base_url()?>/assets/images/<?=$thisNews->img_src?>" alt="<?=$thisNews->img_src?>" height="80" width="80" style="object-fit:cover">
                        </td>
                        <td>
                          <?php if($thisNews->status=='new'){
                                  echo '<p class="badge badge-danger">New</p>';
                          }
                          else{
                            echo '<p class="badge badge-secondary">Old</p>';
                          }
                          ?>
                        </td>
                        <td>
                          <a href="<?=base_url('Edit/News/'.$thisNews->id)?>" class="btn btn-primary mb-1" title="Edit News"><i class="fa fa-edit"></i></a>
                          <a href="<?=base_url('Delete/News/'.$thisNews->id)?>" onclick="confirmation(event)" class="btn del-btn btn-danger mb-1" title="Delete News"><i class="fa fa-trash-alt"></i></a>
                        </td>
                      </tr>
                    <?php $i++; }?>

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
      "scrollX": true,
      "order": [[ 0, "desc" ]]
    });
  });
</script>
