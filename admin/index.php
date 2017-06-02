<?php
  session_start();
  include_once('../config/functions.php');

  $errors = "Log in please...";
  if(isset($_POST['submit'])){
   
    $email = $_POST['email'];
    $password = $_POST['password'];

    // login_admin($email, $password);
    // pre($_POST);
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
          $errors = "Email/password does not match";
        }
    }else{
      //No staff found with those details 
      $errors = "No such Account";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title> Login | Hostel Booking</title>

  <!-- Bootstrap core CSS -->

  <link href="../css/bootstrap.min.css" rel="stylesheet">

  <link href="../fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="../css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="../css/custom.css" rel="stylesheet">
  <link href="../css/icheck/flat/green.css" rel="stylesheet">
  <link rel="shortcut icon" href="../images/favicon.png" />


  <script src="../js/jquery.min.js"></script>

  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body style="background:#F7F7F7;">

  <div class="">
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>

    <div id="wrapper">
      <div id="login" class="animate form">
        <div class="bg-red"><?php echo $errors; ?></div>
        <section class="login_content">
          <form class="form-horizonta" action=""  method="POST">
            <h1>Login Form</h1>

                <div class="item form-group">
                     <input type="email" id="email" name="email" required="required" class="form-control" placeholder="Email">
                </div>

                <div class="item form-group">
                    <input id="password" type="password" name="password" data-validate-length="6,8" class="form-control" placeholder="Password" required="required">
                </div>

            <div>
              <input type="submit" class="btn btn-success" name="submit" value="Login">
              <a class="reset_pass" href="#">Lost your password?</a>
            </div>
            <div class="clearfix"></div>
            <div class="separator">


              <div class="clearfix"></div>
              <br />
              <div>
                <h1><i class="fa fa-paw" style="font-size: 26px;"></i>Mcogol Ogol</h1>

                <p>©<?php echo date("Y")?> All Rights Reserved. Mcogol. Privacy and Terms</p>
              </div>
            </div>
          </form>
          <!-- form -->
        </section>
        <!-- content -->
      </div>
    </div>
  </div>


  <script src="../js/bootstrap.min.js"></script>

  <!-- bootstrap progress js -->
  <script src="../js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="../js/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- icheck -->
  <script src="../js/icheck/icheck.min.js"></script>
  <!-- pace -->
  <script src="../js/pace/pace.min.js"></script>
  <script src="../js/custom.js"></script>
  <!-- form validation -->
  <script src="../js/validator/validator.js"></script>
  <script>

  </script>

</body>

</html>
