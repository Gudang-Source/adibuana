<!-- Main content -->
			<div class="content-wrapper">

        <?php 
          if($this->session->flashdata('success')){
              ?>
              <div class="alert bg-success alert-styled-left">
                  <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
                  <span class="text-semibold">Berhasil!</span> <?php echo $this->session->flashdata('success'); ?>
              </div>
              <?php
          }

          if($this->session->flashdata('warning')){
              ?>
              <div class="alert bg-warning alert-styled-left">
                  <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
                  <span class="text-semibold">Perhatian!</span> <?php echo $this->session->flashdata('warning'); ?>
              </div>
              <?php
          }
        ?>

				<!-- Form horizontal -->
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">Change Password</h5>
						<div class="heading-elements">
							<ul class="icons-list">
              		<li><a data-action="collapse"></a></li>
              		<li><a data-action="reload"></a></li>
              		<li><a data-action="close"></a></li>
              	</ul>
            	</div>
					</div>

					<div class="panel-body">
                <form class="form-horizontal" method="post" action="<?php echo base_url() ?>admin/change/update" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Username</label>
                      <div class="col-sm-6">
                        <input type="text" name="type_ina" class="form-control" value="<?php echo $member->username ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Password</label>
                      <div class="col-sm-6">
                        <input type="text" name="password" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Re Type Password</label>
                      <div class="col-sm-6">
                        <input type="text" name="password2" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <span class="help-block">(*) Must be filed</span>
                    </div>

                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <div class="text-right">
                      <a href="<?php echo base_url(); ?>admin/blog_type"><button type="button" class="btn btn-default">Back</button></a>
                      <button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
                    </div>
                  </div><!-- /.box-footer -->
                </form>

					</div>
				</div>
				<!-- /form horizontal -->

			</div>
			<!-- /main content -->    