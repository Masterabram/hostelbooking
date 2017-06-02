<?php 
include_once '../config/functions.php';
	include_once('../config/config.php');
	include_once('../config/database.php');
  include_once('../email/email.php');

if (isset($_POST ['submit'])){

  $idno = trim($_POST['tell']);
  $type = trim($_POST['type']);

  $cred = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM landlord WHERE idno ='{$idno}' "));

  if(count($cred)==0)
  {
    $_SESSION["message"] = "No such user";
    redirect_to('index.php');
  }
  else
  {
    $stmt = $DB->prepare("UPDATE landlord SET password = 'changeme' WHERE idno = '{$idno}' ");
    $stmt->execute();
    $result = $stmt->rowCount();

    $sender = $cred['name'];
    insert_password_reset( $sender, $type );

    $msg = 'Your Password has been reseted to Changeme Please login in and change it immediatly';
    $no= $cred['tel'];
    send_sms ($no, $msg);

    $name = $cred['name'];
    $email = $cred['email'];
    $subject = 'Password Reset';
    send_email($name, $email, $subject, $msg);

    $_SESSION["message"] = "Request Received  Wait for a confirmation SMS ans Email.";
    redirect_to('index.php');
  }

}

?>