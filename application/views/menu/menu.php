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
              <table class="table table-flush" id="datatable-buttons">
                <thead class="thead-light">
                  <tr>
                    <th>No</th>
                    <th>Nama Menu</th>
                    <th>Segment</th>
                    <th>Icon</th>
                    <th>Type</th>
                    <th>Child</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; foreach($menu as $row):?>
                    <tr>
                      <td><?= $no++?></td>
                      <td><?= $row->nama_menu?></td>
                      <td><?= $row->segment?></td>
                      <td><i class="<?= $row->icon.' '.$row->color?> "></i></td>
                      <td>
                        <?php if($row->type == 'parent'){
                          $color = 'primary';
                        }elseif($row->type == 'dropdown'){
                          $color = 'warning';
                        }elseif($row->type == 'child'){
                          $color = 'success';
                        } ?>
                        <span class="badge badge-<?= $color?>"><?= $row->type?></span>
                      </td>
                      <td><?= @$this->db->select('nama_menu')->get_where('tb_menu',['id_menu' => $row->child])->row()->nama_menu?></td>
                      <td>
                          <button type="button" class="btn btn-sm btn-info ml-1" data-toggle="modal" data-target="#edit" onclick="showMenuEdit(<?= $row->id_menu?>)"><i class="ni ni-ruler-pencil"></i>&nbsp; Edit</button>
                          <button type="button" class="btn btn-sm btn-danger ml-1" onclick="deleteMenu(<?= $row->id_menu?>)"><i class="fas fa-trash"></i>&nbsp; Delete</button>
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
            <h5 class="modal-title" id="exampleModalLabel">Form Tambah Menu</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <form method="POST" action="<?= base_url('menu/create')?>">
                    <!-- Input groups with icon -->
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                        <label class="form-control-label" for="exampleDatepicker">Nama Menu</label>
                          <div class="input-group input-group-merge">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input class="form-control" name="nama_menu" placeholder="Nama Menu" type="text" required>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                        <label class="form-control-label" for="exampleDatepicker">Segment Menu</label>
                          <div class="input-group input-group-merge">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input class="form-control" name="segment" placeholder="Segment" type="text" required>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group">
                          <label class="form-control-label" for="exampleDatepicker">Icon Menu</label>
                            <div class="input-group input-group-merge">
                            <select name="input_icon" id="selectIcon" onchange="takeIcon(this)" class="form-control" required>
                                <option disabled selected> --- Pilih Icon --- </option>
                                <option data-icon="ni ni-shop"                value="ni ni-shop">shop</option>
                                <option data-icon="ni ni-active-40"           value="ni ni-active-40">active</option>
                                <option data-icon="ni ni-air-baloon"          value="ni ni-air-baloon">air baloon</option>
                                <option data-icon="ni ni-album-2"             value="ni ni-album-2">album-2</option>
                                <option data-icon="ni ni-align-center"        value="ni ni-align-center">align-center</option>
                                <option data-icon="ni ni-align-left-2"        value="ni ni-align-left-2">align-left-2</option>
                                <option data-icon="ni ni-ambulance"           value="ni ni-ambulance">ambulance</option>
                                <option data-icon="ni ni-app"                 value="ni ni-app">app</option>
                                <option data-icon="ni ni-archive-2"           value="ni ni-archive-2">archive-2</option>
                                <option data-icon="ni ni-atom"                value="ni ni-atom">atom</option>
                                <option data-icon="ni ni-badge"               value="ni ni-badge">badge</option>
                                <option data-icon="ni ni-bag-17"              value="ni ni-bag-17">bag-17</option>
                                <option data-icon="ni ni-basket"              value="ni ni-basket">basket</option>
                                <option data-icon="ni ni-bell-55"             value="ni ni-bell-55">bell-55</option>
                                <option data-icon="ni ni-bold-down"           value="ni ni-bold-down">bold-down</option>
                                <option data-icon="ni ni-bold-left"           value="ni ni-bold-left">home</option>
                                <option data-icon="ni ni-bold-right"          value="ni ni-bold-right">bold-right</option>
                                <option data-icon="ni ni-bold-up"             value="ni ni-bold-up">bold-up</option>
                                <option data-icon="ni ni-bold"                value="ni ni-bold">bold</option>
                                <option data-icon="ni ni-book-bookmark"       value="ni ni-book-bookmark">book-bookmark</option>
                                <option data-icon="ni ni-books"               value="ni ni-books">books</option>
                                <option data-icon="ni ni-box-2"               value="ni ni-box-2">box-2</option>
                                <option data-icon="ni ni-briefcase-24"        value="ni ni-briefcase-24">briefcase-24</option>
                                <option data-icon="ni ni-building"            value="ni ni-building">building</option>
                                <option data-icon="ni ni-bulb-61"             value="ni ni-bulb-61">bulb-61</option>
                                <option data-icon="ni ni-bullet-list-67"      value="ni ni-bullet-list-67">bullet-list-67</option>
                                <option data-icon="ni ni-bus-front-12"        value="ni ni-bus-front-12">bus-front-12</option>
                                <option data-icon="ni ni-button-pause"        value="ni ni-button-pause">button-pause</option>
                                <option data-icon="ni ni-button-play"         value="ni ni-button-play">button-play</option>
                                <option data-icon="ni ni-button-power"        value="ni ni-button-power">button-power</option>
                                <option data-icon="ni ni-calendar-grid-58"    value="ni ni-calendar-grid-58">calendar-grid-58</option>
                                <option data-icon="ni ni-camera-compact"      value="ni ni-camera-compact">camera-compact</option>
                                <option data-icon="ni ni-caps-small"          value="ni ni-caps-small">caps-small</option>
                                <option data-icon="ni ni-cart"                value="ni ni-cart">cart</option>
                                <option data-icon="ni ni-chart-bar-32"        value="ni ni-chart-bar-32">chart-bar-32</option>
                                <option data-icon="ni ni-chart-pie-35"        value="ni ni-chart-pie-35">chart-pie-35</option>
                                <option data-icon="ni ni-chat-round"          value="ni ni-chat-round">chat-round</option>
                                <option data-icon="ni ni-check-bold"          value="ni ni-check-bold">check-bold</option>
                                <option data-icon="ni ni-circle-08"           value="ni ni-circle-08">circle-08</option>
                                <option data-icon="ni ni-cloud-download-95"   value="ni ni-cloud-download-95">cloud-download-95</option>
                                <option data-icon="ni ni-cloud-upload-96"     value="ni ni-cloud-upload-96">cloud-upload-96</option>
                                <option data-icon="ni ni-compass-04"          value="ni ni-compass-04">compass-04</option>
                                <option data-icon="ni ni-controller"          value="ni ni-controller">controller</option>
                                <option data-icon="ni ni-credit-card"         value="ni ni-credit-card">credit-card</option>
                                <option data-icon="ni ni-curved-next"         value="ni ni-curved-next">curved-next</option>
                                <option data-icon="ni ni-delivery-fast"       value="ni ni-delivery-fast">delivery-fast</option>
                                <option data-icon="ni ni-diamond"             value="ni ni-diamond">diamond</option>
                                <option data-icon="ni ni-email-83"            value="ni ni-email-83">email-83</option>
                                <option data-icon="ni ni-fat-add"             value="ni ni-fat-add">fat-add</option>
                                <option data-icon="ni ni-fat-delete"          value="ni ni-fat-delete">fat-delete</option>
                                <option data-icon="ni ni-fat-remove"          value="ni ni-fat-remove">fat-remove</option>
                                <option data-icon="ni ni-favourite-28"        value="ni ni-favourite-28">favourite-28</option>
                                <option data-icon="ni ni-folder-17"           value="ni ni-folder-17">folder-17</option>
                                <option data-icon="ni ni-glasses-2"           value="ni ni-glasses-2">glasses-2</option>
                                <option data-icon="ni ni-hat-3"               value="ni ni-hat-3">hat-3</option>
                                <option data-icon="ni ni-headphones"          value="ni ni-headphones">headphones</option>
                                <option data-icon="ni ni-html5"               value="ni ni-html5">html5</option>
                                <option data-icon="ni ni-istanbul"            value="ni ni-istanbul">istanbul</option>
                                <option data-icon="ni ni-circle-08"           value="ni ni-circle-08">circle-08</option>
                                <option data-icon="ni ni-key-25"              value="ni ni-key-25">key-25</option>
                                <option data-icon="ni ni-laptop"              value="ni ni-laptop">laptop</option>
                                <option data-icon="ni ni-like-2"              value="ni ni-like-2">like-2</option>
                                <option data-icon="ni ni-lock-circle-open"    value="ni ni-lock-circle-open">lock-circle-open</option>
                                <option data-icon="ni ni-map-big"             value="ni ni-map-big">map-big</option>
                                <option data-icon="ni ni-mobile-button"       value="ni ni-mobile-button">mobile-button</option>
                                <option data-icon="ni ni-money-coins"         value="ni ni-money-coins">money-coins</option>
                                <option data-icon="ni ni-note-03"             value="ni ni-note-03">note-03</option>
                                <option data-icon="ni ni-notification-70"     value="ni ni-notification-70">notification-70</option>
                                <option data-icon="ni ni-palette"             value="ni ni-palette">palette</option>
                                <option data-icon="ni ni-paper-diploma"       value="ni ni-paper-diploma">paper-diploma</option>
                                <option data-icon="ni ni-pin-3"               value="ni ni-pin-3">pin-3</option>
                                <option data-icon="ni ni-planet"              value="ni ni-planet">planet</option>
                                <option data-icon="ni ni-ruler-pencil"        value="ni ni-ruler-pencil">ruler-pencil</option>
                                <option data-icon="ni ni-satisfied"           value="ni ni-satisfied">satisfied</option>
                                <option data-icon="ni ni-scissors"            value="ni ni-scissors">scissors</option>
                                <option data-icon="ni ni-send"                value="ni ni-send">send</option>
                                <option data-icon="ni ni-settings-gear-65"    value="ni ni-settings-gear-65">settings-gear-65</option>
                                <option data-icon="ni ni-settings"            value="ni ni-settings">settings</option>
                                <option data-icon="ni ni-single-02"           value="ni ni-single-02">single-02</option>
                                <option data-icon="ni ni-single-copy-04"      value="ni ni-single-copy-04">single-copy-04</option>
                                <option data-icon="ni ni-sound-wave"          value="ni ni-sound-wave">sound-wave</option>
                                <option data-icon="ni ni-spaceship"           value="ni ni-spaceship">spaceship</option>
                                <option data-icon="ni ni-square-pin"          value="ni ni-square-pin">square-pin</option>
                                <option data-icon="ni ni-support-16"          value="ni ni-support-16">support-16</option>
                                <option data-icon="ni ni-tablet-button"       value="ni ni-tablet-button">tablet-button</option>
                                <option data-icon="ni ni-tag"                 value="ni ni-tag">tag</option>
                                <option data-icon="ni ni-tie-bow"             value="ni ni-tie-bow">tie-bow</option>
                                <option data-icon="ni ni-time-alarm"          value="ni ni-time-alarm">time-alarm</option>
                                <option data-icon="ni ni-trophy"              value="ni ni-trophy">trophy</option>
                                <option data-icon="ni ni-tv-2"                value="ni ni-tv-2">tv-2</option>
                                <option data-icon="ni ni-umbrella-13"         value="ni ni-umbrella-13">umbrella-13</option>
                                <option data-icon="ni ni-user-run"            value="ni ni-user-run">user-run</option>
                                <option data-icon="ni ni-vector"              value="ni ni-vector">vector</option>
                                <option data-icon="ni ni-watch-time"          value="ni ni-watch-time">watch-time</option>
                                <option data-icon="ni ni-world"               value="ni ni-world">world</option>
                                <option data-icon="ni ni-zoom-split-in"       value="ni ni-zoom-split-in">zoom-split-in</option>
                                <option data-icon="ni ni-collection"          value="ni ni-collection">collection</option>
                                <option data-icon="ni ni-image"               value="ni ni-image">image</option>
                                <option data-icon="ni ni-shop"                value="ni ni-shop">shop</option>
                                <option data-icon="ni ni-ungroup"             value="ni ni-ungroup">ungroup</option>
                                <option data-icon="ni ni-world-2"             value="ni ni-world-2">world-2</option>
                                <option data-icon="ni ni-ui-04"               value="ni ni-ui-04">ui-04</option>
                            </select>
                            </div>
                            <input type="hidden" name="icon" id="inputIcon" value="">
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group">
                          <label class="form-control-label" for="exampleDatepicker">Icon pic</label>
                            <div id="icon-insert" class="pt-2 pb-2 bg-secondary text-center" style="border-radius:2px; font-size:20px"></div>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group">
                          <label class="form-control-label d-block mb-3">Icon color</label>
                            <div class="btn-group btn-group-toggle btn-group-colors event-tag" onclick="takeColor(this)" data-toggle="buttons">
                              <label class="btn bg-default"><input type="radio" name="color" value="text-default" autocomplete="off"></label>
                              <label class="btn bg-info"><input type="radio" name="color" value="text-info" autocomplete="off"></label>
                              <label class="btn bg-warning"><input type="radio" name="color" value="text-warning" autocomplete="off"></label>
                              <label class="btn bg-danger"><input type="radio" name="color" value="text-danger" autocomplete="off"></label>
                              <label class="btn bg-success"><input type="radio" name="color" value="text-success" autocomplete="off"></label>
                              <label class="btn bg-primary"><input type="radio" name="color" value="text-primary" autocomplete="off"></label>
                            </div>
                          </div>
                      </div>
                      <div class="col-md-12" id="formTypeMenu">
                        <div class="form-group">
                          <label class="form-control-label" for="exampleDatepicker">Type Menu</label>
                          <div class="input-group input-group-merge">
                            <select name="type" onchange="typeMenu(this)" class="form-control" required>
                              <option disabled selected> --- Pilih Type Menu --- </option>
                                <option value="parent">Parent</option>
                                <option value="dropdown">Dropdown</option>
                                <option value="child">Child</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12" id="formChild" style="display:none;">
                        <div class="form-group">
                        <label class="form-control-label" for="exampleDatepicker">Child</label>
                          <div class="input-group input-group-merge">
                            <select name="child" class="form-control" required>
                              <option disabled selected> --- Pilih Menu --- </option>
                              <?php foreach($menu as $row):?>
                                <option value="<?= $row->id_menu?>"><?= $row->nama_menu?></option>
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