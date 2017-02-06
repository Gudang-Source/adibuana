<!-- Main content -->
			<div class="content-wrapper">

				<!-- Horizontal form options -->
				<div class="row">
				
					<div class="col-md-12">

						<!-- Static mode -->
						<form class="form-horizontal" action="#">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h5 class="panel-title">View <?php echo $jurusan->title_eng ?></h5>
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
										<label class="col-lg-3 control-label">Title (Indonesia)</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $jurusan->title_ina ?></div>
										</div>
									</div>

                                    <div class="form-group">
										<label class="col-lg-3 control-label">Title (English)</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $jurusan->title_eng ?></div>
										</div>
									</div>

                                     <div class="form-group">
										<label class="col-lg-3 control-label">Content (Indonesia)</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $jurusan->content_ina ?></div>
										</div>
									</div>

                                    <div class="form-group">
										<label class="col-lg-3 control-label">Content (English)</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $jurusan->content_eng ?></div>
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-3 control-label">Facility (Indonesia)</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $jurusan->facility_ina ?></div>
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-3 control-label">Facility (English)</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $jurusan->facility_eng ?></div>
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-3 control-label">Cooperation (Indonesia)</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $jurusan->coo_ina ?></div>
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-3 control-label">Cooperation (English)</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $jurusan->coo_eng ?></div>
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-3 control-label">Prospect (Indonesia)</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $jurusan->plulus_ina ?></div>
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-3 control-label">Prospect (English)</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $jurusan->plulus_eng ?></div>
										</div>
									</div>

                                     
								</div>
							</div>
							<div class="box-footer">
	                            <div class="text-right">
		                            <a href="<?php echo base_url(); ?>admin/faculty_course"><button type="button" class="btn btn-default">Back</button></a>
	                            </div>
	                        </div>
						</form>
						<!-- /static mode -->

					</div>
				</div>
				<!-- /vertical form options -->
			</div>
			<!-- /main content -->