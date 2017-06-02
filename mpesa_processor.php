<?php
include_once('config/functions.php');

function process_payment($customer_id, $mpesa_amt)
{
	 $query = "SELECT * FROM payment WHERE  tell = '{$customer_id}'";
     $cred = mysqli_fetch_assoc(mysqli_query($connection, $query));

     $query = "SELECT * FROM booking WHERE  tell = '{$customer_id}'";
     $book = mysqli_fetch_assoc(mysqli_query($connection, $query));

	 $query = "UPDATE  payment  SET price_debit = '{$mpesa_amt}' WHERE tell = '{$customer_id}'";
	 $stmt = $DB->prepare($query);
	 $stmt->execute();
	 $result = $stmt->rowCount();

	 $tel = $customer_id;
	 $msg = 'We have received Ksh '.$mpesa_amt.' Please note that you`ve  successfully booked and hostel';
	 // sms to client
	 send_sms ( $tel, $msg);

	 $query = "SELECT * FROM landlord WHERE  landlordId = '{$book['landlordId']}'";
     $land = mysqli_fetch_assoc(mysqli_query($connection, $query));

     $query = "SELECT name FROM hostel WHERE  hostelId = '{$book['hostelId']}'";
     $land = mysqli_fetch_assoc(mysqli_query($connection, $query));


     $tel = $land['tell'];
     $msg = 'Dear'. $land['name'].',' .$book['name']. 'Has successfully booked your hostel ' .$hostel['name']. 'Please keep the reservation';
     // SMS TO LANDLORD
      send_sms ( $tel, $msg);

}

?>