<?php
include('config.php');
$error = false;

if (!$_POST['terms'])
{
	$error = true;
}

if ($_POST['password1']==$_POST['password2'])
{
	$password = md5($_POST['password1']);
}
else
{
	$error = true;
}

if (!$error)
{
	$sql="INSERT INTO landlord (name, email, password, ownership, tel, gender, idno) 
	VALUES ('$_POST[name]', '$_POST[email]', '$password', '$_POST[ownership]', '$_POST[tell]', '$_POST[sex]', '$_POST[nationalId]')";

	if (!mysqli_query($mysqli,$sql))
	  {
	  die('Error: ' . mysqli_error($mysqli));
	  }
	  header("location: index.php");
	  echo "1 record added";

	 mysqli_close($mysqli);
}else 
{
	  header("location: landlord_registration.php");
	  echo "Not Added";
} 
?> 