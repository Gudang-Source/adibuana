<!--Page Header-->
      <header class="page-header common-header bgc-dark-o-5">
        <div data-parallax="scroll" data-position="center -550px" data-image-src="https://unipasurabaya.files.wordpress.com/2012/09/cropped-unipa-mng.jpg" data-speed="0.3" class="parallax-background"></div>
        <div class="container text-center cell-vertical-wrapper">
          <div class="cell-middle">
            <h1 class="text-responsive nmb" id="size-header"><?php echo ucwords($this->session->userdata('lang') == 'indonesia'? $berita->type_ina:$berita->type_eng) ?></h1>
          </div>
        </div>
        <div class="ab-bottom col-xs-12">
          <div class="container">
            <div class="breadcrumb bgc-dark-o-6"><span class="__content italic font-serif fz-6-ss"><span><a href="index.html">Beranda</a></span><span><a href="#"><?php echo ucwords($this->session->userdata('lang') == 'indonesia'? $berita->type_ina:$berita->type_eng) ?></a></span><span>
          </div>
        </div>
      </header>
      <!--End Page Header-->

<script>
  var kode_page = '<?php echo $id ?>';
</script>
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
                    <h6 class="__widget-title"><?php echo $this->lang->line('katagori_lain')?></h6>
                    <ul class="__widget-content">
                      <?php
                        foreach ($kategori as $q_kategori) {
                          ?>
                              <li><a href="<?php echo base_url(); ?>berita-dan-pengumuman/<?php echo $q_kategori->type_ina ?>/<?php echo $q_kategori->id ?>"><?php echo ucwords($this->session->userdata('lang') == 'indonesia'? $q_kategori->type_ina:$q_kategori->type_eng) ?></a></li>
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
              <div class="col-md-8">
              <div id="beritadanpengumuman">
                <script>
                  var hal_pengumuman = ''+<?php echo $this->input->get('page')+'' ?>;
                  if(hal_pengumuman == 0){
                    hal_pengumuman = 1;
                  }
                </script>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    