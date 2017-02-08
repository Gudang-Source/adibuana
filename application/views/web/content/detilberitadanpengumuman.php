<!--Page Body-->
      <div id="page-body" class="page-body">
        <section class="page-section bgc-light">
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
                  <div class="widget widget-categories">
                    <h6 class="__widget-title">KATEGORI LAIN</h6>
                    <ul class="__widget-content">
                      <?php
                        foreach ($kategori as $q_kategori) {
                          ?>
                              <li><a href="<?php echo base_url(); ?>berita-dan-pengumuman/<?php echo $q_kategori->type_ina ?>/<?php echo $q_kategori->id ?>"><?php echo ucwords($q_kategori->type_ina) ?></a></li>
                          <?php
                        }
                      ?>
                    </ul>
                  </div>
                  <div class="widget widget-recent-post">
                    <h6 class="__widget-title">Berita Sering Dibaca</h6>
                    <div class="__widget-content">
                      <div class="rpost"><a href="#" class="__img"><img src="assets/images/blog/recent-post-thumbnail-1.jpg" alt="thumbnail"/></a>
                        <div class="__content">
                          <div class="__title"><a href="#">How To Improve And Refine</a></div>
                          <div class="__date font-serif-italic color-secondary">July 9, 2014</div>
                        </div>
                      </div>
                      <div class="rpost"><a href="#" class="__img"><img src="assets/images/blog/recent-post-thumbnail-2.jpg" alt="thumbnail"/></a>
                        <div class="__content">
                          <div class="__title"><a href="#">How To Improve And Refine</a></div>
                          <div class="__date font-serif-italic color-secondary">July 9, 2014</div>
                        </div>
                      </div>
                      <div class="rpost"><a href="#" class="__img"><img src="assets/images/blog/recent-post-thumbnail-3.jpg" alt="thumbnail"/></a>
                        <div class="__content">
                          <div class="__title"><a href="#">How To Improve And Refine</a></div>
                          <div class="__date font-serif-italic color-secondary">July 9, 2014</div>
                        </div>
                      </div>
                      <div class="rpost"><a href="#" class="__img"><img src="assets/images/blog/recent-post-thumbnail-4.jpg" alt="thumbnail"/></a>
                        <div class="__content">
                          <div class="__title"><a href="#">How To Improve And Refine</a></div>
                          <div class="__date font-serif-italic color-secondary">July 9, 2014</div>
                        </div>
                      </div>
                      <div class="rpost"><a href="#" class="__img"><img src="assets/images/blog/recent-post-thumbnail-5.jpg" alt="thumbnail"/></a>
                        <div class="__content">
                          <div class="__title"><a href="#">How To Improve And Refine</a></div>
                          <div class="__date font-serif-italic color-secondary">July 9, 2014</div>
                        </div>
                      </div>
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
                    <div class="__title"><a href="blog-single-standard.html"><?php echo $berita->title_ina ?></a></div>
                    <div class="__meta"><span>Posted:&nbsp;<span class="__value">October 16, 2015 </span></span><span><?php echo $this->lang->line('post_by') ?>:&nbsp;<span class="__value">Admin</span></span><span>Categories:&nbsp;<span class="__value">HTML/CSS</span></span>
                    </div>

                    <div class="__header blog-detail-thumb"><img src="http://www.unipasby.ac.id/css/data_images/news/<?php echo $berita->thumb ?>" alt="<?php echo $berita->title_ina ?>" class="img-responsive"/>
                    </div>

                    <div class="__content"><p><?php echo $berita->content_ina; ?></p></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <!--End Page Body-->
