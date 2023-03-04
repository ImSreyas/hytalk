<?php
session_start();
include('../../php/db/db.php');
if(isset($_SESSION['student_id'])){
    $id = $_GET['id'];
    $user_type = $_GET['user_type'];
    $user_id = $_GET['user_id'];

    mysqli_query($conn, "delete from friends where user_id='$id' && friend_id='$user_id' && user_type='$user_type'");
    header('location:../newsfeed.php');
}
?>