<div class="header bg-success pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="<?= site_url('dashboard')?>"><i class="fas fa-home"></i> Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page"><?=$title?></li>
                </ol>
              </nav>
            </div> 
            
          </div>
        </div>
      </div>
    </div>
  <div class="container-fluid mt--6">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#tambah"><i class="fas fa-plus"></i> Tambah</button>
            </div>
            <div class="table-responsive py-4">
              <table class="table table-flush" id="datatable-basic">
                <thead class="thead-light">
                  <tr>
                    <th>No</th>
                    <th>Tahun Ajar</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; foreach($tahunajar as $row):?>
                    <tr>
                      <td><?= $no++?></td>
                      <td><?= $row->tahunajar?></td>
                      <td>
                        <?php $row->status == 'aktif' ? $color = 'success' : $color = 'danger' ?>
                        <span class="badge badge-<?= $color?>"><?= $row->status?></span>
                      </td>
                      <td>
                          <button type="button" class="btn btn-sm btn-info ml-1" data-toggle="modal" data-target="#edit" onclick="showTaEdit(<?= $row->id_ta?>)"><i class="ni ni-ruler-pencil"></i>&nbsp; Edit</button>
                          <button type="button" class="btn btn-sm btn-danger ml-1" <?= $row->status == 'aktif' ? 'disabled' : ''  ?> onclick="deleteTa(<?= $row->id_ta?>)"><i class="fas fa-trash"></i>&nbsp; Delete</button>
                      </td>
                    </tr>
                    
                  <?php endforeach;?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  </div>

      <!-- Modal Tambah -->
    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Form Tambah Tahunajar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" action="<?= base_url('tahunajar/create')?>">
                  <!-- Input groups with icon -->
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                      <label class="form-control-label" for="exampleDatepicker">Nama tahunajar</label>
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                          </div>
                          <input class="form-control" name="tahunajar" placeholder="Nama Tahunajar" type="text" required>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                      <label class="form-control-label input-group mt-2" for="exampleDatepicker">Status</label>
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="customRadio1" name="status" value="aktif" class="custom-control-input" required>
                          <label class="custom-control-label" for="customRadio1">Aktif</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">  
                          <input type="radio" id="customRadio2" name="status" value="non-aktif" class="custom-control-input" required>
                          <label class="custom-control-label" for="customRadio2">Tidak Aktif</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-block btn-primary btn-md">Tambah</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    

    <!-- Modal edit -->
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content" id="data_edit">
        </div>
      </div>
    </div>

    
    