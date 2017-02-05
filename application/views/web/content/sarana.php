<div id="page-body" class="page-body">
  <section class="page-section bgc-light">
    <div class="group-portfolio isotope-container">
      <div class="container">
        <div class="portfolio-filter">
        <a href="#" data-filter="*" class="filter-button is-checked">Seluruhnya</a>
        <a href="#" data-filter=".app" class="filter-button">Aplikasi </a>
        <a href="#" data-filter=".eng" class="filter-button">Teknik</a>
        <a href="#" data-filter=".heal" class="filter-button">Kesehatan</a>
        <a href="#" data-filter=".lab" class="filter-button">Laboratorium</a>
        <a href="#" data-filter=".tech" class="filter-button">Teknologi</a>
        <a href="#" data-filter=".etc" class="filter-button">Lain-lain</a>
        </div>
      </div>
      <div class="isotope-grid remove-gutter container sarana">
        <?php
        foreach ($facility as $q_facility) {
          ?>
            <div class="grid-item col-md-3 col-sm-6 col-xs-12 <?php echo $q_facility->type ?>">
              <div class="block-portfolio overlay-container basic zoom"><img src="<?php echo base_url() ?>assets/images/facility/<?php echo $q_facility->picture ?>" alt=" " class="__image"/>
                <div class="overlay bgc-dark-o-7">
                  <div class="cell-vertical-wrapper">
                    <div class="cell-middle">
                      <h4 class="__title"><a href="<?php echo base_url() ?>assets/images/facility/<?php echo $q_facility->picture ?>" class="__zoom zoom-button"><?php echo $q_facility->title_ina ?></a></h4>
                    </div>
                  </div><a href="<?php echo base_url() ?>assets/images/facility/<?php echo $q_facility->picture ?>" class="__zoom zoom-button"><i class="icon-resize-full"></i></a>
                </div>
              </div>

              <div class="deskripsi-fasilitas">
                <h3><?php echo $q_facility->title_ina ?></h3>
                <p><?php echo $q_facility->lead_ina ?></p>
              </div>

            </div>
          <?php
        }
        ?>
        
        
      </div>
    </div>
  </section>
</div>