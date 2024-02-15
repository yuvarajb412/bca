<?php
include("unav.php");
$uid=$_SESSION['u_id'];
$email=$_SESSION['uname'];

?>
<style>
	.card{
		margin-top: 10px;
		margin-left: 25%;
		padding: 10px;
		background-color:#345980;
		color:#fff;
	}
</style>
<html>
<div class="card col-sm-6" style="">											
	<h4 class="card-title">Upload Proof</h4>
	<div class="card-body">
		<form method="POST" enctype="multipart/form-data">			
			<div class="form-group">
				<label for="card_photo">Upload Proof:</label>
				<input type="file" class="form-control" placeholder="Upload id photo" name="id_photo" accept="image/*" onchange="preview_image(event)" required>	
			</div>
			<div class="form-group">
				<button class="btn btn-danger" id="submit" name="submit" style="margin-left: 45%"> submit</button>  
			</div>
		</form>
	</div>	
</div>	
</html>		
<?php
if(isset($_POST['submit']))
{
	if(isset($_FILES['id_photo']))
	{
		$id_photo='proof/'.$_FILES['id_photo']['name'];


		if(!empty($_FILES['id_photo']))
		{
			$path = "proof/";
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

	}
	$query= "insert into proof values(NULL,'$email','$path','$hash')";
	mysqli_query($db,$query);
	echo '<script>alert("Proof uploaded");window.location.href="upload.php"</script>';
}
?>
