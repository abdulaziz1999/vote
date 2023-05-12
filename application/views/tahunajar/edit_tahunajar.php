
<div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Form Edit Tahunajar</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
</div>
<div class="modal-body">
    <form method="POST" action="<?= base_url('tahunajar/update/'.$id)?>">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
            <label class="form-control-label" for="exampleDatepicker">Nama Tahunajar</label>
              <div class="input-group input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input class="form-control" name="tahunajar" placeholder="Nama Level" type="text" value="<?=$tahunajar->tahunajar?>">
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label class="form-control-label input-group mt-2" for="exampleDatepicker">Status</label>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadio3" name="status" value="aktif" <?=$tahunajar->status == 'aktif' ? 'checked' : ''?>  class="custom-control-input">
                <label class="custom-control-label" for="customRadio3">Aktif</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">  
                <input type="radio" id="customRadio4" name="status" value="non-aktif" <?=$tahunajar->status == 'non-aktif' ? 'checked' : ''?> class="custom-control-input">
                <label class="custom-control-label" for="customRadio4">Tidak Aktif</label>
              </div>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-block btn-primary btn-md">Edit</button>
    </form>
</div>
<div class="modal-footer">
</div>