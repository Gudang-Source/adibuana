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
                    <div class="__title"><a href="blog-single-standard.html"><?php echo $this->session->userdata('lang') == 'indonesia'? $karir->title_ina:$karir->title_eng ?></a></div>
                    <div class="__meta"><span>Posted:&nbsp;<span class="__value"><?php echo $karir->post_date ?></span></span><span><?php echo $this->lang->line('post_by') ?>:&nbsp;<span class="__value"><?php echo $karir->name ?></span></span>
                    </div>

                    <div class="__header blog-detail-thumb"><img src="<?php echo base_url() ?>assets/images/career/<?php echo $karir->picture ?>" alt="<?php echo $karir->title_ina ?>" class="img-responsive"/>
                    </div>

                    <div class="__content"><p><?php echo $this->session->userdata('lang') == 'indonesia'? $karir->content_ina:$karir->content_eng; ?></p></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <!--End Page Body-->
