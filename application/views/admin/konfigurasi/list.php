<?php  
// notifikasi
  if ($this->session->flashdata('sukses')) {
    echo '<div class="alert alert-success">';
    echo $this->session->flashdata('sukses');
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
echo form_open_multipart(base_url('admin/konfigurasi'),$attribut);
?>

<input type="hidden" name="id_konfigurasi" value="<?php echo $konfigurasi->Id_Konfigurasi ?>">
<input type="hidden" name="id_user" value="<?php echo $this->session->userdata('idUser'); ?>">

<div class="col-md-6">
	<div class="form-group">
		<label>Nama Website</label>
		<input type="text" name="namaweb" class="form-control" placeholder="Nama-web" value="<?php echo $konfigurasi->Nama_Web ?>">
	</div>
	
	<div class="form-group">
		<label>Website</label>
		<input type="text" name="website" class="form-control" placeholder="Website" value="<?php echo $konfigurasi->Website ?>">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="text" name="email" class="form-control" placeholder="Nama-web" value="<?php echo $konfigurasi->Email ?>">
	</div>
	<div class="form-group">
		<label>Telepon</label>
		<input type="text" name="telepon" class="form-control" placeholder="Telepon" value="<?php echo $konfigurasi->Telepon ?>">
	</div>
	<div class="form-group">
		<label>Facebook URL</label>
		<input type="url" name="facebook" class="form-control" placeholder="facebook" value="<?php echo $konfigurasi->Facebook ?>">
	</div>
	<div class="form-group">
		<label>Instagram URL</label>
		<input type="url" name="instagram" class="form-control" placeholder="Instagram" value="<?php echo $konfigurasi->Instagram ?>">
	</div>
</div>
<div class="col-md-6">
	<div class="form-group">
		<label>Alamat</label>
		<input name="alamat" class="form-control" placeholder="Alamat" value="<?php echo $konfigurasi->Alamat ?>"> </input>
	</div>
	<div class="form-group">
		<label>Deskripsi</label>
		<textarea name="Deskripsi" class="form-control area" placeholder="Deskripsi" > <?php echo $konfigurasi->Deskripsi ?></textarea>
	</div>

	
	<div class="form-group">
		<label>Google Map</label>
		<textarea name="map" class="form-control area" placeholder="Google map"><?php echo $konfigurasi->Map ?> </textarea>
	</div>
	<div class="form-group">
		<input type="submit" name="submit" class="btn btn-success btn-lg" value="Simpan Konfigurasi">
	</div>
</div>

<div class="clearfix"></div>
<?php 
echo form_close(); ?>