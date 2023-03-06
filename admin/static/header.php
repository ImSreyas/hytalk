<?php 
session_start();
include('../php/db/db.php');
if(isset($_SESSION['admin_id'])){
    $admin_id = $_SESSION['admin_id'];
} else {
    header('location:../index.php');
}
?>