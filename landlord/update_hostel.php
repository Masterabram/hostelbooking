<?php
include_once '../config/functions.php';
	include_once('../config/config.php');
	include_once('../config/database.php');

if (isset($_POST ['submit'])){

    // echo "<pre>";
    // print_r($_POST);
    // echo "<pre>";

  $name = trim($_POST['name']);
  $desc = trim($_POST['desc']);
  $price = trim($_POST['price']);
  $location = trim ($_POST['location']);
  $id= trim ($_POST['id']);
  $qty= trim ($_POST['qty']);
  $hid= trim ($_POST['hid']);
  $filename = "";
  $error = FALSE;

  if (is_uploaded_file($_FILES["hostel_image"]["tmp_name"])) {
    $filename = time() . '_' . $_FILES["hostel_image"]["name"];
    $filepath = 'hostel_image/'.$filename;
    if (!move_uploaded_file($_FILES["hostel_image"]["tmp_name"], $filepath)) {
      $error = TRUE;
    }
  }

    // echo pre($_POST);
  if (!$error) {
    $sql = "UPDATE hostel SET landlordId='{$id}', name='{$name}', location='{$location}', price='{$price}', description='{$desc}', img1='{$filename}', qty='{$qty}' WHERE hostelId = '{$hid}';";
      
      try{
      $stmt = $DB->prepare($sql);

      // execute Query
      $stmt->execute();
      $result = $stmt->rowCount();
      if ($result > 0) {
        $_SESSION["message"] = "successfully Updated.";
      } else {
        $_SESSION["message"] = "Failed.";
      }
    } catch (Exception $ex) {
      $_SESSION["message"] = $ex->getMessage();
    }
  }
  redirect_to('home.php');

}

?>