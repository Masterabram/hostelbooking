<?php
include_once '../config/functions.php';
	include_once('../config/config.php');
	include_once('../config/database.php');

if (isset($_POST ['submit'])){


  $id = trim($_POST['id']);
  $filename1 = "";
  $filename2 = "";
  $filename3 = "";
  $filename4 = "";
  $error = FALSE;

  if (is_uploaded_file($_FILES["hostel_image1"]["tmp_name"])) {
    $filename1 = time() . '_' . $_FILES["hostel_image1"]["name"];
    $filepath = 'hostel_image/'.$filename1;
    if (!move_uploaded_file($_FILES["hostel_image1"]["tmp_name"], $filepath)) {
      $error = TRUE;
    }
  }

    if (is_uploaded_file($_FILES["hostel_image2"]["tmp_name"])) {
    $filename2 = time() . '_' . $_FILES["hostel_image2"]["name"];
    $filepath = 'hostel_image/'.$filename2;
    if (!move_uploaded_file($_FILES["hostel_image2"]["tmp_name"], $filepath)) {
      $error = TRUE;
    }
  }

    if (is_uploaded_file($_FILES["hostel_image3"]["tmp_name"])) {
    $filename3 = time() . '_' . $_FILES["hostel_image3"]["name"];
    $filepath = 'hostel_image/'.$filename3;
    if (!move_uploaded_file($_FILES["hostel_image3"]["tmp_name"], $filepath)) {
      $error = TRUE;
    }
  }

    if (is_uploaded_file($_FILES["hostel_image4"]["tmp_name"])) {
    $filename4 = time() . '_' . $_FILES["hostel_image4"]["name"];
    $filepath = 'hostel_image/'.$filename4;
    if (!move_uploaded_file($_FILES["hostel_image4"]["tmp_name"], $filepath)) {
      $error = TRUE;
    }
  }
    // echo pre($_POST);
  if (!$error) {
    $sql = "INSERT INTO hostel_image (hoselId, img1, img2, img3, img4) VALUES ('{$id}', '{$filename1}', '{$filename2}', '{$filename3}', '{$filename4}');";
      
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
  redirect_to('view_hostel.php?id='.$id);

}

?>