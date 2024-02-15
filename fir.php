<?php
include("unav.php");
?>
<style>
	.space{
		padding:10px;

	}
</style>
<body style="background-image:url('images/bg.jpg');background-size: cover">
	<form method="POST" action="comp-pro.php" enctype="multipart/form-data">
		<div class="container">
			<br><br>
			<div class="card col-sm-10" style="margin-left :15%;">
				<div class="card-body "style="color:#000;padding:10px;">
					<table style="width:100%">
						<tr>
							<td class="space">
								<div class="form-group">
									<label for="email">Complainant’s Name :</label>
									<input type="text" class="form-control" id="email" placeholder="Enter  name" name="cname" required>
								</div>
							</td>
							<td class="space">
								<div class="form-group" >
									<label for="pwd">Father’s/Mother’s Name :</label>
									<input type="text" class="form-control" id="pwd" placeholder="Enter Father’s/Mother’s Name " name="mfname" required>
								</div>
							</td>
						</tr>
						<tr>
							<td class="space">
								<div class="form-group">
									<label for="email">Complainant’s Address:</label>
									<input type="text" class="form-control" id="email" placeholder="Enter Address" name="area" required>
								</div>
							</td>
							<td class="space">
								<div class="form-group" >
									<label for="pwd">Mobile number :</label>
									<input type="number" class="form-control" id="pwd" placeholder="+ 91" name="phno" required>
								</div>
							</td>
						</tr>
						<tr>
							<td class="space">
								<div class="form-group">
									<label for="email">Complainant’s email ID:</label>
									<input type="text" class="form-control" id="email" placeholder="Enter email ID" name="emmail" required>
								</div>
							</td>
							<td class="space">
								<div class="form-group" >
									<label for="pwd">Place where the incident :</label>
									<input type="text" class="form-control" id="pwd" placeholder="Incident place" name="place" required>
								</div>
							</td>
						</tr>
						<tr>
							<td class="space">
								<div class="form-group">
									<label for="email">Date of incident :</label>
									<input type="date" class="form-control" id="email" placeholder="Date of incident" name="idate" required>
								</div>
							</td>
							<td class="space">
								<div class="form-group">
									<label for="email">Time of incident :</label>
									<input   type="time" class="form-control" id="email" placeholder="Date of incident" name="itime" required>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<textarea type="date" class="form-control" id="dis" placeholder="Description" name="dis" row="5" colo="50" required></textarea>  
								</td>
								<td>
								<center><input style="width:45%;" type="submit" id="submit" name="submit" class="btn btn-danger " value="File Complaint"></center>
							</td>
						</tr>
					</table>
				</div>

			</div>
		</div>
	</div>
</form>
</body>