
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=base_url('Admin')?>" class="brand-link ml-1">
      <span class="brand-text text-lg"><img src="<?=base_url('assets/images/logo_admin.png')?>" alt="GIS logo" height="70px" class=""> <strong class="ml-2">Admin </strong>Panel</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar"  style="">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url(); ?>assets/images/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="<?=base_url('Admin/adminProfile')?>" class="d-block"> <?php echo $this->session->user->fname .'&nbsp;' . $this->session->user->lname ?> </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?=base_url('Admin')?>" class="nav-link <?php if($this->uri->segment(1)=="Admin" AND $this->uri->segment(2)=="" AND $this->uri->segment(3)==""){echo ' CustomActive';}?> >">
              <i class="fas fa-columns nav-icon"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li class="nav-item has-treeview <?php if($this->uri->segment(2)=="Users" OR $this->uri->segment(2)=="Admissions" OR $this->uri->segment(2)=="Payments"){echo ' menu-open';}?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file-invoice"></i>
              <p>
                Admissions
                <i class="right fas fa-angle-down"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ml-3">
              <li class="nav-item">
                <a href="<?=base_url('Admin/Users')?>" class="nav-link <?php if($this->uri->segment(2)=="Users"){echo ' CustomActive';}?>">
                  <i class="fa fa-users nav-icon"></i>
                  <p>Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('Admin/Admissions')?>" class="nav-link <?php if($this->uri->segment(2)=="Admissions"){echo ' CustomActive';}?>">
                  <i class="fa fa-file-invoice nav-icon"></i>
                  <p>Admissions Form</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('Admin/Payments')?>" class="nav-link <?php if($this->uri->segment(2)=="Payments"){echo ' CustomActive';}?>">
                  <i class="fa fa-money-bill nav-icon"></i>
                  <p>Payments</p>
                </a>
              </li>
            </ul> 
          </li>

          <li class="nav-item">
            <a href="<?=base_url('Admin/News')?>" class="nav-link <?php if($this->uri->segment(2)=="News"){echo ' CustomActive';}?>">
              <i class="fa fa-newspaper nav-icon"></i>
              <p>News</p>
            </a>
          </li>
          

          <li class="nav-item">
            <a href="<?=base_url('Admin/Notice')?>" class="nav-link <?php if($this->uri->segment(2)=="Notice"){echo ' CustomActive';}?>">
              <i class="fa fa-sticky-note nav-icon"></i>
              <p>Notice</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?=base_url('Admin/Gallery')?>" class="nav-link <?php if($this->uri->segment(2)=="Gallery" OR $this->uri->segment(2)=="galleryInner"){echo ' CustomActive';}?>">
              <i class="fa fa-images nav-icon"></i>
              <p>Gallery</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?=base_url('Admin/Slider')?>" class="nav-link <?php if($this->uri->segment(2)=="Slider"){echo ' CustomActive';}?>">
              <i class="fa fa-film nav-icon"></i>
              <p>Slider Images</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?=base_url('Admin/Note')?>" class="nav-link <?php if($this->uri->segment(2)=="Note"){echo ' CustomActive';}?>">
              <i class="fa fa-pen nav-icon"></i>
              <p>Director's Note</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?=base_url('Admin/Careers')?>" class="nav-link <?php if($this->uri->segment(2)=="Careers"){echo ' CustomActive';}?>">
              <i class="fa fa-cube nav-icon"></i>
              <p>Careers</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?=base_url('Admin/Applications')?>" class="nav-link <?php if($this->uri->segment(2)=="Applications"){echo ' CustomActive';}?>">
              <i class="fa fa-briefcase nav-icon"></i>
              <p>Job applications</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?=base_url('Admin/webProfile')?>" class="nav-link <?php if($this->uri->segment(2)=="webProfile"){echo ' CustomActive';}?>">
              <i class="fa fa-globe nav-icon"></i>
              <p>GIS web profile</p>
            </a>
          </li>

          <li class="nav-item mt-4 mb-5" id="website-link">
            <a href="<?=base_url()?>" target=_blank class="nav-link">
              <i class="fas fa-external-link-alt nav-icon"></i>
              <p>Open Website</p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>