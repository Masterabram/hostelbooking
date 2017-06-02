<?php
include "header.php"
// include "config/config.php";
?>
<?php
 // if(isset($_GET['email'])){
 //    $email = $_GET['email'];
 //  }else{
 //    echo "No id found";
 //  } 

    $query = "SELECT * FROM landlord WHERE 1 AND  landlordId = '{$_GET['id']}'";
    $cred = mysqli_fetch_assoc(mysqli_query($connection, $query));


?>

      <!-- page content -->
      <div class="right_col" role="main">

        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>
                   Edit Personal Details
                </h3>
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
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Personal Information Editor<small><?php echo $cred['email'] ?></small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <form class="form-horizontal form-label-left" enctype="multipart/form-data" method="POST" action="edit_land.php">

                    <span class="section">Personal Info</span>
                <input type="hidden" name="landId" value="<?php echo $cred['landlordId']; ?>" >

                  <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> Password <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="name" class="form-control col-md-7 col-xs-12"  name="password1" required="required" type="password">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Confirm Password <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="password" id="email" name="password2" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>  
                  <div class="item form-group">
                      <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Profile Image</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="profile_image" type="file" name="profile_image" value="<?php echo $cred['profile_image'];?>"  class="form-control col-md-7 col-xs-12" required="required">
                    </div>
                    </div>

                    <div class="nav nav-bar item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">National Id Number <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="regno" name="idno" required="required" value="<?php echo $cred['studentId'];?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Gender <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select required="required" name="gender" class="form-control col-md-7 col-xs-12">
                          <option>choose please</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                      </div>
                    </div>



                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-md-offset-3">
                        <button type="submit" class="btn btn-primary">Cancel</button>
                        <input type="submit" name="submit"  class="btn btn-success " value="Submit Updates">
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>

<?php include 'footer.php'; ?>

      </div>
      <!-- /page content -->
    </div>

  </div>

  <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>


</body>

</html>
