<?php
	include_once('../config/config.php');
	include_once('../config/database.php');

	$errors=array();
//PHP PROCESSING FUNCTIONS
	function redirect_to($new_location){
		header("Location: ".$new_location);
		exit;
	}
	
	function pre($block){
        if(gettype($block) == "array"){
            echo "<pre>";
            print_r($block);
            echo "</pre>";
        }else{
            echo "<pre>".$block."</pre>";
        }
    }
	
	function print_null($value){
			if(is_null($value)){
					echo("");
				}else{
						echo $value;
					}
		}
		
	function check_login(){
			if(!isset($_SESSION['user_id'])){
					redirect_to('index.php');
				}
		}
// PHP DATABASE OPERATIONS	
	function mysql_prep($string){
		global $connection;

		$escaped_string=mysqli_real_escape_string($connection, $string);
		return $escaped_string;
	}
	
	function confirm_query($result_set){
		global $connection;
		
		if(!$result_set){
				 die("Database Query failed".mysqli_error($connection));
			}
		}
		
	

	function logout(){

		session_destroy();

		redirect_to('index.php');
	}


function register_ladnlord( $name, $email ,$tel){
    $error = FALSE;
	global $DB;
	global $errors;

		// $query = "INSERT INTO client (name, email, password, tell) VALUES ( '{$name}', '{$email}', '{$password}', '{$tell}' )";

 if (!$error) {
    $sql = "INSERT INTO landlord (name, email, tel) VALUES "
            . "('{$name}', '{$email}', '{$tel}' )";

     try {
      $stmt = $DB->prepare($sql);
      $stmt->execute();
      $result = $stmt->rowCount();
      if ($result > 0) {
        $_SESSION["message"] = "successful Wait for verification SMS.";
      } else {
        $_SESSION["message"] = "Failed Try agin Later.";
      }
    } catch (Exception $ex) {
      $_SESSION["message"] = $ex->getMessage();
    }
  }
  redirect_to('index.php#tologin');
}

function login_landlord($email ,$password){
		global $connection;
		global $errors;


		$query = "SELECT * FROM landlord WHERE email='{$email}' ";
		$cred = mysqli_fetch_assoc(mysqli_query($connection, $query));
		// pre($staff);
		if($cred){
			//check password
				if ($cred['password']=='changeme'){
					redirect_to('changeme.php?id='.$cred['landlordId']);
				}elseif($cred['password']==md5($password)){
						$_SESSION['name'] = $cred['name'];
						$_SESSION['email'] = $cred['email'];
						$_SESSION['id'] = $cred['landlordId'];
						
					    redirect_to('home.php');	
				}else{
					$errors['creds'] = "Email/password does not match";
				}
		}else{
			//No staff found with those details 
			$errors['exist'] = "No such user";
		}
		$_SESSION['errors'] = $errors;
	 }

?>
	
