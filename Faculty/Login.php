<?php
session_start();
// including db which have the db connection config
include '../php/db/db.php';
$emai=$_POST['Email'];
$pass=$_POST['password'];
$checkEmail="SELECT * FROM `faculty` WHERE `Email` = '$emai' AND `Password` = '$pass';";
$checkExe = mysqli_query($conn, $checkEmail);
if(mysqli_num_rows($checkExe) > 0){
    var_dump("itsworking");
    header('Location: ../Faculty/facultyPage.html');
}else{
    $_SESSION['login_status'] = "fail";
    header('Location: ../Faculty/index-registerfaculty.php');
}
?>