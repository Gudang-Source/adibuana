 <!--Page Body-->
      <div id="page-body" class="page-body">
        <section class="page-section bgc-light">
          <div class="group-portfolio isotope-container">
            <div class="container">
              <div class="portfolio-filter"><a href="#" data-filter="*" class="filter-button is-checked">ALL PROJECTS</a><a href="#" data-filter=".web-design" class="filter-button">WEB DESIGN </a><a href="#" data-filter=".graphic-design" class="filter-button">GRAPHIC DESIGN</a><a href="#" data-filter=".branding" class="filter-button">BRANDING</a><a href="#" data-filter=".social-marketing" class="filter-button">SOCIAL MARKETING</a><a href="#" data-filter=".seo-optimization" class="filter-button">SEO OPTIMIZATION</a><a href="#" data-filter=".content-marketing" class="filter-button">CONTENT MARKETING</a>
              </div>
            </div>
            <div class="isotope-grid remove-gutter container">

              <?php 
                foreach($portofolio as $q_portofolio){
                  ?>
                  <div class="grid-item col-md-3 col-sm-6 col-xs-12 graphic-design social-marketing web-design">
                    <div class="block-portfolio overlay-container basic zoom"><img src="<?php echo base_url() ?>assets/images/portofolio/<?php echo $q_portofolio->gambar ?>" alt="BY THE SEA " class="__image"/>
                      <div class="overlay bgc-dark-o-7">
                        <div class="cell-vertical-wrapper">
                          <div class="cell-middle">
                            <h4 class="__title"><a href="#">BY THE SEA </a></h4>
                            <div class="__caption font-serif-italic">Lorem ipsum dolor sit amet</div>
                          </div>
                        </div><a href="<?php echo base_url() ?>assets/images/portofolio/<?php echo $q_portofolio->gambar ?>" class="__zoom zoom-button"><i class="icon-resize-full"></i></a>
                      </div>
                    </div>
                  </div>
                  <?php
                }
              ?>

              
              <!--<div class="grid-item col-md-3 col-sm-6 col-xs-12 branding seo-optimization graphic-design">
                <div class="block-portfolio overlay-container basic zoom"><img src="assets/images/portfolio/portfolio-3.jpg" alt="BY THE SEA " class="__image"/>
                  <div class="overlay bgc-dark-o-7">
                    <div class="cell-vertical-wrapper">
                      <div class="cell-middle">
                        <h4 class="__title"><a href="#">BY THE SEA </a></h4>
                        <div class="__caption font-serif-italic">Lorem ipsum dolor sit amet</div>
                      </div>
                    </div><a href="assets/images/portfolio/portfolio-3.jpg" class="__zoom zoom-button"><i class="icon-resize-full"></i></a>
                  </div>
                </div>
              </div>
              <div class="grid-item col-md-3 col-sm-6 col-xs-12 social-marketing content-marketing branding">
                <div class="block-portfolio overlay-container basic zoom"><img src="assets/images/portfolio/portfolio-4.jpg" alt="BY THE SEA " class="__image"/>
                  <div class="overlay bgc-dark-o-7">
                    <div class="cell-vertical-wrapper">
                      <div class="cell-middle">
                        <h4 class="__title"><a href="#">BY THE SEA </a></h4>
                        <div class="__caption font-serif-italic">Lorem ipsum dolor sit amet</div>
                      </div>
                    </div><a href="assets/images/portfolio/portfolio-4.jpg" class="__zoom zoom-button"><i class="icon-resize-full"></i></a>
                  </div>
                </div>
              </div>
              <div class="grid-item col-md-3 col-sm-6 col-xs-12 seo-optimization web-design social-marketing">
                <div class="block-portfolio overlay-container basic zoom"><img src="assets/images/portfolio/portfolio-5.jpg" alt="BY THE SEA " class="__image"/>
                  <div class="overlay bgc-dark-o-7">
                    <div class="cell-vertical-wrapper">
                      <div class="cell-middle">
                        <h4 class="__title"><a href="#">BY THE SEA </a></h4>
                        <div class="__caption font-serif-italic">Lorem ipsum dolor sit amet</div>
                      </div>
                    </div><a href="assets/images/portfolio/portfolio-5.jpg" class="__zoom zoom-button"><i class="icon-resize-full"></i></a>
                  </div>
                </div>
              </div>
              <div class="grid-item col-md-3 col-sm-6 col-xs-12 content-marketing graphic-design seo-optimization">
                <div class="block-portfolio overlay-container basic zoom"><img src="assets/images/portfolio/portfolio-6.jpg" alt="BY THE SEA " class="__image"/>
                  <div class="overlay bgc-dark-o-7">
                    <div class="cell-vertical-wrapper">
                      <div class="cell-middle">
                        <h4 class="__title"><a href="#">BY THE SEA </a></h4>
                        <div class="__caption font-serif-italic">Lorem ipsum dolor sit amet</div>
                      </div>
                    </div><a href="assets/images/portfolio/portfolio-6.jpg" class="__zoom zoom-button"><i class="icon-resize-full"></i></a>
                  </div>
                </div>
              </div>
              <div class="grid-item col-md-3 col-sm-6 col-xs-12 web-design branding content-marketing">
                <div class="block-portfolio overlay-container basic zoom"><img src="assets/images/portfolio/portfolio-7.jpg" alt="BY THE SEA " class="__image"/>
                  <div class="overlay bgc-dark-o-7">
                    <div class="cell-vertical-wrapper">
                      <div class="cell-middle">
                        <h4 class="__title"><a href="#">BY THE SEA </a></h4>
                        <div class="__caption font-serif-italic">Lorem ipsum dolor sit amet</div>
                      </div>
                    </div><a href="assets/images/portfolio/portfolio-7.jpg" class="__zoom zoom-button"><i class="icon-resize-full"></i></a>
                  </div>
                </div>
              </div>
              <div class="grid-item col-md-3 col-sm-6 col-xs-12 graphic-design social-marketing web-design">
                <div class="block-portfolio overlay-container basic zoom"><img src="assets/images/portfolio/portfolio-8.jpg" alt="BY THE SEA " class="__image"/>
                  <div class="overlay bgc-dark-o-7">
                    <div class="cell-vertical-wrapper">
                      <div class="cell-middle">
                        <h4 class="__title"><a href="#">BY THE SEA </a></h4>
                        <div class="__caption font-serif-italic">Lorem ipsum dolor sit amet</div>
                      </div>
                    </div><a href="assets/images/portfolio/portfolio-8.jpg" class="__zoom zoom-button"><i class="icon-resize-full"></i></a>
                  </div>
                </div>
              </div>
              <div class="grid-item col-md-3 col-sm-6 col-xs-12 branding seo-optimization graphic-design">
                <div class="block-portfolio overlay-container basic zoom"><img src="assets/images/portfolio/portfolio-9.jpg" alt="BY THE SEA " class="__image"/>
                  <div class="overlay bgc-dark-o-7">
                    <div class="cell-vertical-wrapper">
                      <div class="cell-middle">
                        <h4 class="__title"><a href="#">BY THE SEA </a></h4>
                        <div class="__caption font-serif-italic">Lorem ipsum dolor sit amet</div>
                      </div>
                    </div><a href="assets/images/portfolio/portfolio-9.jpg" class="__zoom zoom-button"><i class="icon-resize-full"></i></a>
                  </div>
                </div>
              </div>
              <div class="grid-item col-md-3 col-sm-6 col-xs-12 social-marketing content-marketing branding">
                <div class="block-portfolio overlay-container basic zoom"><img src="assets/images/portfolio/portfolio-10.jpg" alt="BY THE SEA " class="__image"/>
                  <div class="overlay bgc-dark-o-7">
                    <div class="cell-vertical-wrapper">
                      <div class="cell-middle">
                        <h4 class="__title"><a href="#">BY THE SEA </a></h4>
                        <div class="__caption font-serif-italic">Lorem ipsum dolor sit amet</div>
                      </div>
                    </div><a href="assets/images/portfolio/portfolio-10.jpg" class="__zoom zoom-button"><i class="icon-resize-full"></i></a>
                  </div>
                </div>
              </div>
              <div class="grid-item col-md-3 col-sm-6 col-xs-12 seo-optimization web-design social-marketing">
                <div class="block-portfolio overlay-container basic zoom"><img src="assets/images/portfolio/portfolio-11.jpg" alt="BY THE SEA " class="__image"/>
                  <div class="overlay bgc-dark-o-7">
                    <div class="cell-vertical-wrapper">
                      <div class="cell-middle">
                        <h4 class="__title"><a href="#">BY THE SEA </a></h4>
                        <div class="__caption font-serif-italic">Lorem ipsum dolor sit amet</div>
                      </div>
                    </div><a href="assets/images/portfolio/portfolio-11.jpg" class="__zoom zoom-button"><i class="icon-resize-full"></i></a>
                  </div>
                </div>
              </div>
              <div class="grid-item col-md-3 col-sm-6 col-xs-12 content-marketing graphic-design seo-optimization">
                <div class="block-portfolio overlay-container basic zoom"><img src="assets/images/portfolio/portfolio-12.jpg" alt="BY THE SEA " class="__image"/>
                  <div class="overlay bgc-dark-o-7">
                    <div class="cell-vertical-wrapper">
                      <div class="cell-middle">
                        <h4 class="__title"><a href="#">BY THE SEA </a></h4>
                        <div class="__caption font-serif-italic">Lorem ipsum dolor sit amet</div>
                      </div>
                    </div><a href="assets/images/portfolio/portfolio-12.jpg" class="__zoom zoom-button"><i class="icon-resize-full"></i></a>
                  </div>
                </div>
              </div>-->
              <!--<div class="grid-item col-md-3 col-sm-6 col-xs-12 web-design branding content-marketing">
                <div class="block-portfolio overlay-container basic zoom"><img src="assets/images/portfolio/portfolio-13.jpg" alt="BY THE SEA " class="__image"/>
                  <div class="overlay bgc-dark-o-7">
                    <div class="cell-vertical-wrapper">
                      <div class="cell-middle">
                        <h4 class="__title"><a href="#">BY THE SEA </a></h4>
                        <div class="__caption font-serif-italic">Lorem ipsum dolor sit amet</div>
                      </div>
                    </div><a href="assets/images/portfolio/portfolio-13.jpg" class="__zoom zoom-button"><i class="icon-resize-full"></i></a>
                  </div>
                </div>
              </div>-->
            </div>
          </div>
        </section>
      </div>
      <!--End Page Body-->