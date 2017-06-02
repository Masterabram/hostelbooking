<?php 
session_start();
require "config/functions.php";
$session = $_SESSION['user_id'];
logout($session);

?>