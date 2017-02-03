<!-- Main content -->
			<div class="content-wrapper">

				<!-- Form horizontal -->
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">Edit <?php echo $jurusan->title_eng ?></h5>
						<div class="heading-elements">
							<ul class="icons-list">
		                		<li><a data-action="collapse"></a></li>
		                		<li><a data-action="reload"></a></li>
		                		<li><a data-action="close"></a></li>
		                	</ul>
	                	</div>
					</div>

					<div class="panel-body">
                <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/faculty_course/update/'.$jurusan->id ?>" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Choose Faculty Course*</label>
                      <div class="col-sm-2">
                        <select name="fakultas" class="form-control">
                          <option value="<?php echo $jurusan->id_fac ?>"><?php echo $jurusan->nama_fakultas ?></option>
                          <option>---------</option>
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
                      <label class="col-sm-2 control-label">Title (Indonesia)*</label>
                      <div class="col-sm-6">
                        <input type="text" name="title_ina" class="form-control" value="<?php echo $jurusan->title_ina ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Title (English)*</label>
                      <div class="col-sm-6">
                        <input type="text" name="title_eng" class="form-control" value="<?php echo $jurusan->title_eng ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Content (Indonesian)</label>
                      <div class="col-sm-10">
                       <textarea id="editor-full" name="konten_ina" rows="10" cols="100"><?php echo $jurusan->content_ina ?></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Content (English)</label>
                      <div class="col-sm-10">
                       <textarea id="editor-full-2" name="konten_eng" rows="10" cols="100"><?php echo $jurusan->content_eng ?></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Facility (Indonesia)</label>
                      <div class="col-sm-10">
                       <textarea id="editor-full-3" name="fasilitas_ina" rows="10" cols="100"><?php echo $jurusan->facility_ina ?></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Facility (English)</label>
                      <div class="col-sm-10">
                       <textarea id="editor-full-4" name="fasilitas_eng" rows="10" cols="100"><?php echo $jurusan->facility_eng ?></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Cooperation (Indonesia)</label>
                      <div class="col-sm-10">
                       <textarea id="editor-full-5" name="cooperation_ina" rows="10" cols="100"><?php echo $jurusan->coo_ina ?></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Cooperation (English)</label>
                      <div class="col-sm-10">
                       <textarea id="editor-full-6" name="cooperation_eng" rows="10" cols="100"><?php echo $jurusan->coo_eng ?></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Prospect (Indonesia)</label>
                      <div class="col-sm-10">
                       <textarea id="editor-full-7" name="prospek_ina" rows="10" cols="100"><?php echo $jurusan->plulus_ina ?></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Prospect (English)</label>
                      <div class="col-sm-10">
                       <textarea id="editor-full-8" name="prospek_eng" rows="10" cols="100"><?php echo $jurusan->plulus_eng ?></textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <span class="help-block">(*) Must be filed</span>
                    </div>

                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <div class="text-right">
                      <a href="<?php echo base_url(); ?>admin/faculty_course"><button type="button" class="btn btn-default">Back</button></a>
                      <button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
                    </div>
                  </div><!-- /.box-footer -->
                </form>

					</div>
				</div>
				<!-- /form horizontal -->

			</div>
			<!-- /main content -->    