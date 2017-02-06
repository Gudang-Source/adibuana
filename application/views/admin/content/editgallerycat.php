<!-- Main content -->
			<div class="content-wrapper">

				<!-- Form horizontal -->
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">Edit Category <?php echo $katagori->title_eng ?></h5>
						<div class="heading-elements">
							<ul class="icons-list">
		                		<li><a data-action="collapse"></a></li>
		                		<li><a data-action="reload"></a></li>
		                		<li><a data-action="close"></a></li>
		                	</ul>
	                	</div>
					</div>

					<div class="panel-body">
                <form class="form-horizontal" method="post" action="<?php echo base_url() ?>admin/gallery_cat/update/<?php echo $katagori->id ?>" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Title (Indonesian)*</label>
                      <div class="col-sm-6">
                        <input type="text" name="title_ina" class="form-control" value="<?php echo $katagori->title_ina ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Title (English)*</label>
                      <div class="col-sm-6">
                        <input type="text" name="title_eng" class="form-control" value="<?php echo $katagori->title_eng ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Lead (Indonesian)</label>
                      <div class="col-sm-10">
                       <textarea id="editor-full" name="lead_ina" rows="10" cols="100"><?php echo $katagori->lead_ina ?></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Lead (English)</label>
                      <div class="col-sm-10">
                       <textarea id="editor-full-2" name="lead_eng" rows="10" cols="100"><?php echo $katagori->lead_eng ?></textarea>
                      </div>
                    </div>
                    <div class="form-group">
											<label class="col-lg-2 control-label">Picture</label>
											<div class="col-lg-4">
												<input name="pic" type="file" class="file-styled">
												<span class="help-block">Format : jpg, jpeg, png. Max file size 20Mb</span>
											</div>
										</div>
                    <div class="form-group">
                      <span class="help-block">(*) Must be filed</span>
                    </div>
                    
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <div class="text-right">
                      <a href="<?php echo base_url(); ?>admin/gallery_cat"><button type="button" class="btn btn-default">Back</button></a>
                      <button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
                    </div>
                  </div><!-- /.box-footer -->
                </form>

					</div>
				</div>
				<!-- /form horizontal -->

			</div>
			<!-- /main content -->    