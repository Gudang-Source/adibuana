<div id="page-body" class="page-body">
        <section class="page-section bgc-light">
          <div class="group-portfolio isotope-container">
            <div class="container">
              <div class="portfolio-filter"><a href="#" data-filter="*" class="filter-button is-checked">Seluruhnya</a><a href="#" data-filter=".web-design" class="filter-button">Aplikasi </a><a href="#" data-filter=".graphic-design" class="filter-button">Teknik</a><a href="#" data-filter=".branding" class="filter-button">Kesehatan</a><a href="#" data-filter=".social-marketing" class="filter-button">Laboratorium</a><a href="#" data-filter=".seo-optimization" class="filter-button">Teknologi</a><a href="#" data-filter=".content-marketing" class="filter-button">Lain-lain</a>
              </div>
            </div>
            <div class="isotope-grid remove-gutter container">
              <?php
              foreach ($facility as $q_facility) {
                echo'
                  <div class="grid-item col-md-3 col-sm-6 col-xs-12 graphic-design social-marketing web-design">
                    <div class="block-portfolio overlay-container basic zoom"><img src="'.base_url() ?>assets/images/facility/<?php echo $q_facility->picture.'" alt=" " class="__image"/>
                      <div class="overlay bgc-dark-o-7">
                        <div class="cell-vertical-wrapper">
                          <div class="cell-middle">
                            <h4 class="__title"><a href="#">'.$q_facility->title_ina.'</a></h4>
                          </div>
                        </div><a href="'.base_url() ?>assets/images/facility/<?php echo $q_facility->picture.'" class="__zoom zoom-button"><i class="icon-resize-full"></i></a>
                      </div>
                    </div>
                  </div>
                ';
              }
              ?>
              
              
            </div>
          </div>
        </section>
      </div>y