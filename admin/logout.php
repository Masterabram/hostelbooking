<?php 

require "../config/functions.php";
require "../config/config.php";
	session_destroy();

     $sql = "UPDATE network set activity = 1 WHERE (session_id = '{$session}' AND activity = 0 ) ";
      $stmt = $DB->prepare($sql);
      $stmt->execute();
      $result = $stmt->rowCount();


redirect_to('index.php');

?>