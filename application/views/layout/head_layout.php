<?php 
// site dari konfigurasi
$site_info=$this->konfigurasi_model->listing();
 ?>
<!DOCTYPE html> 
<!--
    Free  Template by Mohamed Sobhy
    https://www.facebook.com/Mido.HHH
-->
<html lang="en">
<head>
    <title><?php echo $site_info->Nama_Web ?></title>
    <link rel="shortcut icon" href="<?php echo base_url('assets/upload/image/thumbs'.$site_info->Icon) ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <script src="<?php echo base_url() ?>assets/king/js/jquery.js"></script> 
    <script src="<?php echo base_url() ?>assets/king/js/jquery.glide.js"></script>
    
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/king/css/style.css">
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/king/css/animate.css">
    <script type="text/javascript" src="<?php echo base_url() ?>assets/king/js/MyJQ.js"></script>
    <script src="<?php echo base_url() ?>assets/king/js/jquery.localScroll.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/king/js/jquery.scrollTo.min.js" type="text/javascript"></script> 
    <script src="<?php echo base_url() ?>assets/king/js/wow.min.js" type="text/javascript"></script> 

<!-- scroll function -->
<script type="text/javascript">
$(document).ready(function() {
   $('#navigations').localScroll({duration:800});
});
</script>


<script src="<?php echo base_url() ?>assets/king/js/wow.min.js"></script>
<script>
new WOW().init();
</script>


</head>
<body>

