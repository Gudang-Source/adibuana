<!-- Main content -->
			<div class="content-wrapper">

				<!-- Form horizontal -->
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">Tambah Fasilitas</h5>
						<div class="heading-elements">
							<ul class="icons-list">
		                		<li><a data-action="collapse"></a></li>
		                		<li><a data-action="reload"></a></li>
		                		<li><a data-action="close"></a></li>
		                	</ul>
	                	</div>
					</div>

					<div class="panel-body">
                <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/facility/insert" enctype="multipart/form-data">
                  <div class="box-body">

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Type *</label>
                      <div class="col-sm-2">
                        <select class="form-control" name="type">
                          <option value="app">Application</option>
                          <option value="eng">Enginering</option>
                          <option value="heal">Health</option>
                          <option value="lab">Laboratory</option>
                          <option value="tech">Technology</option>
                          <option value="etc">Etc</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Title Indonesian *</label>
                      <div class="col-sm-6">
                        <input type="text" name="title_ina" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Title English *</label>
                      <div class="col-sm-6">
                        <input type="text" name="title_eng" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Lead Indonesian</label>
                      <div class="col-sm-10">
                       <textarea id="editor-full" name="lead_ina" rows="10" cols="100"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Lead English</label>
                      <div class="col-sm-10">
                       <textarea id="editor-full-2" name="lead_eng" rows="10" cols="100"></textarea>
                      </div>
                    </div>
                     <div class="form-group">
                      <label class="col-sm-2 control-label">Tools Indonesian</label>
                      <div class="col-sm-10">
                       <textarea id="editor-full-3" name="tools_ina" rows="10" cols="100"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Tools English</label>
                      <div class="col-sm-10">
                       <textarea id="editor-full-4" name="tools_eng" rows="10" cols="100"></textarea>
                      </div>
                    </div>
                     <div class="form-group">
                      <label class="col-sm-2 control-label">Etc Indonesian</label>
                      <div class="col-sm-10">
                       <textarea id="editor-full-5" name="etc_ina" rows="10" cols="100"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Etc English</label>
                      <div class="col-sm-10">
                       <textarea id="editor-full-6" name="etc_eng" rows="10" cols="100"></textarea>
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Thumbnail</label>
                        <div class="col-lg-4">
                            <input type="file" class="file-styled" name="thumb_fasilitas">
                            <span class="help-block">Format : jpg, jpeg, png. Max file size 20Mb</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Picture</label>
                        <div class="col-lg-4">
                            <input type="file" class="file-styled" name="picture_fasilitas">
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