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
<style>
  .menu1 
  {
    height:70px;
  }
</style>
<body>

<div class="fulid-container bg-secondary ">
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
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#m1"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="m1" >
      <div class=" navbar-collapse justify-content-end">
        <ul class="navbar-nav menu2">
            <li class="active menu2"><a href="index.php" class="nav-link">Home</a> </li>
            <li class="active menu2"><a href="about.php" class="nav-link">About</a> </li>
            <li class="active menu2"><a href="#" class="nav-link">Youtube</a> </li>
            
            <li class="active menu2" data-toggle="modal" data-target="#aa"><a href="#" class="nav-link">Login</a></li> 
          <form action="cookies.php" class="was-validated" method="post" enctype="multipart/form-data">
            <div class="modal" id="aa">
                    <div class="modal-dialog modal-sm modal-md modal-dialog-center modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <img src="icon/t.png" class="log">
                                <button class="btn close" data-dismiss="modal">X</button>
                            </div>
                            <div>
                            <p class="bg-success text-white">
                            <?php if (isset($_SESSION['msg']))
                            {
                              echo $_SESSION['msg'];
                            }
                            else
                            {
                                echo $_SESSION['msg']="you are logged out. Please Login again";
                            }
                            ?>
                            </p>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <lable>User id</lable>
                                    <input type="text" class="form-control" name="uid" placeholder="User name" required/>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="pas" class="form-control" placeholder="Enter Password" required/>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-success btn-block">Login</a></button>
                                    <button class="btn btn-success">Sign Up</button>
                                    <button class="btn btn-success">Forget Password</a></button>
                
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
          </form>
        <li class="active menu2" data-toggle="modal" data-target="#register"><a href="#" class="nav-link">Sign Up</a></li> 
        <form action="register1.php" class="was-validated" method="post" enctype="multipart/form-data">
            <div class="modal" id="register">
              <div class="modal-dialog modal-lg  modal-dialog-center ">
                <div class="modal-content  bg-info">
                <button class="btn close" data-dismiss="modal">Close</button>
                  <div class="modal-header">
                                   
                      <img src="photoup/Tlog.png" class="img-thumbnail text-center navbar-brand" style="box-shadow:10px 10px 10px black; height: 150px;margin-top: 10px;">
                      
                  </div>
                  <div class=" modal-body bg-warning font-weight-bold" style="border-radius:5px;">
        <br>
                    <div class="row">
                      <div class="col-sm-4">
                        <lable>Name</lable>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name='name' placeholder="Full Name" required>
                      </div>
                    </div><br>
                    <div class="row">
                      <div class="col-sm-4">
                        <lable>User Name</lable>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name='uid' placeholder="User name" required>
                      </div>
                    </div>
        <br>
                    <div class="row">
                      <div class="col-sm-4">
                        <lable>Gmail</lable>
                      </div>
                      <div class="col-sm-8">
                        <input type="email" class="form-control" name='gmail' placeholder="xxxxx@gmail.com" required>
                      </div>
                    </div><br>
                    <div class="row">
                      <div class="col-sm-4">
                        <lable>Date of Birth</lable>
                      </div>
                      <div class="col-sm-8">
                        <input type="date" class="form-control" name='dob' placeholder="dd/mm/yy" required>
                      </div>
                    </div><br>
                    <div class="row">
                      <div class="col-sm-4">
                        <lable>Gender</lable>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name='gender' placeholder="male/female" required>
                      </div>
                    </div><br>
<div class="row">
  <div class="col-sm-4">
    <lable>Categore</lable>
  </div>
  <div class="col-sm-8">
    <input type="text" class="form-control" name='cast' required>
</div></div><br>
    <div class="row">
      <div class="col-sm-4">
        <lable>Password</lable>
      </div>
      <div class="col-sm-8">
        <input type="password" class="form-control" name='pas' required>
  </div></div><br>
  <div class="row">
    <div class="col-sm-4">
      <lable>Confirm Password</lable>
    </div>
    <div class="col-sm-8">
      <input type="password"  class="form-control" name='cpas' required>
</div></div><br>
<div class="row">
  <div class="col-sm-4">
    <lable>Father's Name</lable>
  </div>
  <div class="col-sm-8">
    <input type="text" class="form-control" name='fname'  required>
  </div></div><br>
    <div class="row">
      <div class="col-sm-4">
        <lable>Mobile number</lable>
      </div>
      <div class="col-sm-8">
        <input type="toll" class="form-control" name='mobile' placeholder="1234567890" required>
  </div></div>
  <br>
<div class="row">
  <div class="col-sm-4">
    <lable>Address</lable>
  </div>
  <div class="col-sm-8">
    <textarea name="address" id="" cols="30" rows="4" class="form-control" placeholder="" required></textarea>
    
</div></div>
<br>
<div class="row">
  <div class="col-sm-4">
    <lable>Photo</lable>
  </div>
  <div class="col-sm-8">
<input type="file" name='photo' class="form-control-file border" required></div>
  </div>
<br>
<div class="row">
  <div class="col-sm-4">
    <lable>Signature</lable>
  </div>
  <div class="col-sm-8">
<input type="file" name='sign' class="form-control-file border" required></div>
  </div>
<br>
<button type="submit" class="btn btn-block btn-success">Submit</button><br>

Already register. <button type="submit" class="btn btn-success"  href="login.php">Sign in</button>
<button type="reset" class="btn btn-success float-right">Reset</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
    </ul>
    </div> 
  </div>
</div>
</body>
</html>