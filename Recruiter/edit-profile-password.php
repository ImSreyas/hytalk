<?php
session_start();
include('static/header.php');




if (isset($_POST['update-password'])) {
  $old_password = $_POST['old-password'];
  $new_password = $_POST['new-password'];
  $confirm_password = $_POST['confirm-password'];

  if(mysqli_query($conn, "select * from recruiter where id='$recruiter_id' && password='$old_password'")->num_rows > 0){
    if($new_password == $confirm_password){
      mysqli_query($conn, "update recruiter set password='$confirm_password' where id='$recruiter_id'");
    } else {
      ?> 
      <script>alert('enter the same password...')</script>
      <?php
    }
  } else {
    ?> 
    <script>alert('old password is wrong...')</script>
    <?php
  }

}

?>

<!DOCTYPE html>
<html lang="en">
	
<head>
		
		<title>Edit Profile | Change My Password</title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="../css/bootstrap.min.css" />
		<link rel="stylesheet" href="../css/style.css" />
		<link rel="stylesheet" href="../css/ionicons.min.css" />
    <link rel="stylesheet" href="../css/font-awesome.min.css" />
    
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
    
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="../images/fav.png"/>
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
            <a class="navbar-brand" href="#">Hytalk</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-menu">
              <!-- <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <span><img src="images/down-arrow.png" alt="" /></span></a>
                  <ul class="dropdown-menu newsfeed-home">
                    <li><a href="index.php">sign in</a></li>
                    <li><a href="index-registeradmin.php">sign up</a></li>
                  </ul>
              </li> -->
              <li class="dropdown">
              <a href="newsfeed.php" class="dropdown-toggle">Newsfeed </a>
                  <!-- <ul class="dropdown-menu newsfeed-home">
                    <li><a href="newsfeed.php">Newsfeed</a></li> -->
                    <!-- <li><a href="newsfeed-people-nearby.php">Poeple Nearly</a></li> -->
                    <!-- <li><a href="newsfeed-friends.html">My friends</a></li>
                    <li><a href="newsfeed-messages.html">Chatroom</a></li>
                    <li><a href="newsfeed-images.html">Images</a></li>
                    <li><a href="newsfeed-videos.html">Videos</a></li>
                  </ul> -->
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings <span><img src="images/down-arrow.png" alt="" /></span></a>
                <ul class="dropdown-menu login">
                  <li><a href="timeline.php">Timeline</a></li>
                  <!-- <li><a href="edit-profile-basic.php">Timeline About</a></li>
                  <li><a href="timeline-album.php">Timeline Album</a></li>
                  <li><a href="timeline-friends.php">Timeline Friends</a></li> -->
                  <li><a href="edit-profile-basic.php">Edit: Basic Info</a></li>
                  <!-- <li><a href="edit-profile-work-edu.php">Edit: Work</a></li>
                  <li><a href="edit-profile-interests.php">Edit: Interests</a></li>
                  <li><a href="edit-profile-settings.php">Account Settings</a></li> -->
                  <li><a href="edit-profile-password.php">Change Password</a></li>
                </ul>
              </li>
              
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

    <div class="container">

      <!-- Timeline
      ================================================= -->
      <div class="timeline">
        <div class="timeline-cover">

          <!--Timeline Menu for Large Screens-->
          <div class="timeline-nav-bar hidden-sm hidden-xs">
            <div class="row">
              <div class="col-md-3">
                <div class="profile-info">
                  <img src="../<?php echo $recruiter_Img; ?>" alt="" class="img-responsive profile-photo" />
                  <h3><?php echo $recruiter_Name; ?></h3>
                  <p class="text-muted">Recruiter</p>
                </div>
              </div>
              <div class="col-md-9">
                <ul class="list-inline profile-menu">
                  <li><a href="timeline.php">Timeline</a></li>
                  <li><a href="edit-profile-basic.php" class="active">About</a></li>
                  <!-- <li><a href="timeline-album.html">Album</a></li>
                  <li><a href="timeline-friends.html">Friends</a></li> -->
                </ul>
                <ul class="follow-me list-inline">
                <?php
                $TotalStudentNoQuery = mysqli_query($conn, "SELECT * FROM `student`");
                $TotalStudentNo = mysqli_num_rows($TotalStudentNoQuery);
                ?>
                  <li><?php echo $TotalStudentNo; ?> followers </li>
                  <li><button class="btn-primary">Add Friend</button></li>
                </ul>
              </div>
            </div>
          </div><!--Timeline Menu for Large Screens End-->

          <!--Timeline Menu for Small Screens-->
          <div class="navbar-mobile hidden-lg hidden-md">
            <div class="profile-info">
              <img src="images/users/user-1.jpg" alt="" class="img-responsive profile-photo" />
              <h4>Prem Ambro</h4>
              <p class="text-muted">Student</p>
            </div>
            <div class="mobile-menu">
              <ul class="list-inline">
                <li><a href="timline.html">Timeline</a></li>
                <li><a href="edit-profile-basic.php" class="active">About</a></li>
                <li><a href="timeline-album.html">Album</a></li>
                <li><a href="timeline-friends.html">Friends</a></li>
              </ul>
              <button class="btn-primary">Add Friend</button>
            </div>
          </div>

        </div>
        <div id="page-contents">
          <div class="row">
            <div class="col-md-3">
              
              <!--Edit Profile Menu-->
              <ul class="edit-menu">
              	<li><i class="icon ion-ios-information-outline"></i><a href="edit-profile-basic.php">Basic Information</a></li>
              	<!-- <li><i class="icon ion-ios-heart-outline"></i><a href="edit-profile-interests.php">My Interests</a></li>
                <li><i class="icon ion-ios-settings"></i><a href="edit-profile-settings.php">Account Settings</a></li> -->
              	<li class="active"><i class="icon ion-ios-locked-outline"></i><a href="edit-profile-password.php">Change Password</a></li>
              </ul>
            </div>
            <div class="col-md-7">

              <!-- Change Password
              ================================================= -->
              <div class="edit-profile-container">
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-ios-locked-outline"></i>Change Password</h4>
                  <div class="line"></div>
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
                  <div class="line"></div>
                </div>
                <div class="edit-block">
                  <form name="update-pass" id="education" class="form-inline" action="" method="post">
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="my-password">Old password</label>
                        <input id="my-password" class="form-control input-group-lg" type="password" name="old-password" title="Enter password" placeholder="Old password" required/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label>New password</label>
                        <input class="form-control input-group-lg" type="password" name="new-password" title="Enter password" placeholder="New password" required/>
                      </div>
                      <div class="form-group col-xs-6">
                        <label>Confirm password</label>
                        <input class="form-control input-group-lg" type="password" name="confirm-password" title="Enter password" placeholder="Confirm password" required/>
                      </div>
                    </div>
                    <p><a href="">Forgot Password?</a></p>
                    <button class="btn btn-primary" type="submit" name='update-password'>Update Password</button>
                  </form>

                </div>
              </div>
            </div>
            <div class="col-md-2 static">
              
              <!--Sticky Timeline Activity Sidebar-->
              
              
              </div>
            </div>
          </div>
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
    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.sticky-kit.min.js"></script>
    <script src="../js/jquery.scrollbar.min.js"></script>
    <script src="../js/script.js"></script>
    
  </body>

</html>
