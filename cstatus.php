<?php
include("unav.php");
$uid=$_SESSION['u_id'];
?>
<html>
<style>

	#customers ,h3{
		font-family:'Akaya Telivigala', cursive;
		border-collapse: collapse;
		width: 100%;
		letter-spacing: 2px;
	}

	#customers td, #customers th {
		border: 1px solid #ddd;

		padding: 8px;
	}

	#customers tr:nth-child(even){background-color: #f2f2f2;}

	#customers tr:hover {background-color: #ddd;}

	#customers th {
		padding-top: 12px;
		padding-bottom: 12px;
		text-align: left;
		background-color: #345980;
		color: #fff;
	}
</style>
<body>
	<div class="tab-content">
		<div class="row">

			<div class="col-sm-6" style="padding-top: 10px">
				<table id="customers">
					<tr class="header">
						<th>Complainant's Name</th>
						<th>Complainant's Address</th>
						<th>Complainant's Number</th>
						<th>Complainant's Mail</th>
						<th>Status</th>
					</tr>
					<?php 
					$sql="SELECT * from fir WHERE u_id='$uid'";
					$result=mysqli_query($db,$sql);
					if(mysqli_num_rows($result)>0)
					{
						while($rows=mysqli_fetch_assoc($result)){

							?>
							<tr>
								<td><?php echo $rows['c_name'] ?></td>
								<td><?php echo $rows['c_address'] ?></td>
								<td><?php echo $rows['c_moble'] ?></td>
								<td><?php echo $rows['c_mail'] ?></td>
								<td><a  class="btn btn-success" href="ctimeline.php?cid=<?php echo $rows['c_id']?>"> Click</a></td>
							<?php }} ?>
						</td>
					</tr>
				</table> 
			</div>
			<div class="col-sm-6" style="padding-top: 10px">
				<table id="customers"> 
					<tr class="header">
						<th>Missing Person's Name</th>
						<th>Missing Person's Address</th>
						<th>Contact Number</th>
						
						<th>Status</th>
					</tr>
					<?php 
					$sql="SELECT * from missing WHERE u_id='$uid'";
					$result=mysqli_query($db,$sql);
					if(mysqli_num_rows($result)>0)
					{
						while($rows=mysqli_fetch_assoc($result)){

							?>
							<tr>
								<td><?php echo $rows['mp_name'] ?></td>
								<td><?php echo $rows['mp_c_add'] ?></td>
								<td><?php echo $rows['mp_c_no'] ?></td>
								<td><a  class="btn btn-success" href="mptimeline.php?mpid=<?php echo $rows['mp_id']?>"> Click</a></td>
							<?php }} ?>
						</td>
					</tr>
				</table> 
			</div>
		</div>
	</div>
</body>
</html>
