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
                  <form  action="insert.php" id="hostel_add" name="hostel_add" method="POST" enctype="multipart/form-data" class="form-horizontal form-label-left">

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> Hostel Name <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="name" id="name" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <!-- <p style="padding: 5px;"></p> -->
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price"> Price <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text"  name="price" id="price"  class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <!-- <p style="padding: 5px;"></p> -->
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hostel_image"> Hostel Image <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="file"  name="hostel_image" required="required" class="form-control col-md-7 col-xs-12">
                        <input type="hidden"  name="id" id="hostel_image" value="<?php echo $_SESSION['id']; ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <!-- <p style="padding: 5px;"></p> -->
                    <div class="form-group">
                      <label for="location" class="control-label col-md-3 col-sm-3 col-xs-12"> Location </label>
                      <div class="col-md-6 col-sm-6 col-xs-12" >
                        <select name="location" class="form-control col-md-7 col-xs-12" id="location">
                            <?php $result=mysqli_query($mysqli,"select location from location ") or die (mysqli_error()); while($row=mysqli_fetch_array($result)){ ?>        
                            <option value="<?php echo $row['location']?>"><?php echo $row['location']?></option>      
                            <?php } ?>
                        </select>
                      </div>
                    </div>
                    <!-- <p style="padding: 5px;"></p> -->
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number"> Number of such hostels <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="number"  name="qty" required="required" class="form-control col-md-7 col-xs-12" id="number">
                      </div>
                    </div>
                   <!--  <p style="padding: 5px;"></p> -->
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="size"> Size (sqr Ft):<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text"  name="size" required="required" id="size" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="type"> Type <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                       <select name="type" class="form-control col-md-7 col-xs-12"  id="type" >
                          <option value=""> Select One </option>
                          <option value="Self Contain">Self Contain</option>
                          <option value="Bed Sitter">Bed Sitter</option>
                          <option value="Single room">Single room </option>
                        </select>
                      </div>
                    </div>                    
                    <div class="form-group">
                      <label for="desc" class="control-label col-md-3 col-sm-3 col-xs-12"> Other Description </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea id="desc" class="ckeditor form-control col-md-7 col-xs-12" name="desc">
                          <ol>
                            <li> Electricity </li>
                          </ol>
                        </textarea>
                        <span class="helper"> Please include all other important features of your hostels</span>
                      </div>
                    </div>
                    <!-- <p style="padding: 5px;"></p> -->
                    
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
<script type="text/javascript">
   $(document).ready(function () {

  
   $('#hostel_add').validate({
        rules: {
            name: {
                required:true,
                digits: false,
                min: 3,
                max:20
            },
            price: {
                required:true,
                number: true,
                digits:true,
                range: [200, 10000]
            },
            type: {
                number: false,
                required:true
            },
            size: {
                number: true,
                required:true,
                range: [10, 228]
            },
            number: {
                number: true,
                required:true,
                range: [1, 3],
                min:1,
                max:2000
            },
            desc: {
                digits: false,
                required:true
            },
            location: {
                digits: false,
                required:true
            }
        }
    });
});
</script>
</html>