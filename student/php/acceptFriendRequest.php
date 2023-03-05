<?php
session_start();
include('../../php/db/db.php');
if(isset($_SESSION['student_id'])){
    $user_id = $_GET['user_id'];
    $friend_id = $_GET['friend_id'];
    $user_type = $_GET['user_type'];
    $friend_type = $_GET['friend_type'];

    mysqli_query($conn, "update friends set status='1' where user_id='$user_id' && friend_id='$friend_id' && friend_type='$friend_type' && user_type='$user_type'");
    mysqli_query($conn, "insert into message set message='Thank you for accepting the friend request.', send_id='$friend_id', receive_id='$friend_id'");

    header('location:../newsfeed-friends.php');
}
?>