     <!--Page Body-->
      <div id="page-body" class="page-body">
        <section class="page-section bgc-light one-child">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <nav class="pagination-2"><a href="#" class="button-previous"><i class="icon-left-open-big"></i><span>PREVIOUS</span></a><a href="#" class="button-next"><i class="icon-right-open-big"></i><span>NEXT</span></a>
                  <div class="__back-to-portfolio"><a href="<?php echo base_url(); ?>main/portofolio"><i class="icon fa fa-th"></i></a></div>
                </nav>
              </div>
            </div>
            <div class="row pt-55">
              <div class="col-md-8 col-xs-12 mb-40">
                <div class="portfolio-box-slider">
                  <div class="slider slide direction-nav">
                    <div class="block-portfolio-box-slider">
                      <div class="__image"><img src="<?php echo base_url() ?>assets/images/portofolio/<?php echo $portofolio->gambar ?>" alt="portfolio image"/></div>
                    </div>
                    <!--<div class="block-portfolio-box-slider">
                      <div class="__image"><img src="assets/images/portfolio/portfolio-box-slider-2.jpg" alt="portfolio image"/></div>
                    </div>
                    <div class="block-portfolio-box-slider">
                      <div class="__image"><img src="assets/images/portfolio/portfolio-box-slider-3.jpg" alt="portfolio image"/></div>
                    </div>
                    <div class="block-portfolio-box-slider">
                      <div class="__image"><img src="assets/images/portfolio/portfolio-box-slider-4.jpg" alt="portfolio image"/></div>
                    </div>-->
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-xs-12 portfolio-single-detail">
                <div class="portfolio-single-content">
                  <h3 class="fz-3-l"><?php echo $portofolio->judul_portofolio ?></h3>
                  <p><?php echo $portofolio->deskripsi; ?></p>
                </div>
                <div class="portfolio-single-info">
                  
                  <div class="__item __client">
                    <h6>PEMBUAT</h6><span><?php echo $portofolio->nama_pembuat; ?></span>
                  </div>
                  <div class="__item __category">
                    <h6>KATGEORI</h6>
                    <div class="color-primary font-serif-italic"><a href="#">Photoshop</a>,&nbsp;<a href="#">3ds max</a>,&nbsp;<a href="#">photography</a></div>
                  </div>
                 
                </div>
              </div>
              <div class="col-xs-12 mb-50">
                <ul class="social circle secondary responsive">
                  <li><a href="#"><i class="icon icon-facebook-1"></i></a></li>
                  <li><a href="#"><i class="icon icon-twitter-1"></i></a></li>
                  <li><a href="#"><i class="icon icon-pinterest"></i></a></li>
                  <li><a href="#"><i class="icon icon-stumbleupon"></i></a></li>
                  <li><a href="#"><i class="icon icon-instagrem"></i></a></li>
                  <li><a href="#"><i class="icon icon-dribbble-1"></i></a></li>
                  <li><a href="#"><i class="icon icon-github"></i></a></li>
                  <li><a href="#"><i class="icon icon-vimeo"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="row border-top-lighter pt-55">
              <div class="col-xs-12">
                <nav class="pagination-2"><a href="#" class="button-previous"><i class="icon-left-open-big"></i><span>PREVIOUS</span></a><a href="#" class="button-next"><i class="icon-right-open-big"></i><span>NEXT</span></a>
                  <div class="__back-to-portfolio"><a href="portfolio-3-columns-hover-style-4.html"><i class="icon fa fa-th"></i></a></div>
                </nav>
              </div>
            </div>
          </div>
        </section>
        
      </div>
      <!--End Page Body-->