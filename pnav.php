<?php 
session_start();
include("config/config.php");
$stno=$_SESSION['st_no'];
$place=$_SESSION['area'];
$pid=$_SESSION['p_id'];
$sql="SELECT * FROM police where st_no='$stno' AND area='$place'";
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
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="style/bootstrap.min.css">
			<link rel="stylesheet" href="style/all.css">
			<link rel="stylesheet" href="style/css2.css">
			<link rel="stylesheet" href="style/animate.min.css">
			<script src="style/popper.min.js"></script>
			<script src="style/jquery.min.js"></script>
			<script src="style/bootstrap.min.js"></script>
			
		</head>
		<div class="header">
			<h1 style="font-family:'Akaya Telivigala', cursive;"><span style="color:#345980">SMART </span><span style="color:#dc3545"> CRIME </span><span style="color:#345980" >MANAGEMENT </span></h1>
		</div>
		<nav class="navbar navbar-expand-lg navbar navbar-dark " style="letter-spacing: 1px; text-indent: 5px;font-size: 1.5em;font-family:'Akaya Telivigala', cursive;background-color: #345980">     
			<img style="margin-right: 8px;"src="images/plogo.png" width="50" height="50" class="d-inline-block align-top" alt="USER NAME">  
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0" >
					<li class="nav-item active">
						<a class="nav-link" ><?php echo strtoupper($rows['st_no']); ?></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="phome.php"><?php echo strtoupper($rows['area']); ?></a>
					</li>
					<li class="nav-item  active dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Complaint List</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="allcc.php">Crime Complaints</a>
							<a class="dropdown-item" href="allmp.php">Missing Complaints</a>
						</div>
					</li>
					<li class="nav-item  active dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">My station</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="msc.php">Crime</a>
							<a class="dropdown-item" href="msm.php">Missing</a>
							<a class="dropdown-item" href="proofs.php">Uploaded Proofs</a>
							<a class="dropdown-item" href="accused.php">Accused List</a>
						</div>
					</li>
					<li class="nav-item active">
						<a class="nav-link  animate__animated animate__heartBeat animate__infinite" style="color:#dc3545"href="wanted.php">Wanted</a>
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