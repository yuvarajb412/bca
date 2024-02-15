<?php
include("pnav.php");
$mpid=$_GET['mpid'];
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
	<h4 class="card-title">Update</h4>
	<div class="card-body">
		<form method="POST">
			<div class="form-group">
				<label for="email">Level of Case:</label>
				<br>
				<select style="width:100%" id="cars" name="type">
					<option value="level1">Accept</option>
					<option value="level2">Investigation Start</option>
					<option value="level3">Investigation is 50%</option>
					<option value="level4">Case Completed</option>
				</select>
			</div>	
			<div class="form-group">
			<textarea type="date" class="form-control" id="dis" placeholder="Description" name="dis" row="5" colo="50" required></textarea>  
			</div>
			<div class="form-group">
			<button class="btn btn-danger" id="submit" placeholder="Description" name="submit" style="margin-left: 45%"> submit</button>  
			</div>
		</form>
	</div>	
</div>	
</html>									
<?php
if(isset($_POST['submit']))
{
	$ty=$_POST['type'];
	$des=$_POST['dis'];
	$query= "insert into statusmp values(NULL,'$mpid','$ty','$des')";
  	mysqli_query($db,$query);
  	echo $query;
  	echo '<script>alert("update Successfully");window.location.href="msm.php"</script>';
}
?>