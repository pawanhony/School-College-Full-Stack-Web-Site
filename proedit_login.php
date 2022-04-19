<?php
if (isset($_POST['profile_edit'])) 
{
$pas=$_REQUEST["pas"];
$con = new mysqli("localhost","root","","apnaclass");
$sql = "select * from registration where pas='$pas'";
$result = mysqli_query($con,$sql);
if ($row=mysqli_fetch_array($result))
{
    
    header("location:profile_edit.php");
    
}
else 
{
   // echo "invalid Pass user name";
    header("location:profile_page.php");
   echo '<script>alert("Invalid Password")</script>';
    
   
  
}
}
?>