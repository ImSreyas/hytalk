<?php
session_start();
// including db which have the db connection config
include '../php/db/db.php';
$name = $_POST['firstname'].' '.$_POST['lastname'];
$email = $_POST['email'];
$mob = $_POST['mobile'];
$pas = $_POST['password'];
$gender = $_POST['optradio'];
$desi = $_POST['Designation'];
$dep = $_POST['Dep'];

// checking the email already be there or not
$checkEmail="SELECT * FROM `faculty` WHERE `Email` = '$email';";
$checkExe = mysqli_query($conn, $checkEmail);
if(mysqli_num_rows($checkExe)==0){
    $insert_query ="INSERT INTO `faculty` (`id`, `Name`, `designation`, `Dob`, `Email`, `Faculty_pic`, `Department`, `Mobile_no`, `Username`, `Password`) VALUES (NULL, '$name', '$desi', '0/0/0', '$email', 'images/faculty/default.png', '$dep', '$mob', NULL, '$pas');";
    if($exe = mysqli_query($conn, $insert_query))
    {
        // while the condition true re-direct to registration page
        $_SESSION['registration_status'] = "success";
        header('Location: ../Faculty/index-registerfaculty.php');
    }else{
        //registration failed
        var_dump("Something Went Wrong");
        $_SESSION['registration_status'] = "fail";
        header('Location: ../Faculty/index-registerfaculty.php');
    }
}else{
    // email already be there email is used as User name for account 
    $_SESSION['registration_status'] = "email";
    header('Location: ../Faculty/index-registerfaculty.php');
}
