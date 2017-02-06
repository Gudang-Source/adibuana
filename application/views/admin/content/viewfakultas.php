<!-- Main content -->
			<div class="content-wrapper">

				<!-- Horizontal form options -->
				<div class="row">
				
					<div class="col-md-12">

						<!-- Static mode -->
						<form class="form-horizontal" action="#">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h5 class="panel-title">View <?php echo $fakultas->title_eng ?></h5>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									
                                    <div class="form-group">
										<label class="col-lg-3 control-label">Area</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $fakultas->area_eng ?></div>
										</div>
									</div>

                                    <div class="form-group">
										<label class="col-lg-3 control-label">Type</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $fakultas->type_eng ?></div>
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-3 control-label">Title (Indonesia)</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $fakultas->title_ina ?></div>
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-3 control-label">Title (English)</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $fakultas->title_eng ?></div>
										</div>
									</div>
                                     
                                     <div class="form-group">
										<label class="col-lg-3 control-label">Content (Indonesia)</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $fakultas->content_ina ?></div>
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-3 control-label">Content (English)</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $fakultas->content_eng ?></div>
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-3 control-label">Number of Student</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $fakultas->jml_mhs ?></div>
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-3 control-label">Thumb</label>
										<div class="col-lg-9">
											<img src="<?php echo base_url() ?>assets/images/faculty/<?php echo $fakultas->thumb ?>">
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-3 control-label">Picture</label>
										<div class="col-lg-9">
											<img src="<?php echo base_url() ?>assets/images/faculty/<?php echo $fakultas->picture ?>">
										</div>
									</div>

								</div>
							</div>
							<div class="box-footer">
	                            <div class="text-right">
		                            <a href="<?php echo base_url(); ?>admin/fakultas"><button type="button" class="btn btn-default">Back</button></a>
	                            </div>
	                        </div>
						</form>
						<!-- /static mode -->

					</div>
				</div>
				<!-- /vertical form options -->
			</div>
			<!-- /main content -->