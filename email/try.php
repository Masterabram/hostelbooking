<?php
	include_once('../config/config.php');
	include_once('../config/database.php');
	include_once('../config/functions.php');



    // $sql = "SELECT * FROM email_setting WHERE id=1 ";
    // $stmt = $DB->prepare($sql);
    // $stmt->execute();
    // $rest = $stmt->fetchAll();
    $rest = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM email_setting WHERE id=1 "));

    echo $rest['username'];
    
?>

		