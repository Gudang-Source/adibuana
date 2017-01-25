<div id="page-body" class="page-body">
        <section class="page-section bgc-light">
          <div class="container">
          <?php
              foreach ($kegiatan as $q_kegiatan) {
                echo'
                  <div class="post  post-index post-left-image">
                    <div class="__header"><a href="#"><img src="http://www.unipasby.ac.id/css/data_images/event/';?><?php echo $q_kegiatan->picture; ?><?php echo'" alt="NO PICTURE" class="img-responsive"/></a>
                    </div>
                    <div class="__main">
                      <div class="__title"><a href="blog-single-standard.html">';?><?php echo $this->session->userdata('lang') == 'indonesia'? $q_kegiatan->title_ina:$q_kegiatan->title_eng; ?><?php echo'</a></div>
                      <div class="__meta"><span>Posted:&nbsp;<span class="__value">'?><?php echo $q_kegiatan->post_date; ?><?php echo'</span></span><span>By:&nbsp;<span class="__value">'?><?php echo $q_kegiatan->author; ?><?php echo'</span></span><span>Categories:&nbsp;<span class="__value">HTML/CSS</span></span>
                      </div>
                      <div class="__content">';?><?php echo $this->session->userdata('lang') == 'indonesia'? $q_kegiatan->lead_ina:$q_kegiatan->lead_eng; ?> <?php echo' </div>
                      <div class="post-index-group-button"><a href="blog-single-standard.html" class="btn btn-primary">'.$this->lang->line('more').'</a></div>
                    </div>
                  </div>


                ';
              }
            
            ?>
            <div class="container text-center section-block">
            <nav>
              <ul class="pagination">
                <li><a href="#" aria-label="Previous"><span aria-hidden="true">&#10094;</span></a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#" aria-label="Next"><span aria-hidden="true">&#10095;</span></a></li>
              </ul>
            </nav>
          </div>
          </div>
        </section>
      </div>