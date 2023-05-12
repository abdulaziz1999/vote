
<div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Form Edit Group Akses</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
</div>
<div class="modal-body">
        <form method="POST" action="<?= base_url('group_akses/update/'.$id)?>">
            <!-- Input groups with icon -->
            <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                  <label class="form-control-label" for="exampleDatepicker">Menu</label>
                    <div class="input-group input-group-merge">
                      <select name="menu_id" class="form-control" required>
                        <option disabled selected> --- Pilih Menu --- </option>
                        <?php foreach($menu as $row):?>
                          <option value="<?= $row->id_menu?>" <?= $group->menu_id == $row->id_menu ? 'selected' : ''?>><?= $row->nama_menu?></option>
                        <?php endforeach;?>
                      </select>
                    </div>
                  </div>
                </div> 
                <div class="col-md-12">
                  <div class="form-group">
                  <label class="form-control-label" for="exampleDatepicker">Level</label>
                    <div class="input-group input-group-merge">
                      <select name="level" class="form-control" required>
                        <option disabled selected> --- Pilih Level --- </option>
                        <?php foreach($level as $row):?>
                          <option value="<?= $row->id_level?>" <?= $group->level == $row->id_level ? 'selected' : ''?>><?= $row->nama_level?></option>
                        <?php endforeach;?>
                      </select>
                    </div>
                  </div>
                </div>
            </div>
            <button type="submit" class="btn btn-block btn-primary btn-md">Edit</button>
        </form>
</div>
<div class="modal-footer">
</div>