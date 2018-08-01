<?php 
// site dari konfigurasi
$site_info=$this->konfigurasi_model->listing();

// ambil data uer berdasarkan data loginnya
$id_user=$site_info->IdUser;
$user_aktif=$this->user_model->detail($id_user);

 ?>






<!--============ COPYRIGHTS ============-->


<div class="copyrightswrapper">
    <div id="copyrights" class="container">
    
     <p>Copyright <?php echo date('Y',strtotime( $site_info->Tanggal)); ?> <a href="<?php echo $site_info->Facebook; ?>" target="_blank"> <?php echo $site_info->Nama_Web; ?> </a></p>
    
    </div> <!-- end of copyrights-->
</div> <!-- end of website-->
  


<script type="text/javascript">
    $('.sliderwrapper .slider').glide({
    autoplay: 7000,
    animationDuration: 3000,
    arrows: true,
    
    
  
    });
  
</script>
  
    <script type="text/javascript">
    $('.bestdisheswrapper .slider').glide({
    autoplay: false,
    animationDuration: 700,
    arrows: true,
    navigation:false,
    
    
  
    });
  
  
</script>
  
   
   

</body>

</html>