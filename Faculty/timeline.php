<?php
session_start();
include('static/header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <title>Faculty</title>

  <!-- Stylesheets
    ================================================= -->
  <link rel="stylesheet" href="../css/bootstrap.min.css" />
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/ionicons.min.css" />
  <link rel="stylesheet" href="../css/font-awesome.min.css" />
  <link href="../css/emoji.css" rel="stylesheet">

  <!--Google Font-->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" type="image/png" href="../images/fav.png" />
</head>

<body>

  <!-- Header
    ================================================= -->
  <header id="header">
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
          <a class="navbar-brand" href="index-registeradmin.php">
            <!-- <img src="images/logo.png" alt="logo" /> -->
            Hytalk
          </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right main-menu">
            <li class="dropdown">
                <a href="newsfeed.php" class="dropdown-toggle" >Newsfeed <span><img src="images/down-arrow.png" alt="" /></span></a>
                  <!-- <ul class="dropdown-menu newsfeed-home">
                    <li><a href="index.php">sign in</a></li>
                    <li><a href="index-registeradmin.php">sign up</a></li>
                  </ul> -->
              </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings<span><img src="../images/down-arrow.png" alt="" /></span></a>
              <ul class="dropdown-menu newsfeed-home">
                <li><a href="edit-profile-basic.php">Edit: Basic Info</a></li>
                <li><a href="">Change Password</a></li>
                <!-- <li><a href="newsfeed-people-nearby.php">Poeple Nearly</a></li>
                    <li><a href="newsfeed-friends.php">My friends</a></li>
                    <li><a href="newsfeed-messages.php">Chatroom</a></li>
                    <li><a href="newsfeed-images.php">Images</a></li>
                    <li><a href="newsfeed-videos.php">Videos</a></li> -->
              </ul>
            </li>
            <!-- <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Timeline <span><img src="images/down-arrow.png" alt="" /></span></a>
                <ul class="dropdown-menu login">
                  <li><a href="timeline.php">Timeline</a></li>
                  <li><a href="timeline-about.html">Timeline About</a></li>
                  <li><a href="timeline-album.php">Timeline Album</a></li>
                  <li><a href="timeline-friends.php">Timeline Friends</a></li>
                  <li><a href="edit-profile-basic.php">Edit: Basic Info</a></li>
                  <li><a href="edit-profile-work-edu.php">Edit: Work</a></li>
                  <li><a href="edit-profile-interests.php">Edit: Interests</a></li>
                  <li><a href="edit-profile-settings.php">Account Settings</a></li>
                  <li><a href="edit-profile-password.php">Change Password</a></li>
                </ul>
              </li> -->
            <li class="dropdown"><a href="../contact.php">Contact</a></li>
            <li class="dropdown"><a href="php/logout.php">logout</a></li>
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

  <div id="page-contents">
    <div class="container">
      <div class="row">

        <!-- Newsfeed Common Side Bar Left
          ================================================= -->
        <?php include('static/left-side-bar.php'); ?>
        <div class="col-md-7">

          <!-- Post Create Box
            ================================================= -->
          <?php include('static/post.php') ?>
          <!-- Post Create Box End-->

          <!-- Post Content
            ================================================= -->
          <?php include('static/timelinePosts.php'); ?>
        </div>
        <!-- Newsfeed Common Side Bar Right
          ================================================= -->
        <?php include('static/right-side-bar.php'); ?>
      </div>
    </div>
  </div>

  <!-- Footer
    ================================================= -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="footer-wrapper">
          <div class="col-md-3 col-sm-3">
            <a href="#"><img src="../images/logo.png.jpg" alt="" class="footer-logo" /></a>
            <ul class="list-inline social-icons">
              <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
              <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
              <li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
              <li><a href="#"><i class="icon ion-social-pinterest"></i></a></li>
              <li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
            </ul>
          </div>
          <div class="col-md-2 col-sm-2">
            <h5>For individuals</h5>
            <ul class="footer-links">
              <li><a href="../index-registerstudent.php">Signup</a></li>
              <li><a href="../index-registeradmin.php">login</a></li>
              <li><a href="#">Explore</a></li>
              <li><a href="#">Features</a></li>
              <li><a href="../contact.php">contact</a></li>
            </ul>
          </div>
          <div class="col-md-2 col-sm-2">
            <h5>For Recruiters</h5>
            <ul class="footer-links">
              <li><a href="../index-registerrecruiter.php">Recruiter signup</a></li>
              <li><a href="../contact.php"></a>Contact</li>
              <li><a href="#">Features</a></li>
              <li><a href="#">Explore</a></li>
              <li><a href="#">Advertise</a></li>
            </ul>
          </div>
          <div class="col-md-2 col-sm-2">
            <h5>About</h5>
            <ul class="footer-links">
              <li><a href="../contact.php">About us</a></li>
              <li><a href="../contact.php">Contact us</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Terms</a></li>
              <li><a href="faq.html">Help</a></li>
            </ul>
          </div>
          <div class="col-md-3 col-sm-3">
            <h5>Contact Us</h5>
            <ul class="contact">
              <li><i class="icon ion-ios-telephone-outline"></i>8854668455</li>
              <li><i class="icon ion-ios-email-outline"></i>sharewithazif@gmail.com</li>
              <li><i class="icon ion-ios-location-outline"></i>Mes College Vattappara</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright">
      <p>copyright @ F.SOCIETY 2022. All rights reserved</p>
    </div>
  </footer>

  <!--preloader-->
  <div id="spinner-wrapper">
    <div class="spinner"></div>
  </div>


  <!-- Scripts
    ================================================= -->
  <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTMXfmDn0VlqWIyoOxK8997L-amWbUPiQ&amp;callback=initMap"></script> -->
  <script src="../js/jquery-3.1.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.sticky-kit.min.js"></script>
  <script src="../js/jquery.scrollbar.min.js"></script>
  <script src="../js/script.js"></script>
</body>

</html>