
<?php
include "header.php";
?>


      <!-- page content -->
      <div class="right_col" role="main">

        <div class="">
          <div class="page-title">
            <div class="title_left">
              <?php echo messages(); ?>
              <h3>My Hostels</h3>
            </div>

            <div class="title_right">
          
            </div>
          </div>
          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12">
              <div class="x_panel">
                <div class="x_content">

                  <div class="row" style="height:450px">

                    <div class="clearfix"></div>
                    <?PHP 
                    $query = "SELECT * FROM hostel WHERE 1 AND  landlordId = '{$_SESSION['id']}' ";
                    // $cred = mysqli_fetch_assoc(mysqli_query($connection, $query));
                    $stmt = $DB->prepare($query);
                    $stmt->execute();
                    $res = $stmt->fetchAll();
                    ?>

                    <?php if(count($res)==0){ ?>
                    <div class="Well well centered"> <strong class="text-centre"> <?php echo $_SESSION['name']; ?> Result Empty </strong></div>
                    <?php }else foreach ($res as $cred ) { ?>
                      <div class="col-md-3 col-sm-3 col-xs-12 animated fadeInDown">
                      <div class="well profile_view">
                        <div class="col-sm-12" >
                          
                            <img src="hostel_image/<?php echo $cred['img1'];?>" style="width:1280px;height:300px;" alt="" class="img-responsive" height="200px">
                          
                        </div>
                        <div class="col-xs-12 bottom text-center emphasis">
                                  <h2 class="brief"><i><?php echo $cred['name']; ?></i></h2>
                            <ul class="list-unstyled">
                              <li><i class="fa fa-map-marker"></i> Location: <?php echo $cred['location']; ?></li>
                              <li><p class="emphasis"><?php echo $rem = $cred['qty']-$cred['bkqty']; ?> Remaining || <a href="view_hostel.php?id=<?php echo $cred['hostelId']; ?>"> <span class="fa fa-folder"></span> </a> ||  <a href="edit_hostel.php?id=<?php echo $cred['hostelId']; ?>"> <span class="fa fa-pencil"></span> </a> || 
                                <a href="del_hostel.php?id=<?php echo $cred['hostelId']; ?>"> <span class="fa fa-trash-o"></span> </a> || <a href="edit_images.php?id=<?php echo $cred['hostelId']; ?>"> <span class="fa fa-plus"></span> </a> </p></li>
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
