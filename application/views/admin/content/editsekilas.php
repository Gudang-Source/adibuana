<!-- Main content -->
			<div class="content-wrapper">

				<!-- Form horizontal -->
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">Edit <?php echo $sekilas->title_ina ?></h5>
						<div class="heading-elements">
							<ul class="icons-list">
		                		<li><a data-action="collapse"></a></li>
		                		<li><a data-action="reload"></a></li>
		                		<li><a data-action="close"></a></li>
		                	</ul>
	                	</div>
					</div>

					<div class="panel-body">
                        <form class="form-horizontal">
                        <div class="box-body">
                            <div class="form-group">
                            <label class="col-sm-2 control-label">Title Indonesian *</label>
                            <div class="col-sm-6">
                                <input type="text" name="title_ina" class="form-control" value="<?php echo $sekilas->title_ina ?>">
                            </div>
                            </div>
                            <div class="form-group">
                            <label class="col-sm-2 control-label">Title English *</label>
                            <div class="col-sm-6">
                                <input type="text" name="title_eng" class="form-control" value="<?php echo $sekilas->title_eng ?>">
                            </div>
                            </div>
                            <div class="form-group">
                            <label class="col-sm-2 control-label">Content Indonesian</label>
                            <div class="col-sm-10">
                            <textarea id="editor-full" name="konten_ina" rows="8" cols="100"><?php echo $sekilas->content_ina ?></textarea>
                            </div>
                            </div>
                            <div class="form-group">
                            <label class="col-sm-2 control-label">Content English</label>
                            <div class="col-sm-10">
                            <textarea id="editor-full-2" name="konten_eng" rows="8" cols="100"><?php echo $sekilas->content_eng ?></textarea>
                            </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">File Upload</label>
                                <div class="col-lg-4">
                                    <input type="file" class="file-styled">
                                    <span class="help-block">Format Gambar : jpg, jpeg, png. Max file size 20Mb</span>
                                </div>
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