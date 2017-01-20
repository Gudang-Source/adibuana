<!-- Main content -->
      <div class="content-wrapper">

        <!-- Form horizontal -->
        <div class="panel panel-flat">
          <div class="panel-heading">
            <h5 class="panel-title">Edit Career</h5>
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
                      <label class="col-sm-2 control-label">Author *</label>
                      <div class="col-sm-6">
                        <input type="text" name="author" class="form-control" value="<?php echo $karir->author ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Title (Indonesian)*</label>
                      <div class="col-sm-6">
                        <input type="text" name="title_ina" class="form-control" value="<?php echo $karir->title_ina ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Title (English)*</label>
                      <div class="col-sm-6">
                        <input type="text" name="title_eng" class="form-control" value="<?php echo $karir->title_eng ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Start Date *</label>
                      <div class="col-sm-3">
                        <input type="date" name="start_date" class="form-control" value="<?php echo $karir->start_date ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">End Date *</label>
                      <div class="col-sm-3">
                        <input type="date" name="end_date" class="form-control" value="<?php echo $karir->end_date ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Lead (Indonesia)</label>
                      <div class="col-sm-10">
                       <textarea name="lead_ina" rows="10" cols="100"><?php echo $karir->lead_ina ?></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Lead (English)</label>
                      <div class="col-sm-10">
                       <textarea name="lead_eng" rows="10" cols="100"><?php echo $karir->lead_eng ?></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Content (Indonesia)</label>
                      <div class="col-sm-10">
                       <textarea id="editor-full" name="konten_ina" rows="10" cols="100"><?php echo $karir->content_ina ?></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Content (English)</label>
                      <div class="col-sm-10">
                       <textarea id="editor-full-2" name="konten_eng" rows="10" cols="100"><?php echo $karir->content_eng ?></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-2 control-label">Thumb</label>
                      <div class="col-lg-4">
                        <input name="thumb" type="file" class="file-styled">
                        <span class="help-block">Format : jpg, jpeg, png. fix size[ 221x 105 pixels ]</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-2 control-label">Picture</label>
                      <div class="col-lg-4">
                        <input name="pic" type="file" class="file-styled">
                        <span class="help-block">Format : jpg, jpeg, png. Max file size 20Mb</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Highlight Career</label>
                      <div class="col-sm-6">
                        <input type="radio" name="hl" value="yes" <?php echo ($karir->hot=='yes')?'checked':'' ?>> Yes
                        <input type="radio" name="hl" value="no" <?php echo ($karir->hot=='no')?'checked':'' ?>> No
                      </div>
                    </div>
                    <div class="form-group">
                      <span class="help-block">(*) Must be filed</span>
                    </div>
                    
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <div class="text-right">
                      <a href="<?php echo base_url(); ?>admin/career"><button type="button" class="btn btn-default">Back</button></a>
                      <button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
                    </div>
                  </div><!-- /.box-footer -->
                </form>

          </div>
        </div>
        <!-- /form horizontal -->

      </div>
      <!-- /main content -->    