<?php  
// notifikasi
  if ($this->session->flashdata('sukses')) {
    echo '<div class="alert alert-success">';
    echo $this->session->flashdata('sukses');
    echo '</div>';

  }
  // error upload
  if (isset($error)) {
    echo '<div class="alert alert-success">';
    echo $error;
    echo '</div>';
}
// Error warning
echo validation_errors('<div class="alert alert-warning">','</div>');
// error upload
if(isset($error_upload)){
	echo '<div class="alert alert-warning">'.$error_upload.'</div';
}
// Attribut
$attribut='class="alert alert-info"';
// form open
echo form_open_multipart(base_url('admin/konfigurasi/icon'),$attribut);
?>

<input type="hidden" name="Id_Konfigurasi" value="<?php echo $konfigurasi->Id_Konfigurasi ?>">
<input type="hidden" name="IdUser" value="<?php echo $this->session->userdata('IdUser'); ?>">

<div class="col-md-6">
	<div class="form-group">
		<label>Icon</label>
		<input type="file" name="Icon" class="form-control" required>
	</div>
	<div class="form-group">
		<input type="submit" name="submit" class="btn btn-success btn-lg" value="Simpan Konfigurasi">
	</div>
	
</div>
<div class="col-md-6">
	
	 <?php if($konfigurasi->Icon !=""){ ?>
	<img src="<?php echo base_url('assets/upload/image/'.$konfigurasi->Icon) ?>" alt="<?php echo $konfigurasi->Nama_Web ?>" class="img img-responsive img-thumbnail">
	<?php }else{ ?>
	<p class="alert alert-success text-center">Belum ada icon</p>
	<?php }; ?> 
</div>

<div class="clearfix"></div>
<?php 
echo form_close(); ?>