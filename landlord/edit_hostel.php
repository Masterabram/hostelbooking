<?php
include "header.php";
?>
 <?PHP 
   $query = "SELECT * FROM hostel WHERE 1 AND  hostelId = '{$_GET['id']}' ";
   $res = mysqli_fetch_assoc(mysqli_query($connection, $query));

  ?>

      <!-- page content -->
      <div class="right_col" role="main">

        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Select Hostel</h3>
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
                  <form  action="update_hostel.php" method="POST" enctype="multipart/form-data" class="form-horizontal form-label-left">
                      <input type="hidden"  name="hid" value="<?php echo $_GET['id']; ?>" class="form-control col-md-7 col-xs-12">
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Hostel Name <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="name" value="<?php echo $res['name']; ?>" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <p style="padding: 15px;"></p>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Price <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text"  name="price" value="<?php echo $res['price']; ?>" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <p style="padding: 15px;"></p>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Hostel Image <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="file"  name="hostel_image" required="required" class="form-control col-md-7 col-xs-12">
                        <input type="hidden"  name="id" value="<?php echo $_SESSION['id']; ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <p style="padding: 15px;"></p>
                    <div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12"> Location </label>
                      <div class="col-md-6 col-sm-6 col-xs-12" >
                        <select name="location" class="form-control col-md-7 col-xs-12" >
                          <option value="Nyawita">Nyawita</option>
                          <option value="Market">Market</option>
                          <option value="Luanda">Luanda</option>
                          <option value="Mabungo">Mabungo</option>
                        </select>
                      </div>
                    </div>
                    <p style="padding: 15px;"></p>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Number of such hostels <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="number"  name="qty" value="<?php echo $res['qty']; ?>" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <p style="padding: 15px;"></p>
                    <div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12"> Description </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea class="ckeditor form-control col-md-7 col-xs-12" name="desc"><?php echo $res['description']; ?></textarea>
                      </div>
                    </div>
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