<?php
session_start();
include 'connect.php';
if (isset($_GET['token']))
{
    $token = $_GET['token'];
    $updatequery= "update registration set status='active' where token='$token' ";
    $query = mysqli_query($con,$updatequery);
    if ($query)
    {
        if (isset($_SESSION['msg']))
        {
            $_SESSION['msg']= "Account Activated";
            header('location:index.php');
        }
        else
        {
            $_SESSION['msg']="You are logged out";
            header('location:index.php');
        }
    }
    else{
        $_SESSION['msg']="Account not Activate";
        header('location:index.php');
    }
}
?>