<?php
include_once '../config/functions.php';

if (isset($_POST ['submit'])){

  $location = trim($_POST['location']);
  $long = trim($_POST['long']);
  $land = trim($_POST['land']);
  $lat = trim($_POST['lat']);
  $error = FALSE;

  if (!$error) {
  echo   $sql = "INSERT INTO location (`location`, `long`, `lat`) VALUES ('$location', '$long', '$lat' )";
      
      try{
      $stmt = $DB->prepare($sql);

      // execute Query
      $stmt->execute();
      $result = $stmt->rowCount();
      if ($result > 0) {
        $_SESSION["message"] = "successfully Inserted.";
      } else {
        $_SESSION["message"] = "Failed.";
      }
    } catch (Exception $ex) {
      $_SESSION["message"] = $ex->getMessage();
    }
  }
  redirect_to('location_set.php');

}

?>