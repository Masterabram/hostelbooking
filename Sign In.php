<?php 
include 'config/functions.php';
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

					

				 <h1><p> <a href="Sign In.php"><img src="images/logo.png" alt="" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>Hostel Booking<strong>Login Form</strong> <span>Please Login Or Sign Up </span></p> </h1>
				
				
			</header>

			
            <header>

			    <p align="center" align="center">
                    <b> <a href="#toregister"  class="a-btn"><span class="a-btn-text">Landlord Login</span></a>  </b>	
                    <b> <a href="#tologin"  class="a-btn"> <span class="a-btn-text">Customer Login</span> </a> </b>
				    <a href="admin/index.php" target="_blank" class="a-btn"><strong><span class="a-btn-text">Admin Login</span></strong></a>
                    <a href="Customer.php" class="a-btn"><strong><span class="a-btn-text">Create New Account</span></strong></a>
                    <a href="index.php" class="a-btn"><strong> <span class="a-btn-text">Back To Home</span></strong></a> 
                </p>
            </header>

            <!-- <div class="codrops-top"> -->
			 <div class="clr"></div>
              <div class="clr"></div>
               <div class="clr"></div>
			 <!-- </div> <br><br> -->
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <a class="hiddenanchor" id="toland"></a>                  

                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="userValidate.php" method="post" autocomplete="on">
                                
                                <h1>Customer Login:</h1> 
                                <div style="  color: #B94A48;background-color: #F2DEDE;border: 1px solid #EED3D7;"><p ><?php echo messages() ; echo errors()?></p></div>  
                                <p> 
                                    <label for="email" class="uname" data-icon="u" > Your Email </label>
                                    <input type="email" name="email"   type="text" placeholder="jananalibritish@gmail.com"/>
                                    
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your Password </label>
                                    <input type="password" name='password'  type="password" placeholder="*********" /> 
                                   
                                </p>
                                <p class="keeplogin"> 
                                    <a href="password_reset.php"> Forgot Password ? </a>
								</p>
                                <p class="login button"> 
                                    <input type="submit"  name="submit"  value =" Login">
								</p>

                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="employeeValidate.php" method="post" autocomplete="on"> 
                             <h1>Landlord Login</h1> 
                             <div style="  color: #B94A48;background-color: #F2DEDE;border: 1px solid #EED3D7;"><p ><?php echo messages() ; echo errors()?></p></div>  
                                <p> 
                                    <label for="email" class="uname" data-icon="u" > Your Email </label>
                                    <input type="email" name="email"  type="text" placeholder="jananalibritish@gmail.com"/>
                                    
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your Password </label>
                                    <input type="password" name='password'  type="password" placeholder="*********" /> 
                                    
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" name="submit" value="Login" /> 
								</p>

								</p>
                            </form>
                        </div>

                    </div>
                </div>  
            </section>
        </div>
    </body>
</html
