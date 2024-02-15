<?php
include("pnav.php");
$pid=$_GET['pid'];
$sql="SELECT * from proof WHERE p_id='$pid'";
$result=mysqli_query($db,$sql);
if(mysqli_num_rows($result)>0)
{
	while($rows=mysqli_fetch_assoc($result)){
		$hash=$rows['hash'];
		$sql="SELECT * from accused";
		$result1=mysqli_query($db,$sql);
		if(mysqli_num_rows($result1)>0)
		{
			while($rowss=mysqli_fetch_assoc($result1)){
				$hash1=$rowss['hash'];
				$hash2=$rowss['hash1'];
				
				if($hash==$hash2)
				{
					?>
					<html>
					<body>
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
						<div class="tab-content">
							<div class="row">
								<div class="col-sm-10" style="padding-top: 10px;margin-left:100px">
									<table id="customers">
										<tr class="header">
											<th>Accused Name </th>
											<th>Accused Photo</th>
											<th>Accused Finger Print</th>
										</tr>
										<tr>
											<td><?php echo $rowss['aname'] ?></td>
											<td><img class=" animate__animated animate__heartBeat animate__infinite" src="<?php echo $rowss['photo']; ?>" height="100px"></td>
											<td><img  src="<?php echo $rowss['photo1']; ?>" height="100px"></a></td>
										</tr>
									</table> 
								</div>
							</div>
						</div>
					</body>
					</html>
					<?php 
				}

			}
		}
	}
}

?>
