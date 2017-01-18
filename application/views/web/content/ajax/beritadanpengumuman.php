          <?php
              foreach ($berita_katagori as $q_katagori) {
                  ?>
                  <div class="post  post-index post-left-image">
                    <?php 
                        if($q_katagori->picture == ''){
                            ?>
                            <div class="__header"><a href="#"><img src="http://shopproject30.com/wp-content/themes/venera/images/placeholder-camera-green.png" alt="CREATIVE BRANDING MOCKUP " class="img-responsive"/></a>
                            <?php
                        }else{
                            ?>
                            <div class="__header"><a href="#"><img src="http://www.unipasby.ac.id/css/data_images/news/<?php echo $q_katagori->picture; ?>" alt="CREATIVE BRANDING MOCKUP " class="img-responsive"/></a>
                            <?php
                        }
                    ?>
                    </div>
                    <div class="__main">
                      <div class="__title"><a href="blog-single-standard.html"><?php echo $q_katagori->title_ina; ?></a></div>
                      <?php 
                        if($q_katagori->post_date == '0000-00-00 00:00:00'){
                            ?>
                            <div class="__meta"><span>Diposting Tanggal :&nbsp;<span class="__value">00 00 0000</span>
                            <?php
                        }else{
                            ?>
                            <div class="__meta"><span>Diposting Tanggal :&nbsp;<span class="__value"><?php echo convertDateTime($q_katagori->post_date); ?></span>
                            <?php
                        }
                      ?>
                      </span><span>Oleh :&nbsp;<span class="__value"><?php echo $q_katagori->author; ?>
                      </span></span><span>Kategori :&nbsp;<span class="__value">HTML/CSS</span></span>
                      </div>
                      <div class="__content"><?php echo $q_katagori->lead_ina; ?></div>
                      <div class="post-index-group-button"><a href="<?php echo base_url().'detil-berita-dan-pengumuman/'.slugify($q_katagori->title_ina).'/'.$q_katagori->id ?>" class="btn-border btn-secondary">Selengkapnya...</a></div>
                    </div>
                  </div>
                  <?php
              }
            
            ?>
            <script>
            <?php 
            if($halaman == 0){
                ?>
                hal_pengumuman = 1;
                <?php
            }else{
                ?>
                hal_pengumuman = <?php echo $halaman ?>;
                <?php
            }
            ?>
           
                
            </script>
           <nav>
              <ul class="pagination">
                <?php echo $paging; ?>
              </ul>
            
            </nav>