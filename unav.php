<?php 
session_start();
include("config/config.php");
$email=$_SESSION['uname'];
$sql="SELECT * FROM user where uname='$email'";
$result=mysqli_query($db,$sql);
if(mysqli_num_rows($result)>0)
{
	while($rows=mysqli_fetch_assoc($result)){
		?>
		<style>
			.header {
				padding: 40px;
				text-align: center;
				background: #fff;
				color: white;
			}

			.header h1 {
				font-size: 40px;
			}
		</style>
		<head>
			<link rel="stylesheet" href="style/bootstrap.min.css">
			<link rel="stylesheet" href="style/all.css">
			<link rel="stylesheet" href="style/css2.css">
		</head>
		<div class="header">
			<h1 style="font-family:'Akaya Telivigala', cursive;"><span style="color:#345980">ONLINE </span><span style="color:#dc3545"> CRIME </span><span style="color:#345980" >MANAGEMENT </span></h1>
		</div>
		<nav class="navbar navbar-expand-lg navbar navbar-dark " style="letter-spacing: 1px; text-indent: 5px;font-size: 1.5em;font-family:'Akaya Telivigala', cursive;background-color: #345980">
			<img style="margin-right: 8px;"src="<?php echo $rows['p_photo']; ?>" width="70" height="40" class="d-inline-block align-top" alt="USER NAME">         
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0" >
					<li class="nav-item active">
						<a class="nav-link"><?php echo strtoupper($rows['uname']); ?></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="home.php">Home</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="fir.php">Complaint</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="missing.php">Missing Persons</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="cstatus.php">FIR Status</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="upload.php">Upload Proof</a>
					</li>
				</ul>
				<ul class="navbar-nav ml-auto" >
					<li class="nav-item active">
						<a href="logout.php" style="color: #fff;">Log Out</a>
					</li>
				</ul>
			</div>
		</nav>
		<?php
	}}
	?>