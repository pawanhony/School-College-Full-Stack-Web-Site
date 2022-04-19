<?php
 
 if (isset($_POST['record_update']))
 {
$name=$_REQUEST['name'];
$uid=$_REQUEST['uid'];
$gmail=$_REQUEST['gmail'];
$dob=$_REQUEST['dob'];
$gender=$_REQUEST['gender'];
$cast=$_REQUEST['cast'];
$pas=$_REQUEST['pas'];
$cpas=$_REQUEST['cpas'];
$fname=$_REQUEST['fname'];
$mobile=$_REQUEST['mobile'];
$address=$_REQUEST['address'];
$con = new mysqli("localhost","root","","apnaclass");

$sql ="update registration set name='$name',gmail='$gmail',dob='$dob',gender='$gender',cast='$cast',pas='$pas',
fname='$fname',mobile='$mobile',address='$address', photo='$profileImageName' where pas='$pas'";
$result =mysqli_query($con, $sql);
echo "Update Successful";
header('location:profile_page.php');
 }


 else{
     echo "not valid";
 }

 
?>