<?php
 include ('connect.php');
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
$photo=$_FILES['photo']['name'];
$sign=$_FILES['sign']['name'];
$token = bin2hex(random_bytes(50));
$gmailquery = "select * from registration where gmail = '$gmail'";
$query = mysqli_query($con,$gmailquery);
$gmailcount = mysqli_num_rows($query);


if ($gmailcount > 0)
{
 
    echo "already exist";
    //"<script> alert ("Gmail already exist") ;</script>"
 // <?php 
}
else {
    if ($pas === $cpas)
    {
        $sql ="insert into registration values ('$name','$uid','$gmail','$dob','$gender','$cast','$pas','$fname','$mobile','$address','$photo','$sign','$token','inactive')";
        $result= mysqli_query($con, $sql);
        if ($result)
        {
            $subject = "Email Activation";
            $body = "Hi, $name. Click Here to Activate your account
            http://localhost/test/activategmail.php?token=$token";
            $header="From : desi2016boyz@gmail.com";

        if(mail($gmail, $subject, $body, $header))
        {
            $_SESSION['msg']="Check your mail to active your account $gmail";
                
        
        $target_dir = "photo/";
        $target_file = $target_dir . basename($photo);
        move_uploaded_file($_FILES["photo"]["tmp_name"],$target_file);
        $target_dir = "photo/";
        $target_file = $target_dir . basename($sign);
        move_uploaded_file($_FILES["sign"]["tmp_name"],$target_file);
        echo "alert('Please check your mail for account activation');";
        header("location:index.php");
    }
    else
    {
        echo "send fail";
    }
    }
    }
}

?>