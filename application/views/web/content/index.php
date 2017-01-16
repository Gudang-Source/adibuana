

<section class="slider">
   <div class="flexslider">
     <ul class="slides">
       <li>
         <img src="assets/images/slider1.jpg" />
       </li>
       <li>
         <img src="assets/images/slider2.jpg" />
       </li>
       <li>
         <img src="assets/images/slider3.jpg" />
       </li>
     </ul>
   </div>
 </section>

 <div class="bg-footer bg-secondary">

 </div>

<!--Page Body-->
<div id="page-body" class="page-body">

  <!-- Berita -->
  <section class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
           <header class="hr-header adibuana-header">
            <div class="header">
                <div class="title">
                  <span>Berita Terbaru</span>
                  <div class="pull-right"><a class="btn btn-lainnya btn-border  color-secondary">Lainnya ></a></div>
                </div>
              </div>
          </header>
          <div class="berita">
            <?php
              foreach ($berita_terbaru as $q_terbaru) {
                ?>
                <div class="col-md-6">
                  <div class="card">
                    <?php
                      if($q_terbaru->picture == ''){
                        ?>
                        <img src="http://shopproject30.com/wp-content/themes/venera/images/placeholder-camera-green.png" alt="<?php echo $q_terbaru->title_ina ?>" style="width:100%; height:200px; object-fit:cover">
                        <?php
                      }else{
                        ?>
                        <img src="http://www.unipasby.ac.id/css/data_images/news/<?php echo $q_terbaru->picture; ?>" alt="<?php echo $q_terbaru->title_ina ?>" style="width:100%; height:200px; object-fit:cover">
                        <?php
                      }
                    ?>
                   <div class="container">
                    <div class="time"><i class="fa fa-clock-o"></i> &nbsp; Di posting tanggal <?php echo convertDateTime($q_terbaru->post_date) ?></div>
                     <h3><a href="<?php echo base_url(); ?>detil-berita-dan-pengumuman/<?php echo slugify($q_terbaru->title_ina); ?>/<?php echo $q_terbaru->id ?>"><?php echo $q_terbaru->title_ina ?></a></h3>
                   </div>
                </div>
              </div>
                <?php
              }
            ?>
          </div>
        </div>
        <div class="col-md-4">
          <header class="hr-header adibuana-header">
            <div class="header">
                <div class="title">
                  <span>Agenda</span>
                  <div class="pull-right"><a class="btn btn-lainnya btn-border  color-secondary">Lainnya ></a></div>
                </div>
              </div>
          </header>
          <div class="agenda-terbaru">
            <ul>
              <?php 
                foreach ($agenda_terbaru as $q_agenda) {
                  ?>
                  <li>
                    <div class="time"><i class="fa fa-clock-o"></i> &nbsp; Di posting tanggal <?php echo convertDateTime($q_agenda->post_date) ?></div>
                    <p><a><?php echo $q_agenda->title_ina ?></a></p>
                    <hr>
                  </li>
                  <?php
                }
              ?>
              
            </ul>
          </div>

          <header class="hr-header adibuana-header">
            <div class="header">
                <div class="title">
                  <span>Galeri</span>
                  <div class="pull-right"><a class="btn btn-lainnya btn-border  color-secondary">Lainnya ></a></div>
                </div>
              </div>
          </header>

           <div class="image-slider">
              <div class="slider slide direction-nav control-nav">
                <div class="__item">
                  <div class="__image"><img src="http://www.unipasby.ac.id/css/data_images/gallery/3225042016094321/pict_7D155F17FB2A65D9F3A187D7813C0E43.JPG" alt="portfolio image"/></div>
                </div>
                <div class="__item">
                  <div class="__image"><img src="http://www.unipasby.ac.id/css/data_images/gallery/3225042016094321/pict_7D155F17FB2A65D9F3A187D7813C0E43.JPG" alt="portfolio image"/></div>
                </div>
                <div class="__item">
                  <div class="__image"><img src="http://www.unipasby.ac.id/css/data_images/gallery/3225042016094321/pict_7D155F17FB2A65D9F3A187D7813C0E43.JPG" alt="portfolio image"/></div>
                </div>
              </div>
            </div>
        </div>
    </div>
  </section>

  <section id="middle-section">
    <div class="container">
      <div class=" row">
        <div class="col-md-4">
          <header class="hr-header adibuana-header">
            <div class="header">
                <div class="title">
                  <span>Pengumuman</span>
                  <div class="pull-right"><a class="btn btn-lainnya btn-border  color-secondary">Lainnya ></a></div>
                </div>
              </div>
          </header>
          <div class="pengumuman">
            <ul>
              <?php 
                foreach($pengumuman_terbaru as $q_pengumuman){
                  list($date, $time) = explode(' ', $q_pengumuman->post_date);
                  list($year, $month, $day) = explode('-', $date);
                  ?>
                  <li>
                    <div class="wrapper-pengumuman">
                      <div class="date">
                        <div class="tanggal">
                          <?php echo $day ?>
                        </div>
                        <div class="bulan">
                          <?php echo month_3_char($month-1); ?>
                        </div>
                      </div>
                      <div class="deskripsi">
                        <a href="<?php echo base_url() ?>detil-berita-dan-pengumuman/<?php echo slugify($q_pengumuman->title_ina) ?>/<?php echo $q_pengumuman->id ?>/"><?php echo $q_pengumuman->title_ina ?></a>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </li>
                  <?php
                }
              ?>
              
            </ul>
          </div>
        </div>
        <!--<div class="col-md-4">
          <header class="hr-header adibuana-header">
            <div class="header">
                <div class="title">
                  <span>Kegiatan</span>
                  <div class="pull-right"><a class="btn btn-lainnya btn-border color-secondary">Lainnya ></a></div>
                </div>
                
            </div>
          </header>
          <div class="agenda">
            <ul>
              <li>
                <div class="tanggal">

                </div>
                <div class="deskripsi">

                </div>
              </li>
            </ul>
          </div>
        </div>-->
        <div class="col-md-8">
           <header class="hr-header adibuana-header">
            <div class="header">
                <div class="title"><span> Peta Lokasi</span></div>
              </div>
          </header>
          <div class="petalokasi">
            <div id="map_lokasi"></div>
          </div>
        </div>
      </div>
    </div>
  </section>


      <section class="page-section no-padding section-motto">
          <div class="bgc-light-blue border-top pt-40 pb-0">
            <div class="counter-group">
              <div class="container">
                <div class="col-md-4 col-sm-6 col-xs-12 section-block">
                  <div class="block-counter text-center">
                    <img src="http://www.unipasby.ac.id/css/images/content-img1.png"></img>
                    <h2>SMART</h2>
                    <p>"Ngelmu iku kalakone kanthi laku" Belajarlah dengan tulus untuk menjadi pintar. Tidak ada orang pintar yang enggan membagi ilmunya melainkan orang-orang bodoh yang mengaku pintar.</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 section-block">
                  <div class="block-counter text-center">
                    <img src="http://www.unipasby.ac.id/css/images/content-img2.png"></img>
                    <h2>SUCCESS</h2>
                    <p>"Jer basuki mawa beya" keberhasilan yang digenggam oleh seseorang tidak lepas dari pengorbanan yang dia awali dan lakukan dengan niat baik serta keikhlasan hati.</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 section-block">
                  <div class="block-counter text-center">
                    <img src="http://www.unipasby.ac.id/css/images/content-img3.png"></img>
                    <h2>EXPERT</h2>
                    <p>"ing ngarsa sung tulada, ing madya mangun karsa, tut wuri handayani". berikan dorongan kearah kebaikan untuk menggali ide dan inovasi sehingga menjadi contoh baik untuk lainnya.</p>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </section>


  <section class="page-section">
      <div class="container">
        <div class="row">
           <div class="col-md-6 col-sm-6 col-xs-12 section-block">
            <div class="panel panel-primary panel-tautan">
              <div class="panel-heading">Link Lainnya</div>
              <div class="panel-body">
                <div class="col-md-4">
                  <a href="#"><img class="img-responsive" src="http://www.unipasby.ac.id/css/data_images/link/link_1ACF55966615FCD055E087DCE81FE2EC.png" alt=""></a>
                </div>
                <div class="col-md-4">
                  <a href="#"><img class="img-responsive" src="http://www.unipasby.ac.id/css/data_images/link/link_94D4F3A6F37B36ED859120FC6C6614DB.png" alt=""></a>
                </div>
                <div class="col-md-4">
                  <a href="#"><img class="img-responsive" src="http://www.unipasby.ac.id/css/data_images/link/link_4B5D20A1DAFF9701BE8CD53FC9B33AA9.png" alt=""></a>
                </div>
                <div class="col-md-4">
                  <a href="#"><img class="img-responsive" src="http://www.unipasby.ac.id/css/data_images/link/link_7198348B251B29CDC4C83A718E4A024B.png" alt=""></a>
                </div>
                <div class="col-md-4">
                  <a href="#"><img class="img-responsive" src="http://www.unipasby.ac.id/css/data_images/link/link_0740B8EE40D534535F913938F1E52EDD.png" alt=""></a>
                </div>
                <div class="col-md-4">
                  <a href="#"><img class="img-responsive" src="http://www.unipasby.ac.id/css/data_images/link/link_986E64B3EE4EF86A97F0ABD69075AC2E.png" alt=""></a>
                </div>
                <div class="col-md-4">
                  <a href="#"><img class="img-responsive" src="http://www.unipasby.ac.id/css/data_images/link/link_62C3BE77491693256842605F7444B856.png" alt=""></a>
                </div>
                <div class="col-md-4">
                  <a href="#"><img class="img-responsive" src="http://www.unipasby.ac.id/css/data_images/link/link_A0D9315443911A66A126DAD868BF681F.png" alt=""></a>
                </div>
                <div class="col-md-4">
                  <a href="#"><img class="img-responsive" src="http://www.unipasby.ac.id/css/data_images/link/link_A657ADD7786155D4B8D94AF6E078A923.png" alt=""></a>
                </div>
                <div class="col-md-4">
                  <a href="#"><img class="img-responsive" src="http://www.unipasby.ac.id/css/data_images/link/link_93E847E79D5953AA79447B0A9484CFB4.png" alt=""></a>
                </div>
                <div class="col-md-4">
                  <a href="#"><img class="img-responsive" src="http://www.unipasby.ac.id/css/data_images/link/link_5EEDACBD7D79562CA4F17231F1C39188.png" alt=""></a>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
           <div class="col-md-3 col-sm-6 col-xs-12 section-block">
            <div class="panel panel-primary panel-aplikasi">
              <div class="panel-heading">Siakad</div>
              <div class="panel-body">
                <div class="aplikasi-icon">
                  <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/siakad_icon.png" >              
                </div>
              </div>
              <div class="panel-footer">
                <a href="#" class="btn btn-border color-secondary">Kunjungi</a>
              </div>
            </div>
           
          </div>
           <div class="col-md-3 col-sm-6 col-xs-12 section-block">
            <div class="panel panel-primary panel-aplikasi">
              <div class="panel-heading">KKN Online</div>
              <div class="panel-body">
                <div class="aplikasi-icon">
                  <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/kkn_icon.png" >              
                </div>
              </div>
              <div class="panel-footer">
                <a href="#" class="btn btn-border color-secondary">Daftar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>


  
  <!-- New Letter-->
  <section class="page-section pt-60 pb-60 bgc-dark-o-6">
    <div data-parallax="scroll" data-position="top" data-image-src="assets/images/background/background-53.jpg" data-speed="0.3" class="parallax-background"></div>
    <div class="news-letter">
      <div class="container">
        <div class="__content-wrapper row">
          <div class="col-md-6 col-xs-12 __content-left">
            <div class="cell-vertical-wrapper">
              <div class="cell-middle">
                <h2 class="mb-5">NEWSLETTER SIGN-UP</h2>
                <p class="font-serif-italic mb-0 fz-3">We make sure you do not miss any news</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xs-12 __content-right">
            <div class="cell-vertical-wrapper">
              <div class="cell-middle">
                <form>
                  <input type="email" placeholder="Enter your e-mail..."/><a href="#" class="btn-secondary btn no-border">SIGN UP</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End New Letter-->
</div>
<!--End Page Body-->
