<?php
include("pnav.php");
?>
<body>
	<div class="row">
		<div class="card bg-success text-white col-sm-4" style="margin-top: 20px;padding: 20px;margin-left:200px;">
			<h5>TOTAL REGISTERED COMPLAINTS</h5>
			<?php
			$sql="SELECT COUNT(c_id) FROM  fir";
			$result = $db->query($sql);
			$data = $result-> fetch_assoc();
			$result1=$data['COUNT(c_id)'];

			?>
			<hr>
			<h5> NO: <?php echo $result1;
			?>
		</div>
		<div class="card bg-dark text-white col-sm-4" style="margin-top: 20px;padding: 20px;margin-left:20px;">
			<h5> TOTAL MISSING COMPLAINTS</h5>
			<?php
			$sql="SELECT COUNT(mp_id) FROM  missing ";
			$result = $db->query($sql);
			$data = $result-> fetch_assoc();
			$result1=$data['COUNT(mp_id)'];

			?>
			<hr>
			<h5> NO: <?php echo $result1;
			?>
		</div>
	</div>
	<marquee><div class="row">
			<?php
			$sql="SELECT * FROM  missing ";
			$result = $db->query($sql);
			 while($rows=mysqli_fetch_assoc($result))
			 {
			?>
			<div class="card col-sm-3" style="height:50%;margin-top: 20px;padding: 20px;margin-left:20px;background-color: #fff;color:#333">
			<img src="images/miss.jpg">
			<hr>
			<h7> MISSING PERSONS: <?php echo $rows['mp_name'];?></h7>
			<br>
			<img src="<?php echo $rows['mp_photo']; ?>" height="250px">
			</div>
				<?php } ?></div></marquee>
</body>