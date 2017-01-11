<div id="page-body" class="page-body">
        <section class="page-section bgc-light">
          <div class="container">
          <?php
              foreach ($karir as $q_karir) {
                echo'
                  <div class="post  post-index post-left-image">
                    <div class="__header"><a href="#"><img src="http://www.unipasby.ac.id/css/data_images/career/';?><?php echo $q_karir->picture; ?><?php echo'" alt="No Picture" class="img-responsive"/></a>
                    </div>
                    <div class="__main">
                      <div class="__title"><a href="blog-single-standard.html">';?><?php echo $q_karir->title_ina; ?><?php echo'</a></div>
                      <div class="__meta"><span>Posted:&nbsp;<span class="__value">'?><?php echo $q_karir->post_date; ?><?php echo'</span></span><span>By:&nbsp;<span class="__value">'?><?php echo $q_karir->author; ?><?php echo'</span></span><span>Categories:&nbsp;<span class="__value">HTML/CSS</span></span>
                      </div>
                      <div class="__content">';?><?php echo $q_karir->lead_ina; ?> <?php echo' </div>
                      <div class="post-index-group-button"><a href="blog-single-standard.html" class="btn btn-primary">SELENGKAPNYA...</a></div>
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