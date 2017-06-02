<?php
include_once '../config/functions.php';
	include_once('../config/config.php');
	include_once('../config/database.php');

if (isset($_POST ['submit'])){

    // echo "<pre>";
    // print_r($_POST);
    // echo "<pre>";

  $name = trim($_POST['name']);
  $email = trim($_POST['email']);
  $no = trim($_POST['tel']);
  $error = FALSE;

    // echo pre($_POST);
  if (!$error) {
    $sql = "INSERT INTO systemadmin (name, email, tel) VALUES ('{$name}', '{$email}', '{$no}' );";
      
      try{
      $stmt = $DB->prepare($sql);

      // execute Query
      $stmt->execute();
      $result = $stmt->rowCount();
      if ($result > 0) {
        $msg = "You have been registered with Hostel booking as an employee. use your email and password= Changeme for login "; 
        send_sms ($no, $msg);
        $_SESSION["message"] = "successfully Inserted.";
      } else {
        $_SESSION["message"] = "Failed.";
      }
    } catch (Exception $ex) {
      $_SESSION["message"] = $ex->getMessage();
    }
  }
  redirect_to('admin.php');

}

?>