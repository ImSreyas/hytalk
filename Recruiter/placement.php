<?php
session_start();
include('static/header.php');
?>
<?php

$m = '';
if(isset($_POST['submit'])){
    $jobTitle = $_POST['job-title'];
    $companyName = $_POST['company-name'];
    $studentsName = $_POST['student-name'];

    foreach ($studentsName as $name) {
        mysqli_query($conn, "insert into placement set recruiter_id='$recruiter_id', student_name='$name', Company_details='$companyName', designation='$jobTitle'");
    }
    $m = "successfully inserted";
}



?>
<!DOCTYPE html>
<html lang="en">

<head>

  <title>Recruiter</title>

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
          <a class="navbar-brand" href="#">
            <!-- <img src="images/logo.png" alt="logo" /> -->
            Hytalk
          </a>
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
          
          <!-- Post Create Box End-->

          <!-- Post Content
            ================================================= -->
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
    }
    form {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    label {
      display: inline-block;
      margin-bottom: 5px;
    }
    input[type="text"], input[type='number'] {
      padding: 5px;
      border: 2px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      width: 100%;
      resize: vertical;
    }
    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
      margin-top: 1rem;
    }
    input[type="submit"]:hover {
      background-color: #45a049;
    }
    .red{
      color: #3d3d3d;
      font-size: 2rem;
      text-align: center;
      padding: 2rem;
      background-color: #d4ffcc;
      border-radius: 1rem;
      margin-bottom: 1rem;
    }
  </style>
  <form action="" method="post">
    <?php 
    if($m != ''){
      ?>
       <div class="red"><?php echo $m; ?></div>
       <?php
    }
    ?>
    <label for="job-title">Job Title:</label>
    <input type="text" id="job-title" name="job-title" required>
    
    <label for="company-name">Company Name:</label required>
    <input type="text" id="company-name" name="company-name" required>

    <label for="numberOfStudents">Student's count:</label>
    <input type="number" id="student-count" name="student-count" required>
    
    
    <input type="submit" name='submit' value="Submit">
  </form>
<script>
  const studentNameInput = document.getElementById("student-count");
  const form = document.querySelector("form");
    let i = 0;
  studentNameInput.addEventListener("input", () => {
    const stu = document.querySelectorAll('#student-name');
    stu.forEach(item => {
        item.remove()
    })
    const la = document.querySelectorAll('#student-label');
    la.forEach(item => {
        item.remove()
    })
    
    // Check if the student name input field has a value
    for(i=0; i< studentNameInput.value ; i++) {
      // Create a new input field for additional student names
      const label = document.createElement("label")
      label.id = 'student-label'
      label.innerText = 'student name'
      const newStudentInput = document.createElement("input");
      newStudentInput.type = "text";
      newStudentInput.id = "student-name";
      newStudentInput.name = "student-name[]";
      newStudentInput.required = true
      // Append the new input field after the current student name input field
      studentNameInput.insertAdjacentElement("afterend", newStudentInput);
      studentNameInput.insertAdjacentElement("afterend", label);
    }
  });
</script>


          



        </div>
        <!-- Newsfeed Common Side Bar Right
          ================================================= -->
        <?php
        // include('static/right-side-bar.php'); 
        ?>
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
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTMXfmDn0VlqWIyoOxK8997L-amWbUPiQ&amp;callback=initMap"></script>
  <script src="../js/jquery-3.1.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.sticky-kit.min.js"></script>
  <script src="../js/jquery.scrollbar.min.js"></script>
  <script src="../js/script.js"></script>
</body>

</html>