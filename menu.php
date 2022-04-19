<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="pawan.css">
    <link rel="stylesheet" href="myclass.css"></link>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
<?php
include ('connect.php');
$uid=$_COOKIE["uid"];
$pas=$_COOKIE["pas"];
$con = new mysqli("localhost","root","","apnaclass");
$sql = "select * from registration where uid='$uid' and pas='$pas'";
$result = mysqli_query($con,$sql);
if ($row=mysqli_fetch_array($result))
{
?>
<div class="fulid-container bg-secondary">
    <div><img src="icon/ca.png" class="t1"><b> 8430061417</b>
    <div class="float-right ">
        <img src="icon/what.png" class="t1" href="#">
        <img src="icon/tele.png" class="t1" href="#">
        <img src="icon/fb.png" class="t1" href="#">
        <img src="icon/you.png" class="t1" href="#">
    </div></div>
</div>
<div class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="navbar-brand"><img src="photoup/Tlog.png" href="#" class="menu1"></div>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#m1"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar navbar-collapse" id="m1" >
 
    <div class=" navbar-collapse justify-content-end">
        <ul class="navbar-nav menu2">
            <li class="active menu2"><a href="indexafterlogin.php" class="nav-link">Home</a> </li>
            <li class="active menu2"><a href="aboutafter.php" class="nav-link">About</a> </li>
            <li class="active menu2"><a href="#" class="nav-link">Live class</a> </li>
            <li class="active menu2"><a href="#" class="nav-link">Youtube</a> </li>
            <li class="menu2 "><img src="photo/<?php echo $row[10];?>" class="smallp"></li>
            <li class="dropdown active">
                <a  href="#" class=" dropdown-toggle nav-link" data-toggle="dropdown"><?php echo $row[0];?></a>
                  <div class="dropdown-menu ">
                    <a class="dropdown-item" href="profile.php">Profile</a>
                    <a class="dropdown-item" href="#">Link 2</a>
                    <a class="dropdown-item" href="index.php">Logout</a>
                  </div>
            </li>
        </ul>
    </div> 
    </form>
    </div>
</div>
<?php
}

?>


</body>
</html>