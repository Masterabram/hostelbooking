 <?php

  session_start();
  include_once('config/functions.php');
	
	//start sessio
    if (isset($_POST['submit']))
{
		// Define $myusername and $mypassword
	$email=$_POST['email'];
	$password=$_POST['password'];
	login_landlord($email ,$password); 

}
?>