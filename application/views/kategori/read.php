<?php 
// site dari konfigurasi

// ambil data uer berdasarkan data loginnya
$id_user=$artikel->IdUser;
$user=$this->user_model->detail($id_user);

 ?>
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/iCheck/square/blue.css">
      <!-- album -->
      <div class="album py-5 bg-light">
        <div class="container">
        	<div class="row judul">
        		<div class="col-md-12 ">
        <div class="bookonlinewrapper">
    <div class="container" id="bookonline">
 
    <h3 class="wow fadeInUp" data-wow-delay="0.3s"> <?php echo $title; ?></h3>
    </div>
</div> 
        	</div>
        </div>
        <div class="row artikel">
        	 <p>Penulis : <?php echo $user->Nama; ?>  |   tanggal Post : <?php echo date('d M Y',strtotime($artikel->Tanggal_Post)); ?> </p>
         	<div class="col-md-8">
         		<p><img src="<?php echo base_url('assets/upload/image/'.$artikel->Gambar) ?>" alt="<?php echo $artikel->Judul_Artikel ?>" class="img img-thumbnail img-responsive"></p>
         		<?php echo $artikel->Isi_Artikel; ?>
         		
         	</div>
         	<div class="col-md-4 widget archieve">
         		<aside>
         		<h3><u><strong>Artikel Lainnya : </strong></u></h3>
         		<ul class="blog_archieve">
                    <?php foreach ($listing as $listing) {?>

                    <li style="list-style: none;"><a href="<?php echo base_url('kategori/read/'.$listing->Slug_Artikel) ?>"><i class="fa fa-angle-double-right"></i><?php echo $listing->Judul_Artikel ?></a></li>
                    <?php } ?>
         		
         		</ul>
         		</aside>
         	</div>
         	<div class="clearfix"></div>

        </div>
      </div>

  </div>

