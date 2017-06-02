<?php
include_once '../config/functions.php';
	include_once('../config/config.php');
	include_once('../config/database.php');


if (isset($_POST ['submit'])){

  $pass1 = trim($_POST['password1']);
  $pass2 = trim($_POST['password2']);
  $sex = trim($_POST['gender']);
  $idno = trim($_POST['idno']);
  $id =  trim($_POST['landId']);
  $filename = "";
  $error = FALSE;

  if($pass1 == !$pass2){
  	$error = TRUE;
  }elseif ($pass1 == $pass2) {
  	$pass =  md5($pass1);
  }

  if (is_uploaded_file($_FILES["profile_image"]["tmp_name"])) {
    $filename = time() . '_' . $_FILES["profile_image"]["name"];
    $filepath = '../profile_image/'.$filename;
    if (!move_uploaded_file($_FILES["profile_image"]["tmp_name"], $filepath)) {
      $error = TRUE;
    }
  }
    // echo pre($_POST);
  if (!$error) {
    $sql = "UPDATE systemadmin SET password='{$pass}', sex='{$sex}', nationalId='{$idno}', profile_image='{$filename}' WHERE id ='{$id}' ";
      try {
      $stmt = $DB->prepare($sql);

      // execute Query
      $stmt->execute();
      $result = $stmt->rowCount();
      if ($result > 0) {
        $_SESSION["message"] = "successfully Updated. Please log in again.";
      } else {
        $_SESSION["message"] = "Failed.";
      }
    } catch (Exception $ex) {
      $_SESSION["message"] = $ex->getMessage();
    }
  }
  redirect_to('index.php');

}

?>
