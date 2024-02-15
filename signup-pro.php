<?php
session_start();
include("config/config.php");
if(isset($_POST['submit']))
{
  $n=$_POST['name'];
  $pwd=$_POST['password'];
  $emmail=$_POST['email'];
  $pno=$_POST['phno'];
  $area=$_POST['address'];
  if(isset($_FILES['id_photo']))
  {
    $id_photo='user-photo/'.$_FILES['id_photo']['name'];

      // echo $_FILES['image']['name'].'<br>';

    if(!empty($_FILES['id_photo']))
    {
      $path = "user-photo/";
      $path=$path. basename($_FILES['id_photo']['name']);
      if(move_uploaded_file($_FILES['id_photo']['tmp_name'], $path))
      {
        echo"The file ". basename($_FILES['id_photo']['name']). " has been uploaded";
      }

      else
      {
        echo "There was an error uploading the file, please try again!";
      }
    }

  }
  $query= "insert into user values(NULL,'$n','$pwd','$emmail','$pno','$area','$path')";
  mysqli_query($db,$query);
}

header("Location:index.php");
?>