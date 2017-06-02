<?php 
  include_once '../config/functions.php';
  include_once('../config/config.php');
  include_once('../config/database.php');

if (isset($_POST ['submit'])){

  $email = trim($_POST['email']);
  $type = trim($_POST['type']);

  $cred = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM client WHERE email ='{$email}' "));

  if(count($cred)==0)
  {
    $_SESSION["message"] = "No such user";
    redirect_to('sign_u.php');
  }
  else
  {
    $sender = $cred['name'];
    insert_password_reset( $sender, $type );

    $msg = "Click the link below to change your password <a href='http://localhost/project/forgot_password_reset.php'> Click here </a>";

    $name = $cred['name'];
    $subject = 'Password Reset';
    send_email($name, $email, $subject, $msg);

    $_SESSION["message"] = "Request Received  Wait for a confirmation Email.";
    redirect_to('sign_up.php');
  }

}

?>