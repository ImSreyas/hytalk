<?php
session_start();
include('../php/db/db.php');
if(!isset($_SESSION['email'])){
    header('location:../index.php');
}
$email = $_SESSION['email'];

$teacherList = mysqli_query($conn, "select * from faculty where Email='$email'");
$Fac_detail=$teacherList->fetch_assoc();
$FacName=$Fac_detail['Name'];
$FacImage=$Fac_detail['Faculty_pic'];
$FacId=$Fac_detail['id'];

// get stundents number for followers count
$TotalStudentNoQuery=mysqli_query($conn,"SELECT * FROM `student`" ) ;
$TotalStudentNo=mysqli_num_rows($TotalStudentNoQuery);




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