<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url()?>assets/dist/img/logo-telkom.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info custom-menu">

          <?php if($this->session->userdata('username')) { ?>
          <div><?php echo $this->session->userdata('username') ?></div>
        <?php }else{ ?>
          <li><?php echo anchor('auth/login','Login'); ?></li>
        <?php } ?>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu tree" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?php echo base_url()?>c_dashboard_admin/dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            
          </a>
        </li>
        <!-- <li>
          <a href="<?php echo base_url()?>c_map">
            <i class="fa fa-map-marker"></i> <span>Pemetaan Pelanggan</span>
            
          </a>
        </li> -->
        <!-- <li>
          <a href="<?php echo base_url()?>auth/login">
            <i class="fa fa-database"></i> <span>DATA INDIHOME</span>
            
          </a>
        </li> -->

        <li class="treeview">
          <a href="#">
            <i class="fa fa-map-marker"></i> <span>Pemetaan Pelanggan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()?>c_map/datapelanggan"><i class="fa fa-circle-o"></i> Data Pelanggan</a></li>
            <li><a href="<?php echo base_url()?>c_map/inputpelanggan"><i class="fa fa-circle-o"></i>Input Data Pelanggan</a></li>
          </ul>
        </li>
        

        
        <li class="header">KELOLA DATA</li>
         <!-- <li><a href="<?php echo base_url()?>C_data_sekolah"><i class="fa fa-address-card-o" aria-hidden="true"></i> <span>Data Sekolah</span></a></li> -->
        <li><a href="<?php echo base_url()?>C_data_user"><i class="fa fa-address-card-o" aria-hidden="true"></i> <span>Data User</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>