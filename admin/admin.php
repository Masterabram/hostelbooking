
<?php
include "header.php";
?>


      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>
                   
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
                  <h2>Employess List</h2>
                  <h2 class="pull-right"> <a href="add_emp.php"><i class="fa fa-plus"></i> Add Employee</a> </h2>
                 
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" style="height:450px">
                  
                  <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Profile</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Tell</th>
                        <th>National ID #</th>
                        <th>Gender</th>
                        <th>Action</th>
                      </tr>
                    </thead>


                    <tbody>
                <?php

                    $stmt = $DB->prepare("SELECT * FROM systemadmin ");
                    $stmt->execute();
                    $rest = $stmt->fetchAll();
                      // echo $rest;
                foreach ($rest as $crd ){ ?>

                      <tr>
                        <td class="user-profile">
                          <img src="../profile_image/<?php echo $crd['profile_image']; ?>" alt="..." >
                        </td> 
                        <td><?php echo $crd['name'];?></td>
                        <td><?php echo $crd['email'];?></td>
                        <td><?php echo $crd['tel'];?></td>
                        <td><?php echo $crd['nationalId'];?></td>
                        <td><?php echo $crd['sex'];?></td>
                        <td><a href="admin_del.php?id=<?php echo $crd['id']; ?>"><i class="fa fa-trash"> Delete </i></a>  <a href="#"><i class="fa fa-edit pull-right"> Edit </i></a> </td>
                      </tr>
                <?php }?>     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>


           

 
                </div>
              </div>

<?php include "footer.php"; ?>




        <!-- Datatables -->
        <!-- <script src="js/datatables/js/jquery.dataTables.js"></script>
  <script src="js/datatables/tools/js/dataTables.tableTools.js"></script> -->

        <!-- Datatables-->
        <script src="../js/datatables/jquery.dataTables.min.js"></script>
        <script src="../js/datatables/dataTables.bootstrap.js"></script>
        <script src="../js/datatables/dataTables.buttons.min.js"></script>
        <script src="../js/datatables/buttons.bootstrap.min.js"></script>
        <script src="../js/datatables/jszip.min.js"></script>
        <script src="../js/datatables/pdfmake.min.js"></script>
        <script src="../js/datatables/vfs_fonts.js"></script>
        <script src="../js/datatables/buttons.html5.min.js"></script>
        <script src="../js/datatables/buttons.print.min.js"></script>
        <script src="../js/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="../js/datatables/dataTables.keyTable.min.js"></script>
        <script src="../js/datatables/dataTables.responsive.min.js"></script>
        <script src="../js/datatables/responsive.bootstrap.min.js"></script>
        <script src="../js/datatables/dataTables.scroller.min.js"></script>


        <!-- pace -->
        <script src="js/pace/pace.min.js"></script>
        <script>
          var handleDataTableButtons = function() {
              "use strict";
              0 !== $("#datatable-buttons").length && $("#datatable-buttons").DataTable({
                dom: "Bfrtip",
                buttons: [{
                  extend: "copy",
                  className: "btn-sm"
                }, {
                  extend: "csv",
                  className: "btn-sm"
                }, {
                  extend: "excel",
                  className: "btn-sm"
                }, {
                  extend: "pdf",
                  className: "btn-sm"
                }, {
                  extend: "print",
                  className: "btn-sm"
                }],
                responsive: !0
              })
            },
            TableManageButtons = function() {
              "use strict";
              return {
                init: function() {
                  handleDataTableButtons()
                }
              }
            }();
        </script>
        <script type="text/javascript">
          $(document).ready(function() {
            $('#datatable').dataTable();
            $('#datatable-keytable').DataTable({
              keys: true
            });
            $('#datatable-responsive').DataTable();
            $('#datatable-scroller').DataTable({
              ajax: "js/datatables/json/scroller-demo.json",
              deferRender: true,
              scrollY: 380,
              scrollCollapse: true,
              scroller: true
            });
            var table = $('#datatable-fixed-header').DataTable({
              fixedHeader: true
            });
          });
          TableManageButtons.init();
        </script>
</body>

</html>
