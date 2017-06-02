<?php
include_once '../config/functions.php';
	include_once('../config/config.php');
	include_once('../config/database.php');

if (isset($_POST ['submit'])){

  $name = trim($_POST['name']);
  $desc = trim($_POST['desc']);
  $price = trim($_POST['price']);
  $location = trim ($_POST['location']);
  $id= trim ($_POST['land']);
  $type= trim ($_POST['type']);
  $size= trim ($_POST['size']).'Square feet';
  $qty= trim ($_POST['qty']);
  $filename = "";
  $error = FALSE;

  if (is_uploaded_file($_FILES["hostel_image"]["tmp_name"])) {
    $filename = time() . '_' . $_FILES["hostel_image"]["name"];
    $filepath = '../landlord/hostel_image/'.$filename;
    if (!move_uploaded_file($_FILES["hostel_image"]["tmp_name"], $filepath)) {
      $error = TRUE;
    }
  }
    // echo pre($_POST);
  if (!$error) {
    $sql = "INSERT INTO hostel (landlordId, name, location, price, description, img1, qty, size, type) VALUES" 
            ."('{$id}', '{$name}', '{$location}', '{$price}', '{$desc}', '{$filename}', '{$qty}', '{$size}', '{$type}' );";
     
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
  redirect_to('add_hostel.php');

}

?>