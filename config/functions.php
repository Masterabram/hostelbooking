<?php
	include_once('config.php');
	include_once('configg.php');
	include_once('database.php');

	$title = 'Hostel Booking';


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
	
		
	function check_login(){
			if(!isset($_SESSION['id'])){
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
		
function network($name, $ip_add, $type, $session){
	global $mysqli;
	global $errors;

    $sql = "INSERT INTO network ( name, ip_add, type, session_id ) VALUES "
            . "('{$name}', '{$ip_add}', '{$type}', '{$session}')";
 if (!mysqli_query($mysqli,$sql))
  {
  die('Error: ' . mysqli_error($mysqli));
  }
}


	//USER CRUD OPERATIONS
	function login($email ,$password){
		global $connection;
		global $errors;


		$query = "SELECT * FROM client WHERE email='{$email}' ";
		$cred = mysqli_fetch_assoc(mysqli_query($connection, $query));
		// pre($staff);
		if($cred){
			//check password
				if($cred['password']==md5($password)){

						$type = "Client";
						$name = $cred['name'];
						$ip_add = $_SERVER['REMOTE_ADDR'];
						$session = $cred['tenantId'];

						network($name, $ip_add, $type, $session);

						$_SESSION['user_id'] = $cred['tenantId'];
						
					    redirect_to('index.php');	
				}else{
					$errors['creds'] = "Email/password does not match";
				}
		}else{
			//No staff found with those details 
			$errors['exist'] = "No such user";
		}
		$_SESSION['errors'] = $errors;
	 }

	function register_client($email, $password){
	$error = FALSE;
	global $DB;
	global $errors;

		// $query = "INSERT INTO client (name, email, password, tell) VALUES ( '{$name}', '{$email}', '{$password}', '{$tell}' )";

 if (!$error) {
    $sql = "INSERT INTO client (email, password) VALUES "
            . "( '{$email}', '{$password}' )";

     try {
      $stmt = $DB->prepare($sql);

      // execute Query
      $stmt->execute();
      $result = $stmt->rowCount();
      if ($result > 0) {
        $_SESSION["message"] = "successfully added Login.";
      } else {
        $_SESSION["message"] = "Failed to add contact.";
      }
    } catch (Exception $ex) {
      $_SESSION["message"] = $ex->getMessage();
    }
  }
  redirect_to('sign_up.php#tologin');
}

	function errors(){

		if(isset($_SESSION['errors']) && !empty($_SESSION['errors'])){
			$errors = $_SESSION['errors'];
			
			$output = "<div id='errors' class='alert alert-danger alert-dismissible'>";
			$output .= "You have the following errors: <br>";
			$output .= "<ul>";
			foreach ($errors as $error) {
				$output .= "<li>".$error."</li>";
			}
			$output .= "</ul>";
			$output .= "</div>";

			$_SESSION['errors'] = null;

			return $output;
		}

	}	

	function messages(){
		if (isset($_SESSION['message']) && !empty($_SESSION['message'])){
			$message = $_SESSION['message'];
			$_SESSION['message'] = null;

			$output = '<div class="alert alert-warning">';
			$output .= $message;
			$output .= '</div>';

			return $output;
		}
	}
			

	function logout($session){
		global $mysqli;
	    global $errors;
		session_destroy();

      $sql = "UPDATE network set activity = 1 WHERE (session_id = '{$session}' AND activity = 0 ) ";
		 if (!mysqli_query($mysqli,$sql))
		  {
		  die('Error: ' . mysqli_error($mysqli));
		  }

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
					$_SESSION['id'] = $cred['landlordId'];
					redirect_to('landlord/changeme.php?id='.$cred['landlordId']);
					
					
				}elseif($cred['password']==md5($password)){
						$type = "Landlord";
						$name = $cred['name'];
						$ip_add = $_SERVER['REMOTE_ADDR'];
						$session = $cred['landlordId'];

						network($name, $ip_add, $type, $session);

						$_SESSION['name'] = $cred['name'];
						$_SESSION['email'] = $cred['email'];
						$_SESSION['id'] = $cred['landlordId'];
						
					    redirect_to('landlord/home.php');	
				}else{
					$errors['creds'] = "Email/password does not match";
					 redirect_to('Sign%20In.php#toregister');
				}
		}else{
			//No staff found with those details 
			$errors['exist'] = "No such user";
			redirect_to('Sign%20In.php#toregister');
		}
		$_SESSION['errors'] = $errors;
	 }



	 // for admin

	 function login_admin($email ,$password){
		global $connection;
		global $errors;


		$query = "SELECT * FROM systemadmin WHERE email='{$email}' ";
		$cred = mysqli_fetch_assoc(mysqli_query($connection, $query));
		// pre($staff);
		if($cred){
			//check password
				if ($cred['password']=='changeme'){
					$_SESSION['id'] = $cred['landlordId'];
					redirect_to('changeme.php?id='.$cred['id']);
					
					
				}elseif($cred['password']==md5($password)){
						$type = "Admin";
						$name = $cred['name'];
						$ip_add = $_SERVER['REMOTE_ADDR'];
						$session = $cred['id'];

						network($name, $ip_add, $type, $session);					
					
						$_SESSION['name'] = $cred['name'];
						$_SESSION['email'] = $cred['email'];
						$_SESSION['id'] = $cred['id'];
						
					    redirect_to('home.php');	
				}else{
					$errors['creds'] = "Email/password does not match";
				}
		}else{
			//No staff found with those details 
			$errors['exist'] = "No such Account";
		}
		$_SESSION['errors'] = $errors;
	 }



