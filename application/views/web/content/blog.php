<div id="page-body" class="page-body">
  <section class="page-section bgc-light">
    <div class="container">
      <div class="row">
         <div class="col-md-4 hidden-sm hidden-xs">
                <aside class="page-sidebar">
                  <div class="widget widget-categories">
                    <h6 class="__widget-title"><?php echo $this->lang->line('blog_lain')?></h6>
                    <ul class="__widget-content">
                      <?php
                        foreach ($type as $q_type) {
                          ?>
                              <li><a href="<?php echo base_url(); ?>blog/<?php echo $q_type->id ?>"><?php echo ucwords($this->session->userdata('lang') == 'indonesia'? $q_type->title_ina:$q_type->title_eng) ?></a></li>
                          <?php
                        }
                      ?>
                    </ul>
                  </div>
                </aside>
              </div>
              <div class="col-md-8">
               <header class="hr-header">
                  <h2 class="smb"><?php echo ucwords($this->session->userdata('lang') == 'indonesia'? $type_blog->title_ina:$type_blog->title_eng ) ?></h2>
                  <p class="common-serif __caption"></p>
                  <div class="separator-2-color"></div>
                </header>

                  <div class="wrapper-sekilas">
                    <?php
                      foreach ($blog as $q_blog) {
                        ?>
                        <p>ID &emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;: -</p>
                        <p>Pemilik &emsp;&nbsp;: <?php echo ucwords($q_blog->owner_name) ?></p>
                        <p>Tema &emsp;&emsp;&nbsp;: <?php echo ucwords($q_blog->theme) ?></p>
                        <p>Judul Blog : <a href="http://<?php echo $q_blog->link ?>"><?php echo $q_blog->header_title ?></a></p>
                        <hr>
                        <?php
                      }
                    ?>
                  
                  </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    