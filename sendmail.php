<?php
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$con=mysqli_connect("localhost","root","","test");
$token = bin2hex(random_bytes(15));

$emailquery = "select * from mailtest where email = '$email'";
$query = mysqli_query($con,$emailquery);

$emailcount = mysqli_num_rows($query);

if ($gmailcount > 0)
{
    
  echo "Gmail already exist";
 
}
else
{
  if ($email==$email)
  {
  
        $sql ="insert into mailtest values ('$name','$email','$token','inactive')";
        $result= mysqli_query($con, $sql);
if ($result)
{

  $subject = "Email Activation";
    $body = "Hi, $name. Click Here to Activate your account";

    $header="From : desi2016boyz@gmail.com";

    if(mail($email, $subject, $body, $header))
{
    $_SESSION['msg']="Check your mail to active your account $email";
echo "welcome";
header('location:maillogin.php');
}
else
{
  echo "send fail";
}
}
  } } 
?>