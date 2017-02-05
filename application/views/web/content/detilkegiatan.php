<!--Page Body-->
      <div id="page-body" class="page-body">
        <section class="page-section bgc-light" id="detilkegiatan">
          <div class="container">
            <div class="row">
              <div class="col-md-4 hidden-sm hidden-xs">
                <aside class="page-sidebar">
                  <div class="widget widget-search">
                    <div class="__widget-content">
                      <form method="post" class="search-box">
                        <input type="search" placeholder="Search..."/>
                        <button type="submit"><i class="icon-search-icon"></i></button>
                      </form>
                    </div>
                  </div>
                  
                  <div class="widget widget-recent-post">
                    <h6 class="__widget-title">Kegiatan Sering Dibaca</h6>
                    <div class="__widget-content">
                      <?php 
                        foreach ($most_viewed as $q_kegiatan) {
                          ?>
                          <div class="rpost"><a href="#" class="__img" style="margin-bottom: 10px;">
                            <?php 
                              if($q_kegiatan->picture == ''){
                                ?>
                                  <img class="img-thumbnail" style="height: 75px; width:100%; object-fit: cover;" src="http://shopproject30.com/wp-content/themes/venera/images/placeholder-camera-green.png" alt="thumbnail"/></a>
                                <?php
                              }else{
                                ?>
                                  <img class="img-thumbnail" style="height: 75px; width:100%; object-fit: cover;" src="<?php echo base_url().'assets/images/event/'.$q_kegiatan->picture; ?>" alt="thumbnail"/></a>
                                <?php      
                              }
                            ?>
                            <div class="__content" style="min-height: 75px">
                              <div class="__title"><a href="#"><?php echo $q_kegiatan->title_ina ?></a></div>
                              <div class="__date font-serif-italic color-secondary"><i class="fa fa-clock"></i> <?php echo $q_kegiatan->post_date ?></div>
                              <div class="__date font-serif-italic color-secondary">Dilihat : <?php echo $q_kegiatan->hit ?></div>
                            </div>
                          </div> 
                          <?php
                        }
                      ?>                    
                    </div>
                  </div>

                  <div class="widget widget-twitter">
                    <h6 class="__widget-title">Tweet Terakhir</h6>
                    <div class="__widget-content">
                      <div class="twiter-item"><i class="__icon fa fa-twitter color-secondary"></i>
                        <div class="__content">
                          <div class="__title">#Lorem ipsum dolor sit amet, consectetur adipiscing elit. </div><a href="#" class="__link color-secondary">http://bly.shotlinks.com</a>
                          <div class="__time font-serif-italic">October 23, 2015</div>
                        </div>
                      </div>
                      <div class="twiter-item"><i class="__icon fa fa-twitter color-secondary"></i>
                        <div class="__content">
                          <div class="__title">#Lorem ipsum dolor sit amet, consectetur adipiscing elit. </div><a href="#" class="__link color-secondary">http://bly.shotlinks.com</a>
                          <div class="__time font-serif-italic">October 23, 2015</div>
                        </div>
                      </div>
                      <div class="twiter-item"><i class="__icon fa fa-twitter color-secondary"></i>
                        <div class="__content">
                          <div class="__title">#Lorem ipsum dolor sit amet, consectetur adipiscing elit. </div><a href="#" class="__link color-secondary">http://bly.shotlinks.com</a>
                          <div class="__time font-serif-italic">October 23, 2015</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </aside>
              </div>
              <div class="col-md-8 col-xs-12">
                <div class="post">
                  <div class="__main">
                    <div class="__title"><a href="blog-single-standard.html"><?php echo $kegiatan->title_ina ?></a></div>
                    <div class="__meta"><span>Di terbitkan :&nbsp;<span class="__value"> <?php echo convertDateTime($q_kegiatan->post_date) ?> </span></span><span>Oleh :&nbsp;<span class="__value"><?php echo $q_kegiatan->author; ?></span></span>
                    </div>

                    <div class="__header blog-detail-thumb"><img class="img-thumbnail" src="<?php echo base_url().'assets/images/event/'.$kegiatan->picture ?>" alt="<?php echo $kegiatan->title_ina ?>" class="img-responsive"/>
                    </div>

                    <div class="__content"><p><?php echo $kegiatan->content_ina; ?></p></div>
                  </div>
                </div>

                <h3>Bagikan</h3>
                <div class="group-share-module-3 __5-modules">
                  <div class="module-facebook"><a href="#">
                      <div class="__block"><span class="__icon"><i class="icon-facebook-1"></i></span><span class="__name">FACEBOOK</span></div></a></div>
                  <div class="module-twitter"><a href="#">
                      <div class="__block"><span class="__icon"><i class="icon-twitter-1"></i></span><span class="__name">TWITTER</span></div></a></div>
                  <div class="module-google-plus"><a href="#">
                      <div class="__block"><span class="__icon"><i class="icon-gplus"></i></span><span class="__name">GOOGLE PLUS</span></div></a></div>
                  <div class="module-linkedin"><a href="#">
                      <div class="__block"><span class="__icon"><i class="icon-linkedin-1"></i></span><span class="__name">LINKEDIN</span></div></a></div>
                  <div class="module-pinterest"><a href="#">
                      <div class="__block"><span class="__icon"><i class="icon-pinterest"></i></span><span class="__name">PINTEREST</span></div></a></div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <!--End Page Body-->
