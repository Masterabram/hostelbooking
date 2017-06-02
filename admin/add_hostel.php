<?php
include "header.php";
?>


      <!-- page content -->
      <div class="right_col" role="main">

        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Add Hostel</h3>
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
                  <form  action="insert.php" method="POST" enctype="multipart/form-data" class="form-horizontal form-label-left">

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Hostel Name <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="name" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <!-- <p style="padding: 15px;"></p> -->
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Landlord Name <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="land" class="form-control col-md-7 col-xs-12" >
                          <?php
                            $query = "SELECT landlordId, name FROM landlord";
                              $stmt = $DB->prepare($query);
                              $stmt->execute();
                              $land = $stmt->fetchAll();
                           foreach ($land as $key ){ ?>
                            <option value="<?php echo $key['landlordId']; ?>"><?php echo $key['name']; ?></option>
                           <?php } ?>  
                        </select>
                      </div>
                    </div>                    
                    <!-- <p style="padding: 15px;"></p> -->
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Price <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text"  name="price" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <!-- <p style="padding: 15px;"></p> -->
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Hostel Image <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="file"  name="hostel_image" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <!-- <p style="padding: 15px;"></p> -->
                    <div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12"> Location </label>
                      <div class="col-md-6 col-sm-6 col-xs-12" >
                        <select name="location" class="form-control col-md-7 col-xs-12" >
                            <?php $result=mysqli_query($mysqli,"select location from location ") or die (mysqli_error()); while($row=mysqli_fetch_array($result)){ ?>        
                            <option value="<?php echo $row['location']?>"><?php echo $row['location']?></option>      
                            <?php } ?>
                        </select>
                      </div>
                    </div>
                    <!-- <p style="padding: 5px;"></p> -->
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Number of such hostels <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="number"  name="qty" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                   <!--  <p style="padding: 5px;"></p> -->
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Size (sqr Ft):<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text"  name="size" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Type <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                       <select name="type" class="form-control col-md-7 col-xs-12"  required="required">
                          <option > Select One </option>
                          <option value="Self Contain">Self Contain</option>
                          <option value="Bed Sitter">Bed Sitter</option>
                          <option value="Single room">Single room </option>
                        </select>
                      </div>
                    </div>                    
                    <div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12"> Other Description </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea class="ckeditor form-control col-md-7 col-xs-12" name="desc">
                          <ol>
                            <li> Electricity </li>
                          </ol>
                        </textarea>
                        <span class="helper"> Please include all other important features of your hostels</span>
                      </div>
                    </div>
                    <!-- <p style="padding: 5px;"></p> -->
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