<?php
  $msg = "";
  $msg_class = "";
  $uid=$_REQUEST['uid'];
  $conn = mysqli_connect("localhost", "root", "", "apnaclass");
  
  if (isset($_POST['photo'])) {
    // for the database
    
    $profileImageName = time() . '-' . $_FILES["photo"]["name"];
    // For image upload
    $target_dir = "photo/";
    $target_file = $target_dir . basename($profileImageName);
    // VALIDATION
    // validate image size. Size is calculated in Bytes
    if($_FILES['photo']['size'] > 200000) {
      $msg = "Image size should not be greated than 200Kb";
      $msg_class = "alert-danger";
    }
    // check if file exists
    if(file_exists($target_file)) {
      $msg = "File already exists";
      $msg_class = "alert-danger";
    }
    // Upload image only if no errors
    if (empty($error)) {
      if(move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file) ) 
      {
        $sql = "INSERT INTO registration SET photo='$profileImageName' WHERE uid='$uid'";
        if(mysqli_query($conn, $sql)){
          $msg = "Image uploaded and saved in the Database";
          $msg_class = "alert-success";
          header('location:profile_page.php');
        } else {
          $msg = "There was an error in the database";
          $msg_class = "alert-danger";
        }
      } else {
        $error = "There was an erro uploading the file";
        $msg = "alert-danger";
      }
    }
  }
?>