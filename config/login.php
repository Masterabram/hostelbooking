<?php
  session_start();
  include_once('functions.php');

  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!$username || !$password) {
      $_SESSION["message"] = "all fields are required";
      redirect_to('login.php');   
    }elseif(!$username) {
      $_SESSION["message"] = "UserName is required";
      redirect_to('login.php');
    }elseif(!$password) {
      $_SESSION["message"] = "Password is required";
      redirect_to('login.php');
    }else{
      login($username, $password);
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> MASENO UNIVERSITY </title>

    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <!-- Custom CSS -->
    <!-- <link href="bootstrap/css/small-business.css" rel="stylesheet"> -->
          <script src="jquery-1.9.0.min.js"></script>
             <script src="jquery.js"></script>
              <script src="jquery.validate.js"></script>
	           <script src="ckeditor/ckeditor.js"></script>
			

</head>
<body style="background-image:url(1.jpg);">
    <div class="navbar navbar-default navbar-static-top navbar navbar-inverse header" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header container-fluid">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
       
      </div></div>
<div class="col-md-4"></div>
<div class='container .centre'>
<div class="col-lg-4" style="padding-left: 0; padding-right: 0;" >
  <?php echo errors(); echo messages(); ?>
<div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Staff Portal </h3>
          </div>
          <!-- <img class="img-circle img-responsive centre" src="2.jpg" width="50px" />  -->
            <div style="background-image:url(2.jpg);" class="panel-body">
          <fieldset>
              <!-- <legend>User details</legend> -->
                <?php echo errors(); echo messages(); ?>
                <form class="form-horizonta" action=""  method="post">
                <div class="form-group">
                <label class="control-label">Username:</label>
                <input id="name" name="username" autocomplete="off" class="form-control" id="inputSuccess4" placeholder=" Username " type="text" >
                </div>

                <div class="form-group">
                <label> Password :</label>
                <input id="password" name="password" autocomplete="off" class="form-control" placeholder="**********" type="password">
                <br />
                </div>

                <div class="form-group">
                  <div class="col-lg-5 col-lg-offset-4">
                <input name="submit" class="btn btn-primary btn-lg" type="submit" value=" Login ">
                </div>
                </div>
            </fieldset>    
                </form>
        </div>
      </div>
</div>
</div>



    <footer class="navbar navbar-default navbar-fixed-bottom">
      <div class="navbar navbar-inverse footer">
        <div class="container-fluid">
          <div class="copyright">
            <a href="www.maseno.ac.ke" target="_blank">&copy; Maseno University  2016 - <?php echo date("Y"); ?></a> All rights reserved
          </div>
        </div>
      </div>
    </footer>


    <!-- /.container -->

    <!-- jQuery -->
    <script src="bootstrap/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
    </div>