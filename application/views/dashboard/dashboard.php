    <div class="header bg-success pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="<?= site_url()?>"><i class="fas fa-home"></i> Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page"><?=$title?></li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="<?= base_url('dashboard')?>" class="btn btn-sm btn-neutral">Refresh</a>
              <!-- <a href="#" class="btn btn-sm btn-neutral">Filters</a> -->
            </div>
          </div>
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-4 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Siswa</h5>
                      <span class="h2 font-weight-bold mb-0"><?= $siswa?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-hat-3"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Guru</h5>
                      <span class="h2 font-weight-bold mb-0"><?= $guru?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                        <i class="ni ni-hat-3"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Voting</h5>
                      <span class="h2 font-weight-bold mb-0"><?= $voting?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                        <i class="ni ni-folder-17"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid mt--6">
      <div class="row">
                <div class="col-md-6">
                  <div class="card">
                      <div class="card-header">
                        <h5 class="h3 mb-0">Chart</h5>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                        <?php if($this->my_model->count_desc()):?>
                          <canvas id="chart-pie1" class="chart-canvas"></canvas>
                        <?php endif; ?>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                      <div class="card-header">
                          <h5 class="h3 mb-0">Urutan Voting </h5>
                      </div>
                      <div class="card-body">
                      <?php if($this->my_model->count_desc()):?>
                      <?php $no=1; foreach($this->my_model->count_desc() as $row){
                          $total = $siswa + $guru;
                          $persen = round($row->jml/$total * 100,0);
                          ?>
                          <div class="alert alert-success" role="alert">
                            <i class="ni ni-trophy text-yellow"></i> &nbsp;&nbsp;&nbsp;&nbsp; 
                            <strong> <?= $no++?>.</strong> <?= $this->my_model->nama_paslon($row->vote)?> : <?= $persen?>% 
                          </div>
                      <?php }?>
                      <?php endif; ?>
                      <!-- <div class="chart">
                        <canvas id="chart-doughnut" class="chart-canvas"></canvas>
                      </div> -->
                      </div>
                  </div>
                </div>
      </div>
      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            </div>
            <div class="col-lg-6">
            <div class="copyright text-center text-lg-right text-muted">
              &copy; <?= date('Y');?> <a href="https://www.creative-tim.com/" class="font-weight-bold ml-1" target="_blank">DQM</a>
            </div>
          </div>
        </div>
      </footer>
    </div>