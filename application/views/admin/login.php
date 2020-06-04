<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>GIS Admin | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fav-icon -->
    <link rel="icon" type="image/png" sizes="32x32" href="<?=base_url()?>assets/images/fav-icons/fav-icon-512x5121.png">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<style>
 @media(max-width:420px){
  .login-logo{
    height:70px;
  }
 }
 @media(max-width:780px){
  .imgBox{
    display:none;
  }
 }
 .fa-eye{
    position:absolute;
    right:0;
    top:0;
    font-size:18px !important;
    padding: 12px 10px;
    z-index:10;
    cursor:pointer;
  }
  .login-card-body .input-group .form-control{
    border-right: 1px solid #ced4da;
    border-left:0;
  }
  .login-card-body .input-group-append .input-group-text{
    border-left: 1px solid #ced4da;
    border-right:0;
  }
  .login-btn{
    margin-top:15px;
  }
  .login-btn:hover {
    transition: 0.3s;
    transform: translateX(5px);
  }
  .card{
    margin-bottom:0 !important;
  }
</style>
<body class="hold-transition login-page ">
  <div class="imgBox" style="background: linear-gradient(#003466,#0A1628); height:317px; width:300px; padding:50px">
      <img src="<?=base_url()?>assets/images/LOGO short white.png" alt="Logo" style="object-fit:contain; height:100%; width:100%;">
  </div>
  <div class="login-box" style="border:1px solid grey">
    <div class="login-logo">
      <strong>Admin</strong>
    </div>
    <!-- /.login-logo -->
    <div class="card mt-2">
      <div class="card-body login-card-body">
        <p class="login-box-msg text-lg">Log in</p>
        <form method="post" action="<?php echo base_url('Login/authenticate'); ?>">

          <div class="input-group mb-3">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user-alt"></span>
              </div>
            </div>
            <input type="text" class="form-control" placeholder="Username" name="uname" required>
          </div>

          <div class="input-group mb-3">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            <input type="password" class="form-control" id="password" placeholder="Password" name="pwd" required>
            <i class="fa fa-eye" onclick="showPwd()" title="Show/hide Password" id="toggleEye"></i>
          </div>
          <div class="row">
            <!-- /.col -->
            <div class="col-md-8 col-sm-4 col-xs-6">
              <button type="submit" class="btn login-btn text-white" style="background:linear-gradient(to right, #003466, #0A1628);">Log In &nbsp; <span class="btn-arrow">➜</span></button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <!-- <p class="mb-1 mt-3">
          <a href="#">Forgot password ?</a>
        </p> -->
        <?php if(isset($errors)) : ?>
          <h6 class="alert alert-danger mt-4"><?= $errors ?></h6>
        <?php endif; ?>

      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  
<!-- /.login-box -->

  <!-- jQuery -->
  <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
  
  <script>
        function showPwd() {
          var x = document.getElementById("password");
          var eye = document.getElementById("toggleEye");
          if (x.type === "password") {
            x.type = "text";
            eye.classList.add("fa-eye-slash");
          } else {
            x.type = "password";
            eye.classList.remove("fa-eye-slash");
          }
        }
  </script>

  
<script>
  //  Sweet alert for normal response
    var base_url = '<?=base_url()?>';
      $(document).ready(function(){
          const Toast = Swal.mixin({
              toast: true,
              position: 'top',
              showConfirmButton: false,
              timer: 3000
          });

          <?php if($this->session->flashdata('success') || $message = $this->session->flashdata('failed')):
              $class = $this->session->flashdata('success') ? 'success' : 'error';
          ?>
              
              Toast.fire({
                  icon: '<?=$class?>',
                  title: '<?= $this->session->flashdata('success'); ?>
                          <?= $this->session->flashdata('failed'); ?>'
              });
          <?php 
              endif;
          ?>
      });
</script>

<!-- Sweet alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

</body>
</html>
