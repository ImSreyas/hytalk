<?php
include('static/header.php');
?>

<?php
session_start();
// include('static/header.php');


// if(isset($_POST['update-btn'])) {
//   $firstname = $_POST['firstname'];
//   $lastname = $_POST['lastname'];
//   $email = $_POST['email'];
//   $register_no = $_POST['register'];
//   $password = $_POST['password'];
//   $mobile = $_POST['mobile_no'];
//   $day = $_POST['day'];
//   $month = $_POST['month'];
//   $year = $_POST['year'];
//   $gender = $_POST['optradio'];
//   $department = $_POST['Department'];
//   $semester = $_POST['Semester'];


//   $image = $_FILES['image'];
//   $image_fileName = $_FILES['image']['name'];
//   $image_fileTempName = $_FILES['image']['tmp_name'];
//   $image_fileSize = $_FILES['image']['size'];
//   $image_fileError = $_FILES['image']['error'];
//   $image_fileType = $_FILES['image']['type'];

//   $image_fileExt = explode('.', $image_fileName);
//   $image_fileActualExt = strtolower(end($image_fileExt));

//   $image_fileDestination_new = "";
//   if (!$image_fileName == "") {
//     if ($image_fileError === 0) {
//         if ($image_fileSize < 1000000000) {
//             $image_fileNewName = uniqid('', true) . "." . $image_fileActualExt;
//             $image_fileDestination = '../images/users/' . $image_fileNewName;
//             move_uploaded_file($image_fileTempName, $image_fileDestination);
//             $image_fileDestination_new = 'images/users/' . $image_fileNewName;
//         } else {
//             $imageError = "*Image size is too big";
//         }
//     } else {
//         $imageError = "*Some error occured.Please choose an image one more time.";
//     }
// } else {
//     $imageError = "*Select an image";
// }


// $queryTxt = 
// "
// UPDATE student
// SET 
//     Name = '$firstname $lastname',
//     semester = '$semester',
//     register_no = '$register_no',
//     Dob = '$year-$month-$day',
//     Student_pic = '$image_fileDestination_new',
//     Gender = '$gender',
//     Email = '$email',
//     Mobile_no = '$mobile',
//     Username = '$email',
//     Password = '$password',
//     Stream = '$department'
// WHERE
//     id ='$student_id'
// ";
//   mysqli_query($conn, $queryTxt);
// }

