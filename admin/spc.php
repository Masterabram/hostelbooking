
<?php
include "header.php";
?>


      <!-- page content -->
      <div class="right_col" role="main">

        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3><?php echo $_GET['name']; ?> Hostels</h3>
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

                    <div class="clearfix"></div>
                    <?PHP 
                    $query = "SELECT * FROM hostel WHERE name = '{$_GET['name']}'";
                    // $cred = mysqli_fetch_assoc(mysqli_query($connection, $query));
                    $stmt = $DB->prepare($query);
                    $stmt->execute();
                    $res = $stmt->fetchAll();
                    ?>

                    <?php foreach ($res as $cred ) { ?>
                      <div class="col-md-3 col-sm-3 col-xs-12 animated fadeInDown">
                      <div class="well profile_view">
                        <div class="col-sm-12" >
                          
                            <img src="../landlord/hostel_image/<?php echo $cred['img1'];?>" style="width:1280px;height:300px;" alt="" class="img-responsive" height="200px">
                          
                        </div>
                        <div class="col-xs-12 bottom text-center emphasis">
                                  <h2 class="brief"><i><?php echo $cred['name']; ?></i></h2>
                            <ul class="list-unstyled">
                              <li><i class="fa fa-phone"></i> Location: <?php echo $cred['location']; ?></li>
                              <li><p class="emphasis"><a href="view_hostel.php?id=<?php echo$cred['hostelId'];?>"><h2> Book Now Ksh <?php echo $cred['price']; ?></h2></a></p></li>
                            </ul>
                            
                        </div>
                      </div>
                    </div>

                     <?php } ?>

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
