<?php
session_start();
include_once("config.php");
include_once("config/functions.php");

if(isset($_POST["type"]) && $_POST["type"]=='add')
{
	$hostelid 	= filter_var($_POST["Product_ID"], FILTER_SANITIZE_STRING); //product code
	redirect_to ("view_cart.php?id=".$hostelid);
}


?>