<?php 
// site dari konfigurasi
$site_info=$this->konfigurasi_model->listing();

// ambil data uer berdasarkan data loginnya
$id_user=$site_info->IdUser;
$user_aktif=$this->user_model->detail($id_user);

 ?>
  <link href="<?php echo base_url() ?>assets/corlate/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/corlate/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/corlate/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/corlate/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/corlate/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/corlate/css/responsive.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url() ?>assets/leroy/css/bootstrap.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/leroy/css/font-awesome.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/leroy/css/animate.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/leroy/css/theme.css">

<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>

	<section class="aboutus" id="aboutus">
	<div class="container">
		<div class="heading text-center">
			<div class="bookonlinewrapper">
    <div class="container" id="bookonline">
    <h3 class="wow fadeInUp" data-wow-delay="0.3s" style="float: left;"> About <?php  echo $site_info->Nama_Web; ?></h3>
    </div>
    </div>
			<img src="<?php echo base_url('assets/upload/image/thumbs/'.$site_info->Logo) ?>" alt="logo"  width="150" height="150" >
		
			<img class="dividerline" src="img/sep.png" alt="">
			<h3 style="text-align: justify;"><?php echo $site_info->Deskripsi; ?></h3>
		</div>			
		<div class="row">
			<div class="col-md-6">
				<div class="papers text-center">
					
					
					<h4 class="notopmarg nobotmarg" style="font-size: 30px">Kontak</h4>
					<p >
						<div style="color: black; font-size: 20px"><i class="fa fa-envelope"> <?php echo $site_info->Email; ?></i></div>
						<br><div style="color: black; font-size: 20px"><i class="fa fa-phone"><?php echo $site_info->Telepon; ?></i></div><br>
						<div style="color: black; font-size: 20px"><i class="fa fa-globe"><?php echo $site_info->Website; ?></i></div>
						
					</p>
				</div>
			</div>
			<div class="row">
			<div class="col-md-6">
				<div class="papers text-center">
					
					
					<h4 class="notopmarg nobotmarg" style="font-size: 30px">Sosial Media</h4>
					<p>
						<div style="color: black; font-size: 20px">Facebook : <a href="<?php echo $site_info->Facebook; ?>"><?php echo $site_info->Facebook; ?></a></div>
						<br><div style="color: black; font-size: 20px">Instagram : <a href="<?php echo $site_info->Instagram; ?>"><?php echo $site_info->Instagram; ?></a></div>
						
					</p>
				</div>
			</div>

		</div>
	</div>
	</section>

	 <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url() ?>assets/corlate/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url() ?>assets/corlate/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url() ?>assets/corlate/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url() ?>assets/corlate/images/ico/apple-touch-icon-57-precomposed.png">

  <section id="contact-info">
        
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <div class="gmap">
                            <?php echo $konfigurasi->Map ?>
                        </div>
                    </div>
 <div class="col-sm-7 map-content">
                      <p>
               <h1> <strong style=""><?php echo $konfigurasi->Nama_Web ?></strong></h1>
                <br><?php echo nl2br($konfigurasi->Alamat) ?>
              
                
                
                    </div>
                   
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->
	<br>

<!--Javascripts-->
<script src="<?php echo base_url() ?>assets/leroy/js/jquery.js"></script>
<script src="<?php echo base_url() ?>assets/leroy/js/modernizr.js"></script>
<script src="<?php echo base_url() ?>assets/leroy/js/bootstrap.js"></script>
<script src="<?php echo base_url() ?>assets/leroy/js/menustick.js"></script>
<script src="<?php echo base_url() ?>assets/leroy/js/parallax.js"></script>
<script src="<?php echo base_url() ?>assets/leroy/js/easing.js"></script>
<script src="<?php echo base_url() ?>assets/leroy/js/wow.js"></script>
<script src="<?php echo base_url() ?>assets/leroy/js/smoothscroll.js"></script>
<script src="<?php echo base_url() ?>assets/leroy/js/masonry.js"></script>
<script src="<?php echo base_url() ?>assets/leroy/js/imgloaded.js"></script>
<script src="<?php echo base_url() ?>assets/leroy/js/classie.js"></script>
<script src="<?php echo base_url() ?>assets/leroy/js/colorfinder.js"></script>
<script src="<?php echo base_url() ?>assets/leroy/js/gridscroll.js"></script>
<script src="<?php echo base_url() ?>assets/leroy/js/contact.js"></script>
<script src="<?php echo base_url() ?>assets/leroy/js/common.js"></script>

<script type="text/javascript">
jQuery(function($) {
$(document).ready( function() {
  //enabling stickUp on the '.navbar-wrapper' class
	$('.navbar-wrapper').stickUp({
		parts: {
		  0: 'banner',
		  1: 'aboutus',
		  2: 'specialties',
		  3: 'gallery',
		  4: 'feedback',
		  5: 'contact'
		},
		itemClass: 'menuItem',
		itemHover: 'active',
		topMargin: 'auto'
		});
	});
});
</script>

	
