<?php
session_start();
include('../../php/db/db.php');

if(isset($_POST['update-btn'])) {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
//   $register_no = $_POST['register'];
  $password = $_POST['password'];
  $mobile = $_POST['mobile_no'];
//   $day = $_POST['day'];
//   $month = $_POST['month'];
//   $year = $_POST['year'];
  $gender = $_POST['optradio'];
  $company = $_POST['company'];
  $designation = $_POST['designation'];

  

  $image = $_FILES['image'];
  $image_fileName = $_FILES['image']['name'];
  $image_fileTempName = $_FILES['image']['tmp_name'];
  $image_fileSize = $_FILES['image']['size'];
  $image_fileError = $_FILES['image']['error'];
  $image_fileType = $_FILES['image']['type'];

  $image_fileExt = explode('.', $image_fileName);
  $image_fileActualExt = strtolower(end($image_fileExt));

  $image_fileDestination_new = "";
  if (!$image_fileName == "") {
    if ($image_fileError === 0) {
        if ($image_fileSize < 1000000000) {
            $image_fileNewName = uniqid('', true) . "." . $image_fileActualExt;
            $image_fileDestination = '../../images/users/' . $image_fileNewName;
            move_uploaded_file($image_fileTempName, $image_fileDestination);
            $image_fileDestination_new = 'images/users/' . $image_fileNewName;
        } else {
            $imageError = "*Image size is too big";
        }
    } else {
        $imageError = "*Some error occured.Please choose an image one more time.";
    }
} else {
    $imageError = "*Select an image";
}

// Dob = '$year-$month-$day',
// register_no = '$register_no',
// Gender = '$gender',
$email = $_SESSION['Email'];
$teacherList = mysqli_query($conn, "select * from recruiter where Email='$email'");
$Fac_detail=$teacherList->fetch_assoc();
$FacId=$Fac_detail['id'];

$queryTxt = 
"
UPDATE recruiter
SET 
    Name = '$firstname $lastname',
    Company_details = '$company',
    recruiter_pic = '$image_fileDestination_new',
    Email = '$email',
    Mobile_no = '$mobile',
    Password = '$password',
    Designation = '$designation'
WHERE
    id ='$FacId'
";

$queryTxtNoImage = 
"
UPDATE recruiter
SET 
    Name = '$firstname $lastname',
    Designation = '$designation',
    Email = '$email',
    Mobile_no = '$mobile',
    Password = '$password',
    Company_details = '$company'
WHERE
    id ='$FacId'
";
if($image_fileDestination_new==NULL){
    mysqli_query($conn, $queryTxtNoImage);
    $_SESSION['infoEditStatus']="true";
}else{
    mysqli_query($conn, $queryTxt);
    $_SESSION['infoEditStatus']="true";
}
  
}

header('location:../edit-profile-basic.php');
