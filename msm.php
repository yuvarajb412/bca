<?php
include("pnav.php");
$place=$_SESSION['area'];
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
			<div class="col-sm-10" style="padding-top: 10px;margin-left:100px">
				<table id="customers"> 
					<tr class="header">
						<th>Missing Person's Name</th>
						<th>Missing Person's Address</th>
						<th>Contact Number</th>
						<th>Missing Person's Photo</th>
						<th>Status</th>
						
						
					</tr>
					<?php 
					$sql="SELECT * from missing where mp_c_add='$place'";
					$result=mysqli_query($db,$sql);
					if(mysqli_num_rows($result)>0)
					{
						while($rows=mysqli_fetch_assoc($result)){

							?>
							<tr>
								<td><?php echo $rows['mp_name'] ?></td>
								<td><?php echo $rows['mp_c_add'] ?></td>
								<td><?php echo $rows['mp_c_no'] ?></td>
								<td><img src="<?php echo $rows['mp_photo']; ?>" height="100px"></td>
								<td><a class= "btn btn-danger" href="updatemp.php?mpid=<?php echo $rows['mp_id']?>">update</a></td>
							<?php }} ?>
						</td>
					</tr>
				</table> 
			</div>
		</div>
	</div>
</body>
</html>