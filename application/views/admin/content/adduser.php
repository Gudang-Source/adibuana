<!-- Main content -->
      <div class="content-wrapper">

        <!-- Form horizontal -->
        <div class="panel panel-flat">
          <div class="panel-heading">
            <h5 class="panel-title">Add user</h5>
            <div class="heading-elements">
              <ul class="icons-list">
                <li><a data-action="collapse"></a></li>
                <li><a data-action="reload"></a></li>
                <li><a data-action="close"></a></li>
              </ul>
            </div>
          </div>

          <div class="panel-body">
                <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/user/insert" enctype="multipart/form-data">
                  <div class="box-body">
                   
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Username*</label>
                      <div class="col-sm-6">
                        <input type="text" name="username" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Password</label>
                      <div class="col-sm-6">
                        <input type="password" name="password" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">ReType Password</label>
                      <div class="col-sm-6">
                        <input type="password" name="retype" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Name*</label>
                      <div class="col-sm-6">
                        <input type="text" name="name" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Email</label>
                      <div class="col-sm-6">
                        <input type="email" name="email" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Thumbnail User</label>
                      <div class="col-sm-5">
                        <input name="thumb" type="file" class="file-styled">
                        <span class="help-block">Format : jpg, jpeg, png. fix size[ 221x 105 pixels ]</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Privileges</label>
                      <div class="col-sm-10">
                        <div class="table-responsive">
                          <table class="table table-striped">
                            <thead>
                             <tr>
                              <th style="text-align:left;">
                                No
                              </th>
                              <th style="text-align:left;">
                                Management Name
                              </th>
                              <th width="100px">
                                Browse
                              </th>
                              <th width="100px">
                                Add
                              </th>
                              <th width="100px">
                                Update
                              </th>
                              <th width="100px">
                                Delete
                              </th>
                              <th width="100px">
                                Reset
                              </th>
                            
                            </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>User</td>
                                <td><input type="checkbox" name="privilege[]" value="USER_DISP"></td>
                                <td><input type="checkbox" name="privilege[]" value="USER_CRT"></td>
                                <td><input type="checkbox" name="privilege[]" value="USER_UPDT"></td>
                                <td><input type="checkbox" name="privilege[]" value="USER_DEL"></td>
                                <td><input type="checkbox" name="privilege[]" value="USER_RES"></td>

                              </tr>

                              <tr>
                                <td>2</td>
                                <td>Slider</td>
                                <td><input type="checkbox" name="privilege[]" value="SLIDER_DISP"></td>
                                <td><input type="checkbox" name="privilege[]" value="SLIDER_CRT"></td>
                                <td><input type="checkbox" name="privilege[]" value="SLIDER_UPDT"></td>
                                <td><input type="checkbox" name="privilege[]" value="SLIDER_DEL"></td>
                                <td><input type="checkbox" name="privilege[]" value="SLIDER_RES"></td>
                              </tr>

                              <tr>
                                <td>3</td>
                                <td>Blog</td>
                                <td><input type="checkbox" name="privilege[]" value="BLG_DISP"></td>
                                <td><input type="checkbox" name="privilege[]" value="BLG_CRT"></td>
                                <td><input type="checkbox" name="privilege[]" value="BLG_UPDT"></td>
                                <td><input type="checkbox" name="privilege[]" value="BLG_DEL"></td>
                                <td><input type="checkbox" name="privilege[]" value="BLG_RES"></td>
                              </tr>

                              <tr>
                                <td>4</td>
                                <td>Event</td>
                                <td><input type="checkbox" name="privilege[]" value="EVE_DISP"></td>
                                <td><input type="checkbox" name="privilege[]" value="EVE_CRT"></td>
                                <td><input type="checkbox" name="privilege[]" value="EVE_UPDT"></td>
                                <td><input type="checkbox" name="privilege[]" value="EVE_DEL"></td>
                                <td><input type="checkbox" name="privilege[]" value="EVE_RES"></td>
                              </tr>

                              <tr>
                                <td>5</td>
                                <td>Career</td>
                                <td><input type="checkbox" name="privilege[]" value="CARE_DISP"></td>
                                <td><input type="checkbox" name="privilege[]" value="CARE_CRT"></td>
                                <td><input type="checkbox" name="privilege[]" value="CARE_UPDT"></td>
                                <td><input type="checkbox" name="privilege[]" value="CARE_DEL"></td>
                                <td><input type="checkbox" name="privilege[]" value="CARE_RES"></td>
                              </tr>

                              <tr>
                                <td>6</td>
                                <td>Facillity</td>
                                <td><input type="checkbox" name="privilege[]" value="FCL_DISP"></td>
                                <td><input type="checkbox" name="privilege[]" value="FCL_CRT"></td>
                                <td><input type="checkbox" name="privilege[]" value="FCL_UPDT"></td>
                                <td><input type="checkbox" name="privilege[]" value="FCL_DEL"></td>
                                <td><input type="checkbox" name="privilege[]" value="FCL_RES"></td>
                              </tr>

                              <tr>
                                <td>7</td>
                                <td>Faculty</td>
                                <td><input type="checkbox" name="privilege[]" value="FCT_DISP"></td>
                                <td><input type="checkbox" name="privilege[]" value="FCT_CRT"></td>
                                <td><input type="checkbox" name="privilege[]" value="FCT_UPDT"></td>
                                <td><input type="checkbox" name="privilege[]" value="FCT_DEL"></td>
                                <td><input type="checkbox" name="privilege[]" value="FCT_RES"></td>
                              </tr>

                              <tr>
                                <td>8</td>
                                <td>Gallery</td>
                                <td><input type="checkbox" name="privilege[]" value="GAL_DISP"></td>
                                <td><input type="checkbox" name="privilege[]" value="GAL_CRT"></td>
                                <td><input type="checkbox" name="privilege[]" value="GAL_UPDT"></td>
                                <td><input type="checkbox" name="privilege[]" value="GAL_DEL"></td>
                                <td><input type="checkbox" name="privilege[]" value="GAL_RES"></td>
                              </tr>

                              <tr>
                                <td>9</td>
                                <td>KKN</td>
                                <td><input type="checkbox" name="privilege[]" value="KKN_DISP"></td>
                                <td><input type="checkbox" name="privilege[]" value="KKN_CRT"></td>
                                <td><input type="checkbox" name="privilege[]" value="KKN_UPDT"></td>
                                <td><input type="checkbox" name="privilege[]" value="KKN_DEL"></td>
                                <td><input type="checkbox" name="privilege[]" value="KKN_RES"></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                   
                    <div class="form-group">
                      <span class="help-block">(*) Must be filed</span>
                    </div>
                    
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <div class="text-right">
                      <button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
                    </div>
                  </div><!-- /.box-footer -->
                </form>

          </div>
        </div>
        <!-- /form horizontal -->

      </div>
      <!-- /main content -->    