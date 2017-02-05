      <!--Page Header-->
      <header class="page-header common-header bgc-dark-o-5">
        <div data-parallax="scroll" data-position="center -550px" data-image-src="https://unipasurabaya.files.wordpress.com/2012/09/cropped-unipa-mng.jpg" data-speed="0.3" class="parallax-background"></div>
        <div class="container text-center cell-vertical-wrapper">
          <div class="cell-middle">
            <h1 class="text-responsive nmb" id="size-header">Kegiatan</h1>
          </div>
        </div>
        <div class="ab-bottom col-xs-12">
          <div class="container">
            <div class="breadcrumb bgc-dark-o-6"><span class="__content italic font-serif fz-6-ss"><span><a href="index.html">Beranda</a></span><span><a href="#">Kegiatan</a></span><span>
          </div>
        </div>
      </header>
      <!--End Page Header-->
      <script type="text/javascript">
          nama_halaman = 'kegiatan';
      </script>
      <div id="page-body" class="page-body">
        <section class="page-section bgc-light" id="list-kegiatan">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <div id="kegiatan">
                    <script>
                      var hal_kegiatan = ''+<?php echo $this->input->get('page')+'' ?>;
                      if(hal_kegiatan == 0){
                        hal_kegiatan = 1;
                      }
                    </script>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>