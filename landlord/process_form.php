
<?php
include_once 'config/functions.php';
include_once 'config/database.php';
include_once 'config/config.php';

if (isset($_POST ['submit'])){

    // echo "<pre>";
    // print_r($_POST);
    // echo "<pre>";

  $name = trim($_POST['name']);
  $regno = trim($_POST['regno']);
  $email = trim($_POST['email']);
  $contact = trim ($_POST['number']);
  $dob = trim($_POST['dob']);
  $id =  trim($_POST['tenantId']);
  $sex = trim($_POST['gender']);
  $idno = trim($_POST['idno']);
  $filename = "";
  $error = FALSE;

  if (is_uploaded_file($_FILES["profile_image"]["tmp_name"])) {
    $filename = time() . '_' . $_FILES["profile_image"]["name"];
    $filepath = '../profile_image/'.$filename;
    if (!move_uploaded_file($_FILES["profile_image"]["tmp_name"], $filepath)) {
      $error = TRUE;
    }
  }
    // echo pre($_POST);
  if (!$error) {
    $sql = "UPDATE client SET name='{$name}', email='{$email}', tell='{$contact}', nationalId='{$idno}', studentId='{$regno}', sex='{$sex}', dob='{$dob}', profile_image='{$filename}' WHERE  tenantId='{$id}' ";
      try {
      $stmt = $DB->prepare($sql);

      // execute Query
      $stmt->execute();
      $result = $stmt->rowCount();
      if ($result > 0) {
        $_SESSION["message"] = "successfully Updated.";
      } else {
        $_SESSION["message"] = "Failed.";
      }
    } catch (Exception $ex) {
      $_SESSION["message"] = $ex->getMessage();
    }
  }
  redirect_to('index.php');

}

?>


