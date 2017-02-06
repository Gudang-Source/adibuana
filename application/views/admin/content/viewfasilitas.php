<!-- Main content -->
			<div class="content-wrapper">

				<!-- Horizontal form options -->
				<div class="row">
				
					<div class="col-md-12">

						<!-- Static mode -->
						<form class="form-horizontal" action="#">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h5 class="panel-title">View <?php echo $fasilitas->title_ina ?></h5>
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
										<label class="col-lg-3 control-label">Title Ina</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $fasilitas->title_ina ?></div>
										</div>
									</div>

                                    <div class="form-group">
										<label class="col-lg-3 control-label">Title Eng</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $fasilitas->title_eng ?></div>
										</div>
									</div>

                                     <div class="form-group">
										<label class="col-lg-3 control-label">Lead Ina</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $fasilitas->lead_ina ?></div>
										</div>
									</div>

                                    <div class="form-group">
										<label class="col-lg-3 control-label">Lead Eng</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $fasilitas->lead_eng ?></div>
										</div>
									</div>

                                     <div class="form-group">
										<label class="col-lg-3 control-label">Tools Ina</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $fasilitas->tools_ina ?></div>
										</div>
									</div>

                                    <div class="form-group">
										<label class="col-lg-3 control-label">Tools Eng</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $fasilitas->tools_eng ?></div>
										</div>
									</div>

                                     <div class="form-group">
										<label class="col-lg-3 control-label">Etc Ina</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $fasilitas->etc_ina ?></div>
										</div>
									</div>

                                    <div class="form-group">
										<label class="col-lg-3 control-label">Etc Eng</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $fasilitas->etc_eng ?></div>
										</div>
									</div>

                                    <div class="form-group">
										<label class="col-lg-3 control-label">Thumb</label>
										<div class="col-lg-4">
											<img class="img-responsive" src="<?php echo base_url() ?>assets/images/facility/<?php echo $fasilitas->thumb ?>" alt="">
										</div>
									</div>

                                    <div class="form-group">
										<label class="col-lg-3 control-label">Picture</label>
										<div class="col-lg-5">
											<img class="img-responsive" src="<?php echo base_url() ?>assets/images/facility/<?php echo $fasilitas->picture ?>" alt="">

										</div>
									</div>
								</div>
							</div>
							<div class="box-footer">
	                            <div class="text-right">
		                            <a href="<?php echo base_url(); ?>admin/facility"><button type="button" class="btn btn-default">Back</button></a>
	                            </div>
	                        </div>
						</form>
						<!-- /static mode -->

					</div>
				</div>
				<!-- /vertical form options -->
			</div>
			<!-- /main content -->