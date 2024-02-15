<?php
include("config/config.php");
session_start();

if(isset($_POST['submit']))
{
  $uid=$_SESSION['u_id'];
  $cn=$_POST['cname'];
  $mfn=$_POST['mfname'];
  $pno=$_POST['phno'];
  $area=$_POST['area'];
  $mail=$_POST['emmail'];
  $cplace=$_POST['place'];
  $ctime=$_POST['itime'];
  $cdate=$_POST['idate'];
  $cdis=$_POST['dis'];
  $query= "insert into fir values(NULL,'$uid','$cn','$mfn','$area','$pno','$mail','$cplace','$cdate','$ctime','$cdis')";
  
  mysqli_query($db,$query);
}
echo '<script>alert("Complaint is Submited");window.location.href="home.php"</script>';
?>