
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=base_url('Admin')?>" class="brand-link ml-1">
      <span class="brand-text text-lg"><img src="<?=base_url('assets/images/logo_admin.png')?>" alt="GGEA logo" height="70px" class=""> <strong class="ml-2">Admin </strong>Panel</span>
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

        
          <li class="nav-item has-treeview <?php if($this->uri->segment(2)=="" || $this->uri->segment(2)=="Subscriptions"){echo ' menu-open';}?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-columns"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-down"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ml-3">
              <li class="nav-item">
                <a href="<?=base_url('Admin')?>" class="nav-link <?php if($this->uri->segment(2)==""){echo ' CustomActive';}?>">
                  <i class="fa fa-circle nav-icon"></i>
                  <p>Enquiries</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('Admin/Subscriptions')?>" class="nav-link <?php if($this->uri->segment(2)=="Subscriptions"){echo ' CustomActive';}?>">
                  <i class="fa fa-circle nav-icon"></i>
                  <p>Subscriptions</p>
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
            <a href="<?=base_url('Admin/Gallery')?>" class="nav-link <?php if($this->uri->segment(2)=="Gallery" || $this->uri->segment(2)=="galleryInner"){echo ' CustomActive';}?>">
              <i class="fa fa-images nav-icon"></i>
              <p>Gallery</p>
            </a>
          </li>

          <li class="nav-item has-treeview <?php if($this->uri->segment(2)=="AllAch" || $this->uri->segment(2)=="TopAch"){echo ' menu-open';}?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-star"></i>
              <p>
                Achievers
                <i class="right fas fa-angle-down"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ml-3">
              <li class="nav-item">
                <a href="<?=base_url('Admin/AllAch')?>" class="nav-link <?php if($this->uri->segment(2)=="AllAch"){echo ' CustomActive';}?>">
                  <i class="fa fa-circle nav-icon"></i>
                  <p>All achievers img</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('Admin/TopAch')?>" class="nav-link <?php if($this->uri->segment(2)=="TopAch"){echo ' CustomActive';}?>">
                  <i class="fa fa-circle nav-icon"></i>
                  <p>Top achievers</p>
                </a>
              </li>
            </ul> 
          </li>

          <li class="nav-item">
            <a href="<?=base_url('Admin/Testimonials')?>" class="nav-link <?php if($this->uri->segment(2)=="Testimonials"){echo ' CustomActive';}?>">
              <i class="fa fa-comment-alt nav-icon"></i>
              <p>Testimonials</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?=base_url('Admin/TC')?>" class="nav-link <?php if($this->uri->segment(2)=="TC"){echo ' CustomActive';}?>">
              <i class="fa fa-file nav-icon"></i>
              <p>TC</p>
            </a>
          </li>

          <li class="nav-item has-treeview <?php if($this->uri->segment(2)=="TourVid" || $this->uri->segment(2)=="Magazine"){echo ' menu-open';}?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-upload"></i>
              <p>
                Uploads
                <i class="right fas fa-angle-down"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ml-3">
              <li class="nav-item">
                <a href="<?=base_url('Admin/TourVid')?>" class="nav-link <?php if($this->uri->segment(2)=="TourVid"){echo ' CustomActive';}?>">
                  <i class="fa fa-circle nav-icon"></i>
                  <p>School tour video</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('Admin/Magazine')?>" class="nav-link <?php if($this->uri->segment(2)=="Magazine"){echo ' CustomActive';}?>">
                  <i class="fa fa-circle nav-icon"></i>
                  <p>Spectrum magazine</p>
                </a>
              </li>
            </ul> 
          </li>

          <li class="nav-item">
            <a href="<?=base_url('Admin/webProfile')?>" class="nav-link <?php if($this->uri->segment(2)=="webProfile"){echo ' CustomActive';}?>">
              <i class="fa fa-globe nav-icon"></i>
              <p>GGEA web profile</p>
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