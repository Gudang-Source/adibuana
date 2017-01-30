<!-- Main content -->
      <div class="content-wrapper">

        <!-- Form horizontal -->
        <div class="panel panel-flat">
          <div class="panel-heading">
            <h5 class="panel-title">Edit <?php echo $news->title_eng ?></h5>
            <div class="heading-elements">
              <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                      </ul>
                    </div>
          </div>

          <div class="panel-body">
                <form class="form-horizontal" method="post" action="<?php echo base_url() ?>admin/news/update/<?php echo $news->id ?>" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Choose News Type*</label>
                      <div class="col-sm-2">
                        <select name="tipe" class="form-control">
                          <option value="<?php echo $news->id_type ?>"><?php echo $news->type_eng ?> </option>
                          <option>---------</option>
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
                      <label class="col-sm-2 control-label">Title (Indonesian)*</label>
                      <div class="col-sm-6">
                        <input type="text" name="title_ina" class="form-control" value="<?php echo $news->title_ina ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Title (English)*</label>
                      <div class="col-sm-6">
                        <input type="text" name="title_eng" class="form-control" value="<?php echo $news->title_eng ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Author</label>
                      <div class="col-sm-6">
                        <input type="text" name="author" class="form-control" value="<?php echo $news->author ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Lead (Indonesia)</label>
                      <div class="col-sm-10">
                       <textarea name="lead_ina" rows="10" cols="100"><?php echo $news->lead_ina ?></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Lead (English)</label>
                      <div class="col-sm-10">
                       <textarea name="lead_eng" rows="10" cols="100"><?php echo $news->lead_eng ?></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Content (Indonesia)</label>
                      <div class="col-sm-10">
                       <textarea id="editor-full" name="konten_ina" rows="10" cols="100"><?php echo $news->content_ina ?></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Content (English)</label>
                      <div class="col-sm-10">
                       <textarea id="editor-full-2" name="konten_eng" rows="10" cols="100"><?php echo $news->content_eng ?></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-2 control-label">Thumb</label>
                      <div class="col-lg-4">
                        <img style="width:200px;" src="<?php echo base_url(); ?>assets/images/news/<?php echo $news->thumb; ?>" />
                        <input name="thumb" type="file" class="file-styled">
                        <span class="help-block">Format : jpg, jpeg, png. fix size[ 221x 105 pixels ]</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-2 control-label">Picture</label>
                      <div class="col-lg-4">
                        <img style="width:200px;" src="<?php echo base_url(); ?>assets/images/news/<?php echo $news->picture; ?>" />
                        <input name="pic" type="file" class="file-styled">
                        <span class="help-block">Format : jpg, jpeg, png. Max file size 20Mb</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-2 control-label">Banner</label>
                      <div class="col-lg-4">
                        <img style="width:200px;" src="<?php echo base_url(); ?>assets/images/news/<?php echo $news->bpict ?>" />
                        <input name="banner" type="file" class="file-styled">
                        <span class="help-block">Format : jpg, jpeg, png. max size [ 620 x 290 pixels ]</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Highlight News</label>
                      <div class="col-sm-6">
                        <input type="radio" name="hl" value="yes" <?php echo ($news->hot=='yes')?'checked':'' ?> > Yes
                        <input type="radio" name="hl" value="no" <?php echo ($news->hot=='no')?'checked':'' ?>> No
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Banner View</label>
                      <div class="col-sm-6">
                        <input type="radio" name="bv" value="yes" <?php echo ($news->banner=='yes')?'checked':'' ?>> Yes
                        <input type="radio" name="bv" value="no" <?php echo ($news->banner=='no')?'checked':'' ?>> No
                      </div>
                    </div>
                    <div class="form-group">
                      <span class="help-block">(*) Must be filed</span>
                    </div>
                    
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <div class="text-right">
                      <a href="<?php echo base_url(); ?>admin/news"><button type="button" class="btn btn-default">Back</button></a>
                      <button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
                    </div>
                  </div><!-- /.box-footer -->
                </form>

          </div>
        </div>
        <!-- /form horizontal -->

      </div>
      <!-- /main content -->    