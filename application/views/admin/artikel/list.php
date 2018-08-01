<!-- Info boxes -->
     <?php 
// ambil data uer berdasarkan data loginnya
$id_user=$this->session->userdata('IdUser');
$user_aktif=$this->user_model->detail($id_user);
 ?>
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
             <?php if($this->session->userdata('Hak_Akses')=="Admin") {?>
                     
                     <a href="<?php echo base_url('admin/artikel/edit/'.$artikel->Id_Artikel) ?>" title="Edit artikel" class="  btn btn-warning btn-xs">
                      <i class="fa fa-edit">edit</i>
                    </a>
                    <?php 
                      // link delete
                    include ('delete.php');
                     ?>
                    </a>
                     <?php }else { ?>
                          <a href="<?php echo base_url('admin/artikel/edit/'.$artikel->Id_Artikel) ?>" title="Edit artikel" class="  btn btn-warning btn-xs">
                      <i class="fa fa-edit">Edit</i>
                    </a>
                    <?php 
                      // link delete
                    include ('delete.php');
                     ?>
                     <?php } ?>
                      <?php if ($artikel->Status_Artikel =="Draft") : ?>
                      <?php 
                      // link delete
                    include ('publish.php');
                     ?>
                    <?php endif ?>
                      <?php if ($artikel->Konfirmasi==0 && $artikel->Status_Artikel =="Publish") : ?>
                       <?php 
                      // link delete
                    echo " <i>menunggu konfirmasi</i>";
                     ?>
                    <?php endif ?>
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
                    <?php if($this->session->userdata('Hak_Akses')=="Admin") {?>
                    <?php if ($artikel->Konfirmasi==0 && $artikel->Status_Artikel =="Publish") : ?>

                       <?php 
                      // link delete
                    include ('konfirmasi.php'); 
                     ?>
                    <?php endif ?>
                   
                     <a href="<?php echo base_url('admin/artikel/edit/'.$artikel->Id_Artikel) ?>" title="Edit artikel" class="  btn btn-warning btn-xs">
                      <i class="fa fa-edit">edit</i>
                    </a> 
                    <?php 
                      // link delete
                    include ('delete.php');
                     ?>
                    
                     <?php }else { ?>
                          <a href="<?php echo base_url('admin/artikel/edit/'.$artikel->Id_Artikel) ?>" title="Edit artikel" class="  btn btn-warning btn-xs">
                      <i class="fa fa-edit">Edit</i>
                    </a>
                 <?php 
                      // link delete
                    include ('delete.php');
                     ?> 
                     <?php } ?>
                      <?php if($artikel->Status_Artikel=="Draft" && $this->session->userdata('Hak_Akses')=="Penulis" ) {?>
                       <a href="<?php echo base_url('admin/artikel/edit/'.$artikel->Id_Artikel) ?>" title="Edit artikel" class="btn btn-success btn-xs" >
                      <i class="fa fa-edit">Publish</i>
                    </a>
                  <?php } ?>
                  </td>
                </tr>
                 <?php endif ?>
                <?php } ?>
                <?php } ?>

</tbody>
</table>
