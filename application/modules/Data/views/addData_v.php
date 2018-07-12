    <?php foreach($dataa as $data) { ?>
Nomor KK : <?php echo $data->no_kk; ?><br>
Alamat : <?php echo $data->alamat; ?><br>

          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#penduduk" data-toggle="tab">Penduduk</a></li>
              <li><a href="#ekonomi" data-toggle="tab">Ekonomi</a></li>
              <li><a href="#aset" data-toggle="tab">Aset</a></li>
              <li><a href="#konsumsi" data-toggle="tab">Pola Konsumsi</a></li>
              <li><a href="#rumah" data-toggle="tab">Kondisi Rumah</a></li>
              <li><a href="#kerawanan" data-toggle="tab">Kerawanan Sosial</a></li>
              <li><a href="#layanan" data-toggle="tab">Layanan Kesehatan</a></li>
              <li><a href="#bantuan" data-toggle="tab">Bantuan Sosial</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="penduduk">
              	<form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>Data/add_pdd" enctype="multipart/form-data">
                  <input type="hidden" name="id_pdd"/>
                  <input type="hidden" name="id_kk" value="<?php echo $data->id_kk; ?>"/>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">NIK</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nik" placeholder="NIK">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" placeholder="Nama">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tempat, Tanggal Lahir</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir">
                    </div>
                    <div class="col-sm-5">
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name="tgl_lahir" class="form-control pull-right" data-date-format="dd-mm-yyyy" id="datepicker">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jenis Kelamin</label> 
                    <div class="col-sm-3"><input type="radio" name="jk" class="minimal" value="L"> Laki-laki</div>
                    <div class="col-sm-3"><input type="radio" name="jk" class="minimal" value="P"> Perempuan</div>
                    
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Agama</label>
                    <div class="col-sm-10">
                      <select name="agama" class="form-control select2" style="width: 100%;">
                          <option selected="selected">-</option>
                          <option value="Islam">Islam</option>
                          <option value="Kristen">Kristen Protestan</option>
                          <option value="Katolik">Katolik</option>
                          <option value="Hindu">Hindu</option>
                          <option value="Buddha">Buddha</option>                          
                          <option value="Kong Hu Cu">Kong Hu Cu</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Status Dalam Keluarga</label>
                    <div class="col-sm-10">
                      <select name="status_keluarga" class="form-control select2" style="width: 100%;">
                          <option selected="selected">-</option>
                          <option value="Kepala">Kepala Keluarga</option>
                          <option value="Suami">Suami</option>
                          <option value="Isteri">Isteri</option>
                          <option value="Anak">Anak</option>
                          <option value="Menantu">Menantu</option>
                          <option value="Cucu">Cucu</option>
                          <option value="Orang Tua">Orang Tua</option>
                          <option value="Mertua">Mertua</option>
                          <option value="Famili Lain">Famili Lain</option>
                          <option value="Pembantu">Pembantu</option>
                          <option value="Lainnya">Lainnya</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Status Pernikahan</label>
                    <div class="col-sm-3"><input type="radio" name="status" value="Menikah" class="minimal"> Menikah</div>
                    <div class="col-sm-3"><input type="radio" name="status" value="Cerai" class="minimal"> Cerai</div>
                    <div class="col-sm-3"><input type="radio" name="status" value="Belum" class="minimal"> Belum Menikah</div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Pendidikan Terakhir</label>
                    <div class="col-sm-10">
                      <select name="pendidikan" class="form-control select2" style="width: 100%;">
                          <option selected="selected">-</option>
                          <option value="Tidak">Tidak Sekolah</option>
                          <option value="SD">SD</option>
                          <option value="SMP">SMP</option>
                          <option value="SMU">SMU</option>
                          <option value="Diploma dan Sarjana">Diploma dan Sarjana</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Pekerjaan</label>
                    <div class="col-sm-10">
                      <select name="pekerjaan" class="form-control select2" style="width: 100%;">
                          <option selected="selected">-</option>
                          <option value="Petani">Petani</option>
                          <option value="Buruh Tani">Buruh Tani</option>
                          <option value="Wirausaha">Wirausaha</option>
                          <option value="Peg. Swasta">Pegawai Swasta</option>
                          <option value="PNS/TNI/Polri">PNS/TNI/Polri</option>
                          <option value="Peg. Pemerintah Tidak Tetap">Pegawai Pemerintah Tidak Tetap</option>
                          <option value="Belum Bekerja">Belum Bekerja</option>
                          <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                          <option value="Tidak Bekerja">Tidak bekerja</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Status Pegawai</label>
                    <div class="col-sm-3"><input type="radio" name="status_pegawai"  value="Tetap" class="minimal"> Pegawai Tetap</div>
                    <div class="col-sm-3"><input type="radio" name="status_pegawai"  value="Tidak Tetap" class="minimal"> Pegawai Tidak Tetap</div>
                  </div><div class="form-group">
                    <label class="col-sm-2 control-label">Pendapatan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="pendapatan" placeholder="Rp ">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <div class="pull-right">
                      <button type="submit" class="btn btn-info ">Simpan</button>
                    </div></div>
                  </div> 
             	 </form>
              </div>

              <div class="tab-pane" id="ekonomi">
              	<form class="form-horizontal">
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Pendapatan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="nik" placeholder="Rp ">
                    </div>
                  </div>
                  <label class="control-label">Pengeluaran (Per Bulan)</label>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Makanan dan Minuman pokok</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="nik" placeholder="Rp ">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Makanan Jajanan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="nik" placeholder="Rp ">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Tagihan Air dan Listrik</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="nik" placeholder="Rp ">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Pembelian Pulsa atau Paket Internet</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="nik" placeholder="Rp ">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Pendidikan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="nik" placeholder="Rp ">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Kesehatan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="nik" placeholder="Rp ">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Transportasi/ Pembelian BBM Kendaraan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="nik" placeholder="Rp ">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Iuran Sosial (Arisan, Iuran Lingkungan, Iuran Keagamaan, dll)</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="nik" placeholder="Rp ">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Pembelian Rokok</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="nik" placeholder="Rp ">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Pembelian Baju</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="nik" placeholder="Rp ">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Lain-lain</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="nik" placeholder="Rp ">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-info pull-right">Simpan</button>
                    </div> 
                  </div> 
              	</form>
              </div>

              <div class="tab-pane" id="aset">
              	<form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>Data/add_aset" enctype="multipart/form-data">
                  <input type="hidden" name="id_aset"/>
                  <input type="hidden" name="id_kk" value="<?php echo $data->id_kk; ?>"/>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jenis</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="jenis" placeholder="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jumlah/ Luas</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="jumlah" placeholder="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Harga Jual</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="harga_jual" placeholder="">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <div class="pull-right">
                      <button type="submit" class="btn btn-info ">Simpan</button>
                    </div></div>
                  </div> 
              	</form>
              </div>

              <div class="tab-pane" id="konsumsi">
              	<form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>Data/add_konsumsi" enctype="multipart/form-data">
                  <input type="hidden" name="id_konsumsi"/>
                  <input type="hidden" name="id_kk" value="<?php echo $data->id_kk; ?>"/>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Makanan pokok (Per Hari)</label>
                    <div class="col-sm-9">
                      <select name="pokok" class="form-control select2" style="width: 100%;">
                          <option selected="selected">-</option>
                          <option value="1">1x</option>
                          <option value="2">2x</option>
                          <option value="3">3x</option>
                          <option value="4">>3x</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Protein Nabati (Per Hari)</label>
                    <div class="col-sm-2"><input type="radio" name="nabati" value="1" class="minimal"> 1x</div>
                    <div class="col-sm-2"><input type="radio" name="nabati" value="2" class="minimal"> 2x</div>
                    <div class="col-sm-2"><input type="radio" name="nabati" value="3" class="minimal"> 3x</div>
                    <div class="col-sm-2"><input type="radio" name="nabati" value="4" class="minimal"> >3x</div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Protein Hewani (Per Hari)</label>
                    <div class="col-sm-2"><input type="radio" name="hewani" value="1" class="minimal"> 1x</div>
                    <div class="col-sm-2"><input type="radio" name="hewani" value="2" class="minimal"> 2x</div>
                    <div class="col-sm-2"><input type="radio" name="hewani" value="3" class="minimal"> 3x</div>
                    <div class="col-sm-2"><input type="radio" name="hewani" value="4" class="minimal"> >3x</div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Sayur dan Buah (Per Hari)</label>
                    <div class="col-sm-2"><input type="radio" name="sayur" value="1" class="minimal"> 1x</div>
                    <div class="col-sm-2"><input type="radio" name="sayur" value="2" class="minimal"> 2x</div>
                    <div class="col-sm-2"><input type="radio" name="sayur" value="3" class="minimal"> 3x</div>
                    <div class="col-sm-2"><input type="radio" name="sayur" value="4" class="minimal"> >3x</div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Makanan ringan (Per Hari)</label>
                    <div class="col-sm-2"><input type="radio" name="jajan" value="1" class="minimal"> 1x</div>
                    <div class="col-sm-2"><input type="radio" name="jajan" value="2" class="minimal"> 2x</div>
                    <div class="col-sm-2"><input type="radio" name="jajan" value="3" class="minimal"> 3x</div>
                    <div class="col-sm-2"><input type="radio" name="jajan" value="4" class="minimal"> >3x</div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Pembelian Baju (Per Bulan)</label>
                    <div class="col-sm-2"><input type="radio" name="baju" value="1" class="minimal"> 1x</div>
                    <div class="col-sm-2"><input type="radio" name="baju" value="2" class="minimal"> 2x</div>
                    <div class="col-sm-2"><input type="radio" name="baju" value="3" class="minimal"> 3x</div>
                    <div class="col-sm-2"><input type="radio" name="baju" value="4" class="minimal"> >3x</div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Pembelian Rokok (Per Bulan)</label>
                    <div class="col-sm-2"><input type="radio" name="rokok" value="1" class="minimal"> 1x</div>
                    <div class="col-sm-2"><input type="radio" name="rokok" value="2" class="minimal"> 2x</div>
                    <div class="col-sm-2"><input type="radio" name="rokok" value="3" class="minimal"> 3x</div>
                    <div class="col-sm-2"><input type="radio" name="rokok" value="4" class="minimal"> >3x</div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Pembelian Pulsa (Per Bulan)</label>
                    <div class="col-sm-2"><input type="radio" name="pulsa" value="1" class="minimal"> 1x</div>
                    <div class="col-sm-2"><input type="radio" name="pulsa" value="2" class="minimal"> 2x</div>
                    <div class="col-sm-2"><input type="radio" name="pulsa" value="3" class="minimal"> 3x</div>
                    <div class="col-sm-2"><input type="radio" name="pulsa" value="4" class="minimal"> >3x</div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-info pull-right">Simpan</button>
                    </div> 
                  </div> 
                </form>
              </div>

              <div class="tab-pane" id="rumah">
              	<form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>Data/add_rumah" enctype="multipart/form-data">
                  <input type="hidden" name="id_rumah"/>
                  <input type="hidden" name="id_kk" value="<?php echo $data->id_kk; ?>"/>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Status Kepemilikan</label>
                    <div class="col-sm-10">
                      <select class="form-control select2" style="width: 100%;">
                          <option selected="selected">-</option>
                          <option>Milik Sendiri</option>
                          <option>Sewa</option>
                          <option>Milik Orang Tua</option>
                          <option>Lainnya</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Status IMB</label>
                      <div class="col-sm-3"><input type="radio" name="r1" class="minimal"> Ber IMB</div>
                      <div class="col-sm-3"><input type="radio" name="r1" class="minimal"> Belum Ber IMB</div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Luas Bangunan</label>
                    <div class="col-sm-3"><input type="radio" name="r1" class="minimal"> < 26 m2</div>
                    <div class="col-sm-3"><input type="radio" name="r1" class="minimal"> 26 - 45</div>
                    <div class="col-sm-3"><input type="radio" name="r1" class="minimal"> >45</div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Pekarangan Produktif</label>
                    <div class="col-sm-3"><input type="radio" name="r1" class="minimal"> < 600 m2</div>
                    <div class="col-sm-3"><input type="radio" name="r1" class="minimal"> 600 - 1000</div>
                    <div class="col-sm-3"><input type="radio" name="r1" class="minimal"> > 1000</div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Dinding</label>
                    <div class="col-sm-3"><input type="radio" name="r1" class="minimal"> Tembok</div>
                    <div class="col-sm-3"><input type="radio" name="r1" class="minimal"> Papan</div>
                    <div class="col-sm-3"><input type="radio" name="r1" class="minimal"> Gedhek</div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jamban</label>
                    <div class="col-sm-10">
                      <select class="form-control select2" style="width: 100%;">
                          <option selected="selected">-</option>
                          <option>Memiliki jamban dengan septic tank milik sendiri</option>
                          <option>Memiliki jamban dengan septic tank komunal</option>
                          <option>Memiliki jamban tanpa septic tank</option>
                          <option>Tidak memiliki jamban</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Akses Air</label>
                    <div class="col-sm-10">
                      <select class="form-control select2" style="width: 100%;">
                          <option selected="selected">Tidak Memiliki</option>
                          <option>Sumur Gali</option>
                          <option>Sumur Pompa</option>
                          <option>PDAM</option>
                          <option>HIPAM</option>
                          <option>Air Galon</option>
                          <option>Lainnya</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Kondisi Rumah</label>
                    <div class="col-sm-3"><input type="radio" name="r1" class="minimal"> Layak Huni</div>
                    <div class="col-sm-3"><input type="radio" name="r1" class="minimal"> Tidak Layak Huni</div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-info pull-right">Simpan</button>
                    </div> 
                  </div> 
                </form>
              </div>

              <div class="tab-pane" id="kerawanan">

              </div>

              <div class="tab-pane" id="layanan">
              	<form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>Data/add_kesehatan" enctype="multipart/form-data">
                  <input type="hidden" name="id_kes"/>
                  <input type="hidden" name="id_kk" value="<?php echo $data->id_kk; ?>"/>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jika Sakit berobat ke?</label>
                    <div class="col-sm-10">
                      <select class="form-control select2" style="width: 100%;">
                          <option selected="selected">-</option>
                          <option>Rumah Sakit</option>
                          <option>Puskesmas</option>
                          <option>Klinik</option>
                          <option>Dokter Umum</option>
                          <option>Bidan Swasta</option>
                          <option>Perawat Swasta</option>
                          <option>Pengobatan Tradisional</option>
                          <option>Mengobati Diri Sendiri</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jarak ke Rumah Sakit</label>
                    <div class="col-sm-2"><input type="radio" name="r1" class="minimal"> < 5 km</div>
                    <div class="col-sm-2"><input type="radio" name="r1" class="minimal"> 5-7 km</div>
                    <div class="col-sm-2"><input type="radio" name="r1" class="minimal"> 8-10 km</div>
                    <div class="col-sm-2"><input type="radio" name="r1" class="minimal"> > 10 km</div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jarak Ke Puskesmas</label>
                    <div class="col-sm-2"><input type="radio" name="r1" class="minimal"> < 5 km</div>
                    <div class="col-sm-2"><input type="radio" name="r1" class="minimal"> 5-7 km</div>
                    <div class="col-sm-2"><input type="radio" name="r1" class="minimal"> 8-10 km</div>
                    <div class="col-sm-2"><input type="radio" name="r1" class="minimal"> > 10 km</div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-info pull-right">Simpan</button>
                    </div> 
                  </div> 
                </form>
              </div>

              <div class="tab-pane" id="bantuan">
              	<form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>Data/add_bantuan" enctype="multipart/form-data">
                  <input type="hidden" name="id_konsumsi"/>
                  <input type="hidden" name="id_kk" value="<?php echo $data->id_kk; ?>"/>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jaminan Keluarga yang Dimiliki</label>
                    <div class="col-sm-10">
                      <input type="checkbox" class="flat-red"> Kartu Keluarga Sejahtera (KKS) <br>
                      <input type="checkbox" class="flat-red"> Kartu Perlindungan Sosial (KPS)<br>
                      <input type="checkbox" class="flat-red"> Kartu Indonesia Pintar (KIP)<br>
                      <input type="checkbox" class="flat-red"> Bantuan Siswa Miskin (BSM)<br>
                      <input type="checkbox" class="flat-red"> Bantuan Pangan non Tunai<br>
                      <input type="checkbox" class="flat-red"> Bantuan Beras Ketahanan Pangan<br>
                      <input type="checkbox" class="flat-red"> Insentif lansia<br>
                      <input type="checkbox" class="flat-red"> Insentif penyandang cacat berat<br>
                      <input type="checkbox" class="flat-red"> Progran Keluarga Harapan<br>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-info pull-right">Simpan</button>
                    </div> 
                  </div> 
                </form>
              </div>
            </div>                
            <!-- /.tab-content -->
          </div><?php } ?>