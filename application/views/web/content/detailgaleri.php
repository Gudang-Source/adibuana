      <!--Page Body-->
      <div id="page-body" class="page-body">
        <section class="page-section">
          <div class="container">
            <div class="row magnific-gallery">
              <?php
                foreach ($galeri as $q_galeri) {
                  ?>
                  <div class="col-md-4 col-sm-6 col-xs-12 pb-30">
                    <div data-mfp-src="<?php echo base_url(); ?>assets/images/gallery/<?php echo $q_galeri->id_cat ?>/<?php echo $q_galeri->picture ?>" class="block-image-zoom overlay-container img-wrapper zoom-button"><img class="img-thumbnail" style="height: 250px; object-fit: cover; width: 100%" src="<?php echo base_url(); ?>assets/images/gallery/<?php echo $q_galeri->id_cat ?>/<?php echo $q_galeri->picture ?>" alt="<?php echo $q_galeri->title_ina ?>"/>
                      <div class="overlay-hover bgc-dark-o-6">
                        <div class="__icon"><i class="icon-resize-full"></i></div>
                      </div>
                    </div>
                    <div class="galeri-detail-content">
                      <h3><?php echo $q_galeri->title_ina; ?></h3>
                      <p><?php echo $q_galeri->lead_ina; ?></p>
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