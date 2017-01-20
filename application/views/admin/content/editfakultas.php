<!-- Main content -->
			<div class="content-wrapper">

				<!-- Form horizontal -->
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">Edit <?php echo $fakultas->title_eng ?></h5>
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
                      <label class="col-sm-2 control-label">Choose Faculty Area*</label>
                      <div class="col-sm-2">
                        <select name="area" class="form-control">
                          <option value="<?php echo $fakultas->id_area ?>"><?php echo $fakultas->area_eng ?></option>
                          <option>---------</option>
                          <?php
                            foreach ($area as $q_area) {
                              echo'
                                <option value="'.$q_area->id.'"> '.$q_area->area_eng.' </option>
                              ';
                            }
                          
                          ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Choose Faculty Type*</label>
                      <div class="col-sm-2">
                        <select name="tipe" class="form-control">
                          <option> <?php echo $fakultas->type_eng ?></option>
                          <option> </option>
                          <?php
                            foreach ($tipe as $q_tipe) {
                              echo'
                                <option value="'.$q_tipe->id.'"> '.$q_tipe->type_eng.' </option>
                              ';
                            }
                          
                          ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Title (Indonesia)*</label>
                      <div class="col-sm-6">
                        <input type="text" name="title_ina" class="form-control" value="<?php echo $fakultas->title_ina ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Title (English)*</label>
                      <div class="col-sm-6">
                        <input type="text" name="title_eng" class="form-control" value="<?php echo $fakultas->title_eng ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Content (Indonesian)</label>
                      <div class="col-sm-10">
                       <textarea id="editor-full" name="konten_ina" rows="10" cols="100"><?php echo $fakultas->content_ina ?></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Content (English)</label>
                      <div class="col-sm-10">
                       <textarea id="editor-full-2" name="konten_eng" rows="10" cols="100"><?php echo $fakultas->content_eng ?></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Number of Student</label>
                      <div class="col-sm-2">
                        <input type="number" name="jumlah_mhs" class="form-control" value="<?php echo $fakultas->jml_mhs ?>">
                      </div>
                    </div>
                    <div class="form-group">
											<label class="col-lg-2 control-label">Picture</label>
											<div class="col-lg-4">
												<input type="file" class="file-styled">
												<span class="help-block">Format : jpg, jpeg, png. Max file size 20Mb</span>
											</div>
										</div>
                    <div class="form-group">
                      <span class="help-block">(*) Must be filed</span>
                    </div>

                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <div class="text-right">
                      <a href="<?php echo base_url(); ?>admin/fakultas"><button type="button" class="btn btn-default">Back</button></a>
                      <button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
                    </div>
                  </div><!-- /.box-footer -->
                </form>

					</div>
				</div>
				<!-- /form horizontal -->

			</div>
			<!-- /main content -->    