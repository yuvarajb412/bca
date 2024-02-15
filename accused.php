<?php
include("pnav.php");
?>	
<style>
	.card{
		margin-top: 10px;
		margin-left: 30%;
		padding: 10px;
		background-color:#345980;
		color:#fff;
	}
</style>
<html>
<div class="card col-sm-4" style="">											
	<h4 class="card-title">Add Accused</h4>
	<div class="card-body">
		<form method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label for="card_photo"style="color:#fff;">Upload FingerPrint</label>
				<input type="file" class="form-control" placeholder="Upload id photo" name="id_photo1" accept="image/*" onchange="preview_image(event)" required>
			</div>	
			<div class="form-group">
				<label for="card_photo"style="color:#fff;">Accused Accused Photo</label>
				<input type="file" class="form-control" placeholder="Upload id photo" name="id_photo" accept="image/*" onchange="preview_image1(event)" required>
			</div>	
			<div class="form-group">
				<input  type="text" class="form-control"  placeholder="Name" name="name" required></textarea>  
			</div>
			<div class="form-group">
				<button class="btn btn-danger" id="submit" placeholder="Description" name="submit" style="margin-left: 40%"> submit</button>  
			</div>
		</form>
	</div>	
</div>	
</html>					
<?php
if(isset($_POST['submit']))
{
	$wn=$_POST['name'];
	if(isset($_FILES['id_photo']))
	{
		$id_photo='accused/'.$_FILES['id_photo']['name'];
		if(!empty($_FILES['id_photo']))
		{
			$path = "accused/";
			$path=$path. basename($_FILES['id_photo']['name']);
			if(move_uploaded_file($_FILES['id_photo']['tmp_name'], $path))
			{
				echo"The file ". basename($_FILES['id_photo']['name']). " has been uploaded";
				$hash=md5_file($path);
			}

			else
			{
				echo "There was an error uploading the file, please try again!";
			}
		}
		if(isset($_FILES['id_photo1']))
		{
			$id_photo1='accused/'.$_FILES['id_photo1']['name'];
			if(!empty($_FILES['id_photo1']))
			{
				$path1 = "accused/";
				$path1=$path1. basename($_FILES['id_photo1']['name']);
				if(move_uploaded_file($_FILES['id_photo1']['tmp_name'], $path1))
				{
					echo"The file ". basename($_FILES['id_photo']['name']). " has been uploaded";
					$hash1=md5_file($path1);
				}

				else
				{
					echo "There was an error uploading the file, please try again!";
				}
			}

		}
		$query= "insert into accused values(NULL,'$wn','$path','$hash','$path1','$hash1')";
	
		mysqli_query($db,$query);
		echo '<script>alert("update Successfully");window.location.href="accused.php"</script>';
	}
}
?>