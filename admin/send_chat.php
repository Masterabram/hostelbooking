<?php

 require_once '../config/functions.php';
 $sql_con = $connection;
	if(isset($_POST["message"]) &&  strlen($_POST["message"])>0)
	{
		$message = filter_var(trim($_POST["message"]));
		$user_ip = $_SERVER['REMOTE_ADDR'];
		
		mysqli_query($sql_con,"INSERT INTO chatting(user, message, ip_address) value('Admin','$message','$user_ip')");
	

		redirect_to('home.php');
	}
   redirect_to('home.php');

?>