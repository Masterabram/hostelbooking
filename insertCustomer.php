<?php
include('config.php');
$error = false;

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
	$sql="INSERT INTO client (name, studentId, tell, email, password, county, sex, nationalId, dob) 
	VALUES ('$_POST[name]', '$_POST[studentId]', '$_POST[tell]', '$_POST[email]', '$password', '$_POST[county]', '$_POST[sex]', '$_POST[nationalId]', '$_POST[dob]')";

	if (!mysqli_query($mysqli,$sql))
	  {
	  die('Error: ' . mysqli_error($mysqli));
	  }
	  header("location: index.php");
	  echo "1 record added";

	 mysqli_close($mysqli);
}else 
{
	  header("location: customer.php");
	  echo "Not Added";
} 
?> 