<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
                  <div class="dropdown-menu">
                    <a class="dropdown-item nav-item" href="profile_page.php">Profile</a>
                    <a class="dropdown-item nav-item" href="#">Link 2</a>
                    <a class="dropdown-item nav-item" href="index.php">Logout</a>
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

    <div style="margin:50px; padding:10px; text-align:center">
            <p><h5>Tiwary Tutorials in Physics is one of the most popular and unique Institute in Chapra.
                By honest labour with students and unique teaching skills, this institute provides approx. 100% 
                results in Board Exams and satisfactory results in Competitive Exams realting Physics.
                Our motto is "Success With Knowledge". we are providing On-line teaching classes of 
                Physics in Lock down position.</h5></p>
    </div>
    <div class="container bg-lightgray">
        <div class="row panel panel-primary">
            <div class="panel-heading"> Batch 2020 </div>
            <div class="panel-body col-sm-12">
                <img src="photoup/1.jpg" class="img-responsive" style="width:200; margin:5px;">
                <img src="photoup/4.jpg" class="img-responsive" style="width:200; margin:5px;">
                <img src="photoup/5.jpg" class="img-responsive" style="width:200; margin:5px;">
                <img src="photoup/6.jpg" class="img-responsive" style="width:200; margin:5px;">
                <img src="photoup/7.jpg" class="img-responsive" style="width:200; margin:5px;">
            </div>
        </div>
    </div>
    <div class="container">
    <div class="row">
        <div class="col-sm-4 panel panel-primary" style="text-align:center;">
            <div class="panel-heading "> Sir Isaac Newton </div>
                <div class="panel-body" >
                <img src="photoup/newton.jpg" class="img-responsive" style="width:220; text-align:center;">
                </div>
                <div class="panel-footer bg-warning"> "Live your life as an Exclamation rather than an Explanation" <br>by- <h5> Isaac Newton</h5> </div>
        </div>
        <div class="col-sm-4 panel panel-primary" style="text-align:center;">
            <div class="panel-heading "> Albert Einstein </div>
                <div class="panel-body" >
                <img src="photoup/eins.jpg" class="img-responsive" style="width:200; text-align:center;">
                </div>
                <div class="panel-footer bg-warning"> "Life is like riding a bicycle. To keep your balance, you must keep moving" <br> by- <h5>Albert Einstein</h5> </div>
        </div>
        <div class="col-sm-4 panel panel-primary" style="text-align:center;">
            <div class="panel-heading "> Michael Faraday </div>
                <div class="panel-body" >
                <img src="photoup/mical.jpg" class="img-responsive" style="width:265; text-align:center;">
                </div>
                <div class="panel-footer bg-warning"> " No matter what you look at, if you look at it closely enough, you are involved in the entire universe " <br> by- <h5>Michael Faraday </h5> </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-dark foot"></div>
</body>
</html>