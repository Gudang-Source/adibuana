<?php
  foreach ($karir as $q_karir) {
    ?>
      <div class="post  post-index post-left-image">
        <div class="__header"><a href="#">
        <?php 
          if($q_karir->picture == ""){
            ?>
              <img class="img-thumbnail" style="height:250px; object-fit:cover; width:100%;" src="http://shopproject30.com/wp-content/themes/venera/images/placeholder-camera-green.png" alt="thumbnail"/></a>
            <?php
          }else{
            ?>
              <img style="height:250px; object-fit:cover; width:100%;" class="img-thumbnail" src="<?php echo base_url().'assets/images/career/'.$q_karir->picture ?>" alt="<?php echo $q_karir->title_ina ?>" class="img-responsive"/></a>
            <?php
          }
        ?>
        </div>
        <div class="__main">
          <div class="__title">
            <a href="<?php echo base_url().'karir-detail/'.slugify($q_karir->title_ina).'/'.$q_karir->id ?>"><?php echo $this->session->userdata('lang') == 'indonesia'? $q_karir->title_ina:$q_karir->title_eng; ?></a>
          </div>
          <div class="__meta"><span>Diterbitkan :&nbsp;<span class="__value"><?php echo convertDateTime($q_karir->post_date); ?></span></span><span>Oleh :&nbsp;<span class="__value"><?php echo $q_karir->author; ?></span></span>
          </div>
          <div class="__content"><?php echo $this->session->userdata('lang') == 'indonesia'? $q_karir->lead_ina:$q_karir->lead_eng; ?></div>
          <div class="post-index-group-button"><a href="<?php echo base_url().'event-detail/'.slugify($q_karir->title_ina).'/'.$q_karir->id ?>" class="btn btn-primary"><?php echo $this->lang->line('more') ?></a></div>
        </div>
      </div>

    <?php
  }
?>
  <script>
    <?php 
    if($halaman == 0){
        ?>
        hal_karir = 1;
        <?php
    }else{
        ?>
        hal_karir = <?php echo $halaman ?>;
        <?php
    }
    ?>
   
        
  </script>
<nav>
  <ul class="pagination">
    <?php echo $paging; ?>
  </ul>
</nav>