<?php
include('../php/db/db.php');
if(!isset($_SESSION['student_id'])){
    header('location:../index.php');
}
$student_id = $_SESSION['student_id'];

$studentList = mysqli_query($conn, "select * from student where id='$student_id'");
$studentArray = $studentList->fetch_assoc();
$student_name = $studentArray['Name'];
$student_semester = $studentArray['semester'];
$student_dob = $studentArray['Dob'];
$student_gender = $studentArray['Gender'];
$student_email = $studentArray['Email'];
$student_pic = $studentArray['Student_pic'];
$student_stream = $studentArray['Stream'];
$student_mobile = $studentArray['Mobile_no'];


$userFollowersQuery = mysqli_query($conn, "select * from friends where user_id='$student_id'");
$userFollowCount = $userFollowersQuery->num_rows;

$userFollowingQuery = mysqli_query($conn , "select * from friends where  friend_id='$student_id'");
$userFollowingCount = $userFollowingQuery->num_rows;
?>