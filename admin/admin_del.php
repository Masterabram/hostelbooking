<?php
include_once '../config/functions.php';
	include_once('../config/config.php');
	include_once('../config/database.php');

$sql = "DELETE FROM systemadmin WHERE id = '{$_GET['id']}' ";

try{
      $stmt = $DB->prepare($sql);

      // execute Query
      $stmt->execute();
      $result = $stmt->rowCount();
      if ($result > 0) {
        $_SESSION["message"] = "successfully Deleted.";
      } else {
        $_SESSION["message"] = "Failed.";
      }
    } catch (Exception $ex) {
      $_SESSION["message"] = $ex->getMessage();
    }
  redirect_to('admin.php');
?>