
<div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Form Edit Kandidat</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
</div>
<div class="modal-body">
    <form method="POST" action="<?= base_url('kandidat/update/'.$id)?>">
        <!-- Input groups with icon -->
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
            <label class="form-control-label" for="exampleDatepicker">Nama Ketua</label>
              <div class="input-group input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input class="form-control" name="ketua" placeholder="Nama Ketua" type="text" value="<?=$kandidat->ketua?>">
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
            <label class="form-control-label" for="exampleDatepicker">Nama Wakil</label>
              <div class="input-group input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input class="form-control" name="wakil" placeholder="Nama Wakil" type="text" value="<?=$kandidat->wakil?>">
              </div>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-block btn-primary btn-md">Edit</button>
    </form>
</div>
<div class="modal-footer">
</div>