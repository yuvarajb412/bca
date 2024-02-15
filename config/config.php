<?php 

$db = new mysqli('localhost','root','','complaint');

if($db->connect_error){
	echo "Error connecting database";
}

 ?>