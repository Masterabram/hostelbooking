

<?php
include 'config.php';

?>

<?php 

if (isset($_POST['submit'])){

echo $name=$_POST['name'];
echo  $studentid=$_POST['studentid'];
echo $tell=$_POST['tell'];
echo $email=$_POST['email'];
echo  $sex=$_POST['sex'];
echo $dob=$_POST['dob'];
echo $nationalId=$_POST['nationalId'];
echo  $county=$_POST['county'];
$id=$_POST['tenantId'];

echo $query="update client  set name = '$name', studentId = '$studentid', tell = '$tell',email = '$email', sex = '$sex', dob = '$dob', nationalId = '$nationalId', county = '$county' where tenantId = $id";
$rows=mysqli_query($mysqli,$query);
echo "succes full updated ".$rows;
mysqli_close($con);
header("location: profile.php?msg=succes full update one record");
exit();
}

?>

