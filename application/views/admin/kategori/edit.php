 <?php 

  // Error warning
echo validation_errors('<div class="alert alert-warning">','</div>');
// atribut
       $atribut='class="form-horizontal"';

       // form open
       echo form_open(base_url('admin/kategori/edit/'.$kategori->Id_Kategori), $atribut);
        ?>
 <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Nama Kategori</label>

    <div class="col-sm-9">
      <input type="text" class="form-control" name="Nama_Kategori" placeholder="Nama Kategori" value="<?php echo $kategori->Nama_Kategori ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Urutan Kategori</label>

    <div class="col-sm-9">
      <input type="number" class="form-control" name="urutan" placeholder="urutan Kategori" value="<?php echo $kategori->Urutan ?>" >
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label"></label>

    <div class="col-sm-9">
      <input type="submit" class="btn btn-success" name="submit" value="Simpan Data" >
    </div>
  </div>

        <?php 
// form close
        echo form_close();
         ?>