<?php
include "header.php";
?>

<?php
$stmt = $DB->prepare("SELECT * FROM location ");
$stmt->execute();
$loc = $stmt->fetchAll(); 
// $loc = mysqli_fetch_array(mysqli_query($connection, "SELECT * FROM location "));
?>
      <!-- page content -->
      <div class="right_col" role="main">

        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Location Settings</h3>
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
            
            <div class="col-md-6">

                    <h3>Total locations: <?php echo count($location); ?></h3>
                    <h3> Locations </h3>

                    <table class="table table-responsive">
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                        <th>Delete</th>
                      </tr>
                      <?php foreach ($loc as $location){ ?>
                        <tr>
                          <td><?php echo $location['id']; ?></td>
                          <td><?php echo $location['location']; ?></td>
                          <td><?php echo $location['lat']; ?></td>
                          <td><?php echo $location['long']; ?></td>
                          <td><a href="delete_location.php?id=<?php echo $location['id']; ?>"><i class="fa fa-trash"></i></a></td>
                        </tr>
                      <?php } ?>
                    </table>

                    
                    <br />
            </div>  
            
            <div class="col-md-6">
              <div class="x_panel">
                <div class="x_content">

                  <div class="row">


                <div class="x_content">
                  <br />
                  <form  action="isert_location.php" method="POST" enctype="multipart/form-data" class="form-horizontal form-label-left">

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Location Name <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="location"   required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <p style="padding: 15px;"></p>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Longitude <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text"  name="long"  class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <p style="padding: 15px;"></p>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Latitude <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text"  name="lat"  class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    
                    
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