
<div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Form Edit Menu</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
</div>
<div class="modal-body">
    <form method="POST" action="<?= base_url('menu/update/'.$id)?>">
        <!-- Input groups with icon -->
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                        <label class="form-control-label" for="exampleDatepicker">Nama Menu</label>
                          <div class="input-group input-group-merge">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input class="form-control" name="nama_menu" placeholder="Nama Menu" type="text" value="<?=$menu->nama_menu?>">
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
                            <input class="form-control" name="segment" placeholder="Segment" type="text" value="<?=$menu->segment?>" >
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group">
                          <label class="form-control-label" for="exampleDatepicker">Icon Menu </label>
                            <div class="input-group input-group-merge">
                            <select name="input_icon" id="selectIconUpdate" onchange="takeIconUpdate(this)" class="form-control"  required>
                                <option disabled selected> --- Pilih Icon --- </option>
                                <option data-icon="ni ni-shop"          <?= $menu->icon == 'ni ni-shop' ? 'selected' : '' ?>    value="ni ni-shop">shop</option>
                                <option data-icon="ni ni-active-40"     <?= $menu->icon == 'ni ni-active-40' ? 'selected' : '' ?>    value="ni ni-active-40">active</option>
                                <option data-icon="ni ni-air-baloon"    <?= $menu->icon == 'ni ni-air-baloon' ? 'selected' : '' ?>    value="ni ni-air-baloon">air baloon</option>
                                <option data-icon="ni ni-album-2"       <?= $menu->icon == 'ni ni-album-2' ? 'selected' : '' ?>    value="ni ni-album-2">album-2</option>
                                <option data-icon="ni ni-align-center"  <?= $menu->icon == 'ni ni-align-center' ? 'selected' : '' ?>    value="ni ni-align-center">align-center</option>
                                <option data-icon="ni ni-align-left-2"  <?= $menu->icon == 'ni ni-align-left-2' ? 'selected' : '' ?>    value="ni ni-align-left-2">align-left-2</option>
                                <option data-icon="ni ni-ambulance"     <?= $menu->icon == 'ni ni-ambulance' ? 'selected' : '' ?>    value="ni ni-ambulance">ambulance</option>
                                <option data-icon="ni ni-app"           <?= $menu->icon == 'ni ni-app' ? 'selected' : '' ?>    value="ni ni-app">app</option>
                                <option data-icon="ni ni-archive-2"     <?= $menu->icon == 'ni ni-archive-2' ? 'selected' : '' ?>    value="ni ni-archive-2">archive-2</option>
                                <option data-icon="ni ni-atom"          <?= $menu->icon == 'ni ni-atom' ? 'selected' : '' ?>    value="ni ni-atom">atom</option>
                                <option data-icon="ni ni-badge"         <?= $menu->icon == 'ni ni-badge' ? 'selected' : '' ?>    value="ni ni-badge">badge</option>
                                <option data-icon="ni ni-bag-17"        <?= $menu->icon == 'ni ni-bag-17' ? 'selected' : '' ?>    value="ni ni-bag-17">bag-17</option>
                                <option data-icon="ni ni-basket"        <?= $menu->icon == 'ni ni-basket' ? 'selected' : '' ?>    value="ni ni-basket">basket</option>
                                <option data-icon="ni ni-bell-55"       <?= $menu->icon == 'ni ni-bell-55' ? 'selected' : '' ?>    value="ni ni-bell-55">bell-55</option>
                                <option data-icon="ni ni-bold-down"     <?= $menu->icon == 'ni ni-bold-down' ? 'selected' : '' ?>    value="ni ni-bold-down">bold-down</option>
                                <option data-icon="ni ni-bold-left"     <?= $menu->icon == 'ni ni-bold-left' ? 'selected' : '' ?>    value="ni ni-bold-left">home</option>
                                <option data-icon="ni ni-bold-right"    <?= $menu->icon == 'ni ni-bold-right' ? 'selected' : '' ?>    value="ni ni-bold-right">bold-right</option>
                                <option data-icon="ni ni-bold-up"       <?= $menu->icon == 'ni ni-bold-up' ? 'selected' : '' ?>    value="ni ni-bold-up">bold-up</option>
                                <option data-icon="ni ni-bold"          <?= $menu->icon == 'ni ni-bold' ? 'selected' : '' ?>    value="ni ni-bold">bold</option>
                                <option data-icon="ni ni-book-bookmark" <?= $menu->icon == 'ni ni-book-bookmark' ? 'selected' : '' ?>    value="ni ni-book-bookmark">book-bookmark</option>
                                <option data-icon="ni ni-books"         <?= $menu->icon == 'ni ni-books' ? 'selected' : '' ?>    value="ni ni-books">books</option>
                                <option data-icon="ni ni-box-2"         <?= $menu->icon == 'ni ni-box-2' ? 'selected' : '' ?>    value="ni ni-box-2">box-2</option>
                                <option data-icon="ni ni-briefcase-24"  <?= $menu->icon == 'ni ni-briefcase-24' ? 'selected' : '' ?>    value="ni ni-briefcase-24">briefcase-24</option>
                                <option data-icon="ni ni-building"      <?= $menu->icon == 'ni ni-building' ? 'selected' : '' ?>    value="ni ni-building">building</option>
                                <option data-icon="ni ni-bulb-61"       <?= $menu->icon == 'ni ni-bulb-61' ? 'selected' : '' ?>    value="ni ni-bulb-61">bulb-61</option>
                                <option data-icon="ni ni-bullet-list-67"<?= $menu->icon == 'ni ni-bullet-list-67' ? 'selected' : '' ?>    value="ni ni-bullet-list-67">bullet-list-67</option>
                                <option data-icon="ni ni-bus-front-12"  <?= $menu->icon == 'ni ni-bus-front-12' ? 'selected' : '' ?>    value="ni ni-bus-front-12">bus-front-12</option>
                                <option data-icon="ni ni-button-pause"  <?= $menu->icon == 'ni ni-button-pause' ? 'selected' : '' ?>    value="ni ni-button-pause">button-pause</option>
                                <option data-icon="ni ni-button-play"   <?= $menu->icon == 'ni ni-button-play' ? 'selected' : '' ?>    value="ni ni-button-play">button-play</option>
                                <option data-icon="ni ni-button-power"  <?= $menu->icon == 'ni ni-button-power' ? 'selected' : '' ?>    value="ni ni-button-power">button-power</option>
                                <option data-icon="ni ni-calendar-grid-58<?= $menu->icon == 'ni ni-calendar-grid-58' ? 'selected' : '' ?>"  value="ni ni-calendar-grid-58">calendar-grid-58</option>
                                <option data-icon="ni ni-camera-compact"<?= $menu->icon == 'ni ni-camera-compact' ? 'selected' : '' ?>    value="ni ni-camera-compact">camera-compact</option>
                                <option data-icon="ni ni-caps-small"    <?= $menu->icon == 'ni ni-caps-small' ? 'selected' : '' ?>    value="ni ni-caps-small">caps-small</option>
                                <option data-icon="ni ni-cart"          <?= $menu->icon == 'ni ni-cart' ? 'selected' : '' ?>    value="ni ni-cart">cart</option>
                                <option data-icon="ni ni-chart-bar-32"  <?= $menu->icon == 'ni ni-chart-bar-32' ? 'selected' : '' ?>    value="ni ni-chart-bar-32">chart-bar-32</option>
                                <option data-icon="ni ni-chart-pie-35"  <?= $menu->icon == 'ni ni-chart-pie-35' ? 'selected' : '' ?>    value="ni ni-chart-pie-35">chart-pie-35</option>
                                <option data-icon="ni ni-chat-round"    <?= $menu->icon == 'ni ni-chat-round' ? 'selected' : '' ?>    value="ni ni-chat-round">chat-round</option>
                                <option data-icon="ni ni-check-bold"    <?= $menu->icon == 'ni ni-check-bold' ? 'selected' : '' ?>    value="ni ni-check-bold">check-bold</option>
                                <option data-icon="ni ni-circle-08"     <?= $menu->icon == 'ni ni-circle-08' ? 'selected' : '' ?>    value="ni ni-circle-08">circle-08</option>
                                <option data-icon="ni ni-cloud-download-95<?= $menu->icon == 'ni ni-cloud-download-95' ? 'selected' : '' ?>" value="ni ni-cloud-download-95">cloud-download-95</option>
                                <option data-icon="ni ni-cloud-upload-96<?= $menu->icon == 'ni ni-cloud-upload-96' ? 'selected' : '' ?>"   value="ni ni-cloud-upload-96">cloud-upload-96</option>
                                <option data-icon="ni ni-compass-04"    <?= $menu->icon == 'ni ni-compass-04' ? 'selected' : '' ?>    value="ni ni-compass-04">compass-04</option>
                                <option data-icon="ni ni-controller"    <?= $menu->icon == 'ni ni-controller' ? 'selected' : '' ?>    value="ni ni-controller">controller</option>
                                <option data-icon="ni ni-credit-card"   <?= $menu->icon == 'ni ni-credit-card' ? 'selected' : '' ?>    value="ni ni-credit-card">credit-card</option>
                                <option data-icon="ni ni-curved-next"   <?= $menu->icon == 'ni ni-curved-next' ? 'selected' : '' ?>    value="ni ni-curved-next">curved-next</option>
                                <option data-icon="ni ni-delivery-fast" <?= $menu->icon == 'ni ni-delivery-fast' ? 'selected' : '' ?>    value="ni ni-delivery-fast">delivery-fast</option>
                                <option data-icon="ni ni-diamond"       <?= $menu->icon == 'ni ni-diamond' ? 'selected' : '' ?>    value="ni ni-diamond">diamond</option>
                                <option data-icon="ni ni-email-83"      <?= $menu->icon == 'ni ni-email-83' ? 'selected' : '' ?>    value="ni ni-email-83">email-83</option>
                                <option data-icon="ni ni-fat-add"       <?= $menu->icon == 'ni ni-fat-add' ? 'selected' : '' ?>    value="ni ni-fat-add">fat-add</option>
                                <option data-icon="ni ni-fat-delete"    <?= $menu->icon == 'ni ni-fat-delete' ? 'selected' : '' ?>    value="ni ni-fat-delete">fat-delete</option>
                                <option data-icon="ni ni-fat-remove"    <?= $menu->icon == 'ni ni-fat-remove' ? 'selected' : '' ?>    value="ni ni-fat-remove">fat-remove</option>
                                <option data-icon="ni ni-favourite-28"  <?= $menu->icon == 'ni ni-favourite-28' ? 'selected' : '' ?>    value="ni ni-favourite-28">favourite-28</option>
                                <option data-icon="ni ni-folder-17"     <?= $menu->icon == 'ni ni-folder-17' ? 'selected' : '' ?>    value="ni ni-folder-17">folder-17</option>
                                <option data-icon="ni ni-glasses-2"     <?= $menu->icon == 'ni ni-glasses-2' ? 'selected' : '' ?>    value="ni ni-glasses-2">glasses-2</option>
                                <option data-icon="ni ni-hat-3"         <?= $menu->icon == 'ni ni-hat-3' ? 'selected' : '' ?>    value="ni ni-hat-3">hat-3</option>
                                <option data-icon="ni ni-headphones"    <?= $menu->icon == 'ni ni-headphones' ? 'selected' : '' ?>    value="ni ni-headphones">headphones</option>
                                <option data-icon="ni ni-html5"         <?= $menu->icon == 'ni ni-html5' ? 'selected' : '' ?>    value="ni ni-html5">html5</option>
                                <option data-icon="ni ni-istanbul"      <?= $menu->icon == 'ni ni-istanbul' ? 'selected' : '' ?>    value="ni ni-istanbul">istanbul</option>
                                <option data-icon="ni ni-circle-08"     <?= $menu->icon == 'ni ni-circle-08' ? 'selected' : '' ?>    value="ni ni-circle-08">circle-08</option>
                                <option data-icon="ni ni-key-25"        <?= $menu->icon == 'ni ni-key-25' ? 'selected' : '' ?>    value="ni ni-key-25">key-25</option>
                                <option data-icon="ni ni-laptop"        <?= $menu->icon == 'ni ni-laptop' ? 'selected' : '' ?>    value="ni ni-laptop">laptop</option>
                                <option data-icon="ni ni-like-2"        <?= $menu->icon == 'ni ni-like-2' ? 'selected' : '' ?>    value="ni ni-like-2">like-2</option>
                                <option data-icon="ni ni-lock-circle-open"<?= $menu->icon == 'ni ni-lock-circle-open' ? 'selected' : '' ?>  value="ni ni-lock-circle-open">lock-circle-open</option>
                                <option data-icon="ni ni-map-big"       <?= $menu->icon == 'ni ni-map-big' ? 'selected' : '' ?>    value="ni ni-map-big">map-big</option>
                                <option data-icon="ni ni-mobile-button" <?= $menu->icon == 'ni ni-mobile-button' ? 'selected' : '' ?>    value="ni ni-mobile-button">mobile-button</option>
                                <option data-icon="ni ni-money-coins"   <?= $menu->icon == 'ni ni-money-coins' ? 'selected' : '' ?>    value="ni ni-money-coins">money-coins</option>
                                <option data-icon="ni ni-note-03"       <?= $menu->icon == 'ni ni-note-03' ? 'selected' : '' ?>    value="ni ni-note-03">note-03</option>
                                <option data-icon="ni ni-notification-70<?= $menu->icon == 'ni ni-notification-70' ? 'selected' : '' ?>"   value="ni ni-notification-70">notification-70</option>
                                <option data-icon="ni ni-palette"       <?= $menu->icon == 'ni ni-palette' ? 'selected' : '' ?>    value="ni ni-palette">palette</option>
                                <option data-icon="ni ni-paper-diploma" <?= $menu->icon == 'ni ni-paper-diploma' ? 'selected' : '' ?>    value="ni ni-paper-diploma">paper-diploma</option>
                                <option data-icon="ni ni-pin-3"         <?= $menu->icon == 'ni ni-pin-3' ? 'selected' : '' ?>    value="ni ni-pin-3">pin-3</option>
                                <option data-icon="ni ni-planet"        <?= $menu->icon == 'ni ni-planet' ? 'selected' : '' ?>    value="ni ni-planet">planet</option>
                                <option data-icon="ni ni-ruler-pencil"  <?= $menu->icon == 'ni ni-ruler-pencil' ? 'selected' : '' ?>    value="ni ni-ruler-pencil">ruler-pencil</option>
                                <option data-icon="ni ni-satisfied"     <?= $menu->icon == 'ni ni-satisfied' ? 'selected' : '' ?>    value="ni ni-satisfied">satisfied</option>
                                <option data-icon="ni ni-scissors"      <?= $menu->icon == 'ni ni-scissors' ? 'selected' : '' ?>    value="ni ni-scissors">scissors</option>
                                <option data-icon="ni ni-send"          <?= $menu->icon == 'ni ni-send' ? 'selected' : '' ?>    value="ni ni-send">send</option>
                                <option data-icon="ni ni-settings-gear-65" <?= $menu->icon == 'ni ni-settings-gear-65' ? 'selected' : '' ?>  value="ni ni-settings-gear-65">settings-gear-65</option>
                                <option data-icon="ni ni-settings"      <?= $menu->icon == 'ni ni-settings' ? 'selected' : '' ?>    value="ni ni-settings">settings</option>
                                <option data-icon="ni ni-single-02"     <?= $menu->icon == 'ni ni-single-02' ? 'selected' : '' ?>    value="ni ni-single-02">single-02</option>
                                <option data-icon="ni ni-single-copy-04"<?= $menu->icon == 'ni ni-single-copy-04' ? 'selected' : '' ?>    value="ni ni-single-copy-04">single-copy-04</option>
                                <option data-icon="ni ni-sound-wave"    <?= $menu->icon == 'ni ni-sound-wave' ? 'selected' : '' ?>    value="ni ni-sound-wave">sound-wave</option>
                                <option data-icon="ni ni-spaceship"     <?= $menu->icon == 'ni ni-spaceship' ? 'selected' : '' ?>    value="ni ni-spaceship">spaceship</option>
                                <option data-icon="ni ni-square-pin"    <?= $menu->icon == 'ni ni-square-pin' ? 'selected' : '' ?>    value="ni ni-square-pin">square-pin</option>
                                <option data-icon="ni ni-support-16"    <?= $menu->icon == 'ni ni-support-16' ? 'selected' : '' ?>    value="ni ni-support-16">support-16</option>
                                <option data-icon="ni ni-tablet-button" <?= $menu->icon == 'ni ni-tablet-button' ? 'selected' : '' ?>    value="ni ni-tablet-button">tablet-button</option>
                                <option data-icon="ni ni-tag"           <?= $menu->icon == 'ni ni-tag' ? 'selected' : '' ?>    value="ni ni-tag">tag</option>
                                <option data-icon="ni ni-tie-bow"       <?= $menu->icon == 'ni ni-tie-bow' ? 'selected' : '' ?>    value="ni ni-tie-bow">tie-bow</option>
                                <option data-icon="ni ni-time-alarm"    <?= $menu->icon == 'ni ni-time-alarm' ? 'selected' : '' ?>    value="ni ni-time-alarm">time-alarm</option>
                                <option data-icon="ni ni-trophy"        <?= $menu->icon == 'ni ni-trophy' ? 'selected' : '' ?>    value="ni ni-trophy">trophy</option>
                                <option data-icon="ni ni-tv-2"          <?= $menu->icon == 'ni ni-tv-2' ? 'selected' : '' ?>    value="ni ni-tv-2">tv-2</option>
                                <option data-icon="ni ni-umbrella-13"   <?= $menu->icon == 'ni ni-umbrella-13' ? 'selected' : '' ?>    value="ni ni-umbrella-13">umbrella-13</option>
                                <option data-icon="ni ni-user-run"      <?= $menu->icon == 'ni ni-user-run' ? 'selected' : '' ?>    value="ni ni-user-run">user-run</option>
                                <option data-icon="ni ni-vector"        <?= $menu->icon == 'ni ni-vector' ? 'selected' : '' ?>    value="ni ni-vector">vector</option>
                                <option data-icon="ni ni-watch-time"    <?= $menu->icon == 'ni ni-watch-time' ? 'selected' : '' ?>    value="ni ni-watch-time">watch-time</option>
                                <option data-icon="ni ni-world"         <?= $menu->icon == 'ni ni-world' ? 'selected' : '' ?>    value="ni ni-world">world</option>
                                <option data-icon="ni ni-zoom-split-in" <?= $menu->icon == 'ni ni-zoom-split-in' ? 'selected' : '' ?>    value="ni ni-zoom-split-in">zoom-split-in</option>
                                <option data-icon="ni ni-collection"    <?= $menu->icon == 'ni ni-collection' ? 'selected' : '' ?>    value="ni ni-collection">collection</option>
                                <option data-icon="ni ni-image"         <?= $menu->icon == 'ni ni-image' ? 'selected' : '' ?>    value="ni ni-image">image</option>
                                <option data-icon="ni ni-shop"          <?= $menu->icon == 'ni ni-shop' ? 'selected' : '' ?>    value="ni ni-shop">shop</option>
                                <option data-icon="ni ni-ungroup"       <?= $menu->icon == 'ni ni-ungroup' ? 'selected' : '' ?>    value="ni ni-ungroup">ungroup</option>
                                <option data-icon="ni ni-world-2"       <?= $menu->icon == 'ni ni-world-2' ? 'selected' : '' ?>    value="ni ni-world-2">world-2</option>
                                <option data-icon="ni ni-ui-04"         <?= $menu->icon == 'ni ni-ui-04' ? 'selected' : '' ?>    value="ni ni-ui-04">ui-04</option>
                            </select>
                            </div>
                            <input type="hidden" name="icon" id="inputIconUpdate" value='<?=$menu->icon?>'>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group">
                          <label class="form-control-label" for="exampleDatepicker">Icon pic</label>
                            <div id="icon-insert-update" class="pt-2 pb-2 bg-secondary text-center" style="border-radius:2px; font-size:20px">
                              <i class="<?= $menu->icon.' '.$menu->color?> "></i>
                            </div>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group">
                          <label class="form-control-label d-block mb-3">Icon color</label>
                            <div class="btn-group btn-group-toggle btn-group-colors color" onclick="takeColorUpdate(this)" data-toggle="buttons">
                              <label class="btn bg-default  <?= $menu->color == 'text-default' ? 'active' : ''?>" ><input type="radio" name="color" value="text-default" autocomplete="off" <?= $menu->color == 'text-default' ? 'checked' : ''?>></label>
                              <label class="btn bg-info     <?= $menu->color == 'text-info' ? 'active' : ''?>"    ><input type="radio" name="color" value="text-info"    autocomplete="off" <?= $menu->color == 'text-info' ? 'checked' : ''?>  ></label>
                              <label class="btn bg-warning  <?= $menu->color == 'text-warning' ? 'active' : ''?>" ><input type="radio" name="color" value="text-warning" autocomplete="off" <?= $menu->color == 'text-warning' ? 'checked' : ''?>></label>
                              <label class="btn bg-danger   <?= $menu->color == 'text-danger' ? 'active' : ''?>"  ><input type="radio" name="color" value="text-danger"  autocomplete="off" <?= $menu->color == 'text-danger' ? 'checked' : ''?>></label>
                              <label class="btn bg-success  <?= $menu->color == 'text-success' ? 'active' : ''?>" ><input type="radio" name="color" value="text-success" autocomplete="off" <?= $menu->color == 'text-success' ? 'checked' : ''?>></label>
                              <label class="btn bg-primary  <?= $menu->color == 'text-primary' ? 'active' : ''?>" ><input type="radio" name="color" value="text-primary" autocomplete="off" <?= $menu->color == 'text-primary' ? 'checked' : ''?>></label>
                            </div>
                          </div>
                      </div>
                      <div class="col-md-12" id="formTypeMenu">
                        <div class="form-group">
                          <label class="form-control-label" for="exampleDatepicker">Type Menu</label>
                          <div class="input-group input-group-merge">
                            <select name="type" onchange="typeMenuUpdate(this)" class="form-control" required>
                              <option disabled selected> --- Pilih Type Menu --- </option>
                                <option value="parent" <?= $menu->type == 'parent' ? 'selected' : '' ?>>Parent</option>
                                <option value="dropdown" <?= $menu->type == 'dropdown' ? 'selected' : '' ?>>Dropdown</option>
                                <option value="child" <?= $menu->type == 'child' ? 'selected' : '' ?>>Child</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <?php $menu->type == 'child' ? $display = 'block' : $display = 'none'?>
                      <div class="col-md-12" id="formChildUpdate" style="display:<?=$display?>;">
                        <div class="form-group">
                        <label class="form-control-label" for="exampleDatepicker">Child</label>
                          <div class="input-group input-group-merge">
                            <select name="child" class="form-control" required>
                              <option disabled selected> --- Pilih Menu --- </option>
                              <?php foreach($menu_dropdown as $row):?>
                                <option value="<?= $row->id_menu?>" <?= $row->id_menu == $menu->child ? 'selected' : ''?>><?= $row->nama_menu?></option>
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