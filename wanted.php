<?php
include("pnav.php");
?>	
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
	.card{
		margin-top: 10px;
		margin-left: 15%;
		padding: 10px;
		background-color:#345980;
		color:#fff;
	}
</style>
<html>
<div class="row">
	<div class="tab-content">
		<div class="col-sm-12" style="padding-top: 10px;margin-left:150px">
			<table id="customers">
				<tr class="header">
					<th>Wanted Name</th>
					<th>Wanted Photo</th>
				</tr>
				<?php 
				$sql="SELECT * from wanted ";
				$result=mysqli_query($db,$sql);
				if(mysqli_num_rows($result)>0)
				{
					while($rows=mysqli_fetch_assoc($result)){
						?>
						<tr>
							<td><?php echo $rows['w_name'] ?></td>
							<td><img src="<?php echo $rows['photo']; ?>" height="100px"></td>
						<?php }} ?>
					</td>
				</tr>
			</table> 
		</div>
	</div>	

	<div class="card col-sm-4" style="">											
		<h4 class="card-title">Add Wanted</h4>
		<div class="card-body">
			<form method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label for="card_photo"style="color:#fff;">Upload  Wanted Person Photo</label>
					<input type="file" class="form-control" placeholder="Upload id photo" name="id_photo" accept="image/*" onchange="preview_image(event)" required>
				</div>	
				<div class="form-group">
					<input  type="text" class="form-control"  placeholder="Name of Wanted Person" name="name" required></textarea>  
				</div>
				<div class="form-group">
					<button class="btn btn-danger" id="submit" placeholder="Description" name="submit" style="margin-left: 40%"> submit</button>  
				</div>
			</form>
		</div>	
	</div>
</div>	
</html>							
<?php
if(isset($_POST['submit']))
{
	$wn=$_POST['name'];
	if(isset($_FILES['id_photo']))
	{
		$id_photo='wanted-person/'.$_FILES['id_photo']['name'];
		if(!empty($_FILES['id_photo']))
		{
			$path = "wanted-person/";
			$path=$path. basename($_FILES['id_photo']['name']);
			if(move_uploaded_file($_FILES['id_photo']['tmp_name'], $path))
			{
				echo"The file ". basename($_FILES['id_photo']['name']). " has been uploaded";
			}

			else
			{
				echo "There was an error uploading the file, please try again!";
			}
		}

	}
	$query= "insert into wanted values(NULL,'$wn','$path')";
	mysqli_query($db,$query);
	echo '<script>alert("update Successfully");window.location.href="wanted.php"</script>';
}
?>