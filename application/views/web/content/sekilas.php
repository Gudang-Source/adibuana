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

              <div class="col-md-3 col-sm-6">
                <div class="widget widget-categories">
                  <ul class="__widget-content">
                    <li><a href="<?php echo base_url() ?>sekilas/para-pendiri-unipa/8617092013100647">Para Pendiri UNIPA</a></li>
                    <li><a href="<?php echo base_url() ?>sekilas/sambutan-rektor/319092013084049">Sambutan Rektor</a></li>
                    <li><a href="<?php echo base_url() ?>sekilas/visi-dan-misi/532503201416122">Visi dan Misi</a></li>
                    <li><a href="<?php echo base_url() ?>sekilas/sejarah/E_020">Sejarah</a></li>
                    <li><a href="#">Peta Kampus</a></li>
                    <li><a href="<?php echo base_url() ?>sekilas/luas-tanah-dan-disain/111903201411094">Luas Tanah dan Desain</a></li>
                    <li><a href="<?php echo base_url() ?>sekilas/jejaring-unipa-surabaya/719092013094952">Jejaring UNIPA Surabaya</a></li>
                    <li><a href="<?php echo base_url() ?>sekilas/daftar-hibah-unipa-surabaya/9719092013115310">Daftar Hibah UNIPA Surabaya</a></li>
                    <li><a href="<?php echo base_url() ?>sekilas/logo-hymne-mars/1415012013092135">Logo, Hymne, dan Mars</a></li>
                    <li><a href="#">Sarana</a></li>
                    <li><a href="#">Unit Kerja</a></li>
                  </ul>
                </div>
              </div>

              </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <!--End Page Body-->
