 <!--Page Body-->
      <div id="page-body" class="page-body">
        <section class="page-section">
          <div class="container">
            <div class="row">
              <div class="col-md-9 section-block-p">
                <header class="hr-header">
                  <h2 class="smb"><?php echo $this->session->userdata('lang') == 'indonesia'? $page->title_ina:$page->title_eng ?></h2>
                  <p class="common-serif __caption"></p>
                  <div class="separator-2-color"></div>
                </header>

                  <div class="wrapper-sekilas">
                    <?php echo $this->session->userdata('lang') == 'indonesia'? $page->content_ina:$page->content_eng; ?>
                  </div>

              </div>


              </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <!--End Page Body-->
