<?php
include("unav.php");
$uid=$_SESSION['u_id'];
$cid=$_GET['cid'];
?>
<style >
	.altTL, div.altEV { box-sizing: border-box; }
	.altTL {

		position: relative;

		max-width: 600px;
		margin: 0 auto;
	}

	.altTL::before {

		content: '';
		width: 5px;
		background-color: #1da1ff;

		position: absolute;
		top: 0;
		bottom: 0;
		left: 50%;
	}


	div.altEV {
		position: relative;
		left: 0; 
		padding: 20px 30px;
		width: 45%;
		background-color: #dbf0ff;
		border-radius: 6px;
		margin-bottom: 10px;
	}
	div.right { left: 55%; }
	strong.edate {
		font-size: 1.1em;
		font-weight: bold;
		color: #ff6a00;
	}
	p.etxt {
		
		margin: 50px 0 0 0;
		color: #222;
	}
	div.altEV::before {
		content: '';
		border: 10px solid transparent;
		border-left-color: #dbf0ff;
		border-right: 0;
		position: absolute;
		left: 100%;
		top: 30%;
	}
	div.altEV.right::before {
		content: '';
		border: 10px solid transparent;
		border-right-color: #dbf0ff;
		border-left: 0;
		position: absolute;
		left: auto;
		right: 100%;
		top: 30%;
	}
	div.altEV::after {
		content: '';
		background: #fff;
		border: 4px solid #1da1ff;
		width: 16px;
		height: 16px;
		border-radius: 50%;
		position: absolute;
		top: 20%;
		left: 108%;
	}
	div.altEV.right::after {
		content: '';
		background: #fff;
		border: 4px solid #1da1ff;
		width: 16px;
		height: 16px;
		border-radius: 50%;
		position: absolute;
		top: 20%;
		left: auto;
		right: 105%;
	}
	html, body { font-family: arial, sans-serif; }
</style>
<html>
<body>
	<div class="altTL" style="margin-top: 20px">
	<?php 
	$sql="SELECT * from status where c_id='$cid'";
	$result=mysqli_query($db,$sql);
	if(mysqli_num_rows($result)>0)
	{
		while($rows=mysqli_fetch_assoc($result)){
			$type=$rows['l_type'];
			if($type=="level1")
			{
				?>	
				
					<div class="altEV">
						<strong class="edate">Accept the Complaint</strong>
						<p class="etxt"><?php echo $rows['l_dis']; ?></p>
					</div>
					<?php
				}
				elseif($type=="level2")
				{
					?>
					<div class="altEV right">
						<strong class="edate">Investigation Started</strong>
						<p class="etxt"><?php echo $rows['l_dis']; ?></p>
					</div>
					<?php
				}
				elseif($type=="level3")
				{
					?>
					<div class="altEV">
						<strong class="edate">Investigation Going On </strong>
						<p class="etxt"><?php echo $rows['l_dis']; ?></p>
					</div>
					<?php
				}
				
				else if($type=="level4")
				{
					?>
					<div class="altEV right">
						<strong class="edate">Case Completed </strong>
						<p class="etxt"><?php echo $rows['l_dis']; ?></p>
					</div>
				</div>
				<?php
			}
			else
			{
				echo '<script>alert("NO - UPDATE);window.location.href="cstatus.php"</script>';
			}}}
			?>


		</body>
		</html>
