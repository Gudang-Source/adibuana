          <?php

              if(sizeof($berita_katagori) == 0){
                ?>
                <center>Tidak Ditemukan Hasil Pencarian Dengan Kata Kunci "<?php echo $this->input->get('keyword') ?>"</center>
                <?php
              }

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
                            <div class="__header"><a href="#"><img src="<?php echo base_url(); ?>assets/images/news/<?php echo $q_katagori->picture; ?>" class="img-responsive"/></a>
                            <?php
                        }
                    ?>
                    </div>
                    <div class="__main">
                      <div class="__title"><a href="blog-single-standard.html"><?php echo $this->session->userdata('lang') == 'indonesia'? $q_katagori->title_ina:$q_katagori->title_eng; ?></a></div>
                      <?php 
                        if($q_katagori->post_date == '0000-00-00 00:00:00'){
                            ?>
                            <div class="__meta"><span><?php echo $this->lang->line('tgl_posting')?> :&nbsp;<span class="__value">00 00 0000</span>
                            <?php
                        }else{
                            ?>
                            <div class="__meta"><span><?php echo $this->lang->line('tgl_posting')?> :&nbsp;<span class="__value"><?php echo convertDateTime($q_katagori->post_date); ?></span>
                            <?php
                        }
                      ?>
                      </span><span><?php echo $this->lang->line('post_by')?> :&nbsp;<span class="__value"><?php echo $q_katagori->author; ?>
                      </span></span>
                      </div>
                      <div class="__content"><?php echo $this->session->userdata('lang') == 'indonesia'? $q_katagori->lead_ina:$q_katagori->lead_eng; ?></div>
                      <div class="post-index-group-button"><a href="<?php echo base_url().'detil-berita-dan-pengumuman/'.slugify($q_katagori->title_ina).'/'.$q_katagori->id ?>" class="btn-border btn-secondary"><?php echo $this->lang->line('more')?></a></div>
                    </div>
                  </div>
                  <?php
              }
            
            ?>
            <script>
            var kata = '<?php echo $this->input->get('keyword') ?>';
            <?php 
            if($halaman == 0){
                ?>
                hal_pencarian = 1;
                <?php
            }else{
                ?>
                hal_pencarian = <?php echo $halaman ?>;
                <?php
            }
            ?>
           
                
            </script>
           <nav>
              <ul class="pagination">
                <?php echo $paging; ?>
              </ul>
            
            </nav>