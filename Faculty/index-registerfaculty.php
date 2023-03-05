<?php
session_start();
if ($_SESSION['registration_status'] == "success") {
  $reg_success = true;
  unset($_SESSION['registration_status']);
} else if ($_SESSION['registration_status'] == "email") {
  $reg_email = true;
  unset($_SESSION['registration_status']);
} else if ($_SESSION['registration_status'] == "fail") {
  $reg_error = true;
  unset($_SESSION['registration_status']);
}
if($_SESSION['login_status']=="fail"){
  $log_fail=true;
  unset($_SESSION['login_status']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <title>Hy Talk | A Complete Campus Social Network </title>

  <!-- Stylesheets
    ================================================= -->
  <link rel="stylesheet" href="../css/bootstrap.min.css" />
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/ionicons.min.css" />
  <link rel="stylesheet" href="../css/font-awesome.min.css" />

  <!--Google Font-->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" type="image/png" href="images/fav.png" />
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
          <!-- <a class="navbar-brand" href="index-register.html"><img src="../images/logo.png.jpg" alt="logo" /></a> -->
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right main-menu">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <span><img src="images/down-arrow.png" alt="" /></span></a>
              <ul class="dropdown-menu newsfeed-home">
                <li><a href="index.html">Sign in</a></li>
                <li><a href="index-registeradmin.html">Login Admin</a></li>
                <li><a href="index-registerstudent.html">Login Student</a></li>
                <li><a href="index-registerfaculty.html">Login Faculty</a></li>
                <li><a href="index-registerrecruiter.html">Login Recruiter</a></li>
              </ul>
            </li>

            <li class="dropdown"><a href="contact.html">Contact</a></li>
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
            <p>Hy Talk is a campus social network that can be used to connect people in campus. We offer extraordinary features to ease your Interactions <br /> <br />Why are you waiting for? Sign in now</p>
            <button class="btn btn-primary">Learn More</button>
          </div>
        </div>
        <div class="col-sm-6 col-sm-offset-1">
          <div class="reg-form-container">

            <!-- Register/Login Tabs-->
            <div class="reg-options">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#register" data-toggle="tab">Register</a></li>
                <li><a href="#login" data-toggle="tab">Login</a></li>
              </ul><!--Tabs End-->
            </div>

            <!--Registration Form Contents-->
            <div class="tab-content">
              <div class="tab-pane active" id="register">
                <h3>Register Now !!!</h3>
                <p class="text-muted">Be cool and join today. Meet new friends</p>

                <!-- alertbox while the reg fails -->
                <?php
                if (isset($reg_error)) {
                  echo '<div class="alert alert-danger" role="alert">
                  Registration failed something went wrong !
                </div>';
                }
                ?>
                <!-- alertbox while the reg success -->
                <?php
                if (isset($reg_success)) {
                  echo '<div class="alert alert-success" role="alert">
                  Registration Success
                </div>';
                }
                ?>


                <!--Register Form-->
                <form action="Registration.php" name="registration_form" id='registration_form' class="form-inline" method="post">
                  <div class="row">
                    <div class="form-group col-xs-6">
                      <label for="firstname" class="sr-only">First Name</label>
                      <input id="firstname" class="form-control input-group-lg" type="text" name="firstname" title="Enter first name" placeholder="First name" required />
                    </div>
                    <div class="form-group col-xs-6">
                      <label for="lastname" class="sr-only">Last Name</label>
                      <input id="lastname" class="form-control input-group-lg" type="text" name="lastname" title="Enter last name" placeholder="Last name" />
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-xs-6">
                      <label for="email" class="sr-only">Email</label>
                      <input id="email" class="form-control input-group-lg" type="email" name="email" title="Enter your email" placeholder="Email" required />
                    </div>
                    <div class="form-group col-xs-6">
                      <label for="mobile n.o" class="sr-only">Mobile n.o</label>
                      <input id="mobile n.o" class="form-control input-group-lg" type="text" name="mobile" title="Enter your Mobile n.o" placeholder="Mob n.o" pattern="[789][0-9]{9}" />
                    </div>
                  </div>

                  <!-- email already -->
                  <?php
                  if (isset($reg_email)) {
                    echo '<div class="alert alert-warning" role="alert">
                    Email Already in use!
                  </div>';
                  }
                  ?>


                  <div class="row">
                    <div class="form-group col-xs-12">
                      <label for="password" class="sr-only">Password</label>
                      <input id="password" class="form-control input-group-lg" type="password" name="password" title="Enter password" placeholder="Password" required />
                    </div>
                  </div>
                  <div class="row">
                    <p class="birth"><strong>Date of Birth</strong></p>
                    <div class="form-group col-sm-3 col-xs-6">
                      <label for="month" class="sr-only"></label>
                      <select class="form-control" id="day">
                        <option value="Day" disabled selected>Day</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>
                        <option>16</option>
                        <option>17</option>
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                        <option>21</option>
                        <option>22</option>
                        <option>23</option>
                        <option>24</option>
                        <option>25</option>
                        <option>26</option>
                        <option>27</option>
                        <option>28</option>
                        <option>29</option>
                        <option>30</option>
                        <option>31</option>
                      </select>
                    </div>
                    <div class="form-group col-sm-3 col-xs-6">
                      <label for="month" class="sr-only"></label>
                      <select class="form-control" id="month">
                        <option value="month" disabled selected>Month</option>
                        <option>Jan</option>
                        <option>Feb</option>
                        <option>Mar</option>
                        <option>Apr</option>
                        <option>May</option>
                        <option>Jun</option>
                        <option>Jul</option>
                        <option>Aug</option>
                        <option>Sep</option>
                        <option>Oct</option>
                        <option>Nov</option>
                        <option>Dec</option>
                      </select>
                    </div>
                    <div class="form-group col-sm-6 col-xs-12">
                      <label for="year" class="sr-only"></label>
                      <select class="form-control" id="year">
                        <option value="year" disabled selected>Year</option>
                        <option>2000</option>
                        <option>2001</option>
                        <option>2002</option>
                        <option>2004</option>
                        <option>2005</option>
                        <option>2006</option>
                        <option>2007</option>
                        <option>2008</option>
                        <option>2009</option>
                        <option>2010</option>
                        <option>2011</option>
                        <option>2012</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group gender">
                    <label class="radio-inline">
                      <input type="radio" name="optradio" checked required value="male">Male
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="optradio" value="female">Female
                    </label>
                  </div>
                  <div class="row">
                    <div class="form-group col-xs-6">
                      <label for="Designation" class="sr-only">Designation</label>
                      <input id="Designation" class="form-control input-group-lg reg_name" type="text" name="Designation" title="Enter your designation" placeholder="Your Designation" required />
                    </div>
                    <div class="form-group col-xs-6">
                      <label for="Department" class="sr-only"></label>
                      <select class="form-control" id="country" required name="Dep">
                        <option value="Department" disabled selected>Department </option>
                        <option value="CS">Computer Science</option>
                        <option value="PHY">Physics</option>
                        <option value="MAT">Mathematics</option>
                        <option value="ECO">Economics</option>
                        <option value="CHE">Chemistry</option>
                        <option value="HIS">History</option>
                        <option value="COM">Commerce</option>

                      </select>
                    </div>
                  </div>
                  <p><a href="#">Already have an account?</a></p>
                  <!-- <button class="btn btn-primary">Register Now</button> -->
                  <input type="submit" value="Register Now" class="btn btn-primary">
                </form><!--Register Now Form Ends-->
              </div><!--Registration Form Contents Ends-->

              <!--Login-->
              <div class="tab-pane" id="login">
                <h3>Login Faculty</h3>
                <p class="text-muted">Log into your account</p>

                <!--Login Form-->
                <form name="Login_form" id='Login_form' action="Login.php" method="post">
                  <div class="row">
                    <div class="form-group col-xs-12">
                  <?php 
                   if (isset($log_fail)) {
                    echo ' <div class="alert alert-danger" role="alert">
                    Invalid login credentials !
                  </div>';
                  }
                  ?>
                   

                      <label for="my-email" class="sr-only">Email</label>
                      <input id="my-email" class="form-control input-group-lg" type="email" name="Email" title="Enter Email" placeholder="Your Email" required />
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-xs-12">
                      <label for="my-password" class="sr-only">Password</label>
                      <input id="my-password" class="form-control input-group-lg" type="password" name="password" title="Enter password" placeholder="Password" required />
                    </div>
                  </div>
                  <!--Login Form Ends-->
                  <p><a href="#">Forgot Password?</a></p>
                  <input class="btn btn-primary" type="submit" value="Login Now">
                  <!-- <button class="btn btn-primary">Login Now</button> -->
                </form>
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
  <script src="../js/jquery-3.1.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.appear.min.js"></script>
  <script src="../js/jquery.incremental-counter.js"></script>
  <script src="../js/script.js"></script>

</body>

</html>