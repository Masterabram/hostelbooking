<?php
include "header.php";
?>


      <!-- page content -->
      <div class="right_col" role="main">

        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Add Employee</h3>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12">
              <div class="x_panel">
                <div class="x_content">

                  <div class="row">


                <div class="x_content">
                  <br />
                  <form  action="register.php" method="POST" enctype="multipart/form-data" class="form-horizontal form-label-left">

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Name <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="name" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <p style="padding: 15px;"></p>
                
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Email <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="email"  name="email" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <p style="padding: 15px;"></p>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Phone Number <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text"  name="tel" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <p style="padding: 15px;"></p>
                    
                    <p style="padding: 15px;"></p>
                    
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-primary">Cancel</button>
                        <input type="submit"  name="submit"  class="btn btn-success" Value="Save">
                      </div>
                    </div>

                  </form>
                </div>

                                      

                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- footer content -->
<?php include "footer.php"; ?>


</body>
</html>