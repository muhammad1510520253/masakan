 <?php 
// notifikasi
  if ($this->session->flashdata('pesan')) {
    echo '<div class="alert alert-danger">';
    echo $this->session->flashdata('pesan');
    
    
    echo '</div>';

  }
 
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

  <link href="<?php echo base_url('assets/validetta/validetta.css'); ?>" rel="stylesheet" type="text/css" media="screen" >

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


      

  

  

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url()?>assets/plugins/iCheck/icheck.min.js"></script>
<script src="<?php echo base_url('asset/jquery/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url(); ?>asset/bootstrap/js/bootstrap.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>



<div class="bookonlinewrapper">
    <div class="container" id="bookonline">
    <h3 class="wow fadeInUp" data-wow-delay="0.3s"> Daftar Baru</h3>
<form id="form" action="<?php echo base_url('daftar/penulis');  ?>" method="POST">
  
 
<div style="float: left;"><input type="text" class="name wow zoomIn " placeholder="Masukkan nama" name="nama"  data-validetta="required,minLength[8]" data-vd-message-required="Inputan harus di isi"  ></div>
   <div style="float: right;"> <input type="text" class="name wow zoomIn " placeholder="Masukkan E-MAIL" name="email" data-validetta="required,email"   data-vd-message-required="Inputan harus di isi" data-vd-message-email="Email tidak valid"></div>



   <div style="float: left;"> <input type="text" class="name wow zoomIn " placeholder="Masukkan username" name="username"  data-validetta="required,minLength[8]"  data-vd-message-required="Inputan harus di isi" ></div>
    <div style="float: right;">  <input type="password" class="name wow zoomIn" placeholder="Masukkan Password" name="password" data-validetta="required,minLength[8]" data-vd-message-required="Inputan harus di isi"></div>
    
    <div style="float: left;"><input type="text" class="name wow zoomIn" placeholder="Masukkan nomor" name="hp" data-validetta="required,minLength[8],number" data-vd-message-required="Inputan harus di isi" data-vd-message-number="Inputan harus berupa angka"></div>
     <div style="float: right;">  <input type="password" class="name wow zoomIn" placeholder="Konfirmasi Password" name="passwordkonf" data-validetta="required,minLength[8],equalTo[password]" data-vd-message-required="Inputan harus di isi" data-vd-message-notEqual="Konfirmasi Password tidak cocok"></div>
    
    
    
   <input type="submit" name="submit" class="booknow wow fadeInUp" value="Daftar" >

   


   </form>
    
    </div>
</div> 

<script type="text/javascript" src="<?php echo base_url('assets/validetta/validetta.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/validetta/lang/validetta-ID.js'); ?>"></script>


 <script>
    $(document).ready(function() {
      $("#form").validetta({
         bubblePosition: 'bottom',
         realTime : true,
      });
    });
  </script>
