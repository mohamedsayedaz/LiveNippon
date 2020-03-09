<!DOCTYPE html>
<html>
<head>
  <title>Upload your files</title>
</head>
<body>
  <form enctype="multipart/form-data" action="upload.php" method="POST">
    <p>Upload your file</p>
    <input type="file" name="uploaded_file"></input><br />

    <input type="submit" value="Upload"></input>
  </form>
</body>
</html>
<?php
  if(!empty($_FILES['uploaded_file']))
  {
    $path = "up/";
    $path = $path . basename( $_FILES['uploaded_file']['name']);

    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded";
      include 'connect.php';
      $stmt = $db->prepare("select max(id) from `trips`");
      $stmt->execute();
      $data = $stmt->fetch();
      $id = $data[0];
       $stmt = $db->prepare("Update `trips` set trip_img=? where id=?");
            $stmt->execute(array($_FILES['uploaded_file']['name'],$id));
      header("Location:dashboard.php");
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }
?>