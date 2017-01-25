 <!--Page Body-->
      <div id="page-body" class="page-body">
        <section class="page-section">
          <div class="container">
            <div class="row">
              <div class="col-md-9 section-block-p">
                <header class="hr-header">
                  <h2 class="smb"><?php echo $this->session->userdata('lang') == 'indonesia'? $fakultas->title_ina:$fakultas->title_eng; ?></h2>
                  <p class="common-serif __caption"><?php echo $this->lang->line('detail_prodi') ?></p>
                  <div class="separator-2-color"></div>
                </header>
                <?php echo $this->session->userdata('lang') == 'indonesia'? $fakultas->content_ina:$fakultas->content_eng; ?>

				<p class="common-serif __caption"><?php echo $this->lang->line('fasilitas') ?></p>
				<div class="separator-2-color"></div>
				<?php echo $this->session->userdata('lang') == 'indonesia'? $fakultas->facility_ina:$fakultas->facility_eng; ?>

				<p class="common-serif __caption"><?php echo $this->lang->line('kerja_sama') ?></p>
				<div class="separator-2-color"></div>
				<?php echo $this->session->userdata('lang') == 'indonesia'? $fakultas->coo_ina:$fakultas->coo_eng; ?>

				<p class="common-serif __caption"><?php echo $this->lang->line('prospek') ?></p>
				<div class="separator-2-color"></div>
				<?php echo $this->session->userdata('lang') == 'indonesia'? $fakultas->plulus_ina:$fakultas->plulus_eng; ?>
              </div>

              <div class="col-md-3 col-sm-6">
                <div class="widget widget-categories">
                  <ul class="__widget-content">
                    <li><a href="#">Bimbingan dan Konseling</a></li>
                    <li><a href="#">Pendidikan Kesejahteraan Keluarga</a></li>
                    <li><a href="#">Pendidikan Moral Pancasila dan Kewarganegaraan</a></li>
                    <li><a href="#">Pendidikan Bahasa dan Sastra Indonesia</a></li>
                    <li><a href="#">Pendidikan Matematika</a></li>
                    <li><a href="#">Pendidikan Bahasa Inggris</a></li>
                    <li><a href="#">Pendidikan Kepelatihan Olahraga</a></li>
                    <li><a href="#">Pendidikan Seni Rupa</a></li>
                    <li><a href="#">Pendidikan Guru Sekolah Dasar</a></li>
                    <li><a href="#">Pendidikan Guru - PAUD</a></li>
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