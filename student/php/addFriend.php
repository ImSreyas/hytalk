<?php
session_start();
include('../../php/db/db.php');
if(isset($_SESSION['student_id'])){
    $id = $_GET['id'];
    $friend_type = $_GET['user_type'];
    $user_id = $_GET['user_id'];
    $user_type = $_GET['type'];

    mysqli_query($conn, "insert into friends set user_id='$id', friend_id='$user_id', friend_type='$friend_type', user_type='$user_type'");
    header('location:../newsfeed-friends.php');
}
?>