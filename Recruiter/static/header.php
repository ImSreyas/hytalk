<?php
session_start();
include('../php/db/db.php');
if(!isset($_SESSION['Email'])){
    header('location:../index.php');
}
// if(!isset($_SESSION['student_id'])){
//     header('location:../index.php');
// }
// $student_id = $_SESSION['student_id'];

// $studentList = mysqli_query($conn, "select * from student where id='$student_id'");
// $studentArray = $studentList->fetch_assoc();
// $student_name = $studentArray['Name'];
// $student_semester = $studentArray['semester'];
// $student_dob = $studentArray['Dob'];
// $student_gender = $studentArray['Gender'];
// $student_email = $studentArray['Email'];
// $student_pic = $studentArray['Student_pic'];
// $student_stream = $studentArray['Stream'];
// $student_mobile = $studentArray['Mobile_no'];
?>
<?php
$email=$_SESSION['Email'];
$Rec_Details = mysqli_query($conn, "select * from recruiter where Email='$email'")->fetch_assoc();
$recruiter_id = $Rec_Details['id'];
$recruiter_Name=$Rec_Details['Name'];
$recruiter_Img=$Rec_Details['recruiter_pic'];

?>
