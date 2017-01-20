<!-- Main content -->
			<div class="content-wrapper">

				<!-- Form horizontal -->
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">Edit Area <?php echo $area->area_eng ?></h5>
						<div class="heading-elements">
							<ul class="icons-list">
		                		<li><a data-action="collapse"></a></li>
		                		<li><a data-action="reload"></a></li>
		                		<li><a data-action="close"></a></li>
		                	</ul>
	                	</div>
					</div>

					<div class="panel-body">
                        <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/fakultas_area/update/'.$area->id ?>" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Area (Indonesian)*</label>
                              <div class="col-sm-6">
                                <input type="text" name="area_ina" class="form-control" value="<?php echo $area->area_ina ?>">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Area (English)*</label>
                              <div class="col-sm-6">
                                <input type="text" name="area_eng" class="form-control" value="<?php echo $area->area_eng ?>">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Address*</label>
                              <div class="col-sm-6">
                                <input type="text" name="address" class="form-control" value="<?php echo $area->address ?>">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Phone</label>
                              <div class="col-sm-6">
                                <input type="text" name="phone" class="form-control" value="<?php echo $area->phone1 ?>">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Alt. Phone</label>
                              <div class="col-sm-6">
                                <input type="text" name="alt_phone" class="form-control" value="<?php echo $area->phone2 ?>">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Fax</label>
                              <div class="col-sm-6">
                                <input type="text" name="fax" class="form-control" value="<?php echo $area->fax1 ?>">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Alt. Fax</label>
                              <div class="col-sm-6">
                                <input type="text" name="alt_fax" class="form-control" value="<?php echo $area->fax2 ?>">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Google Latitude</label>
                              <div class="col-sm-6">
                                <input type="text" name="google_lat" class="form-control" value="<?php echo $area->glatitude ?>">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Google Longitude</label>
                              <div class="col-sm-6">
                                <input type="text" name="google_long" class="form-control" value="<?php echo $area->glongitude ?>">
                              </div>
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <div class="text-right">
                                <a href="<?php echo base_url(); ?>admin/fakultas_area"><button type="button" class="btn btn-default">Back</button></a>
                                <button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
                            </div>
                        </div><!-- /.box-footer -->
                        </form>

					</div>
				</div>
				<!-- /form horizontal -->

			</div>
			<!-- /main content -->    