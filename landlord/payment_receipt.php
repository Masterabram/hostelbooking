
<?php
include "header.php";
?>


      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
         
          <div class="clearfix"></div>

          <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Your Hostel Bookings</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  
                  <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th> # </th>
                        <th>Name</th>
                        <th>Hostel</th>
                        <th>Tell</th>
                        <th>Cash Paid</th>
                        <th>Balance</th>
                        <th>Duration</th>
                      </tr>
                    </thead>


                    <tbody>
                <?php
                    $stmt = $DB->prepare("SELECT * FROM Booking  WHERE landlordId = '{$_SESSION['id']}' ");
                    $stmt->execute();
                    $rt = $stmt->fetchAll();
                      // echo $rest;
                foreach ($rt as $crd ){
                $rtr = mysqli_fetch_assoc(mysqli_query($connection, "SELECT name FROM hostel  WHERE hostelId = '{$crd['hostelId']}' "));
                $payment = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM payment  WHERE transactionId = '{$crd['transactionId']}' "));
                ?>
                      <tr>
                        <td> # </td>
                        <td><?php echo $crd['name'];?></td>
                        <td><?php echo $rtr['name'];?></td>
                        <td><?php echo $crd['tell'];?></td>
                        <td><?php echo $payment['price_debit'];?></td>
                        <td><?php echo ($payment['price_credit']-$payment['price_debit']) ;?></td>
                        <td><?php echo $crd['duration'].'Months' ;?></td>
                        
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
        <script src="../js/pace/pace.min.js"></script>
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
              ajax: "../js/datatables/json/scroller-demo.json",
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
