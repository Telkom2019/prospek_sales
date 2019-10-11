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
          <a href="<?php echo base_url()?>c_dashboard_user/dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            
          </a>
        </li>
        <!-- <li>
          <a href="<?php echo base_url()?>auth/login">
            <i class="fa fa-database"></i> <span>DATA INDIHOME</span>
            
          </a>
        </li> -->

        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>DATA PROSPEK</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()?>c_movin"><i class="fa fa-circle-o"></i> Movin</a></li>
            <li><a href="<?php echo base_url()?>c_indihome_gamer"><i class="fa fa-circle-o"></i> Indihome Gamer</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> OTT</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Indihome Music</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Video Call</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Indi Storage</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Indi Server</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> PLC</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Wifi Extender</a></li>
            <li><a href="<?php echo base_url()?>c_indihome_smart"><i class="fa fa-circle-o"></i> Indihome Smart</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Indihome Study</a></li>
          </ul>
        </li> -->
        

       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>