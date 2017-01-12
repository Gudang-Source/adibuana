     <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            NEWS
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- right column -->
            <div class="col-md-11">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">FORM ADD</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal">
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">News Type</label>
                      <div class="col-sm-2">
                        <select class="form-control" name="news_type">
                          <option> </option>
                          <option> </option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Title (Indonesia)</label>
                      <div class="col-sm-8">
                        <input type="text" name="title_ina" class="form-control" placeholder="Title">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Title (English)</label>
                      <div class="col-sm-8">
                        <input type="text" name="title_eng" class="form-control" placeholder="Title">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Author</label>
                      <div class="col-sm-4">
                        <input type="text" name="author" class="form-control" placeholder="Author">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Lead (Indonesia)</label>
                      <div class="col-sm-10">
                        <input type="text" name="lead_ina" class="form-control" placeholder="Lead">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Lead (English)</label>
                      <div class="col-sm-10">
                        <input type="text" name="lead_eng" class="form-control" placeholder="Lead">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Content (Indonesia)</label>
                      <div class="col-sm-10">
                       <textarea name="konten_ina" rows="10" cols="100" placeholder="Content"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Content (English)</label>
                      <div class="col-sm-10">
                       <textarea name="konten_eng" rows="10" cols="100" placeholder="Content"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Thumb</label>
                      <div class="col-sm-10">
                        <input type="file" name="thumb">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Picture</label>
                      <div class="col-sm-10">
                        <input type="file" name="pic">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Banner</label>
                      <div class="col-sm-10">
                        <input type="file" name="banner">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Highlight</label>
                      <div class="col-sm-2">
                        <select class="form-control" name="hot">
                          <option> </option>
                          <option>Yes</option>
                          <option>No</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Banner View</label>
                      <div class="col-sm-2">
                        <select class="form-control" name="banner_view">
                          <option> </option>
                          <option>Yes</option>
                          <option>No</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Published</label>
                      <div class="col-sm-2">
                        <select class="form-control" name="published">
                          <option> </option>
                          <option>Inactive</option>
                          <option>Active</option>
                        </select>
                      </div>
                    </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-info pull-right">Kirim</button>
                  </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->