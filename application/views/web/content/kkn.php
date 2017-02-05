    <!--Page Body-->
      <div id="page-body" class="page-body">
        <section class="page-section">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">

                <div class="daftarkkn">

                    <h3 class="title">
                        <?php echo $this->lang->line('form_kkn') ?>
                    </h3>

                    <hr>
                    
                    <form class="form-horizontal" name="kkn" method="post" action="<?php echo base_url() ?>main/kkn/printpdf">
                        <input type="hidden" name="no_urut" />
                        <input type="hidden" name="fakultas"/>
                        <input type="hidden" name="konsentrasi"/>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">NIM</label>
                            <div class="col-sm-3">
                                <input required name="nim" type="text" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-6">
                                <input required name="nama" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Program Studi</label>
                            <div class="col-md-4">
                                <select class="form-control" name="prodi" required>
                                    <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                                    <option value="Teknik Industri">Teknik Industri</option>
                                    <option value="Teknik Elektro">Teknik Elektro</option>
                                    <option value="Statistika">Statistika</option>
                                    <option value="Perencanaan Wilayan dan Kota">Perencanaan Wilayan dan Kota</option>
                                    <option value="Pendidikan Seni Rupa">Pendidikan Seni Rupa</option>
                                    <option value="Pendidikan Moral Pancasila dan Kewarganegaraan">Pendidikan Moral Pancasila dan Kewarganegaraan</option>
                                    <option value="Pendidikan Matematika">Pendidikan Matematika</option>
                                    <option value="Pendidikan Kesejahteraan Keluarga">Pendidikan Kesejahteraan Keluarga</option>
                                    <option value="Pendidikan Kepelatihan Olahraga">Pendidikan Kepelatihan Olahraga</option>
                                    <option value="Pendidikan Guru Sekolah Dasar">Pendidikan Guru Sekolah Dasar</option>
                                    <option value="Pendidikan Guru - PAUD">Pendidikan Guru - PAUD</option>
                                    <option value="Pendidikan Bahasa Inggris">Pendidikan Bahasa Inggris</option>
                                    <option value="Pendidikan Bahasa dan Sastra Indonesia">Pendidikan Bahasa dan Sastra Indonesia</option>
                                    <option value="Manajemen">Manajemen</option>
                                    <option value="Biologi">Biologi</option>
                                    <option value="Bimbingan dan Konseling">Bimbingan dan Konseling</option>
                                    <option value="Akuntansi">Akuntansi</option>
                                </select>
                            </div>
                            <span style="float:left; display:none;">Konsentrasi </span>
                            <div class="col-md-3" id="konsentrasi" style="display:none;">
                                <select name="view_konsentrasi" class="form-control">
                                    <option value="Tata Boga">Tata Boga</option>
                                    <option value="Tata Busana">Tata Busana</option>						
                                    <option value="Tata Rias">Tata Rias</option>						
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-3 control-label">Angkatan / Kelas</label>
                            <div class="col-sm-3">
                                <input name="angkatan" type="text" class="form-control"  required>
                            </div>
                            <div class="col-sm-1">
                                /
                            </div>
                            <div class="col-sm-3">
                                <input name="kelas" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-md-4">
                                <select name="jenkel" class="form-control"  required>
                                    <option value="Laki-laki">Laki - Laki</option>
                                    <option vaue="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Agama</label>
                            <div class="col-md-4">
                                <select class="form-control" name="agama"  required>
                                  <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>									
                                    <option value="Katholik">Katholik</option>							
                                    <option value="Hindu">Hindu</option>						
                                    <option value="Budha">Budha</option>					
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="col-sm-3 control-label">Tempat / Tanggal Lahir</label>
                            <div class="col-sm-3">
                                <input name="tempat_lahir" type="text" class="form-control" required>
                            </div>
                            <div class="col-sm-1">
                                /
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="tanggal_lahir" required>
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Alamat Asal</label>
                            <div class="col-md-8">
                                Isi sesuai alamat yang tertera pada KTP anda. disertai kota, kodepos, propinsi.
                                <textarea class="form-control" rows="" cols="" name="alamat_asal" required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Alamat Sekarang / Kos</label>
                            <div class="col-md-8">
                                Isi alamat lengkap nama jalan
                                <textarea class="form-control" rows="" cols="" name="alamat_sekarang" required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Kecamatan</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="kec"  required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Kota</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="kota" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Nomor HP</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="nomorhp" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Status</label>
                            <div class="col-md-4">
                                <select class="form-control" name="status_kerja" required>
                                    <option value="Belum Kerja">Belum Berkeja</option>
                                    <option  value="Belum Kerja">Sudah Bekerja</option>
                                </select>
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="col-sm-3 control-label">Ukuran Jaket</label>
                            <div class="col-md-4">
                                <select class="form-control" name="jaket" required>
                                    <option value="S">S | Small</option>
                                    <option value="M">M | Medium</option>
                                    <option value="L">L | Large</option>
                                    <option value="XL">XL | Extra Large</option>
                                    <option value="XXL">XXL | Extra Extra Large</option>
                                    <option value="XXL">XXXL | Extreme Large</option>
                                </select>
                            </div>
                        </div>
                        
                        <hr>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-9">
                            <button type="button" id="previewkkn" class="btn btn-info pull-right">Preview </button>
                            </div>
                        </div>
                    </form>
                </div>

              </div>
            </div>
          </div>
        </section>
      </div>
    

    <!--KKN DOC STYLE-->
    <style>
        #doc-kkn{
            font-family: TimesNewRoman,Times New Roman !important;
        }
        #doc-kkn .kkn-header #lembarcetak{
            font-size:14px;
            font-weight:600;
            text-align:center;
        }
         #doc-kkn .kkn-header #nourut{
            font-size:14px;
            font-weight:600;
            text-align:right;
            margin-bottom:10px;
        }
        #doc-kkn .kop #logo{
            float:left;
            padding-left: 40px;
        }
        #doc-kkn .kop #namainstansi{
            float:left;
            text-align:center;
            width:750px;
            padding-top: 10px;
        }
        #namainstansi h2{
            font-size:20px;
            margin-bottom:0;
            margin-top:0;
            line-height:1.5;
            font-weight:700;
        }
        #namainstansi h3{
            font-size:16px;
            margin-bottom:0;
            margin-top:0;
            line-height:1.5;
            font-weight:600;
        }
        #namainstansi #alamatsekretariat{
            margin-bottom:0;
            margin-top:0;
            line-height:1.5;
        }
        hr#tutup-header{
            margin-top:5px;

        }
        .kkn-body .textformulir{
            text-align:center;
            font-size:16px;
            font-weight:600;
            margin-bottom:0;
            line-height:1.5;
        }
        .kkn-body #data-form-kkn{
            margin-left:20px;
            margin-top:40px;
        }
        .kkn-body #data-form-kkn .text-title{
            float:left;
            width: 250px;
        }
        .kkn-body #data-form-kkn p{
            font-size:14px;
            line-height:1.5;
            margin-bottom:10px;
        }
        p#tanggalcetak{
            text-align: right;
            margin-right:150px;
        }
        .kkn-footer{
            margin-top:40px;
        }
        #ttd .form-ttd{
            width:50%;
            float:left;
            text-align:center;
        }
        #ttd .form-ttd .field-ttd{
            margin-top:100px;
        }
    </style>
    <!--END-->
      <!-- KKN Modal -->
    <div class="modal" id="kknModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Preview</h4>
                </div>
                <div class="modal-body">
                    <div id="doc-kkn">
                        <div class="kkn-header">
                            <p id="lembarcetak">Lembar ini dicetak !!</p>
                            <p id="nourut">No Urut : <span></span></p>
                            <div class="kop">
                                <img id="logo" src="http://www.unipasby.ac.id/css/images//kop-lpp.png" />
                                <div id="namainstansi">
                                    <h2>UNIVERSITAS PGRI ADI BUANA SURABAYA</h2>
                                    <h3>LEMBAGA PENELITIAN DAN PENGABDIAN KEPADA MASYARAKAT</h3>
                                    <p id="alamatsekretariat">Sekretariat : Jalan Ngangel Dadi III-B/37 Telp./Fax. (031)5053468 Surabaya 60245</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                            <hr id="tutupheader">
                        </div>
                        <div class="kkn-body">
                            <h3 class="textformulir">FORMULIR PENDAFTARAN KKN - PPM</h3>
                            <h3 class="textformulir">SEMESTER GASAL TAHUN 2017</h3>

                            <div id="data-form-kkn">
                                <p><span class="text-title">NIM</span> <span class="titik-dua"> : </span> <span id="value_nim"></span></p>
                                <p><span class="text-title">Nama</span> <span class="titik-dua"> : </span> <span id="value_nama"></span></p>
                                <p><span class="text-title">Fakultas / Prodi</span> <span class="titik-dua"> : </span> <span id="value_fakultas"></span> / <span id="value_prodi"></span> <span id="value_konsentrasi"></span> </p>
                                <p><span class="text-title">Angkatan / Kelas</span> <span class="titik-dua"> : </span> <span id="value_angkatan"></span> / <span id="value_kelas"></span></p>
                                <p><span class="text-title">Jenis Kelamin</span> <span class="titik-dua"> : </span> <span id="value_jenkel"></span></p>
                                <p><span class="text-title">Agama</span> <span class="titik-dua"> : </span> <span id="value_agama"></span></p>
                                <p><span class="text-title">Tempat Lahir</span> <span class="titik-dua"> : </span> <span id="value_tempatlahir"></span></p>
                                <p><span class="text-title">Tanggal Lahir</span> <span class="titik-dua"> : </span> <span id="value_tanggallahir"></span></p>
                                <p><span class="text-title">Alamat Asal</span> <span class="titik-dua"> : </span> <span id="value_alamatasal"></span></p>
                                <p><span class="text-title">Alamat Sekarang / Kos</span> <span class="titik-dua"> : </span> <span id="value_alamatsekarang"></span></p>
                                <p><span class="text-title">Kecamatan</span> <span class="titik-dua"> : </span> <span id="value_kecamatan"></span></p>
                                <p><span class="text-title">Kota</span> <span class="titik-dua"> : </span> <span id="value_kota"></span></p>
                                <p><span class="text-title">No. HP</span> <span class="titik-dua"> : </span> <span id="value_nohp"></span></p>
                                <p><span class="text-title">Status Kerja</span> <span class="titik-dua"> : </span> <span id="value_statuskerja"></span></p>
                                <p><span class="text-title">Ukuran Jaket</span> <span class="titik-dua"> : </span> <span id="value_ukuranjaket"></span></p>
                            </div>
                        </div>
                        <div class="kkn-footer">
                            <p id="tanggalcetak">Surabaya, <?php echo tgl_indo(date('Y-m-d')) ?></p>
                            <div id="ttd">
                                <div class="form-ttd">
                                    <p class="jabatan">Petugas</p>
                                    <p class="field-ttd">(................................)</p>

                                </div>
                                <div class="form-ttd">
                                    <p class="jabatan">Mahasiswa</p>
                                    <p class="field-ttd">(................................)</p>
                                </div>
                                <div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default">Ubah</button>
                    <button type="button" class="btn btn-primary" onclick="printKKN()">Submit dan Print PDF</button>
                </div>
            </div>
        </div>
    </div>
</div>

      <!--End Page Body-->