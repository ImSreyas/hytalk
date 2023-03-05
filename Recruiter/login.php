<?php
session_start();
// including db which have the db connection config
include '../php/db/db.php';
$emai=$_POST['Email'];
$pass=$_POST['password'];
$checkEmail="SELECT * FROM `recruiter` WHERE `Email` = '$emai' AND `Password` = '$pass';";
$checkExe = mysqli_query($conn, $checkEmail);
if(mysqli_num_rows($checkExe) > 0){
    $_SESSION['Email']=$emai;
    header('Location: newsfeed.php');
}else{
    $_SESSION['login_status'] = "fail";
    header('Location: ../index-registerrecruiter.php');
}
?>