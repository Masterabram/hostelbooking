<?php
  include_once '../config/functions.php';
	include_once('../config/config.php');
	include_once('../config/database.php');

if (isset($_POST ['submit'])){


  $username = trim($_POST['username']);
  $password = trim($_POST['password']);
  $smtp = trim($_POST['smtp']);
  $subject = trim($_POST['subject']);
  $facebook = trim($_POST['facebook']);
  $twitter = trim ($_POST['twitter']);
 
  $error = FALSE;

  if (!$error) {
    $sql = "UPDATE email_setting SET username='{$username}', password='{$password}', smtp='{$smtp}', subject='{$subject}', facebook='{$facebook}', twitter='{$twitter}'";
      
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
  redirect_to('email_set.php');

}

?>