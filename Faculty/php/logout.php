<?php
session_start();
if(isset($_SESSION['student_id'])){
    unset($_SESSION['student_id']);
    header('location:../../index.php');
}
?>