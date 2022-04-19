<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="pawan.css">
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<style>
.form-div { margin-top: 100px; border: 1px solid #e0e0e0; }
#profileDisplay { display: block; height: 210px; width: 180px; margin: 0px auto; border-radius:5px; }
.img-placeholder {
  width: 180px;
  color: gray;
  height: 100%;
  
  opacity: .7;
  height: 210px;
  
  z-index: 2;
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  display: none;
}
.img-placeholder h4 {
  margin-top: 40%;
  color: white;
}
.img-div:hover .img-placeholder {
    cursor: pointer;
  display: block;
  
}
</style>

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
        </div>
    </div>
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
                            <a class="dropdown-item" href="profile_page.php">Profile</a>
                            <a class="dropdown-item" href="#">Link 2</a>
                            <a class="dropdown-item" href="index.php">Logout</a>
                        </div>
                </li>
            </ul>
        </div> 
    </div>
</div>


<div class="container bg-danger">
    <form action="profile_editdb.php" method="post" enctype="multipart/form-data">
        <div class="row bg-success">
            <div class="col-sm-3 form-group" style="position: relative;margin-top:10px;">
                <span class="img-div">
                    <div class="text-center img-placeholder" onClick="triggerClick()">
                    </div>
                    <img src="photo/<?php echo $row[10];?>" class="img-thumbnail img-responsive" onClick="triggerClick()" id="profileDisplay">
                </span>
                    <input type="file" name="photo" onChange="displayImage(this)" id="photo" class="form-control" style="display: none;">
                    <br>
                        <div class="font-weight-bold" style="text-align:center; font-size:25px; "><?php echo $row[0];?></div>
                        <br>
                <div class="form-group">
                    <button type="submit" name="photo" class="btn btn-primary btn-block">Save Photo</button>
                </div>
            </div>

            <div class="col-sm-9 form-group" >
                <div class="nav navbar nav-tabs">
                    <a href="#profile1" class="btn btn-primary" data-toggle="tab"><b>Profile</b></a>
                    <a href="#quli" class="btn btn-primary" data-toggle="tab">Qualification</a>
                    <a href="#pay" class="btn btn-primary" data-toggle="tab">Payment</a>
                    
                </div>
            <div class="container tab-content jumbotron" >

                <div class=" tab-pane fade in show active font-weight-bold" style="font-size:17px;" id="profile1">
                    <div class="row form-group">
                        <div class="col-sm-3">
                            <lable> Name </lable>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="name" class="form-control" value="<?php echo $row[0];?>">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-3">
                            <lable> Gmail </lable>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="gmail" class="form-control" value="<?php echo $row[2];?>">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-3">
                            <lable>Date of Birth</lable>
                        </div>
                        <div class="col-sm-6">
                        <input type="date" name="dob" class="form-control" value="<?php echo $row[3];?>">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-3">
                            <lable> Gender </lable>
                        </div>
                        <div class="col-sm-6">
                            <select name="gender" class="form-control" ><option value="<?php echo $row[4];?>"> Select </option><option value="male"> Male </option>
                            <option value="female"> Female </option></select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-3">
                            <lable> Categore </lable>
                        </div>
                        <div class="col-sm-6">
                            <select name="cast" class="form-control" ><option value="<?php echo $row[5];?>"> Select </option><option value="Gen"> General </option>
                            <option value="OBC"> OBC </option><option value="SC"> SC/ST </option></select>
                        </div>
                    </div>
        
                    <div class="row form-group">
                        <div class="col-sm-3">
                            <lable> Password </lable>
                        </div>
                        <div class="col-sm-6 ">
                            <input type="password" name="pas" class="form-control" value="<?php echo $row[6];?>">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-3">
                            <lable> Father's Name </lable>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="fname" class="form-control" value="<?php echo $row[7];?>">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-3">
                            <lable> Mobile </lable>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="mobile" class="form-control" value="<?php echo $row[8];?>">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-3">
                            <lable> Address </lable>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="address" class="form-control" value="<?php echo $row[9];?>">
                        </div>
                    </div>
                </div>
                <button type="submit" name="record_update" class="btn btn-success">Update</button>
<div class="tab-pane fade" id="quli">
    <div class="row">
        <div class="col">
        <lable> Gmail </lable>
        </div>
        <div class="col">
        <?php echo $row[2];?>
        </div>
    </div>
    <div class="row">
        <div class="col">
        <lable> Gmail </lable>
        </div>
        <div class="col">
        <?php echo $row[2];?>
        </div>
    </div>
    <div class="row">
        <div class="col">
        <lable> Gmail </lable>
        </div>
        <div class="col">
        <?php echo $row[2];?>
        </div>
    </div>
</div>
<div class="tab-pane fade" id="pay">
    <div class="row">
        <div class="col">
        <lable> Gmail </lable>
        </div>
        <div class="col">
        <?php echo $row[2];?>
        </div>
    </div>
    <div class="row">
        <div class="col">
        <lable> Gmail </lable>
        </div>
        <div class="col">
        <?php echo $row[2];?>
        </div>
    </div>
</div>





        </div>

    </form>
</div>
<?php
}
else
{
echo "invalid";
}
?>
</body>
</html>
<script src="scripts.js"></script>