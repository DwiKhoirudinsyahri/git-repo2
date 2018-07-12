<?php foreach($dataa as $data) { ?>
  <form class="form-horizontal" method="POST" action="<?php echo $action; ?>" enctype="multipart/form-data">
                  <input type="hidden" name="id_kk" value="<?php echo $data->id_kk; ?>"/>
                  <div class="form-group">
                    <label for="no_kk" class="col-sm-2 control-label">Nomor KK</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="no_kk" value="<?php echo $data->no_kk; ?>" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" name="alamat" value="<?php echo $data->alamat; ?>">
                    </div>
                    <div class="col-sm-1">
                      <input type="text" class="form-control" name="rt" placeholder="RT">
                    </div>
                    <div class="col-sm-1">
                      <input type="text" class="form-control" name="rw"  placeholder="RW">
                    </div>
                    <div class="col-sm-3">
                      <select name="desa" class="form-control select2">
                        <?php echo $desaa; ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal Pendataan</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" name="tgl_pendataan" value="<?php echo $data->tgl_pendataan; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Petugas Pendataan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="petugas" value="<?php echo $data->petugas; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-info pull-right">Simpan</button>
                    </div> 
                  </div>                                   
                </form>
<?php } ?>