 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
     
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <!-- Dasbor -->
        <li><a href="<?php echo base_url('admin/dasbor') ?>"><i class="fa fa-dashboard"></i><span>Dasboard</span></a></li>
        <!-- menu artikel -->
         <li class="treeview">
          <a href="#">
            <i class="fa fa-newspaper-o"></i> <span>Artikel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/artikel') ?>"><i class="fa fa-table"></i> Data Artikel</a></li>
            <li><a href="<?php echo base_url('admin/artikel/tambah') ?>"><i class="fa fa-plus"></i> Tambah Artikel</a></li>
             <?php if($this->session->userdata('Hak_Akses')=="Admin") {?>
             <li><a href="<?php echo base_url('admin/kategori') ?>"><i class="fa fa-tags"></i> Kategori Artikel</a></li>
             <?php } ?>
          </ul>
        </li>
        <!-- Menu User -->
         <?php if($this->session->userdata('Hak_Akses')=="Admin") {?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-lock"></i> <span>User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/user') ?>"><i class="fa fa-table"></i> Data User</a></li>
            <li><a href="<?php echo base_url('admin/user/tambah') ?>"><i class="fa fa-plus"></i> Tambah User</a></li>
          </ul>
        </li>
<?php } ?>
         <!-- Menu konfigurasi -->
         <?php if($this->session->userdata('Hak_Akses')=="Admin") {?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-wrench"></i> <span>Konfigurasi Website</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/konfigurasi') ?>"><i class="fa fa-table"></i> Konfigurasi umum</a></li>
            <li><a href="<?php echo base_url('admin/konfigurasi/logo') ?>"><i class="fa fa-image"></i> Konfigurasi Logo</a></li>
             <li><a href="<?php echo base_url('admin/konfigurasi/icon') ?>"><i class="fa fa-plus"></i> Konfigurasi Icon</a></li>
          </ul>
        </li>
        <?php } ?>
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $title ?>
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin/dasbor') ?>"><i class="fa fa-dashboard"></i> Dasboard</a></li>
        <li><a href="<?php echo base_url('admin/'.$this->uri->segment(2)) ?>"><?php echo ucfirst(str_replace('_','',$this->uri->segment(2))); ?></a></li>
        <li class="active"><?php echo $title ?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
           <!--    <h3 class="box-title"> <?php echo $title ?></h3> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">