<?php 
// site dari konfigurasi
$site_info=$this->konfigurasi_model->listing();
 ?>
 <link rel="shortcut icon" href="<?php echo base_url('assets/upload/image/thumbs'.$site_info->Icon) ?>">
 <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/iCheck/square/blue.css">


 <script src="<?php echo base_url() ?>assets/king/js/jquery.js"></script> 
    <script src="<?php echo base_url() ?>assets/king/js/jquery.glide.js"></script>
    
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/king/css/style.css">
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/king/css/animate.css">
    <script type="text/javascript" src="<?php echo base_url() ?>assets/king/js/MyJQ.js"></script>
    <script src="<?php echo base_url() ?>assets/king/js/jquery.localScroll.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/king/js/jquery.scrollTo.min.js" type="text/javascript"></script> 
    <script src="<?php echo base_url() ?>assets/king/js/wow.min.js" type="text/javascript"></script> 


<div class="bookonlinewrapper">
    <div class="container" id="bookonline">
    <h3 class="wow fadeInUp" data-wow-delay="0.3s"> Menampilkan semua kategori </h3>
    </div>
</div> 

 
  <div id="bestdishes" class="container">
       
        
      <div class="slider">

<div class="clients-area center wow fadeInDown">
            <div class="row">
              <?php foreach($kategori as $kategori) { ?>
            
                <div class="col-md-4 wow fadeInDown">
                <br>
                <div class="card" style="width: 335px; height: 200px; box-shadow:  10px 10px 10px 10px rgba(0,0,0,0.2);transition: 0.5s;  padding: 16px 16px; background: #44444444;" >
 <hr>
 <hr>
  <div class="card-body">
    <h5 class="card-title" style="text-align: center; font-size: 25px; font-style:oblique;"> <strong><?php echo $kategori->Nama_Kategori ?></strong></h5>
   
      <div  style="text-align: center; vertical-align: middle;"> <a href="<?php echo base_url('kategori/artikel_kategori/'.$kategori->Slug_Kategori) ?>" class="btn btn-success"> lihat artikel</a></div>
   
    <hr>
    <hr>
  </div>
</div>
</div>

                   <?php } ?>
           </div>
           </div>
           </div>
</div>

<br>
   
