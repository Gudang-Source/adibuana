<div id="page-body" class="page-body">
        <section class="page-section bgc-light">
          <div class="container">
            <header class="section-block text-center">
              <h2 class="smb">Area <?php echo $this->session->userdata('lang') == 'indonesia'? $area->area_ina:$area->area_eng ?></h2>
            </header>
            <div class="row">
              <div class="col-md-5 section-block"><img src="assets/images/team/personal-avatar.jpg" alt="Google map" class="img-responsive center-block"></div>
              <div class="col-md-7 section-block-p">
                <h3 class="fz-3-l pt-10"><?php echo $this->lang->line('title') ?> <?php echo $this->lang->line('di') ?> <?php echo $this->session->userdata('lang') == 'indonesia'? $area->area_ina:$area->area_eng ?></h3>
                <div class="group-progressbar">
                  <div class="block-progressbar">
                    <h5 class="__title"><?php echo $this->lang->line('alamat') ?> :</h5>
                    <p>&nbsp;&nbsp;&emsp;<?php echo $area->address ?></p>
                  </div>
                  <div class="block-progressbar">
                    <h5 class="__title"><?php echo $this->lang->line('contact') ?> :</h5>
                    <p>&nbsp;&nbsp;&emsp;<?php echo $area->phone1 ?></p>
                    <p>&nbsp;&nbsp;&emsp;<?php echo $area->phone2 ?></p>
                    <p>&nbsp;&nbsp;&emsp;<?php echo $area->fax1 ?></p>
                    <p>&nbsp;&nbsp;&emsp;<?php echo $area->fax2 ?></p>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </section>

      </div>