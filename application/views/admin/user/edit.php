<?php  
// Error warning
echo validation_errors('<div class="alert alert-warning">','</div>');
// Attribut
$attribut='class="alert alert-info"';
// form open
echo form_open(base_url('admin/user/edit/'.$user->IdUser),$attribut);
?>
<div class="row">
<div class="col-md-6">
	<div class="form-group">
		<label>Nama user</label>
		<input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" value="<?php echo $user->Nama ?>" required>
	</div>
	<div class="form-group">
		<label>Email user</label>
		<input type="text" name="email" class="form-control" placeholder="Masukkan Email" value="<?php echo $user->Email ?>" required>
	</div>
	<div class="form-group">
		<label>Level Hak Akses User</label>
		<select type="text" name="akses_level" class="form-control">
			<option value="Admin">Admin</option>
			<option value="User" <?php if($user->Hak_Akses=="Penulis"){ echo "selected";} ?>>User</option>
		</select>
	</div>
</div>
<div class="col-md-6">
	<div class="form-group">
		<label>Username</label>
		<input type="text" name="username" class="form-control" placeholder="Masukkan Username" value="<?php echo $user->Username ?>" readonly>
	</div>
	<div class="form-group">
		<label>Password</label>
		<input type="password" name="password" class="form-control" placeholder="Masukkan Password" value="<?php echo set_value('password') ?>" required>
	</div>
	<div class="form-group">
		<input type="submit" name="submit" class="btn btn-success btn-lg" value="Simpan" >
		<input type="reset" name="reset" class="btn btn-secondary btn-lg" value="Reset" >

	</div>
</div>
</div>

<?php 

// form close
echo form_close();
 ?>