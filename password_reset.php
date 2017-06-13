<?php 
  include_once 'config/functions.php';
  include_once('config/config.php');
  include_once('config/database.php');

if (isset($_POST ['submit'])){

  $email = trim($_POST['email']);
  $type = trim($_POST['type']);

  $cred = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM client WHERE email ='{$email}' "));

  if(count($cred)==0)
  {
    $_SESSION["message"] = "No such user";
    redirect_to('password_reset.php');
  }
  else
  {
    $sender = $cred['name'];
    insert_password_reset( $sender, $type );

    $msg = "Click the link below to change your password  http://localhost/project/forgot_password_reset.php";

    $name = $cred['name'];
    $subject = 'Password Reset';
    send_email($name, $email, $subject, $msg);

    $tel = $cred['tell'];
  
    send_sms ($tel, $msg);

    $_SESSION["message"] = "Request Received  check your Mailbox.";
    redirect_to('sign in.php');
  }

}

?>

<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="images/favicon.png" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/AnimateLogo.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />

	   	<link rel="stylesheet" href="css/userlogin.css" type="text/css" media="all" />

	
    </head>
    <body>
	
        <div class="container">


			<header>

					

				 <h1><p> <a href="Sign In.php"><img src="images/logo.png" alt="" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>Hostel Booking<strong></strong> <span>Password Reset</span></p> </h1>
				
				
			</header>

			<div class="codrops-top">

			 <div class="clr"></div>
			 </div> <br><br>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <a class="hiddenanchor" id="toland"></a>

                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="#" method="post" autocomplete="on">
                                <h1>Password Reset</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your Email Address </label>
                                    <input type="email" name="email" required="required" type="text" placeholder="jananalibritish@gmail.com"/>
                                    <h2><?php echo messages() ; ?></h2>     
                                </p>
                                
                                <p class="login button"> 
                                    <input type="submit"  name="submit"  value =" submit ">
								</p>

                            </form>
                        </div>

                    

                    </div>
                </div>  
            </section>
        </div>
    </body>
</html
