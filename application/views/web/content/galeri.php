      <!--Page Header-->
      <header class="page-header common-header bgc-dark-o-5">
        <div data-parallax="scroll" data-position="center -550px" data-image-src="https://unipasurabaya.files.wordpress.com/2012/09/cropped-unipa-mng.jpg" data-speed="0.3" class="parallax-background"></div>
        <div class="container text-center cell-vertical-wrapper">
          <div class="cell-middle">
            <h1 class="text-responsive nmb" id="size-header"><?php echo ucwords($this->session->userdata('lang') == 'indonesia'? 'Galeri':'Gallery') ?></h1>
          </div>
        </div>
        <div class="ab-bottom col-xs-12">
          <div class="container">
            <div class="breadcrumb bgc-dark-o-6"><span class="__content italic font-serif fz-6-ss"><span><a href="<?php echo base_url(); ?>">Beranda</a></span><span><a href="#"><?php echo ucwords($this->session->userdata('lang') == 'indonesia'? 'Galeri':'Gallery') ?></a></span><span>
          </div>
        </div>
      </header>
      <!--End Page Header-->
      <!--Page Body-->
      <div id="page-body" class="page-body">
        <section class="page-section">
          <div class="container">
            <div class="row magnific-gallery">
              <?php 
              foreach ($kategori_galeri as $kategori) {
              ?>
                <div class="col-md-4 col-sm-6 col-xs-12 pb-30">
                    <div class="galeri-card">
                        <div data-mfp-src="<?php echo base_url(); ?>assets/images/gallery/<?php echo $kategori->id ?>/<?php echo $kategori->thumb ?>" class="block-image-zoom overlay-container img-wrapper zoom-button"><img  src="<?php echo base_url(); ?>assets/images/gallery/<?php echo $kategori->id ?>/<?php echo $kategori->thumb ?>" alt="<?php echo $kategori->title_ina ?>"/>
                            <div class="overlay-hover bgc-dark-o-6">
                                <div class="__icon"><i class="icon-resize-full"></i></div>
                            </div>
                        </div>
                        <div class="card-content">
                            <h3><?php echo $kategori->title_ina ?></h3>
                            <a href="<?php echo base_url(); ?>detail-galeri/<?php echo slugify($kategori->title_ina); ?>/<?php echo $kategori->id; ?>"><button style="color:#22A7F0; position: absolute; bottom:60px; right: 25px;" class="btn clr-secondary btn-lainnya">Selengkapnya</button></a>
                        </div>
                    </div>

                </div>
              <?php
              }
              ?>
            </div>
          </div>
        </section>
      </div>
      <!--End Page Body-->