function view( $user_ip ){
	global $DB;
	global $errors;

    $sql = "INSERT INTO views ( ip_add ) VALUES "
            . "('{$user_ip}')";
      $stmt = $DB->prepare($sql);
      $stmt->execute();
      $result = $stmt->rowCount();

}

  function send_sms ($no, $msg){ 
    require_once 'AfricasTalkingGateway.php';
    // Specify your login credentials
   $username   = "obrien8";
   $apikey     = "60de8e7f78308fbffab91153c7b906fdae7d7f60671aec739900eaf737674d42";
    
    $recipients = $no;
    // And of course we want our recipients to know what we really do
    $message    = $msg;
    // Create a new instance of our awesome gateway class
    $gateway    = new AfricasTalkingGateway($username, $apikey);
    // Any gateway error will be captured by our custom Exception class below, 
    // so wrap the call in a try-catch block
    try 
    { 
      // Thats it, hit send and we'll take care of the rest. 
      $results = $gateway->sendMessage($recipients, $message);
                
      foreach($results as $result) {
    
      }
    }
    catch ( AfricasTalkingGatewayException $e )
    {
      echo "Encountered an error while sending: ".$e->getMessage();
    } 
  }
 
  function insert_password_reset( $sender, $type ){
    global $DB;
	global $errors;

    $sql = "INSERT INTO password_reset ( sender, userType ) VALUES "
            . "('{$sender}', '{$type}')";
      $stmt = $DB->prepare($sql);
      $stmt->execute();
      $result = $stmt->rowCount();
  }


function insert_email($email, $msg, $sender, $status){
	global $DB;
	global $errors;

    $sql = "INSERT INTO emails ( `to`, msg, sender, sentStatus ) VALUES ('{$email}', '{$msg}', '{$sender}', '{$status}')";
    // echo $sql;
    $stmt = $DB->prepare($sql);
    $stmt->execute();
    $result = $stmt->rowCount();
   

}

function send_notification($landlordid,  $msgg){
	global $DB;
	global $errors;

    $sql = "INSERT INTO notification ( landlordid, msg) VALUES ('{$landlordid}', '{$msgg}')";
    // echo $sql;
    $stmt = $DB->prepare($sql);
    $stmt->execute();
    $result = $stmt->rowCount();
}

