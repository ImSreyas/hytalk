<?php
include '../php/db/db.php';
$name = $_POST['firstname'].' '.$_POST['lastname'];
$email = $_POST['email'];
$mob = $_POST['mobile'];
$pas = $_POST['password'];
$gender = $_POST['optradio'];
$desi = $_POST['Designation'];
$dep = $_POST['Dep'];
$insert_query ="INSERT INTO `faculty` (`id`, `Name`, `designation`, `Dob`, `Email`, `Faculty_pic`, `Department`, `Mobile_no`, `Username`, `Password`) VALUES (NULL, '$name', '$desi', '0/0/0', '$email', NULL, '$dep', '$mob', NULL, '$pas');";
if($exe = mysqli_query($conn, $insert_query))
{
    header('Location: ../Faculty/index-registerfaculty.php');
}else{
    var_dump("Something Went Wrong");
}
?>