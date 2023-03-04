<?php
session_start();
include('static/header.php');
?>

<!DOCTYPE html>
<html lang="en">
	
<head>
		
		<title>Video Feed</title>

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
              <!--  <li class="dropdown">
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
              <li class="dropdown">
                <a href="#" class="dropdown-toggle pages" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">All Pages <span><img src="images/down-arrow.png" alt="" /></span></a>
                <ul class="dropdown-menu page-list">
                  <li><a href="newsfeed.php">Newsfeed</a></li>
                  <li><a href="newsfeed-people-nearby.php">Poeple Nearly</a></li>
                  <li><a href="newsfeed-friends.php">My friends</a></li>
                  <li><a href="newsfeed-messages.php">Chatroom</a></li>
                  <li><a href="newsfeed-images.php">Images</a></li>
                  <li><a href="newsfeed-videos.php">Videos</a></li>
                  <li><a href="timeline.php">Timeline</a></li>
                  <li><a href="timeline-about.html">Timeline About</a></li>
                  <li><a href="timeline-album.php">Timeline Album</a></li>
                  <li><a href="timeline-friends.php">Timeline Friends</a></li>
                  <li><a href="edit-profile-basic.php">Edit Profile</a></li>
                  <li><a href="contact.html">Contact Us</a></li>
                  <li><a href="faq.html">FAQ Page</a></li>
                  <li><a href="404.html">404 Not Found</a></li>
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

    <div id="page-contents">
    	<div class="container">
    		<div class="row">

    			<!-- Newsfeed Common Side Bar Left
          ================================================= -->
    			<?php include('static/left-side-bar.php'); ?>
    			<div class="col-md-7">

            <!-- Post Create Box
            ================================================= -->
            <div class="create-post">
            	<div class="row">
            		<div class="col-md-7 col-sm-7">
                  <div class="form-group">
                    <img src="images/users/user-1.jpg" alt="" class="profile-photo-md" />
                    <textarea name="texts" id="exampleTextarea" cols="30" rows="1" class="form-control" placeholder="Write what you wish"></textarea>
                  </div>
                </div>
            		<div class="col-md-5 col-sm-5">
                  <div class="tools">
                    <ul class="publishing-tools list-inline">
                      <li><a href="#"><i class="ion-compose"></i></a></li>
                      <li><a href="#"><i class="ion-images"></i></a></li>
                      <li><a href="#"><i class="ion-ios-videocam"></i></a></li>
                      <li><a href="#"><i class="ion-map"></i></a></li>
                    </ul>
                    <button class="btn btn-primary pull-right">Publish</button>
                  </div>
                </div>
            	</div>
            </div><!-- Post Create Box End -->

            <!-- Media
            ================================================= -->
            <div class="media">
            	<div class="row js-masonry" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": ".grid-sizer", "percentPosition": true }'>
                <div class="grid-sizer col-md-6 col-sm-6"></div>
                <div class="grid-item col-md-6 col-sm-6">
            			<div class="media-grid">
                    <div class="img-wrapper" data-toggle="modal" data-target=".modal-1">
                      <video controls>
                        <source src="videos/3.mp4" type="video/mp4">
                      </video>
                    </div>
                    <div class="media-info">
                      <div class="reaction">
                        <a class="btn text-green"><i class="fa fa-thumbs-up"></i> 46</a>
                        <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 11</a>
                      </div>
                      <div class="user-info">
                        <img src="images/users/user-10.jpg" alt="" class="profile-photo-sm pull-left" />
                        <div class="user">
                          <h6><a href="#" class="profile-link">Julia</a></h6>
                          <a class="text-green" href="#">Friend</a>
                        </div>
                      </div>
                    </div>

                    <!--Popup-->
                    <div class="modal fade modal-1" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="post-content">
														<div class="video-wrapper">
															<video controls>
																<source src="videos/3.mp4" type="video/mp4">
															</video>
														</div>
                            <div class="post-container">
                              <img src="images/users/user-5.jpg" alt="user" class="profile-photo-md pull-left" />
                              <div class="post-detail">
                                <div class="user-info">
                                  <h5><a href="timeline.php" class="profile-link">Alan</a> <span class="following">following</span></h5>
                                  <p class="text-muted">Published a photo about 3 mins ago</p>
                                </div>
                                <div class="reaction">
                                  <a class="btn text-green"><i class="icon ion-thumbsup"></i> 55</a>
                                  <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                                </div>
                                <div class="line-divider"></div>
                                <div class="post-text">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                                </div>
                                <div class="line-divider"></div>
                                <div class="post-comment">
                                  <img src="images/users/user-11.jpg" alt="" class="profile-photo-sm" />
                                  <p><a href="timeline.php" class="profile-link">Tess </a><i class="em em-laughing"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                </div>
                                <div class="post-comment">
                                  <img src="images/users/user-4.jpg" alt="" class="profile-photo-sm" />
                                  <p><a href="timeline.php" class="profile-link">Justin</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                </div>
                                <div class="post-comment">
                                  <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm" />
                                  <input type="text" class="form-control" placeholder="Post a comment">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><!--Popup End-->

                  </div>
            		</div>
                <div class="grid-item col-md-6 col-sm-6">
            			<div class="media-grid">
                    <div class="img-wrapper" data-toggle="modal" data-target=".modal-2">
                      <video controls>
                        <source src="videos/2.mp4" type="video/mp4">
                      </video>
                    </div>
                    <div class="media-info">
                      <div class="reaction">
                        <a class="btn text-green"><i class="fa fa-thumbs-up"></i> 70</a>
                        <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 7</a>
                      </div>
                      <div class="user-info">
                        <img src="images/users/user-4.jpg" alt="" class="profile-photo-sm pull-left" />
                        <div class="user">
                          <h6><a href="#" class="profile-link">John</a></h6>
                          <a class="text-green" href="#">Friend</a>
                        </div>
                      </div>
                    </div>

                    <!--Popup-->
                    <div class="modal fade modal-2" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="post-content">
														<div class="video-wrapper">
															<video controls>
																<source src="videos/2.mp4" type="video/mp4">
															</video>
														</div>
                            <div class="post-container">
                              <img src="images/users/user-5.jpg" alt="user" class="profile-photo-md pull-left" />
                              <div class="post-detail">
                                <div class="user-info">
                                  <h5><a href="timeline.php" class="profile-link">Justin</a> <span class="following">following</span></h5>
                                  <p class="text-muted">Published a photo about 3 mins ago</p>
                                </div>
                                <div class="reaction">
                                  <a class="btn text-green"><i class="icon ion-thumbsup"></i> 13</a>
                                  <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                                </div>
                                <div class="line-divider"></div>
                                <div class="post-text">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                                </div>
                                <div class="line-divider"></div>
                                <div class="post-comment">
                                  <img src="images/users/user-11.jpg" alt="" class="profile-photo-sm" />
                                  <p><a href="timeline.php" class="profile-link">Tess</a><i class="em em-laughing"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                </div>
                                <div class="post-comment">
                                  <img src="images/users/user-4.jpg" alt="" class="profile-photo-sm" />
                                  <p><a href="timeline.php" class="profile-link">Amal</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                </div>
                                <div class="post-comment">
                                  <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm" />
                                  <input type="text" class="form-control" placeholder="Post a comment">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><!--Popup End-->

                  </div>
            		</div>
            		<div class="grid-item col-md-6 col-sm-6">
            			<div class="media-grid">
                    <div class="img-wrapper" data-toggle="modal" data-target=".modal-3">
                      <video controls>
                        <source src="videos/4.mp4" type="video/mp4">
                      </video>
                    </div>
                    <div class="media-info">
                      <div class="reaction">
                        <a class="btn text-green"><i class="fa fa-thumbs-up"></i> 233</a>
                        <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 30</a>
                      </div>
                      <div class="user-info">
                        <img src="images/users/user-9.jpg" alt="" class="profile-photo-sm pull-left" />
                        <div class="user">
                          <h6><a href="#" class="profile-link">Anna</a></h6>
                          <a class="text-green" href="#">Friend</a>
                        </div>
                      </div>
                    </div>

                    <!--Popup-->
                    <div class="modal fade modal-3" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="post-content">
														<div class="video-wrapper">
															<video controls>
																<source src="videos/4.mp4" type="video/mp4">
															</video>
														</div>
                            <div class="post-container">
                              <img src="images/users/user-5.jpg" alt="user" class="profile-photo-md pull-left" />
                              <div class="post-detail">
                                <div class="user-info">
                                  <h5><a href="timeline.php" class="profile-link">Arun</a> <span class="following">following</span></h5>
                                  <p class="text-muted">Published a photo about 3 mins ago</p>
                                </div>
                                <div class="reaction">
                                  <a class="btn text-green"><i class="icon ion-thumbsup"></i> 13</a>
                                  <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                                </div>
                                <div class="line-divider"></div>
                                <div class="post-text">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                                </div>
                                <div class="line-divider"></div>
                                <div class="post-comment">
                                  <img src="images/users/user-11.jpg" alt="" class="profile-photo-sm" />
                                  <p><a href="timeline.php" class="profile-link">Tess </a><i class="em em-laughing"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                </div>
                                <div class="post-comment">
                                  <img src="images/users/user-4.jpg" alt="" class="profile-photo-sm" />
                                  <p><a href="timeline.php" class="profile-link">John</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                </div>
                                <div class="post-comment">
                                  <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm" />
                                  <input type="text" class="form-control" placeholder="Post a comment">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><!--Popup End-->

                  </div>
            		</div>
                <div class="grid-item col-md-6 col-sm-6">
            			<div class="media-grid">
                    <div class="img-wrapper" data-toggle="modal" data-target=".modal-4">
                      <video controls>
                        <source src="videos/5.mp4" type="video/mp4">
                      </video>
                    </div>
                    <div class="media-info">
                      <div class="reaction">
                        <a class="btn text-green"><i class="fa fa-thumbs-up"></i> 27</a>
                        <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                      </div>
                      <div class="user-info">
                        <img src="images/users/user-2.jpg" alt="" class="profile-photo-sm pull-left" />
                        <div class="user">
                          <h6><a href="#" class="profile-link">Tess</a></h6>
                          <a class="text-green" href="#">Friend</a>
                        </div>
                      </div>
                    </div>

                    <!--Popup-->
                    <div class="modal fade modal-4" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="post-content">
														<div class="video-wrapper">
															<video controls>
																<source src="videos/5.mp4" type="video/mp4">
															</video>
														</div>
                            <div class="post-container">
                              <img src="images/users/user-5.jpg" alt="user" class="profile-photo-md pull-left" />
                              <div class="post-detail">
                                <div class="user-info">
                                  <h5><a href="timeline.php" class="profile-link">Alan</a> <span class="following">following</span></h5>
                                  <p class="text-muted">Published a photo about 3 mins ago</p>
                                </div>
                                <div class="reaction">
                                  <a class="btn text-green"><i class="icon ion-thumbsup"></i> 13</a>
                                  <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                                </div>
                                <div class="line-divider"></div>
                                <div class="post-text">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                                </div>
                                <div class="line-divider"></div>
                                <div class="post-comment">
                                  <img src="images/users/user-11.jpg" alt="" class="profile-photo-sm" />
                                  <p><a href="timeline.php" class="profile-link">Albin </a><i class="em em-laughing"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                </div>
                                <div class="post-comment">
                                  <img src="images/users/user-4.jpg" alt="" class="profile-photo-sm" />
                                  <p><a href="timeline.php" class="profile-link">John</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                </div>
                                <div class="post-comment">
                                  <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm" />
                                  <input type="text" class="form-control" placeholder="Post a comment">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><!--Popup End-->

                  </div>
            		</div>
                <div class="grid-item col-md-6 col-sm-6">
            			<div class="media-grid">
                    <div class="img-wrapper" data-toggle="modal" data-target=".modal-5">
                      <video controls>
                        <source src="videos/6.mp4" type="video/mp4">
                      </video>
                    </div>
                    <div class="media-info">
                      <div class="reaction">
                        <a class="btn text-green"><i class="fa fa-thumbs-up"></i> 34</a>
                        <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 2</a>
                      </div>
                      <div class="user-info">
                        <img src="images/users/user-3.jpg" alt="" class="profile-photo-sm pull-left" />
                        <div class="user">
                          <h6><a href="#" class="profile-link">Sophia</a></h6>
                          <a class="text-green" href="#">Friend</a>
                        </div>
                      </div>
                    </div>

                    <!--Popup-->
                    <div class="modal fade modal-5" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="post-content">
														<div class="video-wrapper">
															<video controls>
																<source src="videos/6.mp4" type="video/mp4">
															</video>
														</div>
                            <div class="post-container">
                              <img src="images/users/user-5.jpg" alt="user" class="profile-photo-md pull-left" />
                              <div class="post-detail">
                                <div class="user-info">
                                  <h5><a href="timeline.php" class="profile-link">Aravind</a> <span class="following">following</span></h5>
                                  <p class="text-muted">Published a photo about 3 mins ago</p>
                                </div>
                                <div class="reaction">
                                  <a class="btn text-green"><i class="icon ion-thumbsup"></i> 13</a>
                                  <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                                </div>
                                <div class="line-divider"></div>
                                <div class="post-text">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                                </div>
                                <div class="line-divider"></div>
                                <div class="post-comment">
                                  <img src="images/users/user-11.jpg" alt="" class="profile-photo-sm" />
                                  <p><a href="timeline.php" class="profile-link">Diana </a><i class="em em-laughing"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                </div>
                                <div class="post-comment">
                                  <img src="images/users/user-4.jpg" alt="" class="profile-photo-sm" />
                                  <p><a href="timeline.php" class="profile-link">John</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                </div>
                                <div class="post-comment">
                                  <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm" />
                                  <input type="text" class="form-control" placeholder="Post a comment">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><!--Popup End-->

                  </div>
            		</div>
            		<div class="grid-item col-md-6 col-sm-6">
            			<div class="media-grid">
                    <div class="img-wrapper" data-toggle="modal" data-target=".modal-6">
                      <video controls>
                        <source src="videos/1.mp4" type="video/mp4">
                      </video>
                    </div>
                    <div class="media-info">
                      <div class="reaction">
                        <a class="btn text-green"><i class="fa fa-thumbs-up"></i> 71</a>
                        <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                      </div>
                      <div class="user-info">
                        <img src="images/users/user-4.jpg" alt="" class="profile-photo-sm pull-left" />
                        <div class="user">
                          <h6><a href="#" class="profile-link">Aravind</a></h6>
                          <a class="text-green" href="#">Friend</a>
                        </div>
                      </div>
                    </div>

                    <!--Popup-->
                    <div class="modal fade modal-6" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="post-content">
														<div class="video-wrapper">
															<video controls>
																<source src="videos/1.mp4" type="video/mp4">
															</video>
														</div>
                            <div class="post-container">
                              <img src="images/users/user-5.jpg" alt="user" class="profile-photo-md pull-left" />
                              <div class="post-detail">
                                <div class="user-info">
                                  <h5><a href="timeline.php" class="profile-link">Alan</a> <span class="following">following</span></h5>
                                  <p class="text-muted">Published a photo about 3 mins ago</p>
                                </div>
                                <div class="reaction">
                                  <a class="btn text-green"><i class="icon ion-thumbsup"></i> 13</a>
                                  <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                                </div>
                                <div class="line-divider"></div>
                                <div class="post-text">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                                </div>
                                <div class="line-divider"></div>
                                <div class="post-comment">
                                  <img src="images/users/user-11.jpg" alt="" class="profile-photo-sm" />
                                  <p><a href="timeline.php" class="profile-link">Tess </a><i class="em em-laughing"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                </div>
                                <div class="post-comment">
                                  <img src="images/users/user-4.jpg" alt="" class="profile-photo-sm" />
                                  <p><a href="timeline.php" class="profile-link">John</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                </div>
                                <div class="post-comment">
                                  <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm" />
                                  <input type="text" class="form-control" placeholder="Post a comment">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><!--Popup End-->

                  </div>
            		</div>
                <div class="grid-item col-md-6 col-sm-6">
            			<div class="media-grid">
                    <div class="img-wrapper" data-toggle="modal" data-target=".modal-7">
                      <video controls>
                        <source src="videos/7.mp4" type="video/mp4">
                      </video>
                    </div>
                    <div class="media-info">
                      <div class="reaction">
                        <a class="btn text-green"><i class="fa fa-thumbs-up"></i> 32</a>
                        <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 2</a>
                      </div>
                      <div class="user-info">
                        <img src="images/users/user-5.jpg" alt="" class="profile-photo-sm pull-left" />
                        <div class="user">
                          <h6><a href="#" class="profile-link">AMAL</a></h6>
                          <a class="text-green" href="#">Friend</a>
                        </div>
                      </div>
                    </div>

                    <!--Popup-->
                    <div class="modal fade modal-7" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="post-content">
														<div class="video-wrapper">
															<video controls>
																<source src="videos/7.mp4" type="video/mp4">
															</video>
														</div>
                            <div class="post-container">
                              <img src="images/users/user-5.jpg" alt="user" class="profile-photo-md pull-left" />
                              <div class="post-detail">
                                <div class="user-info">
                                  <h5><a href="timeline.php" class="profile-link">Prince</a> <span class="following">following</span></h5>
                                  <p class="text-muted">Published a photo about 3 mins ago</p>
                                </div>
                                <div class="reaction">
                                  <a class="btn text-green"><i class="icon ion-thumbsup"></i> 13</a>
                                  <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                                </div>
                                <div class="line-divider"></div>
                                <div class="post-text">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                                </div>
                                <div class="line-divider"></div>
                                <div class="post-comment">
                                  <img src="images/users/user-11.jpg" alt="" class="profile-photo-sm" />
                                  <p><a href="timeline.php" class="profile-link">Diana</a><i class="em em-laughing"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                </div>
                                <div class="post-comment">
                                  <img src="images/users/user-4.jpg" alt="" class="profile-photo-sm" />
                                  <p><a href="timeline.php" class="profile-link">John</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                </div>
                                <div class="post-comment">
                                  <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm" />
                                  <input type="text" class="form-control" placeholder="Post a comment">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><!--Popup End-->

                  </div>
            		</div>
            	</div>
            </div>
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
    <script src="../js/masonry.pkgd.min.js"></script>
    <script src="../js/jquery.sticky-kit.min.js"></script>
    <script src="../js/jquery.scrollbar.min.js"></script>
    <script src="../js/script.js"></script>
    
  </body>
</html>
