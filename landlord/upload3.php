<?php
if(!empty($_FILES)){
	require '../config/configg.php';
	
	$id = trim($_POST['id']);
	$targetDir = "hostel_image/";
	$fileName = $_FILES['file']['name'];
	$targetFile = $targetDir.$fileName;
	if(move_uploaded_file($_FILES['file']['tmp_name'],$targetFile)){
		//insert file information into db table
		$mysqli->query("UPDATE hostel_image SET  img3 = '$fileName' WHERE hoselId = '$id' ");
	} 
	
}
?>