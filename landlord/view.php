<?php include 'header.php'; ?>
<?php include '../config/database.php'; ?>
      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Hostel Listings</h3>
            </div>

            <div class="title_right">
        
            </div>
          </div>
          <div class="clearfix"></div>

          <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel" style="height:600px;">
                <div class="x_title">
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
                  <div class="x_content">

<!-- table> -->
                    <?PHP 
                    $query = "SELECT * FROM hostel WHERE 1 AND  landlordId = '{$_SESSION['id']}' ";
                    // $cred = mysqli_fetch_assoc(mysqli_query($connection, $query));
                    $stmt = $DB->prepare($query);
                    $stmt->execute();
                    $res = $stmt->fetchAll();
                    ?>

                  <table class="table table-striped projects">
                    <thead>
                      <tr>
                        <th style="width: 1%">#</th>
                        <th style="width: 20%">Hostel Name</th>
                        <th>AVATERS</th>
                        <th>% BOOKED</th>
                        <th>REMAINING</th>
                        <th style="width: 20%">#ACTION</th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php if(count($res)==0){ ?>
                    <tr class="Well well centered"> <td><strong class="text-centre"> Result Empty </strong></td> </tr>
                    <?php }else foreach ($res as $cred ) { ?>
                      <tr>
                        <td>#</td>
                        <td>
                          <a><i><?php echo $cred['name']; ?></i></a>
                          <br />
                          <small><i><?php echo $cred['location']; ?></small>
                        </td>
                        <td>
                          <ul class="list-inline">
                            <li><img src="hostel_image/<?php echo $cred['img1']; ?>" class="avatar" alt="Avatar"></li>
                            <?php 
                            $row = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM hostel_image WHERE hoselId = '{$cred['hostelId']}'"));
                            ?>
                            <li><img src="hostel_image/<?php echo $row['img1']; ?>" class="avatar" alt="Avatar"></li> 
                            <li><img src="hostel_image/<?php echo $row['img2']; ?>" class="avatar" alt="Avatar"></li>
                            <li><img src="hostel_image/<?php echo $row['img3']; ?>" class="avatar" alt="Avatar"></li>
                            <li><img src="hostel_image/<?php echo $row['img4']; ?>" class="avatar" alt="Avatar"></li>
                          </ul>
                        </td>
                        <td class="project_progress">
                          <div class="progress progress_sm">
                           <?php
                             $up = $cred['bkqty'];
                             $low = $cred['qty'];
                            $red = ($up/$low)*100;  
                            ?>
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?php echo $red; ?>"></div>
                          </div>
                          <small><?php echo $red; ?>% Booked</small>
                        </td>
                        <td><?php echo $rem = $low-$up; ?> Remaining</td>
                        <td>
                          <a href="view_hostel.php?id=<?php echo $cred['hostelId']; ?>" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                          <a href="edit_hostel.php?id=<?php echo $cred['hostelId']; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                          <a href="del_hostel.php?id=<?php echo $cred['hostelId']; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>

<!-- table -->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
<?php include 'footer.php';?>