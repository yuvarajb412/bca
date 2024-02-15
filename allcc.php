<?php
include("pnav.php");
?>
<html>
<style>

	#customers ,h3{
		font-family:'Akaya Telivigala', cursive;
		border-collapse: collapse;
		letter-spacing: 2px;
		width: 100%;
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
						<th>Complainant's Name</th>
						<th>Complainant's Address</th>
						<th>Complainant's Number</th>
						<th>Incident Area</th>
						<th>Incident</th>
						
					</tr>
					<?php 
					$sql="SELECT * from fir ";
					$result=mysqli_query($db,$sql);
					if(mysqli_num_rows($result)>0)
					{
						while($rows=mysqli_fetch_assoc($result)){
							?>
							<tr>
								<td><?php echo $rows['c_name'] ?></td>
								<td><?php echo $rows['c_address'] ?></td>
								<td><?php echo $rows['c_moble'] ?></td>
								<td><?php echo $rows['cr_place'] ?></td>
								<td><?php echo $rows['cr_dis'] ?></td>
								<?php }} ?>
							</td>
						</tr>
					</table> 
				</div>
			</div>
		</div>
	</div>
</body>
</html>