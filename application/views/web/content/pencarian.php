<!--Page Header-->
<header class="page-header common-header bgc-dark-o-5">
  <div data-parallax="scroll" data-position="center -550px" data-image-src="https://unipasurabaya.files.wordpress.com/2012/09/cropped-unipa-mng.jpg" data-speed="0.3" class="parallax-background"></div>
  <div class="container text-center cell-vertical-wrapper">
    <div class="cell-middle">
      <h1 class="text-responsive nmb" id="size-header">Pencarian</h1>
    </div>
  </div>
  <div class="ab-bottom col-xs-12">
    <div class="container">
      <div class="breadcrumb bgc-dark-o-6"><span class="__content italic font-serif fz-6-ss"><span><a href="index.html">Beranda</a></span><span><a href="#">Pencarian</a></span><span>
    </div>
  </div>
</header>
<!--End Page Header-->

<script>
  nama_halaman = 'pencarian';
</script>
<div id="page-body" class="page-body">
  <section class="page-section bgc-light">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-3">
          <div id="pencarian">
            <script>
              var hal_pencarian = ''+<?php echo $this->input->get('page')+'' ?>;
              if(hal_pencarian == 0){
                hal_pencarian = 1;
              }
              var kata = '<?php echo $this->input->get('keyword') ?>';
              console.log(kata);
            </script>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
    