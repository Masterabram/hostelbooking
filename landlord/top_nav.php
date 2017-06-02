     <!-- top navigation -->
      <div class="top_nav">

        <div class="nav_menu">
          <nav class="" role="navigation">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>
              <?php echo errors(); echo messages(); ?>
            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  

              <?php if(!$cred['profile_image']){?>
              <img src="../profile_image/no_avatar.png" alt="...">
              <?php }else{ ?>
              <img src="../profile_image/<?php echo $cred['profile_image']; ?>" alt="..." >
              <?php }; ?>
                  <?php echo $cred['name']; ?>
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                  <li><a href="profile.php"> Profile</a>
                  </li>
                  <li>
                    <a href="#">Help</a>
                  </li>
                  <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </li>
                </ul>
              </li>

              <li role="presentation" class="dropdown">
                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-envelope-o"></i>
                  <?php
                    $stmt = $DB->prepare("SELECT * FROM notification Where (landlordId = '{$_SESSION['id']}' AND readlandlord=0) ORDER BY `date` DESC LIMIT 6");
                    $stmt->execute();
                    $rest = $stmt->fetchAll(); 
                ?> 
                  <span class="badge bg-red"><?php echo count($rest); ?></span>
                </a>
                <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
               
                <?php foreach ($rest as $res) { ?> 
                  <li>
                    <a>
                      <span class="image">
                                        <img src="../images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>Booking</span>
                      <span class="time"><?php echo $res['date']; ?></span>
                      </span>
                      <span class="message">
                                       <?php echo $res['msg']; ?>
                                    </span>
                    </a>
                  </li>
                  <?php } ?>
                  
                  <li>
                    <div class="text-center">
                      <a>
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>
                  </li>
                </ul>
              </li>

            </ul>
          </nav>
        </div>

      </div>
      <!-- /top navigation -->