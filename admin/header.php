<?php session_start(); require_once '../config/functions.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

   <?php 
      $query = "SELECT * FROM systemadmin WHERE 1 AND id = '{$_SESSION['id']}'";
      $cred = mysqli_fetch_assoc(mysqli_query($connection, $query));
   ?>

  <title>Hostel Booking || <?php  echo $cred['name']; ?> </title>

   <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="../css/animate.min.css" rel="stylesheet">
  <link href="../css/custom.css" rel="stylesheet">
  <link href="../css/icheck/flat/green.css" rel="stylesheet">
  <link rel="shortcut icon" href="../images/favicon.png" />
  

  <script src="ckeditor/ckeditor.js"></script>
  <link href="../js/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
  <link href="../js/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="../js/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="../js/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="../js/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />

  <script src="../js/jquery.min.js"></script>

  <script type="text/javascript">
   function refreshData()
   {
    $('#msg').load('count.php');
   }

   window.setInterval(refreshData, 5000);


  </script>


<?php include "sidebar.php"; ?>

 </head>