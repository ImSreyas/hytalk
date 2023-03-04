<?php
session_start();
include('static/header.php');
?>

<!DOCTYPE html>
<html lang="en">
	
<head>
		
		<title>My Friends | Hy Talk Friend List</title>

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
            <a class="navbar-brand" href="index-registeradmin.php"><img src="images/logo.png" alt="logo" /></a>
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
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Newsfeed <span><img src="images/down-arrow.png" alt="" /></span></a>
                  <ul class="dropdown-menu newsfeed-home">
                    <li><a href="newsfeed.php">Newsfeed</a></li>
                    <li><a href="newsfeed-people-nearby.php">Poeple Nearly</a></li>
                    <li><a href="newsfeed-friends.php">My friends</a></li>
                    <li><a href="newsfeed-messages.php">Chatroom</a></li>
                    <li><a href="newsfeed-images.php">Images</a></li>
                    <li><a href="newsfeed-videos.php">Videos</a></li>
                  </ul>
              </li>
              <li class="dropdown">
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
              </li>
              
              <li class="dropdown"><a href="contact.php">Contact</a></li>
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
                  <img src="images/users/user-1.jpg" alt="" class="img-responsive profile-photo" />
                  <h3>Treesa</h3>
                  <p class="text-muted">Student</p>
                </div>
              </div>
              <div class="col-md-9">
                <ul class="list-inline profile-menu">
                  <li><a href="timeline.php">Timeline</a></li>
                  <li><a href="timeline-about.html">About</a></li>
                  <li><a href="timeline-album.php">Album</a></li>
                  <li><a href="timeline-friends.php" class="active">Friends</a></li>
                </ul>
                <ul class="follow-me list-inline">
                  <li>899 people following you</li>
                  <li><button class="btn-primary">Add Friend</button></li>
                </ul>
              </div>
            </div>
          </div><!--Timeline Menu for Large Screens End-->

          <!--Timeline Menu for Small Screens-->
          <div class="navbar-mobile hidden-lg hidden-md">
            <div class="profile-info">
              <img src="images/users/user-1.jpg" alt="" class="img-responsive profile-photo" />
              <h4>Treesa</h4>
              <p class="text-muted">Student</p>
            </div>
            <div class="mobile-menu">
              <ul class="list-inline">
                <li><a href="timline.html">Timeline</a></li>
                <li><a href="timeline-about.html">About</a></li>
                <li><a href="timeline-album.php">Album</a></li>
                <li><a href="timeline-friends.php" class="active">Friends</a></li>
              </ul>
              <button class="btn-primary">Add Friends</button>
            </div>
          </div><!--Timeline Menu for Small Screens End-->

        </div>
        <div id="page-contents">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-7">

              <!-- Friend List
              ================================================= -->
              <div class="friend-list">
                <div class="row">
                  <div class="col-md-6 col-sm-6">
                    <div class="friend-card">
                      <img src="images/covers/1.jpg" alt="profile-cover" class="img-responsive cover" />
                      <div class="card-info">
                        <img src="images/users/user-3.jpg" alt="user" class="profile-photo-lg" />
                        <div class="friend-info">
                          <a href="#" class="pull-right text-green">My Friend</a>
                          <h5><a href="timeline.php" class="profile-link">Sophia</a></h5>
                          <p>Student</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="friend-card">
                      <img src="images/covers/3.jpg" alt="profile-cover" class="img-responsive cover" />
                      <div class="card-info">
                        <img src="images/users/user-4.jpg" alt="user" class="profile-photo-lg" />
                        <div class="friend-info">
                          <a href="#" class="pull-right text-green">My Friend</a>
                          <h5><a href="timeline.php" class="profile-link">Alan</a></h5>
                          <p>Student</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="friend-card">
                      <img src="images/covers/4.jpg" alt="profile-cover" class="img-responsive cover" />
                      <div class="card-info">
                        <img src="images/users/user-10.jpg" alt="user" class="profile-photo-lg" />
                        <div class="friend-info">
                          <a href="timeline.php" class="pull-right text-green">My Friend</a>
                          <h5><a href="#" class="profile-link">Julia</a></h5>
                          <p>Friend</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="friend-card">
                      <img src="images/covers/5.jpg" alt="profile-cover" class="img-responsive cover" />
                      <div class="card-info">
                        <img src="images/users/user-7.jpg" alt="user" class="profile-photo-lg" />
                        <div class="friend-info">
                          <a href="#" class="pull-right text-green">My Friend</a>
                          <h5><a href="timelime.html" class="profile-link">Justin</a></h5>
                          <p>Recruiter</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="friend-card">
                      <img src="images/covers/6.jpg" alt="profile-cover" class="img-responsive cover" />
                      <div class="card-info">
                        <img src="images/users/user-8.jpg" alt="user" class="profile-photo-lg" />
                        <div class="friend-info">
                          <a href="#" class="pull-right text-green">My Friend</a>
                          <h5><a href="timeline.php" class="profile-link">Tino</a></h5>
                          <p>Recruiter</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="friend-card">
                      <img src="images/covers/7.jpg" alt="profile-cover" class="img-responsive cover" />
                      <div class="card-info">
                        <img src="images/users/user-2.jpg" alt="user" class="profile-photo-lg" />
                        <div class="friend-info">
                          <a href="#" class="pull-right text-green">My Friend</a>
                          <h5><a href="timeline.php" class="profile-link">Tess</a></h5>
                          <p>Faculty</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="friend-card">
                      <img src="images/covers/8.jpg" alt="profile-cover" class="img-responsive cover" />
                      <div class="card-info">
                        <img src="images/users/user-9.jpg" alt="user" class="profile-photo-lg" />
                        <div class="friend-info">
                          <a href="#" class="pull-right text-green">My Friend</a>
                          <h5><a href="timeline.php" class="profile-link">Arun</a></h5>
                          <p>Student</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="friend-card">
                      <img src="images/covers/9.jpg" alt="profile-cover" class="img-responsive cover" />
                      <div class="card-info">
                        <img src="images/users/user-6.jpg" alt="user" class="profile-photo-lg" />
                        <div class="friend-info">
                          <a href="#" class="pull-right text-green">My Friend</a>
                          <h5><a href="timeline.php" class="profile-link">Arun</a></h5>
                          <p>Faculty</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="friend-card">
                      <img src="images/covers/10.jpg" alt="profile-cover" class="img-responsive cover" />
                      <div class="card-info">
                        <img src="images/users/user-5.jpg" alt="user" class="profile-photo-lg" />
                        <div class="friend-info">
                          <a href="#" class="pull-right text-green">My Friend</a>
                          <h5><a href="timeline.php" class="profile-link">Amal</a></h5>
                          <p>Student</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2 static">
              <div id="sticky-sidebar">
                <h4 class="grey">Your activity</h4>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link">You</a> Commended on a Photo</p>
                    <p class="text-muted">5 mins ago</p>
                  </div>
                </div>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link">You</a> Have posted a photo</p>
                    <p class="text-muted">an hour ago</p>
                  </div>
                </div>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link">You</a> Liked Aln's post</p>
                    <p class="text-muted">4 hours ago</p>
                  </div>
                </div>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link">You</a> hav shared an article</p>
                    <p class="text-muted">a day ago</p>
                  </div>
                </div>
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
              <a href="#"><img src="images/logo.png.jpg" alt="" class="footer-logo" /></a>
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
                <li><a href="index-registerstudent.php">Signup</a></li>
                <li><a href="index-registeradmin.php">login</a></li>
                <li><a href="#">Explore</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="contact.html">contact</a></li>
              </ul>
            </div>
            <div class="col-md-2 col-sm-2">
              <h5>For Recruiters</h5>
              <ul class="footer-links">
                <li><a href="index-registerrecruiter.php">Recruiter signup</a></li>
                <li><a href="contact.html"></a>Contact</li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Explore</a></li>
                <li><a href="#">Advertise</a></li>
              </ul>
            </div>
            <div class="col-md-2 col-sm-2">
              <h5>About</h5>
              <ul class="footer-links">
                <li><a href="contact.html">About us</a></li>
                <li><a href="contact.html">Contact us</a></li>
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
