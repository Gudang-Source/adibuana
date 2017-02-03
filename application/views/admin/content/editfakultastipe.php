<!-- Main content -->
			<div class="content-wrapper">

				<!-- Form horizontal -->
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">Edit Type <?php echo $fakultas->type_eng ?></h5>
						<div class="heading-elements">
							<ul class="icons-list">
		                		<li><a data-action="collapse"></a></li>
		                		<li><a data-action="reload"></a></li>
		                		<li><a data-action="close"></a></li>
		                	</ul>
	                	</div>
					</div>

					<div class="panel-body">
                <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/fakultas_tipe/update/'.$fakultas->id ?>" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Type (Indonesian)*</label>
                      <div class="col-sm-6">
                        <input type="text" name="type_ina" class="form-control" value="<?php echo $fakultas->type_ina ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Type (English)*</label>
                      <div class="col-sm-6">
                        <input type="text" name="type_eng" class="form-control" value="<?php echo $fakultas->type_eng ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <span class="help-block">(*) Must be filed</span>
                    </div>

                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <div class="text-right">
                      <a href="<?php echo base_url(); ?>admin/fakultas_tipe"><button type="button" class="btn btn-default">Back</button></a>
                      <button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
                    </div>
                  </div><!-- /.box-footer -->
                </form>

					</div>
				</div>
				<!-- /form horizontal -->

			</div>
			<!-- /main content -->    