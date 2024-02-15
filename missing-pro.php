<?php
include("config/config.php");
session_start();
if(isset($_POST['submit']))
{
  $uid=$_SESSION['u_id'];
  $mpn=$_POST['mpname'];
  $pno=$_POST['phno'];
  $area=$_POST['area'];
  $cdis=$_POST['dis'];
  if(isset($_FILES['id_photo']))
  {
    $id_photo='missing-person/'.$_FILES['id_photo']['name'];

      // echo $_FILES['image']['name'].'<br>';

    if(!empty($_FILES['id_photo']))
    {
      $path = "missing-person/";
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
  $query= "insert into missing values(NULL,'$uid','$mpn','$pno','$area','$cdis','$path')";
  mysqli_query($db,$query);
}
echo '<script>alert("Complaint is Submited");window.location.href="home.php"</script>';
?>