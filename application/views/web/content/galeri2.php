<!--Page Body-->
      <div id="page-body" class="page-body">
        <section class="page-section">
          <div class="container">
            <div class="row">
              <?php 
                foreach ($kategori_galeri as $kategori) {
                  ?>

                  <div class="col-md-4 col-xs-12 section-block col-sm-offset-3 col-sm-6 col-md-offset-0">
                    <div class="image-slider">
                      <div class="slider slide direction-nav control-nav">
                        <?php 
                          foreach ($kategori->galeri as $q_galeri) {
                        ?>
                         <div style="height: 250px;" class="__item">
                          <div class="__image"><img class="img-thumbnail" style="height:250px; width:100%; object-fit: contain;" src="<?php echo base_url(); ?>assets/images/gallery/<?php echo $kategori->id ?>/<?php echo $q_galeri->picture; ?>" alt="portfolio image"/></div>
                        </div>
                        <?php
                          }
                        ?>
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
