<?php
include "header.php";
?>


<?php 
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
   $sql = "SELECT * FROM hostel WHERE 1 AND hostelId = '{$id}' ";
   $row = mysqli_fetch_assoc(mysqli_query($connection, $sql));

?> 

      <!-- page content -->
      <div class="right_col" role="main">

        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>E-Hostel Booking : <?php echo $row['name'];?></h3>
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
                  <h2>Process Now . . . </h2>
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
                <div class="x_content">

                  <div class="col-md-7 col-sm-7 col-xs-7">
                    <div class="product-image">
                      <img src="hostel_image/<?php echo $row['img1'];?>" style="width:500px;height:400px;" alt="..." />
                    </div><a href="edit_images.php?id=<?php echo $id; ?>"> Edit Images</a>
                    <div class="product_gallery">
                     <?php 
                      $query= "SELECT * FROM hostel_image WHERE 1 AND hoselId = '{$id}' ";
                      $key = mysqli_fetch_assoc(mysqli_query($connection, $query));

                      // echo  $key[''];
                     ?> 
                      <a><img src="hostel_image/<?php echo $key['img1']; ?>" alt="..." style="width:100px;height:100px;" /></a>
                      <a><img src="hostel_image/<?php echo $key['img2'];?>" alt="..." style="width:100px;height:100px;" /></a>
                      <a><img src="hostel_image/<?php echo $key['img3'];?>" alt="..." style="width:100px;height:100px;" /></a>
                      <a><img src="hostel_image/<?php echo $key['img4'];?>" alt="..." style="width:100px;height:100px;" /></a>
                    </div>
                  </div>

                  <div class="col-md-5 col-sm-5 col-xs-12" style="border:0px solid #e5e5e5;">

                    <h3 class="prod_title"><?php echo $row['name'];?></h3>

                    <p><?php echo $row['name'];?> is a rental hostel situated in <?php echo $row['Nyawita'];?>, Maseno area.</p>
                    <br />

                    <div class="">
                      <h2>Facilities Offered include</h2>
                        <p><strong> </strong><?php echo $row['description'];?></p>
                    </div>
                    <br />

                    <br />

                    <div class="">
                      <div class="product_price">
                        <h1 class="price">Ksh<?php echo $row['price'];?></h1>
                        <span class="price-tax">Ex Tax: Nill</span>
                        <br>
                      </div>
                    </div>

                    <div class="">
                      <a class="btn btn-default btn-lg" href="del_hostel.php?id=<?php echo $row['hostelId']; ?>"><SPAN class="fa fa-trash" ></SPAN> DELETE</a>
                    </div>

                    <div class="product_social">
                      <?php echo $row['qty']; ?> ROOMS REMAINING
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
