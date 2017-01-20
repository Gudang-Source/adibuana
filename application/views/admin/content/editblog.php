<!-- Main content -->
			<div class="content-wrapper">

				<!-- Form horizontal -->
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">Edit Blog</h5>
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
                      <label class="col-sm-2 control-label">Blog Type*</label>
                      <div class="col-sm-2">
                        <select name="blog" class="form-control">
                          <option value="<?php echo $blog->id_type ?>"><?php echo $blog->title_eng ?> </option>
                          <option>---------</option>
                          <?php
                            foreach ($tipe as $q_blog) {
                              echo'
                                <option value="'.$q_blog->id.'"> '.$q_blog->title_eng.' </option>
                              ';
                            }
                          
                          ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Pemilik*</label>
                      <div class="col-sm-6">
                        <input type="text" name="nama" class="form-control" value="<?php echo $blog->owner_name ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Tema*</label>
                      <div class="col-sm-6">
                        <input type="text" name="tema" class="form-control" value="<?php echo $blog->theme ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Judul Header*</label>
                      <div class="col-sm-6">
                        <input type="text" name="header" class="form-control" value="<?php echo $blog->header_title ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Blog Link*</label>
                      <div class="col-sm-6">
                        <span class="help-block">Without http://</span>
                        <input type="text" name="link" class="form-control" value="<?php echo $blog->link ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <span class="help-block">(*) Must be filed</span>
                    </div>

                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <div class="text-right">
                      <a href="<?php echo base_url(); ?>admin/blog"><button type="button" class="btn btn-default">Back</button></a>
                      <button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
                    </div>
                  </div><!-- /.box-footer -->
                </form>

					</div>
				</div>
				<!-- /form horizontal -->

			</div>
			<!-- /main content -->    