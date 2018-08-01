<?php 
// ambil data uer berdasarkan data loginnya
$id_user=$this->session->userdata('IdUser');
$user_aktif=$this->user_model->detail($id_user);
 ?>
<?php  
// Error warning
echo validation_errors('<div class="alert alert-warning">','</div>');
// error upload
if(isset($error_upload)){
	echo '<div class="alert alert-warning">'.$error_upload.'</div';
}
// Attribut
$attribut='class="alert alert-info"';
// form open
echo form_open_multipart(base_url('admin/artikel/edit/'.$artikel->Id_Artikel),$attribut);
?>
<div class="col-md-8">
	<div class="form-group form-group-lg">
		<label>Judul Artikel</label>
		<input type="text" name="judul_artikel" class="form-control" placeholder="Judul Artikel" value="<?php echo $artikel->Judul_Artikel ?>" required 
		
		>
	</div>
</div>
<div class="col-md-4">
	<div class="form-group form-group-lg">
		<label>Status Artikel</label>
		<select name="status_artikel" class="form-control" >
			<option value="Publish">Publish</option>
			<option value="Draft" <?php if($artikel->Status_Artikel=="Draft"){echo "selected";} ?> >Draft</option>
		</select>
	</div>
</div>

<div class="col-md-4">
	<div class="form-group form-group-lg">
		<label>Kategori Artikel</label>
		<select name="id_kategori" class="form-control" >
			<?php foreach ($kategori as $kategori) {?>
			<option value="<?php echo $kategori->Id_Kategori?>" <?php if($artikel->Id_Kategori==$kategori->Id_Kategori){echo "selected";} ?>><?php echo $kategori->Nama_Kategori?></option>
			<?php }; ?>
		</select>
	</div>
</div>
<div class="col-md-4">
	<div class="form-group form-group-lg">
		<label>Upload Gambar</label>
		<input type="file" name="gambar" class="form-control" >
	</div>
</div>
<div class="col-md-12">
	<div class="form-group ">
		<label>Isi Artikel</label>
		<textarea name="isi_artikel" class="form-control area" placeholder="Isi Artikel" ><?php echo $artikel->Isi_Artikel ?> </textarea>
	</div>
	<div class="form-group ">
		<label>Keyword artikel (untuk SEO Google)</label>
		<input name="keywords" class="form-control" placeholder="Keywords Artikel" value="<?php echo $artikel->Keywords ?>"></input>
	</div>
	<div class="form-group text-right">
	  		<button type="submit" name="sabmit" class="btn btn-success btn-lg">
		<i class="fa fa-save"></i>Simpan</button>
		
		<button type="reset" name="reset" class="btn btn-default btn-lg">
		<i class="fa fa-times"></i>Reset</button>
	</div>
</div>
<div class="clearfix"></div>
<?php 
// form close
echo form_close();
 ?>