<?php
session_start();
// including db which have the db connection config
include '../php/db/db.php';
$name = $_POST['firstname'].' '.$_POST['lastname'];
$email = $_POST['Email'];
$mob = $_POST['Mobile'];
$pas = $_POST['password'];
$gender = $_POST['optradio'];
$company = $_POST['CompanyName'];
$desi = $_POST['Designation'];
var_dump($name,$email,$mob,$pas,$gender,$company,$desi);

$checkEmail="SELECT * FROM `recruiter` WHERE `Email` = '$email';";
$checkExe = mysqli_query($conn, $checkEmail);
if(mysqli_num_rows($checkExe)==0){
    $insert_query ="INSERT INTO `recruiter` (`id`, `Name`, `Company_details`, `Email`, `recruiter_pic`, `Designation`, `Mobile_no`, `Username`, `Password`)
     VALUES (NULL, '$name', '$company', '$email', 'images/recruiter/default.png', '$desi', '$mob', NULL, '$pas')";
    if($exe = mysqli_query($conn, $insert_query))
    {
        // while the condition true re-direct to registration page
        $_SESSION['registration_status'] = "success";
        header('Location: ../index-registerrecruiter.php');
    }else{
        //registration failed
        $_SESSION['registration_status'] = "fail";
        header('Location: ../index-registerrecruiter.php');
    }
}else{
    // email already be there email is used as User name for account 
    $_SESSION['registration_status'] = "email";
    header('Location: ../index-registerrecruiter.php');
}
?>