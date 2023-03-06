<?php
include('../../php/db/db.php');
$post_id = $_GET['post_id'];
mysqli_query($conn, "delete from feed where id='$post_id'");
header('location:../index.php');
?>