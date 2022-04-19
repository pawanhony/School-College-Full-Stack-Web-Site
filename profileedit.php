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
<body>
<?php
include ('connect.php');
include ('header2.php');

$uid=$_COOKIE["uid"];
$pas=$_COOKIE["pas"];
$con = new mysqli("localhost","root","","apnaclass");
$sql = "select * from registration where uid='$uid' and pas='$pas'";
$result = mysqli_query($con,$sql);
if ($row=mysqli_fetch_array($result))
{
?>

<form action="" method="post" enctype="multipart/form-data">
   <div class="container bg-warning" style="height: 400px;">
    <div class="container bg-secondary" style="height: 300px;border:red 10;">
    <button class=""> Change</button></div>
    <div class="bg-success" name="pic" value=""><img src="photo/<?php echo $row[10];?>" style="height: 220px;width: 180px;margin-top: -150px;margin-left:50px;"></div>
<div class="bg-dark" style="margin-left: 300px;margin-top:-50px;font-size: 25px;font-weight: bold;" name="pname"><?php echo $row[0];?></div>
</div> 
<div class="container bg-danger" style="height: 500px;">
  <div class="row">
    <div class=" col-3">
      <div class="nav flex-column nav-pills">
        <a href="#profile1" class="nav-link active" data-toggle="pill"><b>Profile</b></a>
        <a href="#quli" class=" nav-link" data-toggle="pill">Qualification</a>
        <a href="#pay" class="nav-link" data-toggle="pill">Payment</a> 
      </div>
    </div>
    <div class="table-responsive col-8">
      <div class="tab-content">
        <table id="profile1" class="tab-pane show active" style="font-weight:bold; font-size: 17px;">
          <tr><td> Profile Name </td>
            <td><input type="text" name="name" style="width:400px; height:30px;" value="<?php echo $row[0];?>"></td></tr>
          <tr><td> User Name </td>
            <td><input type="text" name="uid"  style="width:400px; height:30px;"value="<?php echo $row[1];?>"></td></tr>
          <tr><td > Password </td>
            <td><input type="password" name="pass" style="width:400px; height:30px;" value="<?php echo $row[6];?>"></td></tr>
            <tr><td> Mobile </td>
            <td><input type="text" name="mobile" style="width:400px; height:30px;" value="<?php echo $row[8];?>"></td></tr>
            <tr><td> Gmail </td>
            <td><input type="text" name="gmail" style="width:400px; height:30px;" value="<?php echo $row[2];?>"></td></tr>
          <tr><td> Date of Birth </td>
            <td><input type="date" name="dob" style="width:400px; height:30px;" value="<?php echo $row[3];?>"></td></tr>
          <tr><td> Gender </td>
            <td><select name="gender" style="width:150px;height:30px"><option value="<?php echo $row[4];?>"> Select </option><option value="male"> Male </option>
              <option value="female"> Female </option></td></tr>
          <tr><td> Categore </td>
            <td><select name="cast" style="width:150px;height:30px"><option value=""> Select </option><option value="Gen"> General </option>
              <option value="OBC"> OBC </option><option value="SC"> SC/ST </option></td></tr>
          <tr><td> Father's Name </td>
            <td><input type="text" name="fname" style="width:400px; height:30px;"value="<?php echo $row[7];?>"></td></tr>
          <tr><td> Address </td>
            <td><input type="text" name="address" style="width:400px; height:30px;" value="<?php echo $row[9];?>"></td></tr>
          <tr><td> Photo </td>
            <td><input type="file" name="photo" style="width:200px; height:30px;"></td></tr>
          <tr><td><button type="Submit" style="height:40px;box-shadow:5px 5px 10px red;width:100px;" value="change">Update</button></td></tr>
   
          </table>

        <table id="quli" class="tab-pane fade" style="font-weight:bold; font-size: 17px;">
   
           
          <tr><td class=""> Class </td><td><input type="text" style="width:400px; height:30px;"></td></tr>
          <tr><td class=""> Collage Name </td><td><input type="text" style="width:400px; height:30px;"></td></tr>
          <tr><td class=""> Board </td><td><input type="text" style="width:400px; height:30px;"></td></tr>
          <tr><td class=""> 10th School Name </td><td><input type="text" style="width:400px; height:30px;"></td></tr>
          <tr><td class=""> 10th Percentage </td><td><input type="number" style="width:400px;height:30px"></td></tr>
          <tr><td ><button type="Submit" style="height:40px;box-shadow:5px 5px 10px red;width:100px;">Update</button></td></tr>
      
        </table>
        <table class="tab-pane fade"  id="pay" style="font-weight:bold; font-size: 17px;">
   
    
    <tr><td class=""> Jan </td><td><input type="text" style="width:400px; height:30px;"></td></tr>
    <tr><td class=""> Feb </td><td><input type="text" style="width:400px; height:30px;"></td></tr>
    <tr><td class=""> March </td><td><input type="text" style="width:400px; height:30px;"></td></tr>
    <tr><td class=""> April </td><td><input type="text" style="width:400px; height:30px;"></td></tr>
    <tr><td class=""> May </td><td><input type="number" style="width:400px;height:30px"></td></tr>
    <tr><td ><button type="Submit" style="height:40px;box-shadow:5px 5px 10px red;width:100px;">Update</button></td></tr>

        </table>
</div></div>
</div>
</div>
</form>
<?php
}
else
{
    echo "invalid";
}
?>
</body>
</html>