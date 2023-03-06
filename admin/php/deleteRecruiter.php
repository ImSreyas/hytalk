<?php
include('../../php/db/db.php');
$id = $_GET['id'];
mysqli_query($conn, "delete from recruiter where id='$id'");
header('location:../recruiter.php');
?>