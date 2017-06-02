<body class="nav-md">

  <div class="container body">


    <div class="main_container">

      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">

          <div class="navbar nav_title" style="border: 0;">
            <a href="home.php" class="site_title"><i class="fa fa-paw"></i> <span>Book Hostel</span></a>
          </div>
          <div class="clearfix"></div>

          <!-- menu prile quick info -->
          <div class="profile" >
            <div class="profile_pic" style="height:150px">
              <?php 
              if(!$cred['profile_image']){?>
              <img src="../profile_image/no_avatar.png" alt="..." class="img-circle profile_img">
              <?php }else{ ?>
              <img src="../profile_image/<?php echo $cred['profile_image']; ?>" width="100" height="80" alt="..." class="img-circle profile_img">
              <?php }; ?>
            </div>
            <div class="profile_info" >
              <h2><span>Welcome,</span> <br><?php echo $cred['name']; ?></h2>
            </div>
            <div class="clearfix" ></div>
          </div>
          <!-- /menu prile quick info -->

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">

                  <li><a><i class="fa fa-th"></i> Hostels <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="add_hostel.php"> <i class="fa fa-plus"></i>Add Hostel</a></li>
                            <?php 
                                $stmt = $DB->prepare("SELECT DISTINCT location FROM hostel");
                                $stmt->execute();
                                $rest = $stmt->fetchAll();
                            foreach ($rest as $crd ){ ?>
                            
                            <li><a><i class="fa fa-home"></i> <?php echo $crd['location']; ?> <span class="fa fa-chevron-down"></span></a>
                              <ul class="nav child_menu" style="display: none">

                            <?php 
                                $stmt = $DB->prepare("SELECT name FROM hostel Where location = '{$crd['location']}' ");
                                $stmt->execute();
                                $vt = $stmt->fetchAll();
                            foreach ($vt as $cd ){ ?>
                                <li><a href="spc.php?name=<?php echo $cd['name']; ?>"><?php echo $cd['name']; ?></a></li>
                             <?php } ?>   
                              </ul>
                            </li>
                            <?php } ?>
                  </ul>
                </li>
                <li><a href='landlord.php'><i class="fa fa-th-large"></i> Landlords <span class="fa fa-chevron-right"></span></a></li>
                <li><a href='users.php'><i class="fa fa-user"></i> Clients <span class="fa fa-chevron-right"></span></a></li>
                <li><a href='admin.php'><i class="fa fa-home"></i> Employess <span class="fa fa-chevron-right"></span></a></li>
                <li><a><i class="fa fa-bed"></i> Booking <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="booking.php"> <i class="fa fa-list"></i>All Bookings</a></li>
                            <?php 
                                $stmt = $DB->prepare("SELECT DISTINCT landlordId, name FROM landlord");
                                $stmt->execute();
                                $rest = $stmt->fetchAll();
                               foreach ($rest as $crd ){ ?>
                            
                            <li><a href="booking_list.php?id=<?php echo $crd['landlordId']; ?>" > <i class="fa fa-user"></i> <?php echo $crd['name']; ?></a></li>
                            <?php } ?>
                </ul>
                </li>
                <li><a href='logs.php'><i class="fa fa-clock-o"></i> Logs <span class="fa fa-chevron-right"></span></a></li>
                <li><a><i class="fa fa-gear"></i> Reports <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="Reports/ConsumerReport.php" target="_blank"> <i class="fa fa-inbox"></i> Customer Report </a></li>
                     <li><a href="Reports/emp.php" target="_blank"> <i class="fa fa-inbox"></i> Employee Report </a></li>
                     <li><a href="Reports/land.php" target="_blank"> <i class="fa fa-inbox"></i> Landlord Report </a></li>
                     <li><a href="Reports/hostel.php" target="_blank"> <i class="fa fa-inbox"></i> Hostel Report </a></li>
                     <li><a href="Reports/booking.php" target="_blank"> <i class="fa fa-inbox"></i> Booking Report </a></li>
                     <li><a href="Reports/payment.php" target="_blank"> <i class="fa fa-inbox"></i> Payment Report </a></li>
                     <li><a href="Reports/network.php" target="_blank"> <i class="fa fa-inbox"></i> Network Report </a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-gear"></i> System Settings <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="email_set.php"> <i class="fa fa-inbox"></i> Email Settings </a></li>
                    <li><a href="location_set.php"> <i class="fa fa-map-marker"></i> Location Settings </a></li>
                     <li><a href="backup.php"> <i class="fa fa-save"></i> Back Up Database </a></li>
                  </ul>
                </li>                
              </ul>
            </div>
          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a href="logout.php" data-toggle="tooltip" data-placement="top" title="Logout">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>


      <?php include "top_nav.php"; ?>