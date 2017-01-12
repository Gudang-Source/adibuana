

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
        <div class="col-md-12">
          <header class="hr-header adibuana-header">
            <div class="header"><div class="icon icon-newspaper color-secondary"></div> <span class="title">Berita <span>Terbaru</span></span></div>
          </header>
          <div class="berita">
            <?php
              foreach ($berita_terbaru as $q_terbaru) {
                ?>
                <div class="col-md-3">
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
                     <a href="<?php echo base_url(); ?>detil-berita-dan-pengumuman/<?php echo slugify($q_terbaru->title_ina); ?>/<?php echo $q_terbaru->id ?>"><?php echo $q_terbaru->title_ina ?></a>
                   </div>
                </div>
              </div>
                <?php
              }
            ?>
          </div>
        </div>
        <div class="col-md-12 text-center">
          <a href="#"><button class="btn btn-primary" type="button" name="button">Berita Lainnya <i class="fa fa-chevron-right" aria-hidden="true"></i></button></a>
        </div>
    </div>
  </section>

  <section id="middle-section">
    <div class="container">
      <div class=" row">
        <div class="col-md-4">
          <header class="hr-header adibuana-header">
            <div class="header"><div class="icon icon-newspaper color-secondary"></div><span class="title">Pengumuman</span></div>
          </header>
          <div class="pengumuman">
            <ul>
              <li>
                <div class="wrapper-pengumuman">
                  <img class="img-thumbnail" src="http://www.unipasby.ac.id/css/data_images/news/news_5A54154261284D6A479E2C1BC0617AA3.jpg" alt="">
                  <div class="deskripsi">
                    <a ref="#">Hasil Seleksi Mahasiswa Baru Pasca Sarjana Semester Genap Tahun Akademik 2016-2017 Gelombang I 21 Desember 2016 Universitas Pgri Adi Buana Surabaya</a>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <header class="hr-header adibuana-header">
            <div class="header"><div class="icon icon-newspaper color-secondary"></div> <span class="title">Kegiatan</span></div>
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
        </div>
        <div class="col-md-4">
          <header class="hr-header adibuana-header">
            <div class="header"><div class="icon icon-newspaper color-secondary"></div> <span class="title">Peta Lokasi</span></div>
          </header>
          <div class="petalokasi">

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Skill-->
  <section class="page-section">
    <div class="container">
      <div class="col-md-6 section-block">
        <div class="group-progressbar trail-gray">
          <div class="block-progressbar">
            <h5 class="__title">GRAPHIC DESIGN</h5>
            <div role="progressbar" data-transitiongoal="60" class="progressbar"></div>
          </div>
          <div class="block-progressbar">
            <h5 class="__title">RESEARCH</h5>
            <div role="progressbar" data-transitiongoal="74" class="progressbar"></div>
          </div>
          <div class="block-progressbar">
            <h5 class="__title">IDENTITY</h5>
            <div role="progressbar" data-transitiongoal="95" class="progressbar"></div>
          </div>
          <div class="block-progressbar">
            <h5 class="__title">WEB DEVELOPMENT</h5>
            <div role="progressbar" data-transitiongoal="88" class="progressbar"></div>
          </div>
        </div>
      </div>
      <div class="col-md-6 section-block">
        <header class="hr-header section-header">
          <h2 class="smb">WHY CHOOSE US</h2>
          <p class="common-serif __caption">Let us help you make your website.</p>
          <div class="separator-2-color"></div>
          <p class="__content">We design and develop services for customers of all sizes, specializing in creating stylish, modern websites, web services and online stores. Design is our art and our passion. Our goal is to create the best products with a pixel-perfect eye for detail and a high standard for aesthetic excellence.</p>
        </header>
      </div>
    </div>
    <hr class="mb-90">
    <div class="container"></div>
    <div class="counter-group">
      <div class="container">
        <div class="col-md-3 col-sm-6 col-xs-12 section-block">
          <div class="block-counter text-center">
            <h1 data-from="0" data-to="3195" class="timer mb-15 hr-heading hr-primary">0</h1>
            <p class="fz-3 font-serif-italic mb-0">Projects Finished</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 section-block">
          <div class="block-counter text-center">
            <h1 data-from="0" data-to="4638" class="timer mb-15 hr-heading hr-primary">0</h1>
            <p class="fz-3 font-serif-italic mb-0">Happy Clients</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 section-block">
          <div class="block-counter text-center">
            <h1 data-from="0" data-to="3690" class="timer mb-15 hr-heading hr-primary">0</h1>
            <p class="fz-3 font-serif-italic mb-0">Hours of work</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 section-block">
          <div class="block-counter text-center">
            <h1 data-from="0" data-to="3468" class="timer mb-15 hr-heading hr-primary">0</h1>
            <p class="fz-3 font-serif-italic mb-0">Cup Of Coffee</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Our Skill-->
  <!-- Call To Action-->
  <section class="page-section no-padding">
    <div class="call-to-action-common bgc-secondary">
      <div class="container">
        <div class="__content-wrapper row">
          <div class="col-lg-10 col-md-9 col-xs-12 __content-left">
            <div class="cell-vertical-wrapper">
              <div class="cell-middle">
                <p class="font-serif-italic mb-0 fz-3 color-light">Like what you see? Start now with this demo or check out our other demos to find what you need.</p>
              </div>
            </div>
          </div>
          <div data-wow-delay="0.3s" class="col-lg-2 col-md-3 col-xs-12 __content-right wow fadeInRight">
            <div class="cell-vertical-wrapper">
              <div class="cell-middle"><a href="index.html" class="fullwidth btn-border btn-light">CHECK IT OUT</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Call To Action-->
  <!-- Google Map-->
  <section class="page-section no-padding">
    <div id="map" data-marker-image="assets/images/logo/map-marker.png"></div>
  </section>
  <!-- Google Map-->
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
