<?php 
include("config/config.php");
if(isset($_POST['submit']))
{
	$email=$_POST['area'];
	$password=$_POST['password'];

	$password = $password; 
	$sql = "SELECT * FROM police where area='$email' AND st_pass='$password' LIMIT 1";
	$result = $db->query($sql);
	if($result->num_rows==1){
		$data = $result-> fetch_assoc();
		$stno=$data['st_no'];
		$user=$data['p_id'];
		$place=$data['area'];
		session_start();
		$_SESSION['st_no']=$stno;
		$_SESSION['p_id']=$user;
		$_SESSION['area']=$place;
		header('location:phome.php');


	}
	else
	{
		echo '<script>alert("User name & Password is Wrong");window.location.href="psignin.php"</script>';
		
	}
}
?>
