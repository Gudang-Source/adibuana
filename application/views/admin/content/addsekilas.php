     <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            PAGE
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
                      <label class="col-sm-2 control-label">PAGE</label>
                      <div class="col-sm-10">
                        <input type="text" name="page" class="form-control" placeholder="PAGE">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Title Indonesian</label>
                      <div class="col-sm-10">
                        <input type="text" name="title_ina" class="form-control" placeholder="Title">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Title English</label>
                      <div class="col-sm-10">
                        <input type="text" name="title_eng" class="form-control" placeholder="Title">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Content Indonesian</label>
                      <div class="col-sm-10">
                       <textarea name="konten_ina" rows="10" cols="100" placeholder="Content"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Content English</label>
                      <div class="col-sm-10">
                       <textarea name="konten_eng" rows="10" cols="100" placeholder="Content"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">File Upload</label>
                      <div class="col-sm-10">
                        <input type="file" name="file">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Priority</label>
                      <div class="col-sm-10">
                        <input type="text" name="priority" class="form-control" placeholder="Priority">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Published</label>
                      <div class="col-sm-10">
                        <select class="form-control" name="published">
                          <option> </option>
                          <option>Inactive</option>
                          <option>Active</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Post BY</label>
                      <div class="col-sm-10">
                        <select class="form-control" name="post_by">
                          <option> </option>
                          <option> </option>
                          <option> </option>
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