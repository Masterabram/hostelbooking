<?php
  session_start();
  include_once('../config/functions.php');

  if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    login_landlord($email, $password);
    // pre($_POST);
  
  }

  if(isset($_POST['submit_reg'])){

    $email = $_POST['email'];
    $name = $_POST['name'];
    $tel = $_POST['tel'];

    // pre($_POST);

    register_ladnlord( $name, $email, $tel );
  
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

  <title>Mcogol</title>

  <!-- Bootstrap core CSS -->

  <link href="../css/bootstrap.min.css" rel="stylesheet">

  <link href="../fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="../css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="../css/custom.css" rel="stylesheet">
  <link href="../css/icheck/flat/green.css" rel="stylesheet">


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
        <?php echo errors(); echo messages(); ?>
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
              <a class="reset_pass" data-toggle="modal" href="#myModal">Lost your password?</a>
            </div>
            <div class="clearfix"></div>
            <div class="separator">

              <p class="change_link">New to site?
                <a href="#toregister" class="to_register"> Create Account </a>
              </p>
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
      <div id="register" class="animate form">
          <?php echo errors(); echo messages(); ?>
        <section class="login_content">
            <h1>Create Account</h1>
                <form class="form-horizontal form-label-left" novalidate class="form-horizonta" action=""  method="post">


                    <div class="item form-group">
                        <input type="email" id="email" name="email" required="required" class="form-control" placeholder="Email">
                    </div>

                    <div class="item form-group">
                        <input type="text" name="name" class="form-control" placeholder="Full Names" required="required">
                    </div>

                    <div class="item form-group">
                        <input  type="tel" name="tel" class="form-control" placeholder="Mobile Number" required="required">
                    </div>
                  

                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-md-offset-3">
                        <input type="submit" class="btn btn-success" name="submit_reg" value="Register">
                      </div>
                    </div>
                  </form>
            
            <div class="clearfix"></div>
            <div class="separator">

              <p class="change_link">Already a member ?
                <a href="#tologin" class="to_register"> Log in </a>
              </p>
              <div class="clearfix"></div>
              <br />
              <div>
              <div>
                <h1><i class="fa fa-paw" style="font-size: 26px;"></i>Mcogol Ogol</h1>

                <p>©<?php echo date("Y")?> All Rights Reserved. Mcogol. Privacy and Terms</p>
              </div>
            </div>
          <!-- form -->        

        </section>
        <!-- content -->
      </div>
    </div>
  </div>

                  <!-- Modal -->
                  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title"> Enter your ID number </h4>
                              </div>
                              <div class="modal-body">
                                
                                  <form class="form horizontal" action="password_reset.php" method="post">
                                    <input type="text" name="tell" placeholder="Enter ID Number here" autocomplete="off" class="form-control placeholder-no-fix">
                                   <p><i>You will be contacted back by our Admin soon.</i></p>
                                  <input type="hidden" name="type" value="Landlord">
 
                              </div>
                              <div class="modal-footer centered">
                                  <button data-dismiss="modal" class="btn btn-theme04" type="button">Cancel</button>
                                  <input class="btn btn-theme03" type="submit" value="Submit" name="submit" >
                              </div>
                                  </form>

                          </div>
                      </div>
                  </div>
                  <!-- modal -->


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
