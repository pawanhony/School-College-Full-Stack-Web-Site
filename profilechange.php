
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="main.css">
</head>
<style>
.form-div { margin-top: 100px; border: 1px solid #e0e0e0; }
#profileDisplay { display: block; height: 210px; width: 60%; margin: 0px auto; border-radius: 50%; }
.img-placeholder {
  width: 60%;
  color: gray;
  height: 100%;
  background: black;
  opacity: .7;
  height: 210px;
  border-radius: 50%;
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

<div class="container">
    <div class="row">
      <div class="form-div">
          <form action="prochangedb.php" method="post" enctype="multipart/form-data">
          <h2 class="text-center ">Update profile</h2>
          
          <div class="form-group text-center" style="position: relative;" >
            <span class="img-div">
              <div class="text-center img-placeholder"  onClick="triggerClick()">
                <h4>Update image</h4>
              </div>
              <img src="images/avatar.jpg" onClick="triggerClick()" id="profileDisplay">
            </span>
            <input type="file" name="photo"  onChange="displayImage(this)" id="photo" class="form-control" style="display: none;">
            <label>Profile Image</label>
          </div>
          
          <div class="form-group">
            <button type="submit" name="save_profile" class="btn btn-primary btn-block">Save User</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  
</body>
</html>
<script src="scripts.js"></script>
