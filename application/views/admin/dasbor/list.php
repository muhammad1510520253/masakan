<!-- Info boxes -->
     <?php 
// ambil data uer berdasarkan data loginnya
$id_user=$this->session->userdata('IdUser');
$user_aktif=$this->user_model->detail($id_user);
 ?>
      <?php if($this->session->userdata('Hak_Akses')=="Admin") {?>
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-newspaper-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Artikel</span>

              <span class="info-box-number"><?php echo count($hitung) ?> <small> artikel</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
     

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">User</span>
              <span class="info-box-number"><?php echo count($user)  ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">kategori</span>
              <span class="info-box-number"><?php echo count($kategori)  ?></span>
            </div>
            <!-- /.info-box-content -->

          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
         <?php } ?>
    <?php 
// notifikasi
  if ($this->session->flashdata('sukses')) {
    echo '<div class="alert alert-success">';
    echo $this->session->flashdata('sukses');
    echo '</div>';

  }
   ?>
   <p>
     <a href="<?php echo base_url('admin/artikel/tambah') ?>" title="Tambah Artikel Baru" class="btn btn-success">
       <i class="fa fa-plus"></i>Tambah Baru
     </a>
   </p>

  <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                 
                  <th>Gambar</th>
                  <th>Judul</th>
                  <th>Kategori</th>
                  <th>Status</th>
                  
                  <th>Penulis</th>
                  <th>Tanggal</th>
                  <th width="15%">Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($artikel as $artikel) { ?>
                   <?php if ($this->session->userdata('Hak_Akses')=="Penulis" ){ ?>
                   <?php if ($artikel->IdUser==$id_user): ?>
                      <tr>
                 
                  <td><img src="<?php echo base_url('assets/upload/image/thumbs/'.$artikel->Gambar) ?>" width="60" class="img img-thumbnail"></td>
                 
                  <td><?php echo $artikel->Judul_Artikel ?>
                  </td>
                  <td><?php echo $artikel->Nama_Kategori ?>
                  </td>
                  <td> <?php echo $artikel->Status_Artikel ?> </td>
                  <td> <?php echo $artikel->Nama ?></td>
                  <td><?php echo $artikel->Tanggal_Post ?></td>
                  <td>
                 <?php $tulisan=''; ?> 
                 <?php if ($this->session->userdata('Hak_Akses')=="Penulis"){ ?>
                            <?php $tulisan='edit' ?>
                 <?php }else{ ?>
  <?php $tulisan='lihat' ?>
                 <?php } ?>
                    <a href="<?php echo base_url('admin/artikel/edit/'.$artikel->Id_Artikel) ?>" title="Edit artikel" class="btn btn-warning btn-xs">
                      <i class="fa fa-edit"><?php echo $tulisan;?></i> </a> 
                     
                  </td>
                </tr>
                   <?php endif ?>
               
                  <?php }else{ ?>
                      <?php if ($artikel->Status_Artikel =="Publish" || $artikel->IdUser==$id_user) : ?>
                     <tr>
                  
                  <td><img src="<?php echo base_url('assets/upload/image/thumbs/'.$artikel->Gambar) ?>" width="60" class="img img-thumbnail"></td>
                 
                  <td><?php echo $artikel->Judul_Artikel ?>
                  </td>
                  <td><?php echo $artikel->Nama_Kategori ?>
                  </td>
                  <td> <?php echo $artikel->Status_Artikel ?> </td>
                  <td> <?php echo $artikel->Nama ?></td>
                  <td><?php echo $artikel->Tanggal_Post ?></td>
                  <td>
                 <?php $tulisan=''; ?> 
                 <?php if ($this->session->userdata('Hak_Akses')=="Penulis"){ ?>
                            <?php $tulisan='edit' ?>
                 <?php }else{ ?>
  <?php $tulisan='lihat' ?>
                 <?php } ?>
                    <a href="<?php echo base_url('admin/artikel/edit/'.$artikel->Id_Artikel) ?>" title="Edit artikel" class="btn btn-warning btn-xs">
                      <i class="fa fa-edit"><?php echo $tulisan;?></i> </a> 
                      
                  </td>
                </tr>
                <?php endif ?>
                  <?php } ?>
                <?php } ?>
</tbody>
</table>
