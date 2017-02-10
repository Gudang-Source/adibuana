<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $this->lang->line('title') ?></title>
    <meta name="description" content="Universitas Adibuana Surabaya">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/images/favicon.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="favicon/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/animate.css/animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/fonts/megatron/styles.css">
    <!--Main stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/css/main.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/css/flexslider.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/select2/css/select2.min.css">

    

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/web/css/custom.css">

    <!--Modernizr js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

    <script>
      var base_url = '<?php echo base_url(); ?>';
      var kode_page = "";
      var nama_halaman = "";
    </script>

  </head>
  <body>
    <!--[if lt IE 8]>
    <p class="browsenrupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!--Page Content-->
    <div class="page-content">
      <!-- Page Navigation-->
      <div class="main-nav bgc-blue large-container ">
        <div class="wrapper-box bgc-white">
          <div class="__header bgc-white">
            <div class="container">
              <div class="nav-content-wrapper">
                <div class="pull-left">
                  <div class="nav-info nav-item">
                    <div class="__info select-language dropdown"><a href="#" data-target="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-globe color-secondary"></i><?php echo $this->lang->line('language') ?> : <?php echo $this->session->userdata('lang') == 'indonesia'? 'Indonesia':'English' ?></a>
                      <div class="dropdown-menu menu menu-link-block">
                        <ul>
                          <li><a href="<?php echo base_url(); ?>main/ganti_bahasa/indonesia"><img src="<?php echo base_url() ?>assets/images/flags/f_ina.png" alt="flag" class="flag">Indonesia</a></li>
                          <li><a href="<?php echo base_url(); ?>main/ganti_bahasa/english"><img src="<?php echo base_url() ?>assets/images/flags/f_eng.png" alt="flag" class="flag">English</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="pull-left">
                  <div class="nav-info nav-item">
                    <a href="https://www.facebook.com/adibuana.unipasby.ac.id" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true" style="margin-left: 10px; color: blue;"></i></a>
                    <a href="https://twitter.com/unipasby" target="_blank"><i class="fa fa-twitter" aria-hidden="true" style="color: #22A7F0;"></i></a>
                  </div>
                  
                </div>
                <div class="pull-right">
                  <div class="search-bar">
                    <form method="get" action="<?php echo base_url(); ?>pencarian">
                      <input placeholder="Pencarian" type="text" class="text-search" name="keyword">
                      <button type="submit" class="btn btn-default"><i class="icon icon-magnifying-glass"></i></button>
                    </form>
                  </div>
                  <!-- <ul class="social nav-item">
                    <li><a href="#"><i class="icon icon-facebook-1"></i></a></li>
                    <li><a href="#"><i class="icon icon-twitter-1"></i></a></li>
                  </ul> -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="wrapper-box <?php echo $hal== 'index'? 'bgc-light-blue':'bgc-blue' ?>">
          <div class="__middle">
            <div class="container container-home">
              <div class="nav-content-wrapper">
                <div class="pull-left">
                  <div class="megatron inline logo-light">
                    <div class="cell-vertical-wrapper">
                      <div class="cell-middle"><a href="<?php echo base_url() ?>">
                          <div class="logo"><img src="<?php echo base_url(); ?>assets/images/logo.png">
                          </div>
                          </a></div>
                    </div>
                  </div>
                </div>
                <div class="pull-right">
                  <nav class="os-menu  main-menu text-center">
                    <ul>
                      <li><a href="<?php echo base_url() ?>"><?php echo $this->lang->line('menu_home') ?></a>
                      </li>
                      <li><a href="#"><?php echo $this->lang->line('menu_aboutus') ?></a>
                        <ul class="multi-floor-menu">
                          <li><a href="<?php echo base_url() ?>sekilas/para-pendiri-unipa/8617092013100647"><i class="__icon"></i><?php echo $this->lang->line('about_founder') ?></a>
                          </li>
                          <li><a href="<?php echo base_url() ?>sekilas/sambutan-rektor/319092013084049"><i class="__icon"></i><?php echo $this->lang->line('about_rector') ?></a>
                          </li>
                          <li><a href="<?php echo base_url() ?>sekilas/visi-dan-misi/5325032014161225"><i class="__icon"></i><?php echo $this->lang->line('about_vimi') ?></a>
                          </li>
                          <li><a href="<?php echo base_url() ?>sekilas/sejarah/E_020"><i class="__icon"></i><?php echo $this->lang->line('about_history') ?></a>
                          </li>
                          <li><a ><i class="__icon"></i><?php echo $this->lang->line('about_map') ?></a>
                            <ul>
                              <li><a href="<?php echo base_url() ?>area-fakultas/123"><?php echo $this->lang->line('map1') ?></a>
                              </li>
                              <li><a href="<?php echo base_url() ?>area-fakultas/234"><?php echo $this->lang->line('map2') ?></a>
                              </li>
                            </ul>
                          </li>
                          <li><a href="<?php echo base_url() ?>sekilas/luas-tanah-dan-disain/1119032014110946"><i class="__icon"></i><?php echo $this->lang->line('about_area') ?></a>
                          </li>
                          <li><a href="<?php echo base_url() ?>sekilas/jejaring-unipa-surabaya/719092013094952"><i class="__icon"></i><?php echo $this->lang->line('about_networking') ?></a>
                          </li>
                          <li><a href="<?php echo base_url() ?>sekilas/daftar-hibah-unipa-surabaya/9719092013115310"><i class="__icon"></i><?php echo $this->lang->line('about_grants') ?></a>
                          </li>
                          <li><a href="<?php echo base_url() ?>sekilas/logo-hymne-mars/1415012013092135"><i class="__icon"></i><?php echo $this->lang->line('about_logo') ?></a>
                          </li>
                          <li><a href="<?php echo base_url() ?>sarana"><i class="__icon"></i><?php echo $this->lang->line('about_facility') ?></a>
                          </li>
                          <li><a ><i class="__icon"></i><?php echo $this->lang->line('about_unit') ?></a>
                              <ul>
                                  <li><a href="<?php echo base_url() ?>satuan-kerja/kemahasiswaan/8216012013093528"><?php echo $this->lang->line('unit') ?></a>
                                  </li>
                              </ul>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#"><?php echo $this->lang->line('menu_faculty') ?></a>
                        <ul class="multi-floor-menu">
                          <li><a href="<?php echo base_url() ?>fakultas-dan-program-studi/E_033"><i class="__icon"></i><?php echo $this->lang->line('faculty_program') ?></a>
                          </li>
                          <li><a><i class="__icon"></i><?php echo $this->lang->line('faculty_fkip') ?></a>
                              <ul>
                                  <li><a href="<?php echo base_url() ?>fakultas-detil/fkip/6012012013102735/bimbingan-dan-konseling/6514012013110508"><?php echo $this->lang->line('fkip_bk') ?></a>
                                  </li>
                                  <li><a href="<?php echo base_url() ?>fakultas-detil/fkip/6012012013102735/pendidikan-kesejahteraan-keluarga/4214012013104259"><?php echo $this->lang->line('fkip_pkk') ?></a>
                                  </li>
                                  <li><a href="<?php echo base_url() ?>fakultas-detil/fkip/6012012013102735/pendidikan-moral-pancasila-dan-kewarganegaraan/4614012013103909"><?php echo $this->lang->line('fkip_pmpk') ?></a>
                                  </li>
                                  <li><a href="<?php echo base_url() ?>fakultas-detil/fkip/6012012013102735/pendidikan-bahasa-dan-sastra-indonesia/3312012013112127"><?php echo $this->lang->line('fkip_pbsi') ?></a>
                                  </li>
                                  <li><a href="<?php echo base_url() ?>fakultas-detil/fkip/6012012013102735/pendidikan-matematika/114012013110833"><?php echo $this->lang->line('fkip_mtk') ?></a>
                                  </li>
                                  <li><a href="<?php echo base_url() ?>fakultas-detil/fkip/6012012013102735/pendidikan-bahasa-inggris/4214012013100537"><?php echo $this->lang->line('fkip_pbi') ?></a>
                                  </li>
                                  <li><a href="<?php echo base_url() ?>fakultas-detil/fkip/6012012013102735/pendidikan-kepelatihan-olahraga/5914012013103449"><?php echo $this->lang->line('fkip_pko') ?></a>
                                  </li>
                                  <li><a href="<?php echo base_url() ?>fakultas-detil/fkip/6012012013102735/pendidikan-seni-rupa/1714012013102837"><?php echo $this->lang->line('fkip_psr') ?></a>
                                  </li>
                                  <li><a href="<?php echo base_url() ?>fakultas-detil/fkip/6012012013102735/pendidikan-guru-sekolah-dasar/3914012013104611"><?php echo $this->lang->line('fkip_pgsd') ?></a>
                                  </li>
                                  <li><a href="<?php echo base_url() ?>fakultas-detil/fkip/6012012013102735/pendidikan-guru-paud/8814012013105731"><?php echo $this->lang->line('fkip_pgpaud') ?></a>
                                  </li>
                              </ul>
                          </li>
                          <li><a ><i class="__icon"></i><?php echo $this->lang->line('faculty_economy') ?></a>
                              <ul>
                                  <li><a href="<?php echo base_url() ?>fakultas-detil/ekonomi/6912012013115003/akuntansi/5914012013092358"><?php echo $this->lang->line('economy_eko') ?></a>
                                  </li>
                                  <li><a href="<?php echo base_url() ?>fakultas-detil/ekonomi/6912012013115003/manajemen/6214012013093635"><?php echo $this->lang->line('economy_man') ?></a>
                                  </li>
                              </ul>
                          </li>
                          <li><a><i class="__icon"></i><?php echo $this->lang->line('faculty_fmipa') ?></a>
                              <ul>
                                  <li><a href="<?php echo base_url() ?>fakultas-detil/fmipa/8320122012121610/biologi/4011012013143843"><?php echo $this->lang->line('fmipa_bio') ?></a>
                                  </li>
                                  <li><a href="<?php echo base_url() ?>fakultas-detil/fmipa/8320122012121610/statistika/2011012013150052"><?php echo $this->lang->line('fmipa_statis') ?></a>
                                  </li>
                              </ul>
                          </li>
                          <li><a ><i class="__icon"></i><?php echo $this->lang->line('faculty_ftsp') ?></a>
                              <ul>
                                  <li><a href="<?php echo base_url() ?>fakultas-detil/ftsp/2412012013124252/teknik-lingkungan/1714012013111816"><?php echo $this->lang->line('ftsp_tl') ?></a>
                                  </li>
                                  <li><a href="<?php echo base_url() ?>fakultas-detil/ftsp/2412012013124252/perencanaan-wilayan-dan-kota/5014012013112103"><?php echo $this->lang->line('ftsp_tatakota') ?></a>
                                  </li>
                              </ul>
                          </li>
                          <li><a ><i class="__icon"></i><?php echo $this->lang->line('faculty_fti') ?></a>
                              <ul>
                                  <li><a href="<?php echo base_url() ?>fakultas-detil/fti/1812012013114634/teknik-elektro/4714012013111529"><?php echo $this->lang->line('fti_elektro') ?></a>
                                  </li>
                                  <li><a href="<?php echo base_url() ?>fakultas-detil/fti/1812012013114634/teknik-industri/714012013111042"><?php echo $this->lang->line('fti_industri') ?></a>
                                  </li>
                              </ul>
                          </li>
                          <li><a ><i class="__icon"></i><?php echo $this->lang->line('faculty_diploma') ?>a</a>
                              <ul>
                                  <li><a href="http://kebidanan.unipasby.ac.id"><?php echo $this->lang->line('diploma_bidan') ?></a>
                                  </li>
                              </ul>
                          </li>
                          <li><a ><i class="__icon"></i><?php echo $this->lang->line('faculty_pascasarjana') ?></a>
                              <ul>
                                  <li><a href="http://pps-unipasby.ac.id"><?php echo $this->lang->line('pascasarjana_tp') ?></a>
                                  </li>
                              </ul>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#"><?php echo $this->lang->line('menu_news') ?></a>
                        <ul class="multi-floor-menu">
                          <li><a href="<?php echo base_url() ?>kegiatan"><i class="__icon"></i><?php echo $this->lang->line('news_event') ?></a>
                          </li>
                          <li><a href="<?php echo base_url() ?>berita-dan-pengumuman/berita-kampus/01"><i class="__icon"></i><?php echo $this->lang->line('news_collage') ?></a>
                          </li>
                          <li><a href="<?php echo base_url() ?>berita-dan-pengumuman/artikel/02"><i class="__icon"></i><?php echo $this->lang->line('news_artikel') ?></a>
                          </li>
                          <li><a href="<?php echo base_url() ?>berita-dan-pengumuman/pengumuman/04"><i class="__icon"></i><?php echo $this->lang->line('news_announcetment') ?></a>
                          </li>
                          <li><a href="<?php echo base_url() ?>berita-dan-pengumuman/umum/8616012013102515"><i class="__icon"></i><?php echo $this->lang->line('news_daily') ?></a>
                          </li>
                          <li><a href="<?php echo base_url() ?>berita-dan-pengumuman/pendidikan/8529012013082338"><i class="__icon"></i><?php echo $this->lang->line('news_edu') ?></a>
                          </li>
                          <li><a href="<?php echo base_url() ?>berita-dan-pengumuman/olahraga/929012013082919"><i class="__icon"></i><?php echo $this->lang->line('news_sport') ?></a>
                          </li>
                          <li><a href="<?php echo base_url() ?>berita-dan-pengumuman/kesehatan/5129012013085629"><i class="__icon"></i><?php echo $this->lang->line('news_health') ?></a>
                          </li>
                          <li><a href="<?php echo base_url() ?>berita-dan-pengumuman/gaya-hidup/6329012013091038"><i class="__icon"></i><?php echo $this->lang->line('news_life') ?></a>
                          </li>
                          <li><a href="<?php echo base_url() ?>berita-dan-pengumuman/kehilangan/8110102013131219"><i class="__icon"></i><?php echo $this->lang->line('news_loss') ?></a>
                          </li>
                          <li><a href="<?php echo base_url() ?>berita-dan-pengumuman/beasiswa/7107022014111113"><i class="__icon"></i><?php echo $this->lang->line('news_bea') ?></a>
                          </li>
                          <li><a href="<?php echo base_url() ?>berita-dan-pengumuman/sambutan-rektor/9515022016145900"><i class="__icon"></i><?php echo $this->lang->line('news_rektor') ?></a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#"><?php echo $this->lang->line('menu_ekstra') ?></a>
                        <ul class="multi-floor-menu">
                          <li><a href="<?php echo base_url() ?>kkn"><i class="__icon"></i><?php echo $this->lang->line('ekstra_kkn') ?></a>
                          </li>
                          <li><a href="http://siakad.unipasby.ac.id"><i class="__icon"></i><?php echo $this->lang->line('ekstra_krs') ?></a>
                          </li>
                          <li><a href="<?php echo base_url() ?>karier"><i class="__icon"></i><?php echo $this->lang->line('ekstra_karir') ?></a>
                          </li>
                          <li><a href="<?php echo base_url() ?>galeri"><i class="__icon"></i><?php echo $this->lang->line('ekstra_gallery') ?></a>
                          </li>
                          <li><a href="#"><i class="__icon"></i><?php echo $this->lang->line('ekstra_blog') ?></a>
                            <ul>
                                <li>
                                    <a href="<?php echo base_url() ?>/blog/1"><?php echo $this->lang->line('blog_alumni') ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() ?>/blog/2"><?php echo $this->lang->line('blog_dosen') ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() ?>/blog/3"><?php echo $this->lang->line('blog_mhs') ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() ?>/blog/5"><?php echo $this->lang->line('blog_ukm') ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() ?>/blog/6"><?php echo $this->lang->line('blog_referensi') ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() ?>/blog/7"><?php echo $this->lang->line('blog_heatlh') ?></a>
                                </li>
                            </ul>
                          </li>

                        </ul>
                      </li>
                      <li>
                          <a href="#"><?php echo $this->lang->line('menu_contact') ?></a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
              <?php 
                if($hal== 'index'){
                  ?>
                  <div class="left-bg">

                  </div>
                  <div class="right-bg">

                  </div>
                  <?php
                }
              ?>
            </div>
          </div>

        </div>
        <?php
          if($hal== 'index'){
            ?>
            <div class="wrapper-box bgc-blue">
              <div class="__bottom">
                <div class="container container-home">
                  <div class="nav-content-wrapper">
                    <div class="header-phone">
                      <div class="kampus1">
                        <h2><i class="fa fa-phone fa-2x" style="font-size: 1.5em;"></i> <?php echo $this->lang->line('kampus1') ?> <span> (031) 5041097 </span></h2>
                      </div>
                      <div class="kampus2">
                        <h2><i class="fa fa-phone fa-2x" style="font-size: 1.5em;"></i> <?php echo $this->lang->line('kampus2') ?> <span> (031) 8281181 </span></h2>
                      </div>
                      <span class="triangle-arrow">&nbsp;</span>
                    </div>
                    <div class="header-tagline"><h3><?php echo $this->lang->line('info_mhs_baru') ?> <button class="btn-border btn-light btn-pmb"><?php echo $this->lang->line('btn_disini') ?></button></h3></div>
                    <div class="clearfix">

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php  
          }
        ?>
        
      </div>

      <div class="main-nav small-nav bgc-blue nav-fixed border-bottom">
        <div class="container">
          <div class="nav-content-wrapper">
            <div class="pull-left">
              <div class="megatron inline logo-dark">
                <div class="cell-vertical-wrapper">
                  <div class="cell-middle"><a href="<?php echo base_url(); ?>">
                      <div class="logo"><img src="<?php echo base_url(); ?>assets/images/logo.png"></div>
                      </a></div>
                </div>
              </div>
            </div>
            <div class="pull-right visible-lg">
              <nav class="os-menu main-menu">
               <ul>
                      <li><a href="<?php echo base_url() ?>"><?php echo $this->lang->line('menu_home') ?></a>
                      </li>
                      <li><a href="#"><?php echo $this->lang->line('menu_aboutus') ?></a>
                        <ul class="multi-floor-menu">
                          <li><a href="<?php echo base_url() ?>sekilas/para-pendiri-unipa/8617092013100647"><i class="__icon"></i><?php echo $this->lang->line('about_founder') ?></a>
                          </li>
                          <li><a href="<?php echo base_url() ?>sekilas/sambutan-rektor/319092013084049"><i class="__icon"></i><?php echo $this->lang->line('about_rector') ?></a>
                          </li>
                          <li><a href="<?php echo base_url() ?>sekilas/visi-dan-misi/5325032014161225"><i class="__icon"></i><?php echo $this->lang->line('about_vimi') ?></a>
                          </li>
                          <li><a href="<?php echo base_url() ?>sekilas/sejarah/E_020"><i class="__icon"></i><?php echo $this->lang->line('about_history') ?></a>
                          </li>
                          <li><a ><i class="__icon"></i><?php echo $this->lang->line('about_map') ?></a>
                            <ul>
                              <li><a href="<?php echo base_url() ?>area-fakultas/123"><?php echo $this->lang->line('map1') ?></a>
                              </li>
                              <li><a href="<?php echo base_url() ?>area-fakultas/234"><?php echo $this->lang->line('map2') ?></a>
                              </li>
                            </ul>
                          </li>
                          <li><a href="<?php echo base_url() ?>sekilas/luas-tanah-dan-disain/1119032014110946"><i class="__icon"></i><?php echo $this->lang->line('about_area') ?></a>
                          </li>
                          <li><a href="<?php echo base_url() ?>sekilas/jejaring-unipa-surabaya/719092013094952"><i class="__icon"></i><?php echo $this->lang->line('about_networking') ?></a>
                          </li>
                          <li><a href="<?php echo base_url() ?>sekilas/daftar-hibah-unipa-surabaya/9719092013115310"><i class="__icon"></i><?php echo $this->lang->line('about_grants') ?></a>
                          </li>
                          <li><a href="<?php echo base_url() ?>sekilas/logo-hymne-mars/1415012013092135"><i class="__icon"></i><?php echo $this->lang->line('about_logo') ?></a>
                          </li>
                          <li><a href="<?php echo base_url() ?>sarana"><i class="__icon"></i><?php echo $this->lang->line('about_facility') ?></a>
                          </li>
                          <li><a ><i class="__icon"></i><?php echo $this->lang->line('about_unit') ?></a>
                              <ul>
                                  <li><a href="<?php echo base_url() ?>satuan-kerja/kemahasiswaan/8216012013093528"><?php echo $this->lang->line('unit') ?></a>
                                  </li>
                              </ul>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#"><?php echo $this->lang->line('menu_faculty') ?></a>
                        <ul class="multi-floor-menu">
                          <li><a href="<?php echo base_url() ?>fakultas-dan-program-studi/E_033"><i class="__icon"></i><?php echo $this->lang->line('faculty_program') ?></a>
                          </li>
                          <li><a><i class="__icon"></i><?php echo $this->lang->line('faculty_fkip') ?></a>
                              <ul>
                                  <li><a href="<?php echo base_url() ?>fakultas-detil/fkip/6012012013102735/bimbingan-dan-konseling/6514012013110508"><?php echo $this->lang->line('fkip_bk') ?></a>
                                  </li>
                                  <li><a href="<?php echo base_url() ?>fakultas-detil/fkip/6012012013102735/pendidikan-kesejahteraan-keluarga/4214012013104259"><?php echo $this->lang->line('fkip_pkk') ?></a>
                                  </li>
                                  <li><a href="<?php echo base_url() ?>fakultas-detil/fkip/6012012013102735/pendidikan-moral-pancasila-dan-kewarganegaraan/4614012013103909"><?php echo $this->lang->line('fkip_pmpk') ?></a>
                                  </li>
                                  <li><a href="<?php echo base_url() ?>fakultas-detil/fkip/6012012013102735/pendidikan-bahasa-dan-sastra-indonesia/3312012013112127"><?php echo $this->lang->line('fkip_pbsi') ?></a>
                                  </li>
                                  <li><a href="<?php echo base_url() ?>fakultas-detil/fkip/6012012013102735/pendidikan-matematika/114012013110833"><?php echo $this->lang->line('fkip_mtk') ?></a>
                                  </li>
                                  <li><a href="<?php echo base_url() ?>fakultas-detil/fkip/6012012013102735/pendidikan-bahasa-inggris/4214012013100537"><?php echo $this->lang->line('fkip_pbi') ?></a>
                                  </li>
                                  <li><a href="<?php echo base_url() ?>fakultas-detil/fkip/6012012013102735/pendidikan-kepelatihan-olahraga/5914012013103449"><?php echo $this->lang->line('fkip_pko') ?></a>
                                  </li>
                                  <li><a href="<?php echo base_url() ?>fakultas-detil/fkip/6012012013102735/pendidikan-seni-rupa/1714012013102837"><?php echo $this->lang->line('fkip_psr') ?></a>
                                  </li>
                                  <li><a href="<?php echo base_url() ?>fakultas-detil/fkip/6012012013102735/pendidikan-guru-sekolah-dasar/3914012013104611"><?php echo $this->lang->line('fkip_pgsd') ?></a>
                                  </li>
                                  <li><a href="<?php echo base_url() ?>fakultas-detil/fkip/6012012013102735/pendidikan-guru-paud/8814012013105731"><?php echo $this->lang->line('fkip_pgpaud') ?></a>
                                  </li>
                              </ul>
                          </li>
                          <li><a ><i class="__icon"></i><?php echo $this->lang->line('faculty_economy') ?></a>
                              <ul>
                                  <li><a href="<?php echo base_url() ?>fakultas-detil/ekonomi/6912012013115003/akuntansi/5914012013092358"><?php echo $this->lang->line('economy_eko') ?></a>
                                  </li>
                                  <li><a href="<?php echo base_url() ?>fakultas-detil/ekonomi/6912012013115003/manajemen/6214012013093635"><?php echo $this->lang->line('economy_man') ?></a>
                                  </li>
                              </ul>
                          </li>
                          <li><a><i class="__icon"></i><?php echo $this->lang->line('faculty_fmipa') ?></a>
                              <ul>
                                  <li><a href="<?php echo base_url() ?>fakultas-detil/fmipa/8320122012121610/biologi/4011012013143843"><?php echo $this->lang->line('fmipa_bio') ?></a>
                                  </li>
                                  <li><a href="<?php echo base_url() ?>fakultas-detil/fmipa/8320122012121610/statistika/2011012013150052"><?php echo $this->lang->line('fmipa_statis') ?></a>
                                  </li>
                              </ul>
                          </li>
                          <li><a ><i class="__icon"></i><?php echo $this->lang->line('faculty_ftsp') ?></a>
                              <ul>
                                  <li><a href="<?php echo base_url() ?>fakultas-detil/ftsp/2412012013124252/teknik-lingkungan/1714012013111816"><?php echo $this->lang->line('ftsp_tl') ?></a>
                                  </li>
                                  <li><a href="<?php echo base_url() ?>fakultas-detil/ftsp/2412012013124252/perencanaan-wilayan-dan-kota/5014012013112103"><?php echo $this->lang->line('ftsp_tatakota') ?></a>
                                  </li>
                              </ul>
                          </li>
                          <li><a ><i class="__icon"></i><?php echo $this->lang->line('faculty_fti') ?></a>
                              <ul>
                                  <li><a href="<?php echo base_url() ?>fakultas-detil/fti/1812012013114634/teknik-elektro/4714012013111529"><?php echo $this->lang->line('fti_elektro') ?></a>
                                  </li>
                                  <li><a href="<?php echo base_url() ?>fakultas-detil/fti/1812012013114634/teknik-industri/714012013111042"><?php echo $this->lang->line('fti_industri') ?></a>
                                  </li>
                              </ul>
                          </li>
                          <li><a ><i class="__icon"></i><?php echo $this->lang->line('faculty_diploma') ?>a</a>
                              <ul>
                                  <li><a href="http://kebidanan.unipasby.ac.id"><?php echo $this->lang->line('diploma_bidan') ?></a>
                                  </li>
                              </ul>
                          </li>
                          <li><a ><i class="__icon"></i><?php echo $this->lang->line('faculty_pascasarjana') ?></a>
                              <ul>
                                  <li><a href="http://pps-unipasby.ac.id"><?php echo $this->lang->line('pascasarjana_tp') ?></a>
                                  </li>
                              </ul>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#"><?php echo $this->lang->line('menu_news') ?></a>
                        <ul class="multi-floor-menu">
                          <li><a href="<?php echo base_url() ?>kegiatan"><i class="__icon"></i><?php echo $this->lang->line('news_event') ?></a>
                          </li>
                          <li><a href="<?php echo base_url() ?>berita-dan-pengumuman/berita-kampus/01"><i class="__icon"></i><?php echo $this->lang->line('news_collage') ?></a>
                          </li>
                          <li><a href="<?php echo base_url() ?>berita-dan-pengumuman/artikel/02"><i class="__icon"></i><?php echo $this->lang->line('news_artikel') ?></a>
                          </li>
                          <li><a href="<?php echo base_url() ?>berita-dan-pengumuman/pengumuman/04"><i class="__icon"></i><?php echo $this->lang->line('news_announcetment') ?></a>
                          </li>
                          <li><a href="<?php echo base_url() ?>berita-dan-pengumuman/umum/8616012013102515"><i class="__icon"></i><?php echo $this->lang->line('news_daily') ?></a>
                          </li>
                          <li><a href="<?php echo base_url() ?>berita-dan-pengumuman/pendidikan/8529012013082338"><i class="__icon"></i><?php echo $this->lang->line('news_edu') ?></a>
                          </li>
                          <li><a href="<?php echo base_url() ?>berita-dan-pengumuman/olahraga/929012013082919"><i class="__icon"></i><?php echo $this->lang->line('news_sport') ?></a>
                          </li>
                          <li><a href="<?php echo base_url() ?>berita-dan-pengumuman/kesehatan/5129012013085629"><i class="__icon"></i><?php echo $this->lang->line('news_health') ?></a>
                          </li>
                          <li><a href="<?php echo base_url() ?>berita-dan-pengumuman/gaya-hidup/6329012013091038"><i class="__icon"></i><?php echo $this->lang->line('news_life') ?></a>
                          </li>
                          <li><a href="<?php echo base_url() ?>berita-dan-pengumuman/kehilangan/8110102013131219"><i class="__icon"></i><?php echo $this->lang->line('news_loss') ?></a>
                          </li>
                          <li><a href="<?php echo base_url() ?>berita-dan-pengumuman/beasiswa/7107022014111113"><i class="__icon"></i><?php echo $this->lang->line('news_bea') ?></a>
                          </li>
                          <li><a href="<?php echo base_url() ?>berita-dan-pengumuman/sambutan-rektor/9515022016145900"><i class="__icon"></i><?php echo $this->lang->line('news_rektor') ?></a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#"><?php echo $this->lang->line('menu_ekstra') ?></a>
                        <ul class="multi-floor-menu">
                          <li><a href="<?php echo base_url() ?>kkn"><i class="__icon"></i><?php echo $this->lang->line('ekstra_kkn') ?></a>
                          </li>
                          <li><a href="http://siakad.unipasby.ac.id"><i class="__icon"></i><?php echo $this->lang->line('ekstra_krs') ?></a>
                          </li>
                          <li><a href="<?php echo base_url() ?>karier"><i class="__icon"></i><?php echo $this->lang->line('ekstra_karir') ?></a>
                          </li>
                          <li><a href="#"><i class="__icon"></i><?php echo $this->lang->line('ekstra_gallery') ?></a>
                          </li>
                          <li><a href="#"><i class="__icon"></i><?php echo $this->lang->line('ekstra_blog') ?></a>
                            <ul>
                                <li>
                                    <a href="#"><?php echo $this->lang->line('blog_alumni') ?></a>
                                </li>
                                <li>
                                    <a href="#"><?php echo $this->lang->line('blog_dosen') ?></a>
                                </li>
                                <li>
                                    <a href="#"><?php echo $this->lang->line('blog_mhs') ?></a>
                                </li>
                                <li>
                                    <a href="#"><?php echo $this->lang->line('blog_ukm') ?></a>
                                </li>
                                <li>
                                    <a href="#"><?php echo $this->lang->line('blog_referensi') ?></a>
                                </li>
                                <li>
                                    <a href="#"><?php echo $this->lang->line('blog_heatlh') ?></a>
                                </li>
                            </ul>
                          </li>

                        </ul>
                      </li>
                      <li>
                          <a href="#"><?php echo $this->lang->line('menu_contact') ?></a>
                      </li>
                    </ul>
              </nav>
              
            </div>
            <div class="pull-right nav-item hidden-lg"><a href="#" class="mobile-nav-toggle nav-hamburger"><span></span></a></div>
          </div>
        </div>
      </div>

      <nav class="offcanvas-nav bgc-gray-darkest"><a href="#" class="offcanvas-nav-toggle"><i class="icon-wrong6"></i></a>
        <h6 class="size-s smb">CUSTOM PAGES</h6>
        <nav class="nav-single nav-item">
          <ul>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </nav>
        <h6 class="size-s smb">ADDTIONAL LINKS</h6>
        <nav class="nav-single nav-item">
          <ul>
            <li><a href="#">Retina Homepage</a></li>
            <li><a href="#">New Page Examples</a></li>
            <li><a href="#">Parallax Sections</a></li>
            <li><a href="#">Shortcode Central</a></li>
            <li><a href="#">Ultimate Font</a></li>
            <li><a href="#">Collection</a></li>
          </ul>
        </nav>
        <h6 class="size-s">GALLERY</h6>
        <div class="widget widget-gallery">
          <ul class="__widget-content magnific-gallery">
            <li><a href="assets/images/vintage/vintage-1.jpg" class="zoom-button img-wrapper"><img src="assets/images/vintage/vintage-1-thumbnail.jpg" alt="instagram image"/></a></li>
            <li><a href="assets/images/vintage/vintage-2.jpg" class="zoom-button img-wrapper"><img src="assets/images/vintage/vintage-2-thumbnail.jpg" alt="instagram image"/></a></li>
            <li><a href="assets/images/vintage/vintage-3.jpg" class="zoom-button img-wrapper"><img src="assets/images/vintage/vintage-3-thumbnail.jpg" alt="instagram image"/></a></li>
            <li><a href="assets/images/vintage/vintage-4.jpg" class="zoom-button img-wrapper"><img src="assets/images/vintage/vintage-4-thumbnail.jpg" alt="instagram image"/></a></li>
            <li><a href="assets/images/vintage/vintage-5.jpg" class="zoom-button img-wrapper"><img src="assets/images/vintage/vintage-5-thumbnail.jpg" alt="instagram image"/></a></li>
            <li><a href="assets/images/vintage/vintage-6.jpg" class="zoom-button img-wrapper"><img src="assets/images/vintage/vintage-6-thumbnail.jpg" alt="instagram image"/></a></li>
            <li><a href="assets/images/vintage/vintage-7.jpg" class="zoom-button img-wrapper"><img src="assets/images/vintage/vintage-7-thumbnail.jpg" alt="instagram image"/></a></li>
            <li><a href="assets/images/vintage/vintage-8.jpg" class="zoom-button img-wrapper"><img src="assets/images/vintage/vintage-8-thumbnail.jpg" alt="instagram image"/></a></li>
            <li><a href="assets/images/vintage/vintage-9.jpg" class="zoom-button img-wrapper"><img src="assets/images/vintage/vintage-9-thumbnail.jpg" alt="instagram image"/></a></li>
          </ul>
        </div>
        <ul class="social circle gray">
          <li><a href="#"><i class="icon icon-facebook-1"></i></a></li>
          <li><a href="#"><i class="icon icon-pinterest"></i></a></li>
          <li><a href="#"><i class="icon icon-twitter-1"></i></a></li>
          <li><a href="#"><i class="icon icon-linkedin-1"></i></a></li>
        </ul>
      </nav>
      <div class="mobile-nav"><a href="#" class="mobile-nav-toggle"><i class="icon-close47"></i></a><a href="<?php echo base_url() ?>" class="megatron">
          <div class="logo"><svg viewBox="0 0 100 100"> <g> <path d="M64.264,31.886v56.803l-14.319,8.259l-14.319-8.259v-74.3L14.157,26.771v41.271l7.156,4.128V30.905   l13.467-7.768v8.26l-6.311,3.64V84.56L7,72.178v-49.54L42.781,2v82.553l7.162,4.132l7.163-4.132V27.758L64.264,31.886z    M43.626,26.294l6.317-3.644L71.42,35.038V84.56l21.469-12.382v-49.54L57.106,2v15.546l7.157,4.128v-7.285l21.469,12.382v41.271   l-7.156,4.128V30.905L49.943,14.391l-6.317,3.644V26.294z"/> </g> </svg>
          </div>
          <div class="brand">MEGATRON</div></a>
        <nav class="os-menu mobile-menu">
          <ul>
            <li><a href="<?php echo base_url(); ?>">Beranda</a></li>
            <li><a href="#">Tentang Kami</a>
              <ul>
               <li><a href="<?php echo base_url() ?>sekilas/para-pendiri-unipa/8617092013100647"><i class="__icon"></i><?php echo $this->lang->line('about_founder') ?></a>
                </li>
                <li><a href="<?php echo base_url() ?>sekilas/sambutan-rektor/319092013084049"><i class="__icon"></i><?php echo $this->lang->line('about_rector') ?></a>
                </li>
                <li><a href="<?php echo base_url() ?>sekilas/visi-dan-misi/5325032014161225"><i class="__icon"></i><?php echo $this->lang->line('about_vimi') ?></a>
                </li>
                <li><a href="<?php echo base_url() ?>sekilas/sejarah/E_020"><i class="__icon"></i><?php echo $this->lang->line('about_history') ?></a>
                </li>
                <li><a ><i class="__icon"></i><?php echo $this->lang->line('about_map') ?></a>
                  <ul>
                    <li><a href="<?php echo base_url() ?>area-fakultas/123"><?php echo $this->lang->line('map1') ?></a>
                    </li>
                    <li><a href="<?php echo base_url() ?>area-fakultas/234"><?php echo $this->lang->line('map2') ?></a>
                    </li>
                  </ul>
                </li>
                <li><a href="<?php echo base_url() ?>sekilas/luas-tanah-dan-disain/1119032014110946"><i class="__icon"></i><?php echo $this->lang->line('about_area') ?></a>
                </li>
                <li><a href="<?php echo base_url() ?>sekilas/jejaring-unipa-surabaya/719092013094952"><i class="__icon"></i><?php echo $this->lang->line('about_networking') ?></a>
                </li>
                <li><a href="<?php echo base_url() ?>sekilas/daftar-hibah-unipa-surabaya/9719092013115310"><i class="__icon"></i><?php echo $this->lang->line('about_grants') ?></a>
                </li>
                <li><a href="<?php echo base_url() ?>sekilas/logo-hymne-mars/1415012013092135"><i class="__icon"></i><?php echo $this->lang->line('about_logo') ?></a>
                </li>
                <li><a href="<?php echo base_url() ?>sarana"><i class="__icon"></i><?php echo $this->lang->line('about_facility') ?></a>
                </li>
                <li><a ><i class="__icon"></i><?php echo $this->lang->line('about_unit') ?></a>
                    <ul>
                        <li><a href="<?php echo base_url() ?>satuan-kerja/kemahasiswaan/8216012013093528"><?php echo $this->lang->line('unit') ?></a>
                        </li>
                    </ul>
                </li>
              </ul>
            </li>
            <li><a href="#">Fakultas</a>
              <ul>
                 <li><a href="<?php echo base_url() ?>fakultas-detil/fkip/6012012013102735/bimbingan-dan-konseling/6514012013110508"><?php echo $this->lang->line('fkip_bk') ?></a>
                  </li>
                  <li><a href="<?php echo base_url() ?>fakultas-detil/fkip/6012012013102735/pendidikan-kesejahteraan-keluarga/4214012013104259"><?php echo $this->lang->line('fkip_pkk') ?></a>
                  </li>
                  <li><a href="<?php echo base_url() ?>fakultas-detil/fkip/6012012013102735/pendidikan-moral-pancasila-dan-kewarganegaraan/4614012013103909"><?php echo $this->lang->line('fkip_pmpk') ?></a>
                  </li>
                  <li><a href="<?php echo base_url() ?>fakultas-detil/fkip/6012012013102735/pendidikan-bahasa-dan-sastra-indonesia/3312012013112127"><?php echo $this->lang->line('fkip_pbsi') ?></a>
                  </li>
                  <li><a href="<?php echo base_url() ?>fakultas-detil/fkip/6012012013102735/pendidikan-matematika/114012013110833"><?php echo $this->lang->line('fkip_mtk') ?></a>
                  </li>
                  <li><a href="<?php echo base_url() ?>fakultas-detil/fkip/6012012013102735/pendidikan-bahasa-inggris/4214012013100537"><?php echo $this->lang->line('fkip_pbi') ?></a>
                  </li>
                  <li><a href="<?php echo base_url() ?>fakultas-detil/fkip/6012012013102735/pendidikan-kepelatihan-olahraga/5914012013103449"><?php echo $this->lang->line('fkip_pko') ?></a>
                  </li>
                  <li><a href="<?php echo base_url() ?>fakultas-detil/fkip/6012012013102735/pendidikan-seni-rupa/1714012013102837"><?php echo $this->lang->line('fkip_psr') ?></a>
                  </li>
                  <li><a href="<?php echo base_url() ?>fakultas-detil/fkip/6012012013102735/pendidikan-guru-sekolah-dasar/3914012013104611"><?php echo $this->lang->line('fkip_pgsd') ?></a>
                  </li>
                  <li><a href="<?php echo base_url() ?>fakultas-detil/fkip/6012012013102735/pendidikan-guru-paud/8814012013105731"><?php echo $this->lang->line('fkip_pgpaud') ?></a>
                  </li>
              </ul>
            </li>
            <li><a href="#">Berita</a>
              <ul>
                <li><a href="<?php echo base_url() ?>kegiatan"><i class="__icon"></i><?php echo $this->lang->line('news_event') ?></a>
                </li>
                <li><a href="<?php echo base_url() ?>berita-dan-pengumuman/berita-kampus/01"><i class="__icon"></i><?php echo $this->lang->line('news_collage') ?></a>
                </li>
                <li><a href="<?php echo base_url() ?>berita-dan-pengumuman/artikel/02"><i class="__icon"></i><?php echo $this->lang->line('news_artikel') ?></a>
                </li>
                <li><a href="<?php echo base_url() ?>berita-dan-pengumuman/pengumuman/04"><i class="__icon"></i><?php echo $this->lang->line('news_announcetment') ?></a>
                </li>
                <li><a href="<?php echo base_url() ?>berita-dan-pengumuman/umum/8616012013102515"><i class="__icon"></i><?php echo $this->lang->line('news_daily') ?></a>
                </li>
                <li><a href="<?php echo base_url() ?>berita-dan-pengumuman/pendidikan/8529012013082338"><i class="__icon"></i><?php echo $this->lang->line('news_edu') ?></a>
                </li>
                <li><a href="<?php echo base_url() ?>berita-dan-pengumuman/olahraga/929012013082919"><i class="__icon"></i><?php echo $this->lang->line('news_sport') ?></a>
                </li>
                <li><a href="<?php echo base_url() ?>berita-dan-pengumuman/kesehatan/5129012013085629"><i class="__icon"></i><?php echo $this->lang->line('news_health') ?></a>
                </li>
                <li><a href="<?php echo base_url() ?>berita-dan-pengumuman/gaya-hidup/6329012013091038"><i class="__icon"></i><?php echo $this->lang->line('news_life') ?></a>
                </li>
                <li><a href="<?php echo base_url() ?>berita-dan-pengumuman/kehilangan/8110102013131219"><i class="__icon"></i><?php echo $this->lang->line('news_loss') ?></a>
                </li>
                <li><a href="<?php echo base_url() ?>berita-dan-pengumuman/beasiswa/7107022014111113"><i class="__icon"></i><?php echo $this->lang->line('news_bea') ?></a>
                </li>
                <li><a href="<?php echo base_url() ?>berita-dan-pengumuman/sambutan-rektor/9515022016145900"><i class="__icon"></i><?php echo $this->lang->line('news_rektor') ?></a>
                </li>
              </ul>
            </li>
            <li><a href="#">BLOG</a>
              <ul>
                <li><a href="#">BLOG LARGE IMAGE</a>
                  <ul>
                    <li><a href="blog-fullwidth.html">LARGE IMAGE FULLWIDTH</a>
                    </li>
                    <li><a href="blog-sidebar-left.html">LARGE IMAGE SIDEBAR LEFT</a>
                    </li>
                    <li><a href="blog-sidebar-right.html">LARGE IMAGE SIDEBAR RIGHT</a>
                    </li>
                  </ul>
                </li>
                <li><a href="#">BLOG LEFT IMAGE</a>
                  <ul>
                    <li><a href="blog-left-image-fullwidth.html">LEFT IMAGES IMAGE FULLWIDTH</a>
                    </li>
                    <li><a href="blog-left-image-sidebar-left.html">LEFT IMAGES IMAGE SIDEBAR LEFT</a>
                    </li>
                    <li><a href="blog-left-image-sidebar-right.html">LEFT IMAGES IMAGE SIDEBAR RIGHT</a>
                    </li>
                  </ul>
                </li>
                <li><a href="#">BLOG TIME LINE</a>
                  <ul>
                    <li><a href="blog-timeline-fullwidth.html">TIME LINE FULLWIDTH</a>
                    </li>
                    <li><a href="blog-timeline-sidebar-left.html">TIME LINE SIDEBAR LEFT</a>
                    </li>
                    <li><a href="blog-timeline-sidebar-right.html">TIME LINE SIDEBAR RIGHT</a>
                    </li>
                  </ul>
                </li>
                <li><a href="#">BLOG MASONRY</a>
                  <ul>
                    <li><a href="blog-masonry-wide.html">MASONRY WIDE</a>
                    </li>
                    <li><a href="blog-masonry-fullwidth.html">MASONRY FULLWIDTH</a>
                    </li>
                    <li><a href="blog-masonry-sidebar-left.html">MASONRY SIDEBAR LEFT</a>
                    </li>
                    <li><a href="blog-masonry-sidebar-right.html">MASONRY SIDEBAR RIGHT</a>
                    </li>
                  </ul>
                </li>
                <li><a href="#">BLOG SINGLE</a>
                  <ul>
                    <li><a href="blog-single-sidebar-left.html">SINGLE SIDEBAR LEFT</a>
                    </li>
                    <li><a href="blog-single-fullwidth.html">SINGLE FULLWIDTH</a>
                    </li>
                    <li><a href="blog-single-standard.html">SINGLE STANDARD</a>
                    </li>
                    <li><a href="blog-single-audio.html">SINGLE AUDIO</a>
                    </li>
                    <li><a href="blog-single-gallery.html">SINGLE GALLERY</a>
                    </li>
                    <li><a href="blog-single-quote.html">SINGLE QUOTE</a>
                    </li>
                    <li><a href="blog-single-video.html">SINGLE VIDEO</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#">WORKS</a>
              <ul>
                <li><a href="#">3 COLUMNS</a>
                  <ul>
                    <li><a href="portfolio-3-columns-hover-style-1.html">3 COLUMNS STYLE 01</a>
                    </li>
                    <li><a href="portfolio-3-columns-hover-style-2.html">3 COLUMNS STYLE 02</a>
                    </li>
                    <li><a href="portfolio-3-columns-hover-style-3.html">3 COLUMNS STYLE 03</a>
                    </li>
                    <li><a href="portfolio-3-columns-hover-style-4.html">3 COLUMNS STYLE 04</a>
                    </li>
                    <li><a href="portfolio-3-columns-hover-style-5.html">3 COLUMNS STYLE 05</a>
                    </li>
                    <li><a href="portfolio-3-columns-hover-style-6.html">3 COLUMNS STYLE 06</a>
                    </li>
                    <li><a href="portfolio-3-columns-no-space.html">NO SPACE</a>
                    </li>
                    <li><a href="portfolio-3-columns-wide.html">WIDE SCREEN</a>
                    </li>
                    <li><a href="portfolio-3-columns-wide-no-space.html">WIDE &amp; NO SPACE</a>
                    </li>
                  </ul>
                </li>
                <li><a href="#">4 COLUMNS</a>
                  <ul>
                    <li><a href="portfolio-4-columns-hover-style-1.html">4 COLUMNS STYLE 01</a>
                    </li>
                    <li><a href="portfolio-4-columns-hover-style-2.html">4 COLUMNS STYLE 02</a>
                    </li>
                    <li><a href="portfolio-4-columns-hover-style-3.html">4 COLUMNS STYLE 03</a>
                    </li>
                    <li><a href="portfolio-4-columns-hover-style-4.html">4 COLUMNS STYLE 04</a>
                    </li>
                    <li><a href="portfolio-4-columns-hover-style-5.html">4 COLUMNS STYLE 05</a>
                    </li>
                    <li><a href="portfolio-4-columns-hover-style-6.html">4 COLUMNS STYLE 06</a>
                    </li>
                    <li><a href="portfolio-4-columns-no-space.html">NO SPACE</a>
                    </li>
                    <li><a href="portfolio-4-columns-wide.html">WIDE SCREEN</a>
                    </li>
                    <li><a href="portfolio-4-columns-wide-no-space.html">WIDE &amp; NO SPACE</a>
                    </li>
                  </ul>
                </li>
                <li><a href="#">5 COLUMNS</a>
                  <ul>
                    <li><a href="portfolio-5-columns-hover-style-1.html">5 COLUMNS STYLE 01</a>
                    </li>
                    <li><a href="portfolio-5-columns-hover-style-2.html">5 COLUMNS STYLE 02</a>
                    </li>
                    <li><a href="portfolio-5-columns-hover-style-3.html">5 COLUMNS STYLE 03</a>
                    </li>
                    <li><a href="portfolio-5-columns-hover-style-4.html">5 COLUMNS STYLE 04</a>
                    </li>
                    <li><a href="portfolio-5-columns-hover-style-5.html">5 COLUMNS STYLE 05</a>
                    </li>
                    <li><a href="portfolio-5-columns-hover-style-6.html">5 COLUMNS STYLE 06</a>
                    </li>
                    <li><a href="portfolio-5-columns-no-space.html">NO SPACE</a>
                    </li>
                    <li> <a href="portfolio-5-columns-wide.html">WIDE SCREEN</a>
                    </li>
                    <li><a href="portfolio-5-columns-wide-no-space.html">WIDE &amp; NO SPACE</a>
                    </li>
                  </ul>
                </li>
                <li><a href="#">SPECIAL STYLE</a>
                  <ul>
                    <li><a href="portfolio-carousel.html">CAROUSEL</a>
                    </li>
                    <li><a href="portfolio-hover-effect.html">HOVER EFFECT<span class="__flag border-danger color-danger">HOT</span></a>
                    </li>
                    <li><a href="portfolio-masonry.html">MASONRY</a>
                    </li>
                    <li><a href="portfolio-masonry-wide.html">MASONRY WIDE</a>
                    </li>
                    <li><a href="portfolio-shortcode-masonry.html">METRO STYLE 01</a>
                    </li>
                    <li><a href="portfolio-shortcode-masonry-2.html">METRO STYLE 02</a>
                    </li>
                    <li><a href="portfolio-2-columns-hover-style-1.html">2 COLUMNS STYLE 01</a>
                    </li>
                    <li><a href="portfolio-2-columns-hover-style-2.html">2 COLUMNS STYLE 02</a>
                    </li>
                    <li><a href="portfolio-2-columns-hover-style-3.html">2 COLUMNS STYLE 03</a>
                    </li>
                  </ul>
                </li>
                <li><a href="#">SINGLE PORTFOLIO</a>
                  <ul>
                    <li><a href="portfolio-single-1.html">PORTFOLIO SINGLE 01</a>
                    </li>
                    <li><a href="portfolio-single-2.html">PORTFOLIO SINGLE 02</a>
                    </li>
                    <li><a href="portfolio-single-3.html">PORTFOLIO SINGLE 03</a>
                    </li>
                    <li><a href="portfolio-single-4.html">PORTFOLIO SINGLE 04</a>
                    </li>
                    <li><a href="portfolio-single-5.html">PORTFOLIO SINGLE 05</a>
                    </li>
                    <li><a href="portfolio-single-6.html">PORTFOLIO SINGLE 06</a>
                    </li>
                    <li><a href="portfolio-single-7.html">PORTFOLIO SINGLE 07</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#">SHOP</a>
              <ul>
                <li><a href="#">SHOP CATEGORY</a>
                  <ul>
                    <li><a href="shop-category-fullwidth.html">CATEGORY FULLWIDTH</a>
                    </li>
                    <li><a href="shop-category-sidebar-left.html">CATEGORY SIDE BAR LEFT</a>
                    </li>
                    <li><a href="shop-category-sidebar-right.html">CATEGORY SIDE BAR RIGHT</a>
                    </li>
                    <li><a href="shop-category-top-slider.html">CATEGORY TOP SLIDER</a>
                    </li>
                  </ul>
                </li>
                <li><a href="#">SINGLE SHOP</a>
                  <ul>
                    <li><a href="shop-single-fullwidth.html">SINGLE FULLWIDTH</a>
                    </li>
                    <li><a href="shop-single-sidebar-left.html">SINGLE SIDE BAR LEFT</a>
                    </li>
                    <li><a href="shop-single-sidebar-right.html">SINGLE SIDE BAR RIGHT</a>
                    </li>
                    <li><a href="shop-single-top-slider.html">SINGLE TOP SLIDER</a>
                    </li>
                    <li><a href="shop-single-variable.html">SINGLE VARIABLE</a>
                    </li>
                  </ul>
                </li>
                <li><a href="#">OTHER PAGE</a>
                  <ul>
                    <li><a href="shop-account.html">MY ACCOUNT</a>
                    </li>
                    <li><a href="shop-cart.html">CART</a>
                    </li>
                    <li><a href="shop-checkout.html">CHECK OUT</a>
                    </li>
                    <li><a href="shop-order-tracking.html">ORDER TRACKING</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
        <div class="search-area">
          <form method="post" class="search-box">
            <input type="search" placeholder="Search..."/>
            <button type="submit"><i class="icon-search-icon"></i></button>
          </form>
        </div>
        <div class="social-area">
          <ul class="social circle gray">
            <li><a href="#"><i class="icon icon-facebook-1"></i></a></li>
            <li><a href="#"><i class="icon icon-pinterest"></i></a></li>
            <li><a href="#"><i class="icon icon-twitter-1"></i></a></li>
            <li><a href="#"><i class="icon icon-linkedin-1"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- Page Navigation-->
      <?php echo $_content ?>
      <!--Page Footer-->
      <?php echo $_footer; ?>
      <!--End Page Footer-->
      <div class="messagefull info message-load-content" style="display:none">
        <div class="__icon"><i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i></div>
        <p class="mb-0 fz-6-s">Loading Content</p>
      </div>
    </div>
    <!--End Page content-->
    <!--Javascript Library-->
    <button id="back-to-top-btn"><i class="icon-up-open-big"></i></button>
    <script src="<?php echo base_url() ?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/waypoints/lib/shortcuts/sticky.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/smoothscroll/SmoothScroll.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/wow/dist/wow.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/parallax.js/parallax.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/vendors/jquery-countTo/jquery.countTo.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/vendors/slick-carousel/slick/slick.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/vendors/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/vendors/jquery-modal/jquery.modal.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/web/js/main.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/web/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/select2/js/select2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/block-ui/jquery.blockUI.js"></script>
    <?php 
     if($this->uri->segment(1) == '' || $this->uri->segment(1) == 'index'){
      ?>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDytkyUX2xb4hze3Gn949SwtKYZx2f2VEQ"></script>    
      <?php
     }
    ?>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/web/js/adibuana.js"></script>

    <?php 
      if($this->uri->segment(1) == 'kkn'){
        ?>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/web/js/kkn.js"></script>
        <?php
      }elseif ($this->uri->segment(1) == 'sarana') {
        ?>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/vendors/jquery-ui/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/vendors/slick-carousel/slick/slick.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/vendors/isotope/dist/isotope.pkgd.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/vendors/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/vendors/jquery-modal/jquery.modal.min.js"></script>
        <?php
      }
    ?>

    <script type="text/javascript">
      $(document).ready(function() {
        $(".select-form").select2();
      });
  </script>

    <!-- Google analytics-->
    <script type="text/javascript">(function(b,o,i,l,e,r){b.GoogleAsnalyticsObject=l;b[l]||(b[l]=function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;e=o.createElement(i);r=o.getElementsByTagName(i)[0];e.src='//www.google-analytics.com/analytics.js';r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));ga('create','UA-57387972-3');ga('send','pageview');</script>
    <!--End Javascript Library-->

        <script type="text/javascript">
      <?php 
        if($this->uri->segment(1) == '' || $this->uri->segment(1) == 'index'){
          ?>
          create_kampus_map();
          <?php
        }
      ?>
      

      $(window).load(function(){
        $('.flexslider').flexslider({
          animation: "fade",
          controlNav: true,
          start: function(slider){
            $('body').removeClass('loading');
          }
        });
      });
    
      function create_kampus_map(){
        var map;
        var bounds = new google.maps.LatLngBounds();
        var mapOptions = {
            center: {lat :-7.316562, lng: 112.734288},
            mapTypeId: 'roadmap'
        };
                        
        // Display a map on the page
        map = new google.maps.Map(document.getElementById("map_lokasi"), mapOptions);
        map.setTilt(45);
            
        // Multiple Markers
        var markers = [
            ['Kampus 1', -7.293631, 112.748913],
            ['Kampus 2', -7.344623, 112.723200]
        ];
                            
        // Info Window Content
        var infoWindowContent = [
            ['<div class="info_content">' +
            '<h3>Kampus 1</h3>' +
            '<p>Jl. Ngagel Dadi III-B/37, Surabaya, 60245 <br> Telepon: (031) 5041097, 5041190 <br> Faks: (031) 5042804 </p>' + '</div>'],
            ['<div class="info_content">' +
            '<h3>Kampus 2</h3>' +
            '<p>Jl. Dukuh Menanggal XII, Surabaya 60234 <br> Telepon: (031) 8281181, 8281183 <br> Email: admin@unipasby.ac.id </p>' +
            '</div>']
        ];
            
        // Display multiple markers on a map
        var infoWindow = new google.maps.InfoWindow(), marker, i;
        
        // Loop through our array of markers & place each one on the map  
        for( i = 0; i < markers.length; i++ ) {
            var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
            bounds.extend(position);
            marker = new google.maps.Marker({
                position: position,
                map: map,
                title: markers[i][0]
            });
            
            // Allow each marker to have an info window    
            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infoWindow.setContent(infoWindowContent[i][0]);
                    infoWindow.open(map, marker);
                }
            })(marker, i));

            // Automatically center the map fitting all markers on the screen
            map.fitBounds(bounds);
        }

        // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
        var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
            this.setZoom(12);
            google.maps.event.removeListener(boundsListener);
        });
      }
    </script>

  </body>
</html>
