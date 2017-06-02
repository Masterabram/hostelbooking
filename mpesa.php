<?php
require_once 'mpesa_processor.php';
/*  
MPESA IPN Sample 
Please do not use this code for production as it does not address security.  
*/
date_default_timezone_set('Africa/Nairobi');
$myFile = "mpesalog.txt"; 
$fh = fopen($myFile, 'a') or die("can't open file"); 
fwrite($fh, "=============================\n"); 
foreach ($_REQUEST as $var => $value) { 
fwrite($fh, "$var = $value\n"); 
} 
fwrite($fh, $fmessage); 
fclose($fh); 

//Save to Database – Commented! 

$msg="OK|Thank you for your payment";
$con = mysqli_connect("localhost","root",""); 
if (!$con) 
{ 
//die('Could not connect: ' . mysql_error());
$msg="FAIL|Could not connect to server"; 
} 
$selct = mysqli_select_db($con, "mpesa");
if(!$selct)
{
$msg="FAIL|Could not select database";
// die(mysql_error());
} 
function make_safe($variable){ // avoid injection
    $variable=mysql_real_escape_string(trim($variable));
	   $variablet=_INPUT($variable);
     return $variablet;
}
//function _INPUT()  { // remove tags
   if($_SERVER['REQUEST_METHOD'] === 'GET')
   {
  // return strip_tags($_GET[$name]);
    $id=strip_tags($_GET['id']);
   }
   if($_SERVER['REQUEST_METHOD'] === 'POST')
   {
    $id=$_POST['id'];
   //return strip_tags($_POST[$name]);
   }
 //}
$orig=$_REQUEST['orig']; 
$dest=$_REQUEST['dest']; 
$tstamp=$_REQUEST['tstamp']; 
$text=$_REQUEST['text']; 
$customer_id=$_REQUEST['customer_id']; 
$user=$_REQUEST['user']; 
$pass=$_REQUEST['pass']; 
$routemethod_id=$_REQUEST['routemethod_id']; 
$routemethod_name=$_REQUEST['routemethod_name']; 
$mpesa_code=$_REQUEST['mpesa_code']; 
$mpesa_acc=$_REQUEST['mpesa_acc']; 
$mpesa_msisdn=$_REQUEST['mpesa_msisdn']; 
$mpesa_trx_date=$_REQUEST['mpesa_trx_date']; 
$mpesa_trx_time=$_REQUEST['mpesa_trx_time']; 
$mpesa_amt=$_REQUEST['mpesa_amt']; 
$mpesa_sender=$_REQUEST['mpesa_sender']; 
$business_number=$_REQUEST['business_number'];

process_payment($customer_id, $mpesa_amt);

$qry="insert into mpesa 
	(id, orig, dest, tstamp, text, customer_id,user, pass,
	routemethod_id, routemethod_name,mpesa_code, mpesa_acc, 
	mpesa_msisdn, mpesa_trx_date, mpesa_trx_time, mpesa_amt, 
	mpesa_sender, business_number)
	values
	('$id', '$orig', '$dest', '$tstamp', '$text', '$customer_id','$user', '$pass', 
	'$routemethod_id','$routemethod_name','$mpesa_code', '$mpesa_acc', 
	'$mpesa_msisdn','$mpesa_trx_date','$mpesa_trx_time','$mpesa_amt', 
	'$mpesa_sender', '$business_number')";

if(!mysqli_query($con, $qry))
{
 die(mysqli_error($con)); 
//$msg="FAIL|Could not insert record";
}
 
mysqli_close($con); 

echo $msg." ".$_SERVER['REQUEST_METHOD'];  

?>