function send_email($name, $email, $subject, $msg){	

    global $connection;

    $rest = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM email_setting WHERE id=1 "));	
		// include phpmailer class
		require_once 'mailer/class.phpmailer.php';
		// creates object
		$mail = new PHPMailer(true);	
		
			$full_name  = $name;
			$email      = $email;
			$subjectt    = $subject;
			$text_message = $msg;			   
			
			
			// HTML email starts here
			
			$message  = "<html><body>";
			
			$message .= "<table width='100%' bgcolor='#e0e0e0' cellpadding='0' cellspacing='0' border='0'>";
			
			$message .= "<tr><td>";
			
			$message .= "<table align='center' width='100%' border='0' cellpadding='0' cellspacing='0' style='max-width:650px; background-color:#fff; font-family:Verdana, Geneva, sans-serif;'>";
				
			$message .= "<thead>
						<tr height='80'>
							<th colspan='4' style='background-color:#f5f5f5; border-bottom:solid 1px #bdbdbd; font-family:Verdana, Geneva, sans-serif; color:#333; font-size:34px;' >Coding Cage</th>
						</tr>
						</thead>";
				
			$message .= "<tbody>
						<tr align='center' height='50' style='font-family:Verdana, Geneva, sans-serif;'>
							<td style='background-color:#00a2d1; text-align:center;'><a href='http://www.mcogol.blogspot.com' style='color:#fff; text-decoration:none;'>Mcogol</a></td>
							<td style='background-color:#00a2d1; text-align:center;'><a href='http://www.mcogol.blogspot.com' style='color:#fff; text-decoration:none;'>Obrien</a></td>
							<td style='background-color:#00a2d1; text-align:center;'><a href='http://www.mcogol.blogspot.com' style='color:#fff; text-decoration:none;' >Project</a></td>
							<td style='background-color:#00a2d1; text-align:center;'><a href='http://www.mcogol.blogspot.com' style='color:#fff; text-decoration:none;' >Profilation</a></td>
						</tr>
						
						<tr>
							<td colspan='4' style='padding:15px;'>
								<p style='font-size:20px;'>Hi' ".$full_name.",</p>
								<hr />
								<p style='font-size:25px;'>Hostel Booking </p>
								<img src='https://4.bp.blogspot.com/-rt_1MYMOzTs/VrXIUlYgaqI/AAAAAAAAAaI/c0zaPtl060I/s1600/Image-Upload-Insert-Update-Delete-PHP-MySQL.png' alt='Sending HTML eMail using PHPMailer in PHP' title='Sending HTML eMail using PHPMailer in PHP' style='height:auto; width:100%; max-width:100%;' />
								<p style='font-size:15px; font-family:Verdana, Geneva, sans-serif;'>".$text_message.".</p>
							</td>
						</tr>
						
						<tr height='80'>
							<td colspan='4' align='center' style='background-color:#f5f5f5; border-top:dashed #00a2d1 2px; font-size:24px; '>
							<label>
							Like Our Page : 
							<a href='#' target='_blank'><img style='vertical-align:middle' src='https://cdnjs.cloudflare.com/ajax/libs/webicons/2.0.0/webicons/webicon-facebook-m.png' /></a>
							<a href='#' target='_blank'><img style='vertical-align:middle' src='https://cdnjs.cloudflare.com/ajax/libs/webicons/2.0.0/webicons/webicon-twitter-m.png' /></a>
							</label>
							</td>
						</tr>
						
						</tbody>";
				
			$message .= "</table>";
			
			$message .= "</td></tr>";
			$message .= "</table>";
			
			$message .= "</body></html>";
			
			// HTML email ends here
			
			try
			{
				$mail->IsSMTP(); 
				$mail->isHTML(true);
				$mail->SMTPDebug  = 0;                     
				$mail->SMTPAuth   = true;                  
				$mail->SMTPSecure = "ssl";                 
				$mail->Host       = "smtp.gmail.com";      
				$mail->Port       = 445;             
				$mail->AddAddress($email);
				$mail->Username   ="hostelsystem17@gmail.com";  
				$mail->Password   ="qwerty123.";            
				$mail->SetFrom("hostelsystem17@gmail.com" , "Hostel Booking");
				$mail->AddReplyTo("hostelsystem17@gmail.com" , "Hostel Booking");
				$mail->Subject    = $subjectt;
				$mail->Body 	  = $message;
				$mail->AltBody    = $message;
					
				if($mail->Send())
				{	
					$sender = "hostelsystem17@gmail.com";
					$status = 1 ;
					insert_email($email, $msg, $sender, $status);
					$_SESSION['message'] = "Email sent successfully";
					
				}
				else
				{
					$sender ="hostelsystem17@gmail.com";
					$status = 0 ;
					insert_email($email, $msg, $sender, $status);
					$_SESSION['message'] = "Email Not Sent";
				}	
			}
			catch(phpmailerException $ex)
			{	
				$sender ="hostelsystem17@gmail.com";
				$status = 0 ;
				insert_email($email, $msg, $sender, $status);
				$_SESSION['message'] = $ex->errorMessage();
			}
		
}
  
?>
	
