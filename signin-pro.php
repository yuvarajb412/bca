<?php 
include("config/config.php");
if(isset($_POST['submit']))
{
	$email=$_POST['name'];
	$password=$_POST['password'];

	$password = $password; 
	$sql = "SELECT * FROM user where uname='$email' AND password='$password' LIMIT 1";
	$result = $db->query($sql);
	if($result->num_rows==1){
		$data = $result-> fetch_assoc();
		$logged_user = $data['uname'];
		$user=$data['u_id'];
		session_start();
		$_SESSION['uname']=$email;
		$_SESSION['u_id']=$user;
		$_SESSION['c_address']=$place;
		header('location:home.php');


	}
	else
	{
		echo '<script>alert("User name & Password is Wrong");window.location.href="index.php"</script>';
		
	}
}
?>
