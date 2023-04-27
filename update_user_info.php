<?php
include_once("connection.php");
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $project_desc = $_POST['project_desc'];
    $cost = $_POST['cost'];
    $status = $_POST['status'];
    $query1 = "UPDATE users SET project_desc='$project_desc', cost='$cost', status='$status'  WHERE id='$id'";
     $a = mysqli_query($conn, $query1);
    
    echo "<script>window.location.href = 'admin/index.php';</script>";
}
if (isset($_POST['user_edit'])) {
    session_start();
    $username = $_SESSION['username'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $countrycode = $_POST['countrycode'];
    $project_desc = $_POST['project_desc'];
    $cost = $_POST['cost'];
    
    $query1 = "UPDATE users SET email = '$email', phonenumber = '$phonenumber', countrycode = '$countrycode',project_desc='$project_desc', cost='$cost', status='$status'  WHERE username='$username'";
     $a = mysqli_query($conn, $query1);
    
    echo "<script>window.location.href = 'user_edit.php';</script>";
}
?>
