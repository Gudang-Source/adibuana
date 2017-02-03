<!-- Main content -->
			<div class="content-wrapper">

				<!-- Form horizontal -->
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">Add Faculty Detail</h5>
						<div class="heading-elements">
							<ul class="icons-list">
		                		<li><a data-action="collapse"></a></li>
		                		<li><a data-action="reload"></a></li>
		                		<li><a data-action="close"></a></li>
		                	</ul>
	                	</div>
					</div>

					<div class="panel-body">
                <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/fakultas_detail/insert" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Choose Faculty*</label>
                      <div class="col-sm-2">
                        <select name="fakultas" class="form-control">
                          <option> </option>
                          <?php
                            foreach ($fakultas as $q_fakultas) {
                              echo'
                                <option value="'.$q_fakultas->id.'"> '.$q_fakultas->title_eng.' </option>
                              ';
                            }
                          
                          ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Title (Indonesian)*</label>
                      <div class="col-sm-6">
                        <input type="text" name="title_ina" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Title (English)*</label>
                      <div class="col-sm-6">
                        <input type="text" name="title_eng" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-2 control-label">Picture</label>
                      <div class="col-lg-4">
                        <input type="file" class="file-styled" name="pic">
                        <span class="help-block">Format : jpg, jpeg, png. Max file size 20Mb</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <span class="help-block">(*) Must be filed</span>
                    </div>

                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <div class="text-right">
                      <button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
                    </div>
                  </div><!-- /.box-footer -->
                </form>

					</div>
				</div>
				<!-- /form horizontal -->

			</div>
			<!-- /main content -->    