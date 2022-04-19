<?php
$uid=$_REQUEST["uid"];
$pas=$_REQUEST["pas"];
$con = new mysqli("localhost","root","","apnaclass");
$sql = "select * from registration where uid='$uid' and pas='$pas'";
$result = mysqli_query($con,$sql);
if ($row=mysqli_fetch_array($result))
{
    header ('location:indexafterlogin.php');
} 
else 
{
  
    
    echo "not valid user name & password";
    
}

?>
