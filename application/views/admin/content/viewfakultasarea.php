<!-- Main content -->
			<div class="content-wrapper">

				<!-- Horizontal form options -->
				<div class="row">
				
					<div class="col-md-12">

						<!-- Static mode -->
						<form class="form-horizontal" action="#">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h5 class="panel-title">View <?php echo $area->area_eng ?></h5>
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
										<label class="col-lg-3 control-label">Area (Indonesia)</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $area->area_ina ?></div>
										</div>
									</div>

                                    <div class="form-group">
										<label class="col-lg-3 control-label">Area (English)</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $area->area_eng ?></div>
										</div>
									</div>

                                     <div class="form-group">
										<label class="col-lg-3 control-label">Address</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $area->address ?></div>
										</div>
									</div>

                                    <div class="form-group">
										<label class="col-lg-3 control-label">Phone 1</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $area->phone1 ?></div>
										</div>
									</div>

                                     <div class="form-group">
										<label class="col-lg-3 control-label">Phone 2</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $area->phone2 ?></div>
										</div>
									</div>

                                    <div class="form-group">
										<label class="col-lg-3 control-label">Fax 1</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $area->fax1 ?></div>
										</div>
									</div>

                                     <div class="form-group">
										<label class="col-lg-3 control-label">Fax 2</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $area->fax2 ?></div>
										</div>
									</div>

                                    <div class="form-group">
										<label class="col-lg-3 control-label">Google Map</label>
										<div class="col-lg-9">
											<div class="form-control-static"></div>
										</div>
									</div>

								</div>
							</div>
						</form>
						<!-- /static mode -->

					</div>
				</div>
				<!-- /vertical form options -->
			</div>
			<!-- /main content -->