<?php
  require_once 'config/functions.php';
  require_once 'config/config.php';
  require_once 'config/database.php';
 // require_once('email/email.php');

if (isset($_POST ['submit'])){

  $name = trim($_POST['name']); 
  $tell = trim($_POST['tell']);
  $email = trim($_POST['email']);
  $gender = trim($_POST['gender']);
  $county = trim($_POST['county']);
  $study = trim($_POST['study']);
  $student_id = trim($_POST['student_id']);
  $duration = trim($_POST['duration']);

  $price = trim($_POST['price']);
  $hostelid= trim ($_POST['hostelid']);
  $tenantid= trim ($_POST['tenantid']);
  $landlordid = trim ($_POST['landlordid']);
  $trns = rand(500000 , 1000000);
  $error = FALSE;
 
    // echo pre($_POST);
  if (!$error) {
    $sql = "INSERT INTO booking (transactionId, hostelId, landlordId, tenantId, name, tell, email, gender, county, student_id, duration, study) VALUES"
           ."('{$trns}', '{$hostelid}', '{$landlordid}', '{$tenantid}', '{$name}', '{$tell}', '{$email}', '{$gender}', '{$county}', '{$student_id}', '{$duration}', '{$study}' );";
    $stmt = $DB->prepare($sql);
    $stmt->execute();
    $result = $stmt->rowCount();

    $query = "INSERT INTO payment (transactionId, hostelId, price_credit, tell) VALUES"
           ."('{$trns}', '{$hostelid}', '{$price}', '{$tell}' );";
    $stmt = $DB->prepare($query);
    $stmt->execute();
    $result = $stmt->rowCount();   

    ////////////////////////////////// doing quontatity update
    $query = "SELECT * FROM hostel WHERE  hostelId = '{$cred['hostelId']}'";
    $row = mysqli_fetch_assoc(mysqli_query($connection, $query));
    $new = $row['bkqty'] + 1;

    $query = "UPDATE  hostel  SET bkqty = '{$new}' WHERE hostelId = '{$cred['hostelId']}'";
    $stmt = $DB->prepare($query);
    $stmt->execute();
    $result = $stmt->rowCount();
    ////////////////////////////////// 

    $subject = 'Booking Verification';
    $msg = 'Please proceed to Mpesa and make a Lipa na Mpesa payment under till number 1234 Please make sure you specificly used this number';
    $tel = $tell;


    send_email($name, $email, $subject, $msg);
    send_sms ( $tel, $msg);

    $msgg = $name. ' Has booked hostel '. ' ' .$row['name'] . ' ' . 'for' . $duration . ' ' .'Keep enjoying with hostel Booking';
    send_notification($landlordid,  $msgg);

    }       
  redirect_to('Thank.php');

}

?>