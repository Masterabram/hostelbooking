<?php
if(!empty($_FILES)){
	require '../config/configg.php';
	require '../config/functions.php';
	
	$id = trim($_POST['id']);
	$targetDir = "hostel_image/";
	$fileName = $_FILES['file']['name'];
	$targetFile = $targetDir.$fileName;

	$result = mysqli_fetch_assoc(mysqli_query($connection, "SELECT hoselId FROM hostel_image WHERE hoselId = '$id' "));

	if (!$result)
	{
		if(move_uploaded_file($_FILES['file']['tmp_name'],$targetFile)){
			//insert file information into db table
			$mysqli->query("INSERT INTO hostel_image (hoselId, img1) VALUES('{$id}', '".$fileName."')");
		}
		else
		{
			echo "Image not uploaded";
		}
	}
	else
	{
		echo "Images already exist";
	} 
}
?>