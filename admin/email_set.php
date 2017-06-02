<?php
include "header.php";
?>

<?php 
$rest = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM email_setting WHERE id=1 "));
$sent = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM emails WHERE id=1 "));
$notSent = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM emails WHERE id=0 "));
?>
      <!-- page content -->
      <div class="right_col" role="main">

        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Email Settings</h3>
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
            
            <div class="col-md-4">
               <div class="avatar-view" title="Change the avatar"><img src="../images/abram.jpg" alt="Avatar"></div>

                    <h3>Total Mails Sent: <?php echo count($sent); ?></h3>
                    <h3>Total Mails Not Sent: <?php echo count($notSent); ?></h3>
                    <h3>Email Settings </h3>

                   <div class="col-md-4">
                    <ul class="list-unstyled user_data" style="padding:15px;">
                      <li><i class="fa fa-map-marker "></i> Username
                      </li>

                      <li>
                        <i class="fa fa-briefcase "></i> Password
                      </li>

                      <li class="m-top-xs">
                        <i class="glyphicon glyphicon-blackboard "></i> Subject
                      </li>
                      <li class="m-top-xs">
                        <i class="glyphicon glyphicon-scale "></i> Port
                      </li>
                      <li class="m-top-xs">
                        <i class="fa fa-facebook "></i> Facebook
                      </li>
                      <li class="m-top-xs">
                        <i class="fa fa-twitter "></i> Twitter
                      </li>
                    </ul>
                   </div>
                   <div class="col-md-8">
                      <ul class="list-unstyled user_data" style="padding:15px;">
                      <li>: <?php echo $rest['username']; ?> </li>
                      <li>: <?php echo $rest['password']; ?> </li>
                      <li>: <?php echo $rest['subject']; ?> </li>
                      <li>: <?php echo $rest['smtp']; ?> </li>
                      <li>: <?php echo $rest['facebook']; ?> </li>
                      <li>: <?php echo $rest['twitter']; ?> </li>
                    </ul> 
                   </div>

                    
                    <br />
            </div>  
            
            <div class="col-md-7">
              <div class="x_panel">
                <div class="x_content">

                  <div class="row">


                <div class="x_content">
                  <br />
                  <form  action="insert_email.php" method="POST" enctype="multipart/form-data" class="form-horizontal form-label-left">

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Username <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="username"  value="<?php echo $rest['username'] ;?>" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <p style="padding: 15px;"></p>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Password <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text"  name="password" value="<?php echo $rest['password'] ;?>" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <p style="padding: 15px;"></p>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Subject <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text"  name="subject" value="<?php echo $rest['subject'] ;?>" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <p style="padding: 15px;"></p>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> SMTP <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text"  name="smtp" value="<?php echo $rest['smtp'] ;?>" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <p style="padding: 15px;"></p>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Facebook URL <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text"  name="facebook" value="<?php echo $rest['facebook'] ;?>" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <p style="padding: 15px;"></p>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Twitter URL <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text"  name="twitter" value="<?php echo $rest['twitter'] ;?>" required="required" class="form-control col-md-7 col-xs-12">
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