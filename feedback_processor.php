<?php

  require_once('config/functions.php');
  require_once('config.php');

if (isset($_POST ['submit'])){


  $name = trim($_POST['name']);
  $email = trim($_POST['email']);
  $tel = trim($_POST['tel']);
  $msg = trim ($_POST['msg']);
  $user_ip = $_SERVER['REMOTE_ADDR'];
  $error = FALSE;
  
  $sql = "INSERT INTO feedback ( name, email, tel, msg, user_ip ) VALUES ('{$name}', '{$email}', '{$tel}', '{$msg}', '{$user_ip}' );";

  $msg = "Dear ". $name. ' ' . "we have received your feedback and we will respond back soon. Thank you for being a loyal customer" ;
  
  send_sms ($tel, $msg);
  
  if (!mysqli_query($mysqli,$sql))
  {
  die('Error: ' . mysqli_error($mysqli));
 }
  $msg = "Dear ". $name. ' ' . "we have received your feedback and we will respond back soon. Thank you for being a loyal customer" ;
  
  send_sms ($tel, $msg);

  header("location: index.php");
  echo "1 record added";

 mysqli_close($mysqli);

}

?>