<?php
session_start();
include('../php/db/db.php');
// if(!isset($_SESSION['student_id'])){
//     header('location:../index.php');
// }
$email = $_SESSION['email'];

$teacherList = mysqli_query($conn, "select * from faculty where Email='$email'");
$Fac_detail=$teacherList->fetch_assoc();
$FacName=$Fac_detail['Name'];
$FacImage=$Fac_detail['Faculty_pic'];
$FacId=$Fac_detail['id'];
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