$infoCheck = $_SESSION['infoEditStatus'];
if ($infoCheck == "true") { ?>
  <script>
    function myFunction() {
      alert("Info Updated!");
    }
  </script>
<?php
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <title>Edit Profile | Edit Profile Page</title>

  <!-- Stylesheets
    ================================================= -->
  <link rel="stylesheet" href="../css/bootstrap.min.css" />
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/ionicons.min.css" />
  <link rel="stylesheet" href="../css/font-awesome.min.css" />

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
          <a class="navbar-brand" href="#">Hytalk</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right main-menu">
            <!-- <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <span><img src="images/down-arrow.png" alt="" /></span></a>
                  <ul class="dropdown-menu newsfeed-home">
                    <li><a href="index.php">sign up</a></li>
                    <li><a href="index-registeradmin.php">sign in</a></li>
                  </ul>
              </li> -->
            <li class="dropdown">
              <a href="newsfeed.php" class="dropdown-toggle">Newsfeed </a>
              <!-- <ul class="dropdown-menu newsfeed-home">
                    <li><a href="newsfeed.php">Newsfeed</a></li>
                    <li><a href="newsfeed-friends.html">My friends</a></li>
                    <li><a href="newsfeed-messages.html">Chatroom</a></li>
                    <li><a href="newsfeed-images.html">Images</a></li>
                    <li><a href="newsfeed-videos.html">Videos</a></li>
                  </ul> -->
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings <span><img src="images/down-arrow.png" alt="" /></span></a>
              <ul class="dropdown-menu login">
                <li><a href="newsfeed.php">Timeline</a></li>
                <!-- <li><a href="edit-profile-basic.php">Timeline About</a></li>
                  <li><a href="timeline-album.php">Timeline Album</a></li>
                  <li><a href="timeline-friends.php">Timeline Friends</a></li> -->
                <li><a href="edit-profile-basic.php">Edit: Basic Info</a></li>
                <!-- <li><a href="edit-profile-interests.php">Edit: Interests</a></li>
                  <li><a href="edit-profile-settings.php">Account Settings</a></li> -->
                <li><a href="edit-profile-password.php">Change Password</a></li>
              </ul>
            </li>

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
                <li><a href="newsfeed.php">Timeline</a></li>
                <li><a href="edit-profile-basic.php" class="active">About</a></li>
                <li><a href="newsfeed.php">Album</a></li>
                <!-- <li><a href="timeline-friends.html">Friends</a></li> -->
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
        <!-- <div class="navbar-mobile hidden-lg hidden-md">
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
          </div> -->

      </div>
      <div id="page-contents">
        <div class="row">
          <div class="col-md-3">

            <!--Edit Profile Menu-->
            <ul class="edit-menu">
              <li class="active"><i class="icon ion-ios-information-outline"></i><a href="edit-profile-basic.php">Basic Information</a></li>
              <!-- <li><i class="icon ion-ios-heart-outline"></i><a href="edit-profile-interests.php">My Interests</a></li>
                <li><i class="icon ion-ios-settings"></i><a href="edit-profile-settings.php">Account Settings</a></li> -->
              <li><i class="icon ion-ios-locked-outline"></i><a href="edit-profile-password.php">Change Password</a></li>
            </ul>
          </div>
          <div class="col-md-7">

            <!-- Basic Information
              ================================================= -->
            <div class="edit-profile-container">
              <div class="block-title">
                <h4 class="grey"><i class="icon ion-android-checkmark-circle"></i>Edit basic information</h4>
                <div class="line"></div>
                <p>change the information if there is some error or change.</p>
                <div class="line"></div>
              </div>
              <div class="edit-block">

                <form name="registration_form" id='registration_form' class="form-inline" action="FormAction/editPro.php" method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="form-group col-xs-6">
                      <label for="firstname" class="sr-only">First Name</label>
                      <input required id="firstname" class="form-control input-group-lg" type="text" name="firstname" title="Enter first name" placeholder="First name" />
                    </div>
                    <div class="form-group col-xs-6">
                      <label for="lastname" class="sr-only">Last Name</label>
                      <input required id="lastname" class="form-control input-group-lg" type="text" name="lastname" title="Enter last name" placeholder="Last name" />
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-xs-6">
                      <label for="email" class="sr-only">Email</label>
                      <input required id="email" class="form-control input-group-lg" type="email" name="email" title="Enter your email" placeholder="Email" />
                    </div>
                    <!-- <div class="form-group col-xs-6">
                        <label for="register" class="sr-only">Register n.o</label>
                        <input required id="register" class="form-control input-group-lg" type="number" name="register" title="Enter your reg n.o" placeholder="Register n.o"/>
                      </div> -->
                  </div>
                  <div class="row">
                    <div class="form-group col-xs-6">
                      <label for="password" class="sr-only">Password</label>
                      <input required id="password" class="form-control input-group-lg" type="password" name="password" title="Enter your password" placeholder="Password" />
                    </div>
                    <div class="form-group col-xs-6">
                      <label for="mobile n.o" class="sr-only">Mobile n.o</label>
                      <input required id="mobile n.o" class="form-control input-group-lg" type="text" pattern="[0-9]+" name="mobile_no" title="Enter your mob n.o" placeholder="Mobile n.o" />
                    </div>
                  </div>
                  <!-- <div class="row">
                      <p class="birth"><strong>Date of Birth</strong></p>
                      <div class="form-group col-sm-3 col-xs-6">
                        <label for="month" class="sr-only"></label>
                        <select required class="form-control" id="day" name="day">
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
                        <select required class="form-control" id="month" name="month">
                          <option value="1">Jan</option>
                          <option value="2">Feb</option>
                          <option value="3">Mar</option>
                          <option value="4">Apr</option>
                          <option value="5">May</option>
                          <option value="6">Jun</option>
                          <option value="7">Jul</option>
                          <option value="8">Aug</option>
                          <option value="9">Sep</option>
                          <option value="10">Oct</option>
                          <option value="11">Nov</option>
                          <option value="12">Dec</option>
                        </select>
                      </div>
                      <div class="form-group col-sm-6 col-xs-12">
                        <label for="year" class="sr-only"></label>
                        <select required class="form-control" id="year" name="year">
                          <option value="year" disabled selected>Year</option>
                          <option>1995</option>
                          <option>1996</option>
                          <option>1997</option>
                          <option>1998</option>
                          <option>1999</option>
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
                    </div> -->
                  <div class="form-group gender">
                    <label class="radio-inline">
                      <input required type="radio" name="optradio" checked value="male">Male
                    </label>
                    <label class="radio-inline">
                      <input required type="radio" name="optradio" value="female">Female
                    </label>
                  </div>
                  <div class="row">
                    <!-- <div class="form-group col-xs-6">
                        <label for="Department" class="sr-only"></label>
                        <select required class="form-control" id="country" name="Department">
                          <option value="Department" disabled selected>Department</option>
                          <option value="Computer Science">Computer Science</option>
                          <option value="Physics">Physics</option>
                          <option value="Mathematics">Mathematics</option>
                          <option value="Economics">Economics</option>
                          <option value="Chemistry">Chemistry</option>
                          <option value="History">History</option>
                          <option value="Commerce">Commerce</option>
                        </select>
                      </div> -->
                    <div class="form-group col-xs-6">
                      <label for="Company" class="sr-only"></label>
                      <input required id="lastname" class="form-control input-group-lg" type="text" name="company" title="Enter company" placeholder="Company" />
                    </div>
                    <div class="form-group col-xs-6">
                      <label for="Department" class="sr-only"></label>
                      <input required id="lastname" class="form-control input-group-lg" type="text" name="designation" title="Enter designation" placeholder="Designation" />
                      <!-- <select required class="form-control" id="country" name="Semester">
                          <option value="Semester" disabled selected>Semester</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                        </select> -->
                    </div>
                    <div style="padding: 2rem;">profile pic :
                      <input type="file" name='image' />
                    </div>
                  </div>
                  <button class="btn btn-primary" name="update-btn" type="submit">update</button>
                </form>

              </div>
            </div>
          </div>
          <div class="col-md-2 static">

            <!--Sticky Timeline Activity Sidebar-->
            <div id="sticky-sidebar">
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
              <li><a href="#">Signup</a></li>
              <li><a href="#">login</a></li>
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