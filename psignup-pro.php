<?php
session_start();
include("config/config.php");
if(isset($_POST['submit']))
{
  $zn=$_POST['zone'];
  $pwd=$_POST['password'];
  $pno=$_POST['stnumber'];
  $area=$_POST['area'];
  $query= "insert into police values(NULL,'$zn','$area','$pno','$pwd')";
  mysqli_query($db,$query);
}

header("Location:psignin.php");
?>