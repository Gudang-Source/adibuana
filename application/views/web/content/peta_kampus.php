<div id="page-body" class="page-body">
  <section class="page-section bgc-light">
    <div class="container">
      <header class="section-block text-center">
        <h2 class="smb">Area <?php echo $this->session->userdata('lang') == 'indonesia'? $area->area_ina:$area->area_eng ?></h2>
      </header>
      <div class="row">
        <div class="col-md-7 section-block">
          <div class="petalokasi">
            <div id="map_lokasi_sendiri" style="height: 300px;"></div>
          </div>
        </div>
        <div class="col-md-5 section-block-p">
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDytkyUX2xb4hze3Gn949SwtKYZx2f2VEQ"></script>    
    <script type="text/javascript">
    create_kampus_map();

       function create_kampus_map(){
            var map;
            var bounds = new google.maps.LatLngBounds();
            var mapOptions = {
                center: {lat :<?php echo $area->glatitude ?>, lng: <?php echo $area->glongitude ?>},
                mapTypeId: 'roadmap'
            };
                            
            // Display a map on the page
            map = new google.maps.Map(document.getElementById("map_lokasi_sendiri"), mapOptions);
            map.setTilt(45);
                
            // Multiple Markers
            var markers = [
                ['<?php echo $area->area_ina ?>', <?php echo $area->glatitude ?>, <?php echo $area->glongitude ?>],
            ];
                                
           
                
            // Display multiple markers on a map
            var infoWindow = new google.maps.InfoWindow(), marker, i;
            
            // Loop through our array of markers & place each one on the map  
            for( i = 0; i < markers.length; i++ ) {
                var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
                bounds.extend(position);
                marker = new google.maps.Marker({
                    position: position,
                    map: map,
                    title: markers[i][0]
                });

                // Automatically center the map fitting all markers on the screen
                map.fitBounds(bounds);
            }

            // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
            var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
                this.setZoom(16);
                google.maps.event.removeListener(boundsListener);
            });
          }
    </script>