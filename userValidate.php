<?php 

  session_start();
  include_once('config/functions.php');
	
	//start sessio
    if (isset($_POST['submit']))
{
		// Define $myusername and $mypassword
	$email=$_POST['email'];
	$password=$_POST['password'];
	login($email ,$password); 

}

    if (isset($_POST['logg']))
{
		// Define $myusername and $mypassword
	$email=$_POST['email'];
	$password=$_POST['password'];
	$id=$_POST['id'];


	$query = "SELECT * FROM client WHERE email='{$email}' ";
	$cred = mysqli_fetch_assoc(mysqli_query($connection, $query));
		// pre($staff);
		if($cred){
			//check password
				if($cred['password']==md5($password)){

						$type = "Client";
						$name = $cred['name'];
						$ip_add = $_SERVER['REMOTE_ADDR'];
						$session = $cred['tenantId'];

						network($name, $ip_add, $type, $session);

						$_SESSION['user_id'] = $cred['tenantId'];
						
					    redirect_to('process_payment.php?id='.$id);	
				}else{
					$errors['creds'] = "Email/password does not match";
					redirect_to('process_payment.php?id='.$id);
				}
		}else{
			//No staff found with those details 
			$errors['exist'] = "No such user";
			redirect_to('process_payment.php?id='.$id);
		}
		$_SESSION['errors'] = $errors;

}
?>
