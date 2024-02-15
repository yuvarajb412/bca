<?php   
session_start(); 
if($email=$_SESSION['uname'])
{//to ensure you are using same session
session_destroy(); //destroy the session
header("location:index.php"); //to redirect back to "index.php" after logging out
}
else
{
	session_destroy(); //destroy the session
	header("location:psignin.php"); 
}
?>