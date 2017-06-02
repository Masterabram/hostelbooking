<?php
require_once('config/functions.php');

if (isset($_POST['submit']))
{
	$location = trim($_POST['location']);
	$price = trim($_POST['price']);

	redirect_to('more.php?location='.$location.'&price='.$price);
}

?>