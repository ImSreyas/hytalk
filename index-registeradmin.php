<?php
session_start();
include('php/db/db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
		<title>Hy Talk |  A Complete Campus Social Network </title>
    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="images/fav.png"/>
	</head>
	<body>
    <!-- Header
    ================================================= -->
		<header id="header-inverse">
      <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index-register.html"><img src="images/logo.png" alt="logo" /></a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-menu">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <span><img src="images/down-arrow.png" alt="" /></span></a>
                  <ul class="dropdown-menu newsfeed-home">
                    <li><a href="index.php">Sign in</a></li>
                    <li><a href="index-registeradmin.php">Login Admin</a></li>
                    <li><a href="index-registerstudent.php">Login Student</a></li>
                    <li><a href="Faculty/index-registerfaculty.php">Login Faculty</a></li>
                    <li><a href="index-registerrecruiter.php">Login Recruiter</a></li>
                  </ul>
              </li>
              <li class="dropdown"><a href="contact.php">Contact</a></li>
            </ul>
            <form class="navbar-form navbar-right hidden-sm">
              <div class="form-group">
                <i class="icon ion-android-search"></i>
                <input type="text" class="form-control" placeholder="Search friends, photos, videos">
              </div>
            </form>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </header>
    <!--Header End-->
    <!-- Landing Page Contents
    ================================================= -->
    <div id="lp-register">
    	<div class="container wrapper">
        <div class="row">
        	<div class="col-sm-5">
            <div class="intro-texts">
            	<h1 class="text-white">Make Cool Friends !!!</h1>
            	<p>Hy Talk is a campus social network that can be used to connect people in campus. We offer extraordinary features to ease your Interactions <br /> <br />Why are you waiting for?  Sign in now</p>
              <button class="btn btn-primary">Learn More</button>
            </div>
          </div>
        	<div class="col-sm-6 col-sm-offset-1">
            <div class="reg-form-container"> 
              <!-- Register/Login Tabs-->
              <div class="reg-options">
                <ul class="nav nav-tabs">
                </ul><!--Tabs End-->
              </div>
                <!--Login-->
                <div class="tab-pane" id="login">
                  <h3>Login Admin</h3>
                  <p class="text-muted">Log into your account</p>
                  <!--Login Form-->
                  <?php 
                  if(isset($_POST['login_btn'])){
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $adminQuery = mysqli_query($conn, "select * from admin where username='$username' && password='$password'");
                    if($a = $adminQuery->fetch_assoc()){
                      $admin_id = $a['id'];
                    }
                    if($adminQuery->num_rows > 0){
                      $_SESSION['admin_id'] = $admin_id;
                      ?> 
                        <script>window.location.href = 'admin/index.php'</script>                     
                      <?php
                    } else {
                      $error = 'username or password error';
                    }
                  }
                  ?>
                  <form name="Login_form" id='Login_form' method="post" action="">
                     <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="my-email" class="sr-only">username</label>
                        <input id="my-email" class="form-control input-group-lg" type="text" name="username" title="Enter Email" placeholder="username"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="my-password" class="sr-only">Password</label>
                        <input id="my-password" class="form-control input-group-lg" type="password" name="password" title="Enter password" placeholder="Password"/>
                      </div>
                    </div>
                  </form><!--Login Form Ends--> 
                  <p><a href="#">Forgot Password?</a></p>
                  <button class="btn btn-primary" name='login_btn'type="submit" form="Login_form">Login Now</button>
                  <div style="color: red; text-align: center;"><?php if(isset($error)) echo $error; ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-sm-offset-6">
          
            <!--Social Icons-->
            <ul class="list-inline social-icons">
              <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
              <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
              <li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
              <li><a href="#"><i class="icon ion-social-pinterest"></i></a></li>
              <li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>
    
   
    <!-- Scripts
    ================================================= -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.appear.min.js"></script>
		<script src="js/jquery.incremental-counter.js"></script>
    <script src="js/script.js"></script>
    
	</body>
</html>
