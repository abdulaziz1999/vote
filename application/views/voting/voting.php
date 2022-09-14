<div class="header bg-success pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i> Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Voting Siswa</li>
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
          <div class="card-header text-center mb-0 mt-0">
              <h2>Form Voting untuk Siswa</h2>
            </div>
            <div class="card-body">
                    <form method="POST" action="<?= base_url('voting/vote_siswa')?>" enctype="multipart/form-data" autocomplete="off">
                          <!-- Input groups with icon -->
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                              <label class="form-control-label" for="exampleDatepicker"> Nama Siswa :</label>
                                <div class="input-group input-group-merge">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                  </div>
                                  <input class="form-control" name="nama_siswa" placeholder="Nama Siswa" type="text" required>
                                </div>
                              </div>
                            </div> 
                            <div class="col-md-6">
                              <div class="form-group">
                              <label class="form-control-label" for="exampleDatepicker"> Kelas :</label>
                                <div class="input-group input-group-merge">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-vector"></i></span>
                                  </div>
                                  <input class="form-control" name="kelas" placeholder="Kelas contoh : VII" type="text" required>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                              <label class="form-control-label" for="exampleDatepicker"> Kandidat :</label>
                              <?php foreach($kandidat as $row):?>
                                <div class="custom-control custom-radio mb-3">
                                  <input type="radio" id="customRadio<?= $row->id_kandidat?>" name="vote" value="<?= $row->id_kandidat?>" class="custom-control-input" required>
                                  <label class="custom-control-label" for="customRadio<?= $row->id_kandidat?>">Ketua : <?= $row->ketua?> & Wakil : <?= $row->wakil?></label>
                                </div>
                              <?php endforeach;?>
                              </div>
                            </div>
                          </div>
                          <button type="submit" class="btn btn-sm btn-success text-right"><i class="ni ni-send"></i> Vote</button>
                    </form>
            </div>
          </div>
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              Data Vote
            <!-- <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#tambah"><i class="fas fa-plus"></i> Tambah</button> -->
            </div>
            <div class="table-responsive py-4">
              <table class="table table-flush" id="datatable-basic">
                <thead class="thead-light">
                  <tr class="text-center">
                    <th>No</th>
                    <th>Siswa</th>
                    <th>Kelas</th>
                    <th>Kandidat</th>
                  </tr>
                </thead>
                <tbody class="text-center" >
                  <?php $no=1; foreach($voting as $row):?>
                    <tr>
                      <td><?= $no++?></td>
                      <td><?= $row->nama?></td>
                      <td><?= $row->kelas?></td>
                      <td><?= $row->vote?></td>
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
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Form Asset Depersiasi</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="card">
                  <div class="card-body">
                    <form method="POST" action="<?= base_url('aset_dep/create')?>" enctype="multipart/form-data">
                          <!-- Input groups with icon -->
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                              <label class="form-control-label" for="exampleDatepicker">Nama Asset</label>
                                <div class="input-group input-group-merge">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                  </div>
                                  <input class="form-control" autocomplete="off" name="nm_aset" placeholder="Nama Aset" type="text">
                                </div>
                              </div>
                            </div> 
                            <div class="col-md-6">
                              <div class="form-group">
                              <label class="form-control-label" for="exampleDatepicker">Spek / Merk</label>
                                <div class="input-group input-group-merge">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                  </div>
                                  <input class="form-control" autocomplete="off" name="spek_merk" placeholder="Spek atau merk" type="text">
                                </div>
                              </div>
                            </div> 
                            <div class="col-md-6">
                              <div class="form-group">
                              <label class="form-control-label" for="exampleDatepicker">Tahun Pembelian</label>
                                <div class="input-group input-group-merge">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                  </div>
                                  <input class="form-control" autocomplete="off" name="thn_pembelian" placeholder="Tahun Pembelian" type="text">
                                </div>
                              </div>
                            </div> 
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label class="form-control-label" for="exampleDatepicker">Harga Beli</label>
                                  <div class="input-group input-group-merge">
                                      <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                      </div>
                                      <input class="form-control" autocomplete="off" name="harga_beli" placeholder="Harga Beli" type="text">
                                  </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label class="form-control-label" for="exampleDatepicker">Usia Depersiasi</label>
                                  <div class="input-group input-group-merge">
                                      <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                      </div>
                                      <input class="form-control" autocomplete="off" name="usia_depersiasi" placeholder="Usia Depersiasi" type="number">
                                  </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label class="form-control-label" for="exampleDatepicker">Nilai Sekarang</label>
                                  <div class="input-group input-group-merge">
                                      <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                      </div>
                                      <input class="form-control" autocomplete="off" name="nilai_now" placeholder="Nilai Sekarang" type="text">
                                  </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label class="form-control-label" for="exampleDatepicker">Lokasi Unit / Pengguna</label>
                                  <div class="input-group input-group-merge">
                                      <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                      </div>
                                      <input class="form-control" autocomplete="off" name="lokasi_unit_user" placeholder="Lokasi Unit / Pengguna" type="number">
                                  </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label class="form-control-label" for="exampleDatepicker">Status Kepemilikan</label>
                                  <div class="input-group input-group-merge">
                                      <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                      </div>
                                      <select name="status_kepemilikan" class="form-control">
                                        <option disabled selected> --- Pilih Status --- </option>
                                        <option value="BOS">BOS</option>
                                        <option value="Yayasan">Yayasan</option>
                                        <option value="Wakaf">Wakaf</option>
                                      </select>
                                  </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label class="form-control-label" for="exampleDatepicker">Upload Kwitansi</label>
                                  <div class="input-group input-group-merge">
                                      <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                      </div>
                                      <input class="form-control" autocomplete="off" name="u_kwitansi" placeholder="Upload Kwitansi" type="file">
                                  </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label class="form-control-label" for="exampleDatepicker">Upload Kepemilikan</label>
                                  <div class="input-group input-group-merge">
                                      <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                      </div>
                                      <input class="form-control" autocomplete="off" name="u_doc_milik" placeholder="Upload Kepemilikan" type="file">
                                  </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label class="form-control-label" for="exampleDatepicker">Upload Pajak</label>
                                  <div class="input-group input-group-merge">
                                      <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-file"></i></span>
                                      </div>
                                      <input class="form-control" autocomplete="off" name="u_pajak" placeholder="Upload Pajak" type="file">
                                  </div>
                              </div>
                            </div> 
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label class="form-control-label" for="exampleDatepicker">Kode Akutansi</label>
                                  <div class="input-group input-group-merge">
                                      <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-list"></i></span>
                                      </div>
                                      <input class="form-control" autocomplete="off" name="kode_akutansi" placeholder="Kode Akutansi" type="text">
                                  </div>
                              </div>
                            </div>
                          </div>
                          <input type="hidden" name="id_seminar" value="<?= $this->uri->segment(3)?>">
                          
                          <button type="submit" class="btn btn-primary btn-md">Simpan</button>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </form>
                  </div>
              </div>
            </div>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div>

    <!-- Modal edit -->
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Form Edit Aset Depersiasi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
                  <div id="data_edit"></div>
          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="upload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Form Upload File</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
                  <div id="data_upload"></div>
          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </div>


    