<?php

  require_once('config.php');

if (isset($_POST ['submit'])){


  $name = trim($_POST['name']);
  $email = trim($_POST['email']);
  $tel = trim($_POST['tel']);
  $msg = trim ($_POST['msg']);
  $user_ip = $_SERVER['REMOTE_ADDR'];
  $error = FALSE;
  
  $sql = "INSERT INTO feedback ( name, email, tel, msg, user_ip ) VALUES ('{$name}', '{$email}', '{$tel}', '{$msg}', '{$user_ip}' );";
  
  if (!mysqli_query($mysqli,$sql))
  {
  die('Error: ' . mysqli_error($mysqli));
 }
  header("location: index.php");
  echo "1 record added";

 mysqli_close($mysqli);

}

?>