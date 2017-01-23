<!-- Main content -->
			<div class="content-wrapper">

				<!-- Horizontal form options -->
				<div class="row">
				
					<div class="col-md-12">

						<!-- Static mode -->
						<form class="form-horizontal" action="#">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h5 class="panel-title">View <?php echo $blog->owner_name ?></h5>
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
										<label class="col-lg-3 control-label">Tipe Blog</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $blog->title_eng ?></div>
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-3 control-label">NIP/NID/NIM/KTP/SIM</label>
										<div class="col-lg-9">
											<div class="form-control-static">-</div>
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-3 control-label">Nama Pemilik</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $blog->owner_name ?></div>
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-3 control-label">Thema Blog</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $blog->theme ?></div>
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-3 control-label">Blog Link</label>
										<div class="col-lg-9">
											<div class="form-control-static"><a href="http://<?php echo $blog->link ?>"><?php echo $blog->link ?></a></div>
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