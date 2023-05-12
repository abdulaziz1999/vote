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
                    <th>Menu</th>
                    <th>Level</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; foreach($group as $row):?>
                    <tr>
                      <td><?= $no++?></td>
                      <td><?= $row->nama_menu?></td>
                      <td><?= $row->nama_level?></td>
                      <td>
                          <button type="button" class="btn btn-sm btn-info ml-1" data-toggle="modal" data-target="#edit" onclick="showGroupEdit(<?= $row->id_group?>)"><i class="ni ni-ruler-pencil"></i>&nbsp; Edit</button>
                          <button type="button" class="btn btn-sm btn-danger ml-1" onclick="deleteGroup(<?= $row->id_group?>)"><i class="fas fa-trash"></i>&nbsp; Delete</button>
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
            <h5 class="modal-title" id="exampleModalLabel">Form Level</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <form method="POST" action="<?= base_url('group_akses/create')?>">
                    <!-- Input groups with icon -->
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                        <label class="form-control-label" for="exampleDatepicker">Menu</label>
                          <div class="input-group input-group-merge">
                            <select name="menu_id" class="form-control" required>
                              <option disabled selected> --- Pilih Menu --- </option>
                              <?php foreach($menu as $row):?>
                                <option value="<?= $row->id_menu?>"><?= $row->nama_menu?></option>
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
                                <option value="<?= $row->id_level?>"><?= $row->nama_level?></option>
                              <?php endforeach;?>
                            </select>
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

    
    