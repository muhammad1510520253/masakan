<button type="button" class="btn btn-success btn-xs " data-toggle="modal" data-target="#publish<?php echo $artikel->Id_Artikel ?>">
<i class=" fa fa-share-square-o"></i>Publish
</button>
<div class="modal modal-success fade" id="publish<?php echo $artikel->Id_Artikel ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">publish Artikel</h4>
      </div>
      <div class="modal-body">
        <p>Yakin ingin Publish artikel ini?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
           <button type="button" class="btn btn-outline  pull-right" data-dismiss="modal">Tidak, batalkan
           </button>
        <a href="<?php echo base_url('admin/artikel/publish/'.$artikel->Id_Artikel) ?>" class="btn btn-outline pull-right"><i class="fa fa-trash-o"></i>Ya, Publish artikel Ini</a>

      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->