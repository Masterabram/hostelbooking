<?php

	require_once('../config/config.php');
	require_once('../config/database.php');
	require_once('../config/functions.php');


function insert_email($email, $msg, $sender, $status){
	global $DB;
	global $errors;

    $sql = "INSERT INTO emails ( `to`, msg, sender, sentStatus ) VALUES ('{$email}', '{$msg}', '{$sender}', '{$status}')";
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
				$mail->Port       = $rest['smtp'];             
				$mail->AddAddress($email);
				$mail->Username   =$rest['username'];  
				$mail->Password   =$rest['password'];            
				$mail->SetFrom($rest['username'] , $rest['subject']);
				$mail->AddReplyTo($rest['username'] , $rest['subject']);
				$mail->Subject    = $subjectt;
				$mail->Body 	  = $message;
				$mail->AltBody    = $message;
					
				if($mail->Send())
				{	
					$sender = $rest['username'];
					$status = 1 ;
					insert_email($email, $msg, $sender, $status);
					$_SESSION['message'] = "Email sent successfully";
					
				}
				else
				{
					$sender = $rest['username'];
					$status = 0 ;
					insert_email($email, $msg, $sender, $status);
					$_SESSION['message'] = "Email Not Sent";
				}	
			}
			catch(phpmailerException $ex)
			{	
				$sender = $rest['username'];
				$status = 0 ;
				insert_email($email, $msg, $sender, $status);
				$_SESSION['message'] = $ex->errorMessage();
			}
		
}			
	
?>

		