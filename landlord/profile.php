<?php include 'header.php'; ?>

<!-- page content -->
      <div class="right_col" role="main">

        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>My Profile</h3>
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
                  <!-- <h2>User Report <small>Activity report</small></h2> -->
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a href="#"><i class="fa fa-chevron-up"></i></a>
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
                    <li><a href="#"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" style="height: 500px;">

                  <div class="col-md-3 col-sm-3 col-xs-12 profile_left">

                    <div class="profile_img">

                      <!-- end of image cropping -->
                      <div id="crop-avatar">
                        <!-- Current avatar -->
                        <div class="avatar-view" title="Change the avatar">
                          <!-- <img src="images/picture.jpg" alt="Avatar"> -->
                          <?php if(!$cred['profile_image']){?>
                          <img src="profile_image/no_avatar.png" alt="Avatar">
                          <?php }else{ ?>
                          <img src="../profile_image/<?php echo $cred['profile_image']; ?>" alt="Avatar" >
                          <?php }; ?>
                        </div>

                    </div>
                    <h3><?php echo $cred['name']; ?></h3>

                  

                    <a href="edit_info.php?email=<?php echo $_SESSION['email']; ?>" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                    <br />
                  </div>
                  </div>
                  
                  <div class="col-md-9 col-sm-9 col-xs-12">

                    <div class="profile_title">
                      <div class="col-md-6">
                        <h2>User Info</h2>
                      </div>
                      <div class="col-md-6">
                        <div  class="pull-right" style="margin-top: 5px; background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #E6E9ED">
                          
                        </div>
                      </div>
                    </div>

                    <div style='margin: 30px;'></div>
                    <!-- start of user-activity-graph -->
                    <div>
                        
                        <div class="table-responsive ">
                          <table class="table">
                            <tr style="height: 20%" class="active">
                              <th>Name :</th>
                              <td><?php echo $cred['name']; ?></td>
                            </tr>
                            <tr style="height: 20%" class="success">
                              <th>Email :</th>
                              <td><?php echo $cred['email']; ?></td>
                            </tr>
                            <tr style="height: 20%" class="warning">
                              <th>Tellephone Number :</th>
                              <td><?php echo $cred['tel']; ?></td>
                            </tr>
                            <tr style="height: 20%" class="danger">
                              <th>Gender :</th>
                              <td><?php echo $cred['gender']; ?></td>
                            </tr>
                            <tr style="height: 20%" class="info">
                              <th>National ID # :</th>
                              <td><?php echo $cred['idno']; ?></td>
                            </tr>
                            <tr style="height: 20%" class="active">
                              <th>OwnerShip :</th>
                              <td><?php echo $cred['ownership']; ?></td>
                            </tr>
                            
                          </table>
                        </div>

                    </div>
                    <!-- end of user-activity-graph -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

<?php include 'footer.php'; ?>

</body>

</html>