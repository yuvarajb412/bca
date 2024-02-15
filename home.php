<?php
include("unav.php");
?>
<body>
	<div class="row">
		<div class="card bg-danger text-white col-sm-2" style="margin-top: 20px;padding: 20px;margin-left:220px;">
			<h5> YOUR SUBMITTED COMPLAINTS</h5>
			<?php
			$uid= $_SESSION["u_id"];
			$sql="SELECT COUNT(c_id) FROM  fir where u_id='$uid'";
			$result = $db->query($sql);
			$data = $result-> fetch_assoc();
			$result1=$data['COUNT(c_id)'];

			?>
			<hr>
			<h5> NO: <?php echo $result1;
			?>
		</div>
		<div class="card bg-success text-white col-sm-2" style="margin-top: 20px;padding: 20px;margin-left:20px;">
			<h5>TOTAL ONLINE COMPLAINTS</h5>
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
		<div class="card bg-primary text-white col-sm-2" style="margin-top: 20px;padding: 20px;margin-left:20px;">
			<h6> YOUR SUBMITTED MISSING COMPLAINTS</h6>
			<?php
			$uid= $_SESSION["u_id"];
			$sql="SELECT COUNT(mp_id) FROM  missing where u_id='$uid'";
			$result = $db->query($sql);
			$data = $result-> fetch_assoc();
			$result1=$data['COUNT(mp_id)'];

			?>
			<hr>
			<h5> NO: <?php echo $result1;
			?>
		</div>
		<div class="card bg-dark text-white col-sm-2" style="margin-top: 20px;padding: 20px;margin-left:20px;">
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
			$sql="SELECT * FROM  wanted ";
			$result = $db->query($sql);
			 while($rows=mysqli_fetch_assoc($result))
			 {
			?>
			<div class="card col-sm-3" style="height:50%;margin-top: 20px;padding: 20px;margin-left:20px;background-color: #fff;color:#333">
			<img src="images/want.jpg">
			<hr>
			<h7> WANTED PERSONS: <?php echo $rows['w_name'];?></h7>
			<br>
			<img src="<?php echo $rows['photo']; ?>" height="250px">
			</div>
				<?php } ?></div></marquee>
</body>