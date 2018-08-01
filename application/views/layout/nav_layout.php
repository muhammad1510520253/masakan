<!--============ Navigation ============-->

<div class="headerwrapper" >
    <div id="header" class="container">
      
        <nav  >

            <ul id="navigations">

                 <li style="font-size: 15px; float: left">
                     <div>
    

 <?php echo form_open(base_url('artikel/pencarian/'));
     ?>
      <div class="form-group has-feedback">
        <input type="text" name="cari" class="form-control" placeholder="cari artikel disini" style="width: 170px; ">
        <span class=" form-control-feedback"></span>
      </div>
     
   <?php 
   // form close
   echo form_close();
    ?>
    </div>
                 </li>
                <li style="font-size: 15px;"><a href="<?php echo base_url()?>">HOME</a></li>
                <li style="font-size: 15px;"> <a href="<?php echo base_url('about') ?>">ABOUT</a></li>
               
                <li style="font-size: 15px;"><a href="<?php echo base_url('artikel') ?>">ARTIKEL</a></li>
                <li style="font-size: 15px;"><a href="<?php echo base_url('kategori') ?>">KATEGORI</a></li>
                <li style="font-size: 15px;"><a href="<?php echo base_url('daftar') ?>">DAFTAR</a></li>
                <li style="font-size: 15px; "><a href="<?php echo base_url('login') ?>">LOGIN</a></li>
            </ul>
        </nav>
      </div> <!--end of header-->
</div> <!-- end of headerwrapper-->





