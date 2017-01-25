<html>
    <head>
        <style>
        body{
            margin:0;
        }
        .clearfix{
            display:block;
            clear:left;
            content:"";
        }  
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
            padding-left: 10px;
            width:10%;
        }
        #doc-kkn .kop #namainstansi{
            text-align:center;
            width:80%;
            padding-top: 10px;
            display-inline:block;
        }
        #namainstansi h2{
            font-size:18px;
            margin-bottom:0;
            margin-top:0;
            line-height:1.5;
            font-weight:700;
        }
        #namainstansi h3{
            font-size:14px;
            margin-bottom:0;
            margin-top:0;
            line-height:1.5;
            font-weight:600;
        }
        #namainstansi #alamatsekretariat{
            margin-bottom:0;
            margin-top:0;
            line-height:1.5;
            font-size:10px;
        }
        hr#tutup-header{
            margin-top:200px;

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
            margin-right:100px;
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
    </head>
    <body>
     <div id="doc-kkn">
            <div class="kkn-header">
                <p id="lembarcetak">Lembar ini dicetak !!</p>
                <p id="nourut">No Urut : <?php echo $kkn['no_urut'] ?></p>
                <div class="kop">
                    <img style="display:inline-block;" id="logo" src="http://www.unipasby.ac.id/css/images//kop-lpp.png" />
                    <div style="display:inline-block;" id="namainstansi">
                        <h2>UNIVERSITAS PGRI ADI BUANA SURABAYA</h2>
                        <h3>LEMBAGA PENELITIAN DAN PENGABDIAN KEPADA MASYARAKAT</h3>
                        <p id="alamatsekretariat">Sekretariat : Jalan Ngangel Dadi III-B/37 Telp./Fax. (031)5053468 Surabaya 60245</p>
                    </div>
                    <div style="clear:both"></div>
                </div>
                <div style="clear:both"></div>
                <hr id="tutupheader">
            </div>
            <div class="kkn-body">
                <h3 class="textformulir">FORMULIR PENDAFTARAN KKN - PPM</h3>
                <h3 class="textformulir">SEMESTER <?php echo date('Y')%2 == 1? 'GASAL':'GENAP' ?> TAHUN <?php echo date('Y'); ?></h3>

                <div id="data-form-kkn">
                    <p><span class="text-title">NIM</span> <span class="titik-dua"> : </span> <span id="value_nim"><?php echo $kkn['nim'] ?></span></p>
                    <p><span class="text-title">Nama</span> <span class="titik-dua"> : </span> <span id="value_nama"><?php echo $kkn['nama'] ?></span></p>
                    <p><span class="text-title">Fakultas / Prodi</span> <span class="titik-dua"> : </span> <span id="value_fakultas"><?php echo $kkn['fakultas'] ?></span> / <span id="value_prodi"><?php echo $kkn['prodi'] ?> <?php echo $kkn['konsentrasi'] == ""? "":" - ".$kkn['konsentrasi']; ?> </span></p>
                    <p><span class="text-title">Angkatan / Kelas</span> <span class="titik-dua"> : </span> <span id="value_angkatan"><?php echo $kkn['angkatan'] ?></span> / <span id="value_kelas"><?php echo $kkn['kelas'] ?></span></p>
                    <p><span class="text-title">Jenis Kelamin</span> <span class="titik-dua"> : </span> <span id="value_jenkel"><?php echo $kkn['jenkel'] ?></span></p>
                    <p><span class="text-title">Agama</span> <span class="titik-dua"> : </span> <span id="value_agama"><?php echo $kkn['agama'] ?></span></p>
                    <p><span class="text-title">Tempat Lahir</span> <span class="titik-dua"> : </span> <span id="value_tempatlahir"><?php echo $kkn['tempat_lahir'] ?></span></p>
                    <p><span class="text-title">Tanggal Lahir</span> <span class="titik-dua"> : </span> <span id="value_tanggallahir"><?php echo $kkn['tanggal_lahir'] ?></span></p>
                    <p><span class="text-title">Alamat Asal</span> <span class="titik-dua"> : </span> <span id="value_alamatasal"><?php echo $kkn['alamat_asal'] ?></span></p>
                    <p><span class="text-title">Alamat Sekarang / Kos</span> <span class="titik-dua"> : </span> <span id="value_alamatsekarang"><?php echo $kkn['alamat_sekarang'] ?></span></p>
                    <p><span class="text-title">No. HP</span> <span class="titik-dua"> : </span> <span id="value_nohp"><?php echo $kkn['nomorhp'] ?></span></p>
                    <p><span class="text-title">Status Kerja</span> <span class="titik-dua"> : </span> <span id="value_statuskerja"><?php echo $kkn['status_kerja'] ?></span></p>
                    <p><span class="text-title">Ukuran Jaket</span> <span class="titik-dua"> : </span> <span id="value_ukuranjaket"><?php echo $kkn['jaket'] ?></span></p>
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
    </body>
</html>