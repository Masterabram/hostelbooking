<body class="nav-md">

  <div class="container body">


    <div class="main_container">

      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">

          <div class="navbar nav_title" style="border: 0;">
            <a href="home.php" class="site_title"><i class="fa fa-paw"></i> <span> Book Hostel </span></a>
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
                <li><a href='home.php'><i class="fa fa-home"></i> My hostels </a></li>
                <li><a href='all.php'><i class="fa fa-user"></i> Booked Occupants </a></li>
                <li><a href='add_hostel.php'><i class="fa fa-plus"></i> Add Hostel </a></li>
                <li><a href='View.php'><i class="fa fa-pencil"></i> Edit Hostels </a></li>
                <li><a href='payment_receipt.php'><i class="fa fa-list"></i> Payment Receipts </a></li>
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