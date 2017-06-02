<?php
include "header.php";
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

                <?php
                $result = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM hostel_image WHERE hoselId = '{$_GET['id']}' "));

                if (!$result){

                ?>
                 
                <div class="row"> 
                <div class="col-md-6 col-sm-6 col-xs-6">
                  <form action="upload1.php"  class="form-horizontal form-label-left dropzone">
                  <input type="hidden"  name="id" value="<?php echo $_GET['id']; ?>" class="form-control col-md-7 col-xs-12">
                  </form>
                  </div>
                  <!-- <p style="padding: 15px;"></p> -->
                   
                   <div class="col-md-6 col-sm-6 col-xs-6">
                   <form action="upload2.php"  class="form-horizontal form-label-left dropzone">
                   <input type="hidden"  name="id" value="<?php echo $_GET['id']; ?>" class="form-control col-md-7 col-xs-12">
                  </form>
                  </div>
                 
                </div>
                  
                  <p style="padding: 15px;"></p>

                  <div class="row">

                   <div class="col-md-6 col-sm-6 col-xs-6">
                   <form action="upload3.php" class="form-horizontal form-label-left dropzone">
                   <input type="hidden"  name="id" value="<?php echo $_GET['id']; ?>" class="form-control col-md-7 col-xs-12">
                  </form>
                  </div>
                  <!-- <p style="padding: 15px;"></p> -->
                   <!--  -->
                   <div class="col-md-6 col-sm-6 col-xs-6">
                   <form action="upload4.php"  class="form-horizontal form-label-left dropzone">
                   <input type="hidden"  name="id" value="<?php echo $_GET['id']; ?>" class="form-control col-md-7 col-xs-12">
                  </form>
                  </div>

                  </div> 

                  <?php 
                    }
                    else
                    {
                  ?>
                <div class="row"> 
                <div class="col-md-6 col-sm-6 col-xs-6">
                  <img src="hostel_image/<?php echo $result['img1'];?>" style="width:250px;height:300px; margin-left: 100px" alt="" class="img-responsive center" >
                  </form>
                  </div>
                  <!-- <p style="padding: 15px;"></p> -->
                   
                   <div class="col-md-6 col-sm-6 col-xs-6">
                   <img src="hostel_image/<?php echo $result['img2'];?>" style="width:250px;height:300px; margin-left: 100px" alt="" class="img-responsive center" >
                  </form>
                  </div>
                 
                </div>
                  
                  <p style="padding: 15px;"></p>

                  <div class="row">

                   <div class="col-md-6 col-sm-6 col-xs-6">
                   <img src="hostel_image/<?php echo $result['img3'];?>" style="width:250px;height:300px; margin-left: 100px" alt="" class="img-responsive center" >
                  </form>
                  </div>
                  <!-- <p style="padding: 15px;"></p> -->
                   <!--  -->
                   <div class="col-md-6 col-sm-6 col-xs-6">
                   <img src="hostel_image/<?php echo $result['img4'];?>" style="width:250px;height:300px; margin-left: 100px" alt="" class="img-responsive center" >
                  </form>
                  </div>

                  </div>
                  <?php
                   }
                  ?>
                  <!-- <p style="padding: 15px;"></p>   -->
                  <div class="ln_solid"></div>
                  <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-5">
                      <button type="submit" class="btn btn-primary disable">Cancel</button>
                      <!-- <input type="submit"  name="submit"  class="btn btn-success" Value="Save"> -->
                      <a href="home.php" class="btn btn-success" > SAVE </a>
                    </div>
                  </div>



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