<?php
session_start();
include('../../php/db/db.php');
if(isset($_SESSION['student_id'])){
    $user_id = $_GET['user_id'];
    $friend_id = $_GET['friend_id'];
    $user_type = $_GET['user_type'];
    $friend_type = $_GET['friend_type'];

    mysqli_query($conn, "delete from friends where user_id='$user_id' && friend_id='$friend_id' && friend_type='$friend_type' && user_type='$user_type'");
    header('location:../newsfeed-friends.php');
}